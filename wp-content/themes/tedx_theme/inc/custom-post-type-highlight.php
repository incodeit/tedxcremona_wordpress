<?php

function custom_post_type_highlight() {

	$labels = array(
		'name'                  => _x( 'Highlight', 'Post Type General Name','incode'),
		'singular_name'         => _x( 'Highlight', 'Post Type Singular Name','incode'),
		'menu_name'             => __( 'Highlights','incode'),
		'name_admin_bar'        => __( 'Highlights','incode'),
		'archives'              => __( 'Highlights Archives','incode'),
		'attributes'            => __( 'Highlights Attributes','incode'),
		'parent_item_colon'     => __( 'Parent Highlight:','incode'),
		'all_items'             => __( 'All Highlights','incode'),
		'add_new_item'          => __( 'Add New Highlight','incode'),
		'add_new'               => __( 'Add New','incode'),
		'new_item'              => __( 'New Highlight','incode'),
		'edit_item'             => __( 'Edit Highlight','incode'),
		'update_item'           => __( 'Update Highlight','incode'),
		'view_item'             => __( 'View Highlight','incode'),
		'view_items'            => __( 'View Highlight','incode'),
		'search_items'          => __( 'Search Highlight','incode'),
		'not_found'             => __( 'Not found','incode'),
		'not_found_in_trash'    => __( 'Not found in Trash','incode'),
		'featured_image'        => __( 'Featured Image','incode'),
		'set_featured_image'    => __( 'Set featured image','incode'),
		'remove_featured_image' => __( 'Remove featured image','incode'),
		'use_featured_image'    => __( 'Use as featured image','incode'),
		'insert_into_item'      => __( 'Insert into Highlight','incode'),
		'uploaded_to_this_item' => __( 'Uploaded to this Highlight','incode'),
		'items_list'            => __( 'Highlights list','incode'),
		'items_list_navigation' => __( 'Highlights list navigation','incode'),
		'filter_items_list'     => __( 'Filter Highlights list','incode'),
	);
	$args = array(
		'label'                 => __( 'Highlight','incode'),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-feedback',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('highlight', $args);

}

add_action( 'init', 'custom_post_type_highlight', 0 );