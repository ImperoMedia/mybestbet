<?php
/**
 * Template Name: Member Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h4>Welcome <strong><?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_DISPLAY_NAME" /]' ) ?></strong><em>!</em></h4>
			<h4>Your Account Details:</h4>

			<p>Membership Level: <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_ACCESS_LEVEL" /]') ?></p>

			<p>Your are a:  <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_ACCESS_LABEL" /]') ?></p>

			<p>Your User ID is: <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_ID" /]') ?></p>
			<p>Your Username is: <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_LOGIN" /]') ?></p>
			<p>Your Email Address is: <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_EMAIL" /]') ?></p>

			<p>Your First Name is: <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_FIRST_NAME" /]') ?></p>
			<p>Your Last Name is: <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_LAST_NAME" /]') ?></p>

			<p>You have logged in <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_LOGIN_COUNTER" /] ')  ?> times.</p>
			<p>Your IP Address is: <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_IP" /]') ?></p>

			<p>Custom Registration/Profile Field: <?php echo do_shortcode( '[s2Get user_field="custom_field_id" /]') ?></p>
			<p>See: s2Member® -> General Options -> Registration/Profile Fields

			<h4>You can edit your profile using the form below.</h4>

			<?php echo do_shortcode( '[s2Member-Profile /]') ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
