<?php

$template_dir = get_template_directory();

require_once $template_dir . '/includes/theme-setup.php';
require_once $template_dir . '/includes/enqueue.php';
require_once $template_dir . '/includes/customizer.php';
require_once $template_dir . '/includes/woocommerce.php';
require_once $template_dir . '/includes/acf.php';
require_once $template_dir . '/includes/post-types.php';

// Register Block Types
add_action( 'init', 'ecs_register_block_types' );

function ecs_register_block_types() {
	register_block_type( get_template_directory() . '/blocks/build/featured-services' );
	register_block_type( get_template_directory() . '/blocks/build/testimonials-slider' );
}

// Hide Admin Bar
add_filter( 'show_admin_bar', '__return_false' );
