<?php
/**
 * Neat Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Neat_Theme
 */

if ( ! function_exists( 'neat_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function neat_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Neat Theme, use a find and replace
		 * to change 'neat-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'neat-theme', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
        register_nav_menus( [
            'header-menu' => 'Main Top Location',
            'logo-menu' => 'Logo Location',
        ] );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'neat_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'neat_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function neat_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'neat_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'neat_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function neat_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'neat-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'neat-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'neat_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function neat_theme_scripts() {
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('icomoon', get_template_directory_uri() . "/css/icomoon.css");
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.css");
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . "/css/magnific-popup.css");
    wp_enqueue_style('flexslider', get_template_directory_uri() . "/css/flexslider.css");
    wp_enqueue_style('style', get_template_directory_uri() . "/css/style.css");
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '', 1.0, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', '', 1.0, false);
    wp_enqueue_script('jquery easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', 'jquery', 1.0, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery','jquery easing'], 1.0, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', 'jquery', 1.0, true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', 'jquery', 1.0, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', 'jquery', 1.0, true);
    wp_enqueue_script('magnific-popup-options', get_template_directory_uri() . '/js/magnific-popup-options.js', 'jquery', 1.0, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', 1.0, true);

}
add_action( 'wp_enqueue_scripts', 'neat_theme_scripts' );

// include custom jQuery
function shapeSpace_include_custom_jquery() {

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

