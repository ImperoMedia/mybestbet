<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

	<div id="primary-front" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					if ( !is_user_logged_in( ) ) {
					    get_template_part( 'parts/home', 'out' );
					} else {
					    get_template_part( 'parts/home', 'in' );
					}
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
