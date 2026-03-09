<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'woocommerce_enqueue_styles', '__return_false' );
