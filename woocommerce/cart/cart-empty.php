<div class="ecs-cart-is-empty">
	<?php
	do_action( 'woocommerce_cart_is_empty' );

	if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
		<p class="ecs-return-to-shop">
			<a class="ecs-btn" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
				<?php echo esc_html_e( 'Return to Services', 'elevation-career-services' ); ?>
			</a>
		</p>
	<?php endif; ?>
</div>
