<?php
/*
Template Name: Главная страница
*/
get_header(); ?>

<!-- Row for main content area -->
<div class="section-container tabs" data-section="tabs">
	<section>
		<p class="title" data-section-title><a href="#">Новости</a></h3></p>
		<div class="content" data-section-content>
			<div id="nice_block_container">
				<?php
					// $postcounter = 1;
					$recent = new WP_Query(array( 'showposts' => '10', 'cat' => '-9' ));
					while($recent->have_posts()) : $recent->the_post(); $postcounter++;
					global $more;
					$more = 0;
				?>
				<?php if (($postcounter - 1) % 2 == 0) : ?><?php echo "<div class='row'>"; ?>

				<?php endif; ?>
				<article class="nice_block large-6 columns<?php $selected = $cfs->get('selected_post');
					if ($selected) {
					 	echo 'selected';
					 } 
					?>">

					<a href="<?php the_permalink() ?>">
						<div class="pad"><h3><?php the_title(); ?></h3></div>

						<?php
							$post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(600,600));
						
						if (function_exists ("has_post_thumbnail") && has_post_thumbnail () ) {
							echo '<div class="post_thumbnail" style="background-image: url(' . $post_thumbnail[0] . ')"></div>';	
						}
						?>
						</a>

						<div class="pad announce_text hyphenate"><?php the_content(''); ?></div>		
				</article>
				<?php if ($postcounter % 2 == 0) : ?><?php echo "</div>"; ?>

				<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<div class="row">
			  <div class="large-4 large-centered columns"><a href="/?cat=4" class="button expand more_from_cat">Остальные записи</a></div>
			</div>
			
		</div>
	</section>
	<section>
		<p class="title" data-section-title><a href="#">События</a></p>
		<div class="content" data-section-content>
	 		<div class="large-4 columns"><h3>What is Reverie?</h3><p>Reverie Framework is an extremely versatile HTML5 WordPress framework based on ZURB's <a href="http://foundation.zurb.com/">Foundation</a>, a powerful tool for building prototypes on any kind of devices.</p></div>
			<div class="large-4 columns"><h3>What about Features?</h3><p>Reverie Framework inherits all the cool features from Foundation, and packs with several other interesting features to optimize the experience for WordPress and HTML5. Including customized output for WordPress menus, caption and pagination.</p></div>
			<div class="large-4 columns"><h3>Mobile Devices?</h3><p>Positive. With the power of Foundation, Reverie uses media query to adjust for all kinds of devices, including phones, tablets and computers. Reverie is also optimized for iPhone and iPad. Icons and loading images will be display when you save your website as a Home Screen app.</p></div>
		</div>
	</section>

	<section>
		<p class="title" data-section-title><a href="#">Объявления</a></p>
		<div class="content" data-section-content>
			<div class="large-4 columns"><h3>What about Features?</h3><p>Reverie Framework inherits all the cool features from Foundation, and packs with several other interesting features to optimize the experience for WordPress and HTML5. Including customized output for WordPress menus, caption and pagination.</p></div>
	 		<div class="large-4 columns"><h3>What is Reverie?</h3><p>Reverie Framework is an extremely versatile HTML5 WordPress framework based on ZURB's <a href="http://foundation.zurb.com/">Foundation</a>, a powerful tool for building prototypes on any kind of devices.</p></div>
			<div class="large-4 columns"><h3>Mobile Devices?</h3><p>Positive. With the power of Foundation, Reverie uses media query to adjust for all kinds of devices, including phones, tablets and computers. Reverie is also optimized for iPhone and iPad. Icons and loading images will be display when you save your website as a Home Screen app.</p></div>
		</div>
	</section>
</div>
	<?php wp_enqueue_script( 'freetile' ); ?>
<?php get_footer(); ?>
