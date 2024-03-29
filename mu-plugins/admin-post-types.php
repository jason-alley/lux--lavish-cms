<?php

/**
    Registers posts types for admin dashboard.
 */
function Admin_Post_types()
{
    register_post_type(
        'services', [
        'public'          => true,
        'show_in_rest'    => true,
        'show_in_graphql' => true,
        'hierarchical'    => true,
        'labels' => [
            'name'                => 'Services',
            'add_new_item'        => 'Add New Service',
            'edit_item'           => 'Edit Service',
            'all_items'           => 'All Services',
            'singular_name'       => 'Event'
        ],
        'graphql_single_name' => 'service',
        'graphql_plural_name' => 'services',
        'menu_icon'           => 'dashicons-screenoptions'
        ]
    );
}

add_action('init', 'Admin_Post_types');

?>