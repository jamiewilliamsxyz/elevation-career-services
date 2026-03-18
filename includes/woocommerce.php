<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Remove WooCommerce default styles (aside from checkout page)
add_filter(
	'woocommerce_enqueue_styles',
	function ( $styles ) {
		if ( is_checkout() ) {
			return $styles;
		}
		return array();
	}
);

// Button text
add_filter(
	'woocommerce_order_button_text',
	function () {
		return __( 'Buy Now', 'elevation-career-services' );
	}
);

add_action(
	'woocommerce_before_checkout_form',
	function () {
		remove_action( 'woocommerce_before_checkout_form', 'woocommerce_output_all_notices' );
	},
	1
);
