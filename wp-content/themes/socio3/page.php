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
	<div class="small-12 large-9 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>