<?php

/**
 * Create the taxonomy for Case Tag
 */
function brandpulse_registerCaseTypeTaxonomy()
{
    $labels = array(
        'name' => _x('Services', 'taxonomy general name', 'brandpulse'),
        'singular_name' => _x('Services', 'taxonomy singular name', 'brandpulse'),
        'search_items' => __('Search Services', 'brandpulse'),
        'all_items' => __('All Services', 'brandpulse'),
        'parent_item' => __('Parent Services', 'brandpulse'),
        'parent_item_colon' => __('Parent Services:', 'brandpulse'),
        'edit_item' => __('Edit Services', 'brandpulse'),
        'update_item' => __('Update Services', 'brandpulse'),
        'add_new_item' => __('Add New Services', 'brandpulse'),
        'new_item_name' => __('New Services Name', 'brandpulse'),
        'menu_name' => __('Services', 'brandpulse'),
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

    if (!taxonomy_exists('cases-type')) {
        register_taxonomy('cases-type', array(), $args);
    }

    // add this taxonomy to post types
    register_taxonomy_for_object_type('cases-type', 'cases');
}

//run on hook after post types
add_action('init', 'brandpulse_registerCaseTypeTaxonomy', 11);