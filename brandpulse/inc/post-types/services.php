<?php

/**
 * Register Services
 */
function brandpulse_registerServicePostType()
{
    $labels = array(
        'name' => _x('Services', 'post type general name', 'brandpulse'),
        'singular_name' => _x('Service', 'post type singular name', 'brandpulse'),
        'menu_name' => _x('Services', 'admin menu', 'brandpulse'),
        'name_admin_bar' => _x('Services', 'add new on admin bar', 'brandpulse'),
        'add_new' => _x('Add New', 'Service', 'brandpulse'),
        'add_new_item' => __('Add New Service', 'brandpulse'),
        'new_item' => __('New Program', 'brandpulse'),
        'edit_item' => __('Edit Service', 'brandpulse'),
        'view_item' => __('View Service', 'brandpulse'),
        'all_items' => __('All Services', 'brandpulse'),
        'search_items' => __('Search Services', 'brandpulse'),
        'parent_item_colon' => __('Parent Service:', 'brandpulse'),
        'not_found' => __('No Services found.', 'brandpulse'),
        'not_found_in_trash' => __('No Services found in Trash.', 'brandpulse')
    );
    $rewrite = array(
		'slug'                  => 'services',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
    $args = array(
		'label'                 => __( 'Service', 'brandpulse' ),
		'description'           => __( 'Services', 'brandpulse' ),
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

    register_post_type('services', $args);
}

add_action('init', 'brandpulse_registerServicePostType', 10);