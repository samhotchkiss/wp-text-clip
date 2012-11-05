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
					<?php $contact_textclip = get_text_clip(32); ?>
					<?php echo $contact_textclip; ?>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>