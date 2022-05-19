<?php


function added_post_types() {
	register_post_type( 'services', [
		'public' => true,
		'labels' => [
			'name' => 'Services'
		],
		'menu_icon' => 'dashicons-screenoptions'
	]);
}

add_action( 'init', 'added_post_types' );

?>