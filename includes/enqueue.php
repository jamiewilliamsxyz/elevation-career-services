<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Enqueue Scripts/Styles
add_action( 'wp_enqueue_scripts', 'ecs_enqueue_scripts' );


function ecs_enqueue_scripts() {
	$template_uri = get_template_directory_uri();
	$version      = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'ecs-styles-css',
		get_stylesheet_uri(),
		array(),
		$version
	);

	wp_enqueue_style(
		'ecs-main-css',
		$template_uri . '/assets/css/main.css',
		array(),
		$version
	);
}
