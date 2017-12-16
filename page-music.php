<?php get_header(); ?>

	<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">
					
			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">

						<?php while ( have_rows('albums') ) : the_row(); ?>

							<a href="<?php the_sub_field('url'); ?>">

							<? $image = get_sub_field('image'); ?>

							<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />

							<strong> <? the_sub_field('title'); ?> </strong>
							<br>
							<? the_sub_field('artist'); ?> </a>

						<? endwhile; ?>
					</div>
					
				</article>
			
			<?php endwhile; ?>

		</main><!-- #main -->
	
	</div><!-- #primary -->

<?php get_footer(); ?>