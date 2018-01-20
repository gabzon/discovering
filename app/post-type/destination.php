<?php


if ( ! function_exists('destination_post_type') ) {

  // Register Custom Post Type
  function destination_post_type() {

    $labels = array(
      'name'                  => _x( 'Destinations', 'Post Type General Name', 'sage' ),
      'singular_name'         => _x( 'Destination', 'Post Type Singular Name', 'sage' ),
      'menu_name'             => __( 'Destinations', 'sage' ),
      'name_admin_bar'        => __( 'Destinations', 'sage' ),
      'archives'              => __( 'Destination Archives', 'sage' ),
      'attributes'            => __( 'Destination Attributes', 'sage' ),
      'parent_item_colon'     => __( 'Parent Destination:', 'sage' ),
      'all_items'             => __( 'All Destinations', 'sage' ),
      'add_new_item'          => __( 'Add New Destination', 'sage' ),
      'add_new'               => __( 'Add New', 'sage' ),
      'new_item'              => __( 'New Destination', 'sage' ),
      'edit_item'             => __( 'Edit Destination', 'sage' ),
      'update_item'           => __( 'Update Destination', 'sage' ),
      'view_item'             => __( 'View Destination', 'sage' ),
      'view_items'            => __( 'View Destinations', 'sage' ),
      'search_items'          => __( 'Search Destination', 'sage' ),
      'not_found'             => __( 'Not found', 'sage' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
      'featured_image'        => __( 'Featured Image', 'sage' ),
      'set_featured_image'    => __( 'Set featured image', 'sage' ),
      'remove_featured_image' => __( 'Remove featured image', 'sage' ),
      'use_featured_image'    => __( 'Use as featured image', 'sage' ),
      'insert_into_item'      => __( 'Insert into Destination', 'sage' ),
      'uploaded_to_this_item' => __( 'Uploaded to this Destination', 'sage' ),
      'items_list'            => __( 'Destinations list', 'sage' ),
      'items_list_navigation' => __( 'Destinations list navigation', 'sage' ),
      'filter_items_list'     => __( 'Filter Destinations list', 'sage' ),
    );
    $args = array(
      'label'                 => __( 'Destinations', 'sage' ),
      'description'           => __( 'List of regions, countries, cities & towns', 'sage' ),
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
    register_post_type( 'destination', $args );
    flush_rewrite_rules();
  }
  //add_action( 'init', 'destination_post_type', 0 );

}
