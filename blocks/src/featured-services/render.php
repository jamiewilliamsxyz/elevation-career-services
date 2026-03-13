<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<div <?php echo get_block_wrapper_attributes( array( 'class' => 'ecs-featured-services-block ecs-featured-product-cards-container' ) ); ?>>
	<?php
	$services = new WP_Query(
		array(
			'post_type'      => 'product',
			'posts_per_page' => $attributes['count'],
		)
	);

	if ( $services->have_posts() ) :
		while ( $services->have_posts() ) :
			$services->the_post();
			global $product;
			$product = wc_get_product( get_the_ID() );
			get_template_part( 'woocommerce/content', 'product' );
		endwhile;
		wp_reset_postdata();
	endif;
	?>
</div>
