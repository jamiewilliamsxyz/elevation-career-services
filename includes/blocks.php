<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'ecs_register_block_types' );

function ecs_register_block_types() {
	register_block_type( get_template_directory() . '/blocks/build/featured-services' );
	register_block_type( get_template_directory() . '/blocks/build/testimonials-slider' );
}
