<?php

function custom_post_type_partner() {

	$labels = array(
		'name'                  => _x( 'Partner', 'Post Type General Name','incode'),
		'singular_name'         => _x( 'Partner', 'Post Type Singular Name','incode'),
		'menu_name'             => __( 'Partners','incode'),
		'name_admin_bar'        => __( 'Partners','incode'),
		'archives'              => __( 'Partners Archives','incode'),
		'attributes'            => __( 'Partners Attributes','incode'),
		'parent_item_colon'     => __( 'Parent Partner:','incode'),
		'all_items'             => __( 'All Partners','incode'),
		'add_new_item'          => __( 'Add New Partner','incode'),
		'add_new'               => __( 'Add New','incode'),
		'new_item'              => __( 'New Partner','incode'),
		'edit_item'             => __( 'Edit Partner','incode'),
		'update_item'           => __( 'Update Partner','incode'),
		'view_item'             => __( 'View Partner','incode'),
		'view_items'            => __( 'View Partner','incode'),
		'search_items'          => __( 'Search Partner','incode'),
		'not_found'             => __( 'Not found','incode'),
		'not_found_in_trash'    => __( 'Not found in Trash','incode'),
		'featured_image'        => __( 'Featured Image','incode'),
		'set_featured_image'    => __( 'Set featured image','incode'),
		'remove_featured_image' => __( 'Remove featured image','incode'),
		'use_featured_image'    => __( 'Use as featured image','incode'),
		'insert_into_item'      => __( 'Insert into Partner','incode'),
		'uploaded_to_this_item' => __( 'Uploaded to this Partner','incode'),
		'items_list'            => __( 'Partners list','incode'),
		'items_list_navigation' => __( 'Partners list navigation','incode'),
		'filter_items_list'     => __( 'Filter Partners list','incode'),
	);
	$args = array(
		'label'                 => __( 'Partner','incode'),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('partner', $args);

}

add_action( 'init', 'custom_post_type_partner', 0 );