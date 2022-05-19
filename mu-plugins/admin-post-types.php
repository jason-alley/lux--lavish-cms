<?php


function added_post_types() {
	register_post_type( 'services', [
		'public' => true,
		'labels' => [
			'name'         => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item'    => 'Edit Service',
            'all_item'     => 'All Services'
		],
		'menu_icon' => 'dashicons-screenoptions'
	]);
}

add_action( 'init', 'added_post_types' );

?>