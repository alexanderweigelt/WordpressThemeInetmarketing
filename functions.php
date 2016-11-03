<?php
    
/*
*
* WP Sidebar widgetfaehig machen
*
*/

function theme_slug_widgets_init() {
	if ( function_exists('register_sidebar') )
	
	// Widget Area Sidebar
	register_sidebar(
		array(
			'id' => 'sidebar-1',
			'name' => 'Widget Men&uuml;',
			'class' =>'',
			'description' => 'Widget ablegen in Widget-Bereich der Seite',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
	
	// Widget Area Footer
	register_sidebar(
		array(
			'id' => 'sidebar-2',
			'name' => 'Widget Fu&szlig;zeile',
			'class' =>'',
			'description' => 'Widget Area im Fu&szlig;bereich der Seite',
			'before_widget' => '<div id="%1$s" class="widget-%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

/*
*
* WP Head Metadaten aufrauemen
*
*/

//remove_action( 'wp_head', 'feed_links_extra', 3 ); 
//remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); 
//remove_action( 'wp_head', 'index_rel_link'); 
//remove_action( 'wp_head', 'rsd_link' ); 
remove_action( 'wp_head', 'wlwmanifest_link' ); 
remove_action( 'wp_head', 'wp_generator' ); 
remove_action('wp_head', 'get_archives_link');
remove_action('wp_head', 'post_comments_feed_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

/*
*
* WP Theme Support
*
*/

$args_background = array(
	'default-color'          => '#FFF',
	'default-image'          => get_template_directory_uri().'/images/background.png',
	'default-repeat'         => 'no-repeat',
	'default-position-x'     => 'center',
	'default-attachment'     => 'fixed',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
$args_header = array(
 	'default-image' => get_template_directory_uri().'/images/header-img.png',
 	'random-default' => false,
 	'width' => 333,
 	'height' => 180,
 	'flex-height' => false,
 	'flex-width' => false,
 	'default-text-color' => 'rgb(0,0,0)',
 	'header-text' => false,
 	'uploads' => true,
 	'wp-head-callback' => '',
 	'admin-head-callback' => '',
 	'admin-preview-callback' => '',
);

if ( ! isset( $content_width ) ) $content_width = 960;
add_theme_support( 'post-formats', array( 'aside', 'link', 'image' ) ); 
add_theme_support( 'custom-header', $args_header );
add_theme_support( 'custom-background', $args_background );
add_theme_support( 'automatic-feed-links' );
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200, true);
add_image_size('single-view', 400, 300);
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

/*
*
* WP Title-Tag automatisch einfügen
*
*/

add_theme_support( 'title-tag' );

/*
*
* WP Menue Anordnung im Theme
*
*/
	
register_nav_menus( 
	array(
		'primary' => 'Primary Navigation', // Main Navigation
		'secondary' => 'Secondary Navigation'
	)
);

/*
*
* WP Menue add CSS-Class .active
*
*/

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) OR in_array( 'current-menu-ancestor', $classes ) ){
             $classes[] = 'active ';
     }
     return $classes;
}

/*
 *
 * Individuelle Style-Sheet für WYSIWIG-Editor hinzu fügen
 *
 */

function bootstrap_add_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'admin_init', 'bootstrap_add_editor_styles' );

/*
 *
 * Making jQuery Google API
 *
 */

function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js', false, '2.2.2');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');

/*
 *
 * script manager template to register and enqueue files
 *
 */

function theme_script_manager() {

	// wp_register_script template ( $handle, $src, $deps, $ver, $in_footer );

	// registers modernizr script, stylesheet local path, no dependency, no version, loads in header
	wp_register_script('new_service', get_stylesheet_directory_uri() . '/javascripts/modernizr-2.8.3-respond-1.4.2.min.js', array('jquery'), false, false);

	// enqueue the scripts for use in theme
	wp_enqueue_script ('new_service');

}
add_action('wp_enqueue_scripts', 'theme_script_manager');

/*
 *
 * Disabling the Default Stylesheet from woocommerce plugin and Starting From Scratch
 *
 */

define('WOOCOMMERCE_USE_CSS', false);

/*
*
* WordPress Breadcrumb (ohne Plugin)
*
*/

require_once( get_template_directory() . '/inc/breadcrumb.php' );

/*
 *
 * Register custom navigation walker
 *
 */

require_once( get_template_directory() . '/inc/nav-menu-walker.php' );