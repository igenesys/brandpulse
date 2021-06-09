<?php

/**
 * Register Vacancy
 */
// Register Custom Post Type
function brandpulse_registerVacancyPostType() {

	$labels = array(
		'name'                  => _x( 'Vacancy', 'Post Type General Name', 'brandpulse' ),
		'singular_name'         => _x( 'Vacancy', 'Post Type Singular Name', 'brandpulse' ),
		'menu_name'             => __( 'Vacancy', 'brandpulse' ),
		'name_admin_bar'        => __( 'Vacancy', 'brandpulse' ),
		'archives'              => __( 'Item Archives', 'brandpulse' ),
		'attributes'            => __( 'Item Attributes', 'brandpulse' ),
		'parent_item_colon'     => __( 'Parent Item:', 'brandpulse' ),
		'all_items'             => __( 'All Items', 'brandpulse' ),
		'add_new_item'          => __( 'Add New Item', 'brandpulse' ),
		'add_new'               => __( 'Add New', 'brandpulse' ),
		'new_item'              => __( 'New Item', 'brandpulse' ),
		'edit_item'             => __( 'Edit Item', 'brandpulse' ),
		'update_item'           => __( 'Update Item', 'brandpulse' ),
		'view_item'             => __( 'View Item', 'brandpulse' ),
		'view_items'            => __( 'View Items', 'brandpulse' ),
		'search_items'          => __( 'Search Item', 'brandpulse' ),
		'not_found'             => __( 'Not found', 'brandpulse' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'brandpulse' ),
		'featured_image'        => __( 'Featured Image', 'brandpulse' ),
		'set_featured_image'    => __( 'Set featured image', 'brandpulse' ),
		'remove_featured_image' => __( 'Remove featured image', 'brandpulse' ),
		'use_featured_image'    => __( 'Use as featured image', 'brandpulse' ),
		'insert_into_item'      => __( 'Insert into item', 'brandpulse' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'brandpulse' ),
		'items_list'            => __( 'Items list', 'brandpulse' ),
		'items_list_navigation' => __( 'Items list navigation', 'brandpulse' ),
		'filter_items_list'     => __( 'Filter items list', 'brandpulse' ),
	);
	$rewrite = array(
		'slug'                  => 'vacatures',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Vacancy', 'brandpulse' ),
		'description'           => __( 'Add Vacancy', 'brandpulse' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'vacancy', $args );

}
add_action( 'init', 'brandpulse_registerVacancyPostType', 0 );