<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mybestbet
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header-area full">
		<div class="main-page">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mybestbet' ); ?></a>

			<header id="masthead" class="site-header inner" role="banner">
				<div class="site-branding">
					<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://macbook.local:8080/wordpress/mybestbet/wp-content/uploads/2015/02/text_logo-no-stroke.png"></a></h2>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle nav-btn" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'mybestbet' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div>
	</div>

	<div class="main-content-area full">
		<div class="main-page">
			<div id="content" class="site-content inner">
