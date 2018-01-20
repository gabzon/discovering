<?php

if ( ! function_exists('place_post_type') ) {

// Register Custom Post Type
function place_post_type() {

	$labels = array(
		'name'                  => _x( 'Places', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Place', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Places', 'sage' ),
		'name_admin_bar'        => __( 'Places', 'sage' ),
		'archives'              => __( 'Place Archives', 'sage' ),
		'attributes'            => __( 'Place Attributes', 'sage' ),
		'parent_item_colon'     => __( 'Parent Place:', 'sage' ),
		'all_items'             => __( 'All Places', 'sage' ),
		'add_new_item'          => __( 'Add New Place', 'sage' ),
		'add_new'               => __( 'Add Place', 'sage' ),
		'new_item'              => __( 'New Place', 'sage' ),
		'edit_item'             => __( 'Edit Place', 'sage' ),
		'update_item'           => __( 'Update Place', 'sage' ),
		'view_item'             => __( 'View Place', 'sage' ),
		'view_items'            => __( 'View Places', 'sage' ),
		'search_items'          => __( 'Search Place', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into Place', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Place', 'sage' ),
		'items_list'            => __( 'Places list', 'sage' ),
		'items_list_navigation' => __( 'Places list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter Places list', 'sage' ),
	);
	$args = array(
		'label'                 => __( 'Place', 'sage' ),
		'description'           => __( 'List of things to do in a location, restaurants, attractions, amusements parks, etc', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag', 'destination' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'place', $args );
  flush_rewrite_rules();
}
add_action( 'init', 'place_post_type', 0 );

}
