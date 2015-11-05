<?php
/**
 * mybestbet functions and definitions
 *
 * @package mybestbet
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'mybestbet_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mybestbet_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mybestbet, use a find and replace
	 * to change 'mybestbet' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mybestbet', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mybestbet' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mybestbet_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // mybestbet_setup
add_action( 'after_setup_theme', 'mybestbet_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mybestbet_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'mybestbet' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mybestbet_widgets_init' );

/**
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Enable widgetable sidebar

// You may need to tweak your theme files, more info here - http://codex.wordpress.org/Widgetizing_Themes
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'before_widget' => '<aside>',
	'after_widget' => '</aside>',
	'before_title' => '<h1>',
	'after_title' => '</h1>',
));

function registration_widget_reg () {

	register_sidebar( array(
	'id'          => 'home_login',
	'name'        => 'Home Registration/Login Box',
) );

}
add_action( 'widgets_init', 'registration_widget_reg' );

/* Enqueue scripts and styles.
 */
function mybestbet_scripts() {
	wp_enqueue_style( 'mybestbet-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mybestbet-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'mybestbet-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mybestbet_scripts' );

// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );

// Call the google CDN version of jQuery for the frontend
// Make sure you use this with wp_enqueue_script('jquery'); in your header
function wpfme_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
	wp_enqueue_script('jquery');
}
if (!is_admin()) add_action("wp_enqueue_scripts", "wpfme_jquery_enqueue", 11);

// Remove the version number of WP
// Warning - this info is also available in the readme.html file in your root directory - delete this file!
remove_action('wp_head', 'wp_generator');

// Disable the theme / plugin text editor in Admin
define('DISALLOW_FILE_EDIT', true);

function mbb_scripts2() {
   
// REGISTER JS
    wp_register_script('mybestbet-jquery-scripts', get_template_directory_uri() . '/js/jquery-scripts.js');
//REGISTER CSS
    wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    wp_register_style('animate', get_stylesheet_directory_uri().'/css/animate.min.css');
//ENQUEUE JS
    wp_enqueue_script('mybestbet-jquery-scripts');
//ENQUEUE CSS
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('animate');
}
add_action( 'wp_enqueue_scripts', 'mbb_scripts2' );