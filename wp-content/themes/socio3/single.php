<?php get_header("post"); ?>

<!-- Row for main content area -->
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="large-2 columns post_info">
			<?php reverie_entry_meta(); ?>
		</div>
		<div class="small-12 large-10 columns" role="main">
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Страницы:', 'reverie'), 'after' => '</p></nav>' )); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php comments_template(); ?>
			</article>
		</div>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>