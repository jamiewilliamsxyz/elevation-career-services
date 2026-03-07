<?php get_header(); ?>

<main>
	<?php
	get_template_part( 'template-parts/sections/hero' );
	get_template_part( 'template-parts/sections/stats-bar' );

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
	endif;

	get_template_part( 'template-parts/sections/about-snippet' );
	get_template_part( 'template-parts/sections/cta-banner' );
	?>
</main>

<?php get_footer(); ?>