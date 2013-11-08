<?php
/*
Template Name: Главная страница
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="large-9 columns news">
		<div class="section-container tabs" data-section="tabs">
			<section class="active">
				<p class="title " data-section-title><a href="#news">Новости</a></p>
				<div class="content" data-section-content>
					<p>
						<?php
							// $postcounter = 1;
							$recent = new WP_Query(array( 'showposts' => '10', 'cat' => '61' ));
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
					</p>
				</div>
			</section>
			<section>
				<p class="title" data-section-title><a href="#events">События</a></p>
						<?php
							// $postcounter = 1;
							$recent = new WP_Query(array( 'showposts' => '10', 'cat' => '63' ));
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
			</section>
		</div>

	</div>
	<div class="large-3 columns events">
		<h2 class="cat-title">Объявления</h2>
						<?php
							$recent = new WP_Query(array( 'showposts' => '5', 'cat' => '62' ));
							while($recent->have_posts()) : $recent->the_post();
							global $more;
							$more = 0;
						?>
						<div class='row'>
						<article class="large-12 columns<?php $selected = $cfs->get('selected_post');
							if ($selected) {
							 	echo 'selected';
							 } 
							?>">

							<a href="<?php the_permalink() ?>">
								<div class="pad"><h3><?php the_title(); ?></h3></div>
							</a>

								<div class="pad announce_text"><?php the_content(''); ?></div>		
						</article>
						</div>

						<?php endwhile; ?>
	</div>


</div>
<?php wp_enqueue_script( 'freetile' ); ?>
<?php get_footer(); ?>