<?php
if ( ! function_exists( 'facility_taxonomy' ) ) {

// Register Custom Taxonomy
function facility_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Facilities', 'Taxonomy General Name', 'sage' ),
		'singular_name'              => _x( 'Facility', 'Taxonomy Singular Name', 'sage' ),
		'menu_name'                  => __( 'Facilities', 'sage' ),
		'all_items'                  => __( 'All Facilities', 'sage' ),
		'parent_item'                => __( 'Parent Facility', 'sage' ),
		'parent_item_colon'          => __( 'Parent Facility:', 'sage' ),
		'new_item_name'              => __( 'New Facility Name', 'sage' ),
		'add_new_item'               => __( 'Add New Facility', 'sage' ),
		'edit_item'                  => __( 'Edit Facility', 'sage' ),
		'update_item'                => __( 'Update Facility', 'sage' ),
		'view_item'                  => __( 'View Facility', 'sage' ),
		'separate_items_with_commas' => __( 'Separate Facilities with commas', 'sage' ),
		'add_or_remove_items'        => __( 'Add or remove Facilities', 'sage' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
		'popular_items'              => __( 'Popular Facilities', 'sage' ),
		'search_items'               => __( 'Search Facilities', 'sage' ),
		'not_found'                  => __( 'Not Found', 'sage' ),
		'no_terms'                   => __( 'No Facilities', 'sage' ),
		'items_list'                 => __( 'Facilities list', 'sage' ),
		'items_list_navigation'      => __( 'Facilities list navigation', 'sage' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'facility', array( 'hosting' ), $args );

}
add_action( 'init', 'facility_taxonomy', 0 );

}
