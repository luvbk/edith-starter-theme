<?php
/*
Template Name: Full width template
*/
?>
<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edith-starter-theme
 */

get_header(); ?>

<div id="primary" class="full-width-area container-fluid">
		<main id="main" class="site-main row" role="main">
			<div class="main-wrapper col-xs-12">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div><!-- .main-wrapper-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
