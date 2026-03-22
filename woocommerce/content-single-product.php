<?php global $product; ?>

<article id="product-<?php the_ID(); ?>" <?php wc_product_class( 'ecs-single-product ecs-section-lg', $product ); ?>>
	<div class="ecs-container">
		<div class="ecs-single-product-content">
			<div class="ecs-single-product-img-container"><?php echo wp_kses_post( $product->get_image( 'large', array( 'class' => 'ecs-single-product-img' ) ) ); ?></div>
			
			<div class="ecs-single-product-content-col">
				<div class="ecs-single-product-title-price-container">
					<h1><?php echo esc_html( $product->get_name() ); ?></h1>
					<div class="ecs-single-product-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></div>
				</div>

				<p><?php echo wp_kses_post( $product->get_description() ); ?></p>

				<div class="ecs-single-product-lists">
					<div class="ecs-single-product-list-container">
						<h3 class="ecs-section-subtitle"><?php esc_html_e( "What's Included", 'elevation-career-services' ); ?></h3>
						<div class="ecs-text-sm ecs-product-card-desc"><?php wp_kses_post( the_field( 'ecs_whats_included' ) ); ?></div>
					</div>

					<div class="ecs-single-product-list-container">
						<h3 class="ecs-section-subtitle"><?php esc_html_e( 'How It Works', 'elevation-career-services' ); ?></h3>
						<div class="ecs-text-sm ecs-product-card-desc"><?php wp_kses_post( the_field( 'ecs_how_it_works' ) ); ?></div>
					</div>
				</div>
				
				<div class="ecs-single-product-btns-container">
					<a class="ecs-btn-outlined" href="<?php echo wc_get_page_permalink( 'shop' ); ?>"><?php esc_html_e( 'Back to Services', 'elevation-career-services' ); ?></a>
					<?php woocommerce_template_single_add_to_cart(); ?>
				</div>
			</div>
		</div>
	</div>
</article>