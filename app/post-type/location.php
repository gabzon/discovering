<?php

if ( ! function_exists('location_post_type') ) {

	// Register Custom Post Type
	function location_post_type() {

		$labels = array(
			'name'                  => _x( 'Locations', 'Post Type General Name', 'sage' ),
			'singular_name'         => _x( 'Location', 'Post Type Singular Name', 'sage' ),
			'menu_name'             => __( 'Locations', 'sage' ),
			'name_admin_bar'        => __( 'Locations', 'sage' ),
			'archives'              => __( 'Location Archives', 'sage' ),
			'attributes'            => __( 'Locations Attributes', 'sage' ),
			'parent_item_colon'     => __( 'Parent Location:', 'sage' ),
			'all_items'             => __( 'All Locations', 'sage' ),
			'add_new_item'          => __( 'Add New Locations', 'sage' ),
			'add_new'               => __( 'Add New', 'sage' ),
			'new_item'              => __( 'New Location', 'sage' ),
			'edit_item'             => __( 'Edit Location', 'sage' ),
			'update_item'           => __( 'Update Location', 'sage' ),
			'view_item'             => __( 'View Location', 'sage' ),
			'view_items'            => __( 'View Locations', 'sage' ),
			'search_items'          => __( 'Search Location', 'sage' ),
			'not_found'             => __( 'Not found', 'sage' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
			'featured_image'        => __( 'Featured Image', 'sage' ),
			'set_featured_image'    => __( 'Set featured image', 'sage' ),
			'remove_featured_image' => __( 'Remove featured image', 'sage' ),
			'use_featured_image'    => __( 'Use as featured image', 'sage' ),
			'insert_into_item'      => __( 'Insert into Location', 'sage' ),
			'uploaded_to_this_item' => __( 'Uploaded to this location', 'sage' ),
			'items_list'            => __( 'Locations list', 'sage' ),
			'items_list_navigation' => __( 'Locations list navigation', 'sage' ),
			'filter_items_list'     => __( 'Filter locations list', 'sage' ),
		);
		$args = array(
			'label'                 => __( 'Location', 'sage' ),
			'description'           => __( 'List of cities & towns', 'sage' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-location',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
		);
		register_post_type( 'location', $args );

	}
	add_action( 'init', 'location_post_type', 0 );

}
