<?php
/**
 * gh-exam custom post types
 */




add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'client',
        array(
            'labels' => array(
                'name' => __('Clients', 'gh-exam'),
                'singular_name' => __('Client','gh-exam' ),
                'add_new' => __('Add New', 'gh-exam'),
                'add_new_item' => __('Add New Client', 'gh-exam'),
                'edit' => __('Edit', 'gh-exam'),
                'edit_item' => __('Edit client', 'gh-exam'),
                'new_item' => __('New client', 'gh-exam'),
                'view' => __('View', 'gh-exam' ),
                'view_item' => __('View client', 'gh-exam'),
                'search_items' => __('Search', 'gh-exam'),
                'not_found' => __('No found', 'gh-exam' ),
                'not_found_in_trash' => __('No in Trash', 'gh-exam'),
                'parent' => 'Client'
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields','excerpt' ),
            'taxonomies' => array( '' ),
            'has_archive' => true,
            'menu_icon' =>  'dashicons-businessman',
        )
    );
    register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __('Services', 'gh-exam'),
                'singular_name' => __('Service','gh-exam' ),
                'add_new' => __('Add New', 'gh-exam'),
                'add_new_item' => __('Add New Service', 'gh-exam'),
                'edit' => __('Edit', 'gh-exam'),
                'edit_item' => __('Edit service', 'gh-exam'),
                'new_item' => __('New service', 'gh-exam'),
                'view' => __('View', 'gh-exam' ),
                'view_item' => __('View service', 'gh-exam'),
                'search_items' => __('Search', 'gh-exam'),
                'not_found' => __('No found', 'gh-exam' ),
                'not_found_in_trash' => __('No in Trash', 'gh-exam'),
                'parent' => 'Service'
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies' => array( '' ),
            'has_archive' => true,
            'menu_icon' =>  'dashicons-admin-generic',
        )
    );
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __('Portfolio', 'gh-exam'),
                'singular_name' => __('Portfolio item','gh-exam' ),
                'add_new' => __('Add New', 'gh-exam'),
                'add_new_item' => __('Add New PortfolioItem', 'gh-exam'),
                'edit' => __('Edit', 'gh-exam'),
                'edit_item' => __('Edit portfolio item', 'gh-exam'),
                'new_item' => __('New portfolio item', 'gh-exam'),
                'view' => __('View', 'gh-exam' ),
                'view_item' => __('View portfolio item', 'gh-exam'),
                'search_items' => __('Search', 'gh-exam'),
                'not_found' => __('No found', 'gh-exam' ),
                'not_found_in_trash' => __('No in Trash', 'gh-exam'),
                'parent' => 'Portfolio'
            ),
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail'),
            'taxonomies' => array( 'category' ),
            'has_archive' => true,
            'menu_icon' =>  'dashicons-admin-generic',
        )
    );
}