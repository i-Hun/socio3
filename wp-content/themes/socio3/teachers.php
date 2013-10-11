<?php get_header("post"); ?>

<!-- Row for main content area -->
	
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="large-3 columns post_info">
		<div class="page_nav">
		<?php
				if($post->post_parent)
				$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				else
				$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				if ($children) { ?>
				<ul >
				<?php echo $children; ?>
				</ul>
			<?php } ?>
			<?php echo $cfs->get('rich_text'); ?>
		</div>
	</div>
	<div class="small-12 large-9 columns teachers" role="main">
		<div class="section-container tabs" data-section="tabs">
			<section>
				<p class="title" data-section-title><a href="#">Section 1</a></p>
				<div class="content" data-section-content>
					<div class="row">
						<div class="large-12 small-12 columns">
							<div class="teacher-photo">
								<img src="/wp-content/img/teachers/ia.jpg"/>
							</div>
							<h4>Огородникова Ирина Анатольевна</h4>
						</div>
					</div>
				</div>
			</section>
			<section>
				<p class="title" data-section-title><a href="#">Section 2</a></p>
				<div class="content" data-section-content>
					<p>Content of section 2.</p>
				</div>
			</section>
		</div>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>