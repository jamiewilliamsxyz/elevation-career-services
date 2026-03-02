<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Enqueue Scripts/Styles
add_action( 'wp_enqueue_scripts', 'ecs_enqueue_scripts' );


function ecs_enqueue_scripts() {
	$ecs_version = '1.0.0';
	wp_enqueue_style( 'ecs-styles-css', get_stylesheet_uri(), $ecs_version );
}
