<?php get_header(); ?>

<main>
	<?php
	get_template_part( 'template-parts/sections/hero' );
	get_template_part( 'template-parts/sections/stats-bar' );
	get_template_part( 'template-parts/sections/featured-services' );
	get_template_part( 'template-parts/sections/testimonials' );
	get_template_part( 'template-parts/sections/about-snippet' );
	get_template_part( 'template-parts/sections/cta-banner' );
	?>
</main>

<?php get_footer(); ?>