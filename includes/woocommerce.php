<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Remove WooCommerce default styles (aside from checkout page)
add_filter( 'woocommerce_enqueue_styles', 'ecs_filter_woocommerce_styles' );

function ecs_filter_woocommerce_styles( $styles ) {
	if ( is_checkout() ) {
		return $styles;
	}
	return array();
}

// Buttons text
add_filter( 'woocommerce_order_button_text', 'ecs_checkout_button_text' );

function ecs_checkout_button_text() {
	return __( 'Buy Now', 'elevation-career-services' );
}

add_filter( 'woocommerce_order_button_text', 'ecs_cart_proceed_button_text' );

function ecs_cart_proceed_button_text() {
	return __( 'Proceed to Checkout', 'elevation-career-services' );
}

// Remove checkout notices
add_action( 'woocommerce_before_checkout_form', 'ecs_remove_checkout_notices', 1 );

function ecs_remove_checkout_notices() {
	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_output_all_notices' );
}
