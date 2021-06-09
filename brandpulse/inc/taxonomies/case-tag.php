<?php

/**
 * Create the taxonomy for Case Tag
 */
function brandpulse_registerCaseTagTaxonomy()
{
    $labels = array(
        'name' => _x('Customer', 'taxonomy general name', 'brandpulse'),
        'singular_name' => _x('Customer', 'taxonomy singular name', 'brandpulse'),
        'search_items' => __('Search Customer', 'brandpulse'),
        'all_items' => __('All Customer', 'brandpulse'),
        'parent_item' => __('Parent Customer', 'brandpulse'),
        'parent_item_colon' => __('Parent Customer:', 'brandpulse'),
        'edit_item' => __('Edit Customer', 'brandpulse'),
        'update_item' => __('Update Customer', 'brandpulse'),
        'add_new_item' => __('Add New Customer', 'brandpulse'),
        'new_item_name' => __('New Customer Name', 'brandpulse'),
        'menu_name' => __('Customer', 'brandpulse'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'publicly_queryable' => true
    );

    if (!taxonomy_exists('cases-tag')) {
        register_taxonomy('cases-tag', array(), $args);
    }

    // add this taxonomy to post types
    register_taxonomy_for_object_type('cases-tag', 'cases');
}

//run on hook after post types
add_action('init', 'brandpulse_registerCaseTagTaxonomy', 11);