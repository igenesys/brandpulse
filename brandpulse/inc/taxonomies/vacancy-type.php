<?php

/**
 * Create the taxonomy for Case Tag
 */
function brandpulse_registerVacancyTagTaxonomy()
{
    $labels = array(
        'name' => _x('Vacancy type', 'taxonomy general name', 'brandpulse'),
        'singular_name' => _x('Vacancy type', 'taxonomy singular name', 'brandpulse'),
        'search_items' => __('Search Type', 'brandpulse'),
        'all_items' => __('All Type', 'brandpulse'),
        'parent_item' => __('Parent Type', 'brandpulse'),
        'parent_item_colon' => __('Parent Type:', 'brandpulse'),
        'edit_item' => __('Edit Type', 'brandpulse'),
        'update_item' => __('Update Type', 'brandpulse'),
        'add_new_item' => __('Add New Type', 'brandpulse'),
        'new_item_name' => __('New Type Name', 'brandpulse'),
        'menu_name' => __('Type', 'brandpulse'),
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

    if (!taxonomy_exists('vacancy-tag')) {
        register_taxonomy('vacancy-tag', array(), $args);
    }

    // add this taxonomy to post types
    register_taxonomy_for_object_type('vacancy-tag', 'vacancy');
}

//run on hook after post types
add_action('init', 'brandpulse_registerVacancyTagTaxonomy', 11);