<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name' => 'Banner',
		'id' => 'banner',
		'description' => 'Appears in the banners',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

		register_sidebar( array(
		'name' => 'Donate Page',
		'id' => 'donate-page',
		'description' => 'Appears in the banners',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

		register_sidebar( array(
		'name' => 'Contact Page Section 1',
		'id' => 'contact-page-section-1',
		'description' => 'Appears in the contact page - section 1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

		register_sidebar( array(
		'name' => 'Contact Page Section 2',
		'id' => 'contact-page-section-2',
		'description' => 'Appears in the contact page - section 2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

		register_sidebar( array(
		'name' => 'Contact Page Section 3',
		'id' => 'contact-page-section-3',
		'description' => 'Appears in the contact page - section 3',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

		register_sidebar( array(
		'name' => 'Service Advisory',
		'id' => 'service-advisory',
		'description' => 'Appears at the top of the home page',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

function wps_highlight_results($text){
	if(is_search()){
	$sr = get_query_var('s');
	$keys = explode(" ",$sr);
	$text = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">'.$sr.'</strong>', $text);
	}
	return $text;
}
add_filter('the_excerpt', 'wps_highlight_results');
add_filter('the_title', 'wps_highlight_results');

// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
	return 35;
	}
	add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

/**
 * Enqueue scripts and styles.
 */
function ppt_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );
  wp_enqueue_script( 'ppt-section-builder', get_template_directory_uri() . '/build/js/section-builder.min.js', array(), '1.0', true);
  wp_enqueue_script( 'top', get_template_directory_uri() . '/build/js/top.min.js', array(), '1.0', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

  $script_url = get_template_directory_uri() . '/build/js/factsheet-sort.min.js';
  $employment_script_url = get_template_directory_uri() . '/build/js/employment-sort.min.js';
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'red_posts', $script_url, array( 'jquery' ), false, true );
  wp_localize_script( 'red_posts', 'red_vars', array(
    'rest_url' => esc_url_raw( rest_url() ),
    'wpapi_nonce' => wp_create_nonce( 'wp_rest' ),
    'post_id' => get_the_ID()
	) );
  wp_enqueue_script( 'employment-script', $employment_script_url, array( 'jquery' ), false, true );
  wp_localize_script( 'employment-script', 'red_vars', array(
      'rest_url' => esc_url_raw( rest_url() ),
      'wpapi_nonce' => wp_create_nonce( 'wp_rest' ),
      'post_id' => get_the_ID()
  ) );

}
add_action( 'wp_enqueue_scripts', 'ppt_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Register our sidebars and widgetized areas.
 */
require get_template_directory() . '/inc/widget-area.php';

 /**
 * Load in all the widgets.
 */
require get_template_directory() . '/inc/clinic-hours-widget/clinic-hours-widget.php';
require get_template_directory() . '/inc/drop-in-hours-widget/drop-in-hours-widget.php';
require get_template_directory() . '/inc/location-widget/location-widget.php';
require get_template_directory() . '/inc/contact-info-widget/contact-info-widget.php';
require get_template_directory() . '/inc/social-media-btns-widget/social-media-btns-widget.php';
require get_template_directory() . '/inc/service-advisory-widget/service-advisory-widget.php';

/** 
 * Custom Post-types and Taxonomies
 */
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/taxonomies.php';

/**
 * Load in metaboxes
 */
require get_template_directory() . '/inc/metaboxes.php';

/**
 *  Load in custom Contact Form Hook
 */

require get_template_directory() . '/inc/cformhook.php';

