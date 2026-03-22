<?php get_header(); ?>

<main class="ecs-single-product-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			wc_get_template_part( 'content', 'single-product' );
			get_template_part( 'template-parts/sections/single-product-featured-services' );
			get_template_part( 'template-parts/sections/testimonials' );
		endwhile;
	endif;
	?>
</main>

<?php get_footer(); ?>