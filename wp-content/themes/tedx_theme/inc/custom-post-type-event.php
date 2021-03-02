<?php

function custom_post_type_event() {

	$labels = array(
		'name'                  => _x( 'Event', 'Post Type General Name','incode'),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name','incode'),
		'menu_name'             => __( 'Events','incode'),
		'name_admin_bar'        => __( 'Events','incode'),
		'archives'              => __( 'Events Archives','incode'),
		'attributes'            => __( 'Events Attributes','incode'),
		'parent_item_colon'     => __( 'Parent Event:','incode'),
		'all_items'             => __( 'All Events','incode'),
		'add_new_item'          => __( 'Add New Event','incode'),
		'add_new'               => __( 'Add New','incode'),
		'new_item'              => __( 'New Event','incode'),
		'edit_item'             => __( 'Edit Event','incode'),
		'update_item'           => __( 'Update Event','incode'),
		'view_item'             => __( 'View Event','incode'),
		'view_items'            => __( 'View Event','incode'),
		'search_items'          => __( 'Search Event','incode'),
		'not_found'             => __( 'Not found','incode'),
		'not_found_in_trash'    => __( 'Not found in Trash','incode'),
		'featured_image'        => __( 'Featured Image','incode'),
		'set_featured_image'    => __( 'Set featured image','incode'),
		'remove_featured_image' => __( 'Remove featured image','incode'),
		'use_featured_image'    => __( 'Use as featured image','incode'),
		'insert_into_item'      => __( 'Insert into Event','incode'),
		'uploaded_to_this_item' => __( 'Uploaded to this Event','incode'),
		'items_list'            => __( 'Events list','incode'),
		'items_list_navigation' => __( 'Events list navigation','incode'),
		'filter_items_list'     => __( 'Filter Events list','incode'),
	);
	$args = array(
		'label'                 => __( 'Event','incode'),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('event', $args);

}

add_action( 'init', 'custom_post_type_event', 0 );