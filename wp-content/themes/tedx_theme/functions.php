<?php
/**
 * functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 *
 */

// ------------------------------------ //
// THEME SETUP
// ------------------------------------ //
if (!function_exists('tedx_theme_setup')):

function tedx_theme_setup() {
	load_theme_textdomain( 'tedx_theme', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__('Primary','tedx_theme'),
		'secondary' => esc_html__('Secondary','tedx_theme'),
	));

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tedx_theme_custom_background_args', array(
		'default-color' => 'FFFFFF',
		'default-image' => '',
	)));

	// Add image sizes
	add_image_size('1440w', 1440);
	add_image_size('1920w', 1920);
}
endif;
add_action( 'after_setup_theme', 'tedx_theme_setup' );

// ------------------------------------ //
// ENQUEUE SCRIPTS AND STYLES
// ------------------------------------ //
function yam112003_scripts() {
	$timestamp = current_time('timestamp');
	//wp_enqueue_script('fontawesome-script', 'https://kit.fontawesome.com/14aa3b4085.js', array(), $timestamp );
	wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/index.css', array(), $timestamp);
	wp_enqueue_script('vendor-script', get_template_directory_uri() . '/dist/bundle.js', array(), $timestamp, true );
	wp_localize_script('vendor-script', 'directory_uri', array('template_uri' => get_template_directory_uri()));
}
add_action( 'wp_enqueue_scripts', 'yam112003_scripts' );

/* 
add_filter('script_loader_src','fontawesome_include',10,2);
function fontawesome_include($src, $handle){
    if ($handle != 'fontawesome-script') 
            return $src;
    return $src."' id='fontawesome-script' crossorigin='anonymous";
}
*/

// ------------------------------------ //
// REQUIRE
// ------------------------------------ //
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/utils.php';
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/custom-post-type-event.php';
require get_template_directory() . '/inc/custom-post-type-person.php';
require get_template_directory() . '/inc/custom-post-type-highlight.php';
require get_template_directory() . '/inc/custom-post-type-partner.php';

//require get_template_directory() . '/inc/custom-taxonomy.php';


require get_template_directory() . '/inc/image-ctrl.php';

// ------------------------------------ //
// ACF OPTIONS PAGES
// ------------------------------------ //
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}

// ------------------------------------ //
// DEBUG
// ------------------------------------ //
function dbg($obj) {
	
	print("<pre>".htmlentities(print_r($obj, TRUE))."</pre>");
}

// ------------------------------------ //
// ADD ROLE TO BODY CLASS
// ------------------------------------ //
function class_to_body_admin($classes) {
	global $current_user;
	$user_role = array_shift($current_user->roles);
	$classes .= 'role-' . $user_role;
	return $classes;
}
add_filter('admin_body_class', 'class_to_body_admin');

// ------------------------------------ //
// HIDE POST_OBJECT IF DRAFT
// ------------------------------------ //
function relationship_options_filter($options, $field, $the_post) {
	$options['post_status'] = ['publish'];
	return $options;
}
add_filter('acf/fields/post_object/query/name=module_related','relationship_options_filter', 10, 3);

// ------------------------------------ //
// ADD SVG AS MIME TYPE
// ------------------------------------ //
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function max_srcset_image_width() {
	return 1920;
}
add_filter( 'max_srcset_image_width', 'max_srcset_image_width', 10 , 2 );