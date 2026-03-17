<div class="ecs-cart-totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>

	<h2><?php esc_html_e( 'Order Totals', 'elevation-career-services' ); ?></h2>

	<div class="ecs-cart-totals-rows">
		<div class="ecs-cart-totals-row ecs-cart-subtotal">
			<span><?php esc_html_e( 'Subtotal', 'elevation-career-services' ); ?></span>
			<span><?php wc_cart_totals_subtotal_html(); ?></span>
		</div>

		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<div class="ecs-cart-totals-row ecs-cart-fee">
				<span><?php echo esc_html( $fee->name ); ?></span>
				<span><?php wc_cart_totals_fee_html( $fee ); ?></span>
			</div>
		<?php endforeach; ?>

		<?php
		if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) :
			$taxable_address = WC()->customer->get_taxable_address();
			$estimated_text  = '';

			if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
				$estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'elevation-career-services' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
			}

			if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) :
				foreach ( WC()->cart->get_tax_totals() as $code => $tax ) :
					?>
					<div class="ecs-cart-totals-row ecs-cart-tax-rate ecs-cart-tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
						<span><?php echo esc_html( $tax->label ) . $estimated_text; ?></span>
						<span><?php echo wp_kses_post( $tax->formatted_amount ); ?></span>
					</div>
					<?php
				endforeach;
			else :
				?>
				<div class="ecs-cart-totals-row ecs-cart-tax-total">
					<span><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; ?></span>
					<span><?php wc_cart_totals_taxes_total_html(); ?></span>
				</div>
				<?php
			endif;
		endif;
		?>

		<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

		<div class="ecs-cart-totals-row ecs-cart-order-total">
			<span><?php esc_html_e( 'Total', 'elevation-career-services' ); ?></span>
			<span><?php wc_cart_totals_order_total_html(); ?></span>
		</div>

		<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

	</div>

	<div class="ecs-proceed-to-checkout">
		<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
	</div>

	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>