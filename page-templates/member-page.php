<?php
/**
 * Template Name: Member Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h4>Welcome <strong><?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_DISPLAY_NAME" /]' ) ?></strong></h4>

			<p>Upgrade your membership to receive premium picks. Choose from one of our many great deals to get instant access to NHL, NBA, NFL, MLB and more.</p>

			<a href="http://macbook.local:8080/wordpress/mybestbet/?page_id=11">Compare membership packages</a>

			<hr style="margin: 50px 0;">

			<h4>You can edit your profile using the form below.</h4>

			<?php echo do_shortcode( '[s2Member-Profile /]') ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
