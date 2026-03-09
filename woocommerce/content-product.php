<?php
global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
	return;
}
?>

<article id="product-<?php the_ID(); ?>" <?php wc_product_class( 'ecs-product-card', $product ); ?>>
	<div class="ecs-product-card-title-area">
		<h3><?php the_title(); ?></h3>
		<p><?php echo wp_kses_post( $product->get_price_html() ); ?></p>
	</div>
	
 
	<div class="ecs-text-sm ecs-product-card-desc">
		<?php echo wp_kses_post( $product->get_short_description() ); ?>
	</div>

	<a class="ecs-btn" href="<?php the_permalink(); ?>">
		<?php esc_html_e( 'Find out more', 'elevation-career-services' ); ?>
	</a>
</article>