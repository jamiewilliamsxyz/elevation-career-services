<?php
/**
 * Template Name: Wide page
 */

get_header();
?>

<main>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content/content', 'page-wide' );
		endwhile;
	endif;
	?>
</main>

<?php get_footer(); ?>