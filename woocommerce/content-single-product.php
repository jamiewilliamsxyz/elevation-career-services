<?php global $product; ?>

<article id="product-<?php the_ID(); ?>" <?php wc_product_class( 'ecs-single-product', $product ); ?>>
	<div class="ecs-section-lg">
		<div class="ecs-container">
			<?php echo wp_kses_post( $product->get_image( 'large', array( 'class' => 'ecs-single-product-img' ) ) ); ?>

			<div class="ecs-single-product-content">
				<div class="ecs-single-product-title-price-sec">
					<h1><?php echo esc_html( $product->get_name() ); ?></h1>
					<?php echo wp_kses_post( $product->get_price_html() ); ?>
				</div>

				<p class="ecs-single-product-desc"><?php echo wp_kses_post( $product->get_description() ); ?></p>

				<div class="ecs-single-product-included-sec">
					<h2 class="ecs-section-subtitle"><?php esc_html_e( "What's Included?", 'elevation-career-services' ); ?></h2>
					<div class="ecs-text-sm ecs-product-card-desc"><?php echo wp_kses_post( $product->get_short_description() ); ?></div>
				</div>

				<a class="ecs-btn"><?php esc_html_e( 'Add to Basket', 'elevation-career-services' ); ?></a>
			</div>
		</div>
	</div>
</article>