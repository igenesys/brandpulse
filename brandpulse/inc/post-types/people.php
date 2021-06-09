<?php

/**
 * Register people
 */
function brandpulse_registerPeoplePostType()
{
    $labels = array(
        'name' => _x('People', 'post type general name', 'brandpulse'),
        'singular_name' => _x('Person', 'post type singular name', 'brandpulse'),
        'menu_name' => _x('People', 'admin menu', 'brandpulse'),
        'name_admin_bar' => _x('People', 'add new on admin bar', 'brandpulse'),
        'add_new' => _x('Add New', 'Person', 'brandpulse'),
        'add_new_item' => __('Add New Person', 'brandpulse'),
        'new_item' => __('New Program', 'brandpulse'),
        'edit_item' => __('Edit Person', 'brandpulse'),
        'view_item' => __('View Person', 'brandpulse'),
        'all_items' => __('All People', 'brandpulse'),
        'search_items' => __('Search People', 'brandpulse'),
        'parent_item_colon' => __('Parent Person:', 'brandpulse'),
        'not_found' => __('No People found.', 'brandpulse'),
        'not_found_in_trash' => __('No People found in Trash.', 'brandpulse')
    );

    $args = array(
        'labels' => $labels,
        'description' => __('people', 'brandpulse'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => false,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => 'people',
        'hierarchical' => false,
        'menu_position' => null,
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail')
    );

    register_post_type('people', $args);
}

add_action('init', 'brandpulse_registerPeoplePostType', 10);