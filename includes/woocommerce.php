<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'ecs_setup_woocommerce' );

function ecs_setup_woocommerce() {
	// Remove WooCommerce default styles
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );
}
