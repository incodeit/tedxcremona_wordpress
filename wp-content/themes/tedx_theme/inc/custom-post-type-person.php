<?php

function custom_post_type_person() {

	$labels = array(
		'name'                  => _x( 'Person', 'Post Type General Name','incode'),
		'singular_name'         => _x( 'Person', 'Post Type Singular Name','incode'),
		'menu_name'             => __( 'People','incode'),
		'name_admin_bar'        => __( 'People','incode'),
		'archives'              => __( 'People Archives','incode'),
		'attributes'            => __( 'People Attributes','incode'),
		'parent_item_colon'     => __( 'Parent Person:','incode'),
		'all_items'             => __( 'All People','incode'),
		'add_new_item'          => __( 'Add New Person','incode'),
		'add_new'               => __( 'Add New','incode'),
		'new_item'              => __( 'New Person','incode'),
		'edit_item'             => __( 'Edit Person','incode'),
		'update_item'           => __( 'Update Person','incode'),
		'view_item'             => __( 'View Person','incode'),
		'view_items'            => __( 'View Person','incode'),
		'search_items'          => __( 'Search Person','incode'),
		'not_found'             => __( 'Not found','incode'),
		'not_found_in_trash'    => __( 'Not found in Trash','incode'),
		'featured_image'        => __( 'Featured Image','incode'),
		'set_featured_image'    => __( 'Set featured image','incode'),
		'remove_featured_image' => __( 'Remove featured image','incode'),
		'use_featured_image'    => __( 'Use as featured image','incode'),
		'insert_into_item'      => __( 'Insert into Person','incode'),
		'uploaded_to_this_item' => __( 'Uploaded to this Person','incode'),
		'items_list'            => __( 'People list','incode'),
		'items_list_navigation' => __( 'People list navigation','incode'),
		'filter_items_list'     => __( 'Filter People list','incode'),
	);
	$args = array(
		'label'                 => __( 'Person','incode'),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('person', $args);

}

add_action( 'init', 'custom_post_type_person', 0 );