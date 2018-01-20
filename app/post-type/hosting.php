<?php

if ( ! function_exists('host_post_type') ) {

// Register Custom Post Type
function hosting_post_type() {

	$labels = array(
		'name'                  => _x( 'Hosts', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Host', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Hosts', 'sage' ),
		'name_admin_bar'        => __( 'Hosts', 'sage' ),
		'archives'              => __( 'Host Archives', 'sage' ),
		'attributes'            => __( 'Host Attributes', 'sage' ),
		'parent_item_colon'     => __( 'Parent Host:', 'sage' ),
		'all_items'             => __( 'All Hosts', 'sage' ),
		'add_new_item'          => __( 'Add New Hosts', 'sage' ),
		'add_new'               => __( 'Add Host', 'sage' ),
		'new_item'              => __( 'New Host', 'sage' ),
		'edit_item'             => __( 'Edit Host', 'sage' ),
		'update_item'           => __( 'Update Host', 'sage' ),
		'view_item'             => __( 'View Host', 'sage' ),
		'view_items'            => __( 'View Hosts', 'sage' ),
		'search_items'          => __( 'Search Hosts', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into Host', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Host', 'sage' ),
		'items_list'            => __( 'Hosts list', 'sage' ),
		'items_list_navigation' => __( 'Hosts list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter Hosts list', 'sage' ),
	);
	$args = array(
		'label'                 => __( 'Hosting', 'sage' ),
		'description'           => __( 'List of hosting places, hotels, bed & breakfasts, etc', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-building',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'hosting', $args );
  flush_rewrite_rules();
}
add_action( 'init', 'hosting_post_type', 0 );

}
