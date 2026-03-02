<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'after_setup_theme', 'ecs_setup_theme' );

function ecs_setup_theme() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support(
		'custom-logo',
		array(
			'height'               => 35,
			'width'                => 150,
			'flex-width'           => true,
			'unlink-homepage-logo' => true,
		)
	);
}
