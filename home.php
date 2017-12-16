<?php

/**
 * The template for displaying the News Index
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package genoma2017
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<ul class="articles-list">
			<?php
				
				$args = array(
				    'posts_per_page'=>-1, 
				    'numberposts'=>-1
				);
				
				$myposts = get_posts($args);

				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<div class="article-summary">
							<div class="article-title"><?php the_title(); ?></div>
							<?php custom_excerpt(40); ?>
						</div>
					</a>
				</li>
				<?php endforeach; 
				wp_reset_postdata();?>
			</ul>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
