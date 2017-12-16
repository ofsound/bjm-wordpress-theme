<?php
/**
 * bjm2017 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bjm2017
 */

if ( ! function_exists( 'bjm2017_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bjm2017_setup() {

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

    add_image_size( 'square-thumb', 200, 200, true ); // 300 pixels wide (and unlimited height)

	// This theme uses wp_nav_menu() in three locations
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'bjm2017' ),
 		'mobile' => esc_html__( 'Mobile Menu', 'bjm2017' )
	) );

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

}
endif; // bjm2017_setup
add_action( 'after_setup_theme', 'bjm2017_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bjm2017_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bjm2017_content_width', 1000 );
}
add_action( 'after_setup_theme', 'bjm2017_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function bjm2017_scripts() {
	
	wp_enqueue_style( 'bjm2017-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bjm2017-bjm_style', get_template_directory_uri() . '/css/style_bjm.css' );
	
	wp_enqueue_script( 'bjm2017-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'bjm2017-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

}
add_action( 'wp_enqueue_scripts', 'bjm2017_scripts' );


/**
 * Custom excerpt length for home news summaries
 */
function custom_excerpt($new_length = 20, $new_more = '...') {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
  
  add_filter('excerpt_more', function () use ($new_more) {
  	global $post;
    return '&hellip;&nbsp;&nbsp;<a class="moretag" href="'. get_permalink($post->ID) . '"><span class="more">More</span>&nbsp;&gt;</a>';
  });
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}