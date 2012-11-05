<?php
/**
 * Template Name: Page with Contact Info textclip
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

				<div class='textclip'>
					<?php echo get_text_clip(32); ?>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>