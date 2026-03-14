<?php
global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
	return;
}

$icon = get_field( 'service_icon' );
?>

<article id="product-<?php the_ID(); ?>" <?php wc_product_class( 'ecs-product-card', $product ); ?>>
	<?php if ( get_field( 'service_icon' ) ) : ?>
		<img
			src="<?php echo esc_url( $icon['url'] ); ?>"
			alt="<?php echo esc_attr( $icon['alt'] ); ?>"
			class="esc-product-card-icon"
		/>
	<?php endif; ?>

	<div class="ecs-product-card-title-area">
		<h3><?php the_title(); ?></h3>
		<?php echo wp_kses_post( $product->get_price_html() ); ?>
	</div>
 
	<div class="ecs-text-sm ecs-product-card-desc">
		<?php echo wp_kses_post( the_field( 'ecs_whats_included' ) ); ?>
	</div>

	<a class="ecs-btn" href="<?php the_permalink(); ?>">
		<?php esc_html_e( 'Find Out More', 'elevation-career-services' ); ?>
	</a>
</article>