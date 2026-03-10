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

	if ( is_404() ) {
		wp_enqueue_style(
			'ecs-404-css',
			$template_uri . '/assets/css/templates/404.css',
			array(),
			$version
		);
	}

	if ( is_woocommerce() ) {
		wp_enqueue_style(
			'ecs-woocommerce-css',
			$template_uri . '/assets/css/woocommerce.css',
			array(),
			$version
		);
	}

	wp_enqueue_style(
		'ecs-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap',
		array(),
		null
	);

	wp_enqueue_script(
		'ecs-navbar-menu-toggle-js',
		$template_uri . '/assets/js/navbar-menu-toggle.js',
		array(),
		$version,
		true
	);
}
