<?php
/**
 * albahriah functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package albahriah
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.2.6' );
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	/*acf_add_options_page(array(
        'page_title'    => 'YOUR_PAGE_TILE Options',
        'menu_title'    => 'YOUR_MENU_TITLE Options',
        'menu_slug'     => 'options_services',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'edit.php?post_type=services',
        'position'      => false,
        'icon_url'      => 'dashicons-images-alt2',
        'redirect'      => false,
    ));*/

}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function albahriah_setup() {
	
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
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'albahriah' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_image_size( 'full-image', 1920);
	add_image_size( 'inner-pages', 1400, 350, true );
	add_image_size( 'icon', 70);

}
add_action( 'after_setup_theme', 'albahriah_setup' );


/**
 * Enqueue scripts and styles.
 */
function albahriah_scripts() {

	wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri()."/css/bootstrap.min.css", array(), _S_VERSION );
	wp_enqueue_style( 'style-css', get_template_directory_uri()."/css/style.css", array(), _S_VERSION );
	wp_enqueue_style( 'menu-css', get_template_directory_uri()."/css/menu.css", array(), _S_VERSION );
	wp_enqueue_style( 'responsive-css', get_template_directory_uri()."/css/responsive.css", array(), _S_VERSION );
	wp_enqueue_style( 'elegent-font-css', get_template_directory_uri()."/css/elegant_font/elegant_font.min.css", array(), _S_VERSION );
	wp_enqueue_style( 'fontello-css', get_template_directory_uri()."/css/fontello/css/fontello.min.css", array(), _S_VERSION );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri()."/css/magnific-popup.min.css", array(), _S_VERSION );


	wp_enqueue_style( 'carousel-home-css', get_template_directory_uri()."/css/carousel_home.css", array(), _S_VERSION );
	wp_enqueue_style( 'skins-grey-css', get_template_directory_uri()."/css/skins/square/grey.css", array(), _S_VERSION );

	wp_enqueue_style( 'albahriah-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'albahriah-jquery', get_template_directory_uri() . '/js/jquery-3.6.3.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'common-scripts', get_template_directory_uri() . '/js/common_scripts_min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'functions-js', get_template_directory_uri() . '/js/functions.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/js/slider.js', array(), _S_VERSION, true );
	//wp_enqueue_script( 'video-js', get_template_directory_uri() . '/js/video_header.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'albahriah_scripts' );

