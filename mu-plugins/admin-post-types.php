<?php


function added_post_types() {
	register_post_type( 'services', [
		'public'          => true,
        'show_in_rest'    => true,
        'show_in_graphql' => true,
		'labels' => [
			'name'          => 'Services',
            'add_new_item'  => 'Add New Service',
            'edit_item'     => 'Edit Service',
            'all_items'     => 'All Services',
            'singular_name' => 'Event'
		],
		'menu_icon' => 'dashicons-screenoptions'
	]);
}

add_action( 'init', 'added_post_types' );

?>