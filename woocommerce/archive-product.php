<?php get_header(); ?>

<main>
	<?php
	get_template_part(
		'template-parts/components/header-banner',
		null,
		array(
			'title'     => get_the_title( wc_get_page_id( 'shop' ) ),
			'thumbnail' => get_the_post_thumbnail_url( wc_get_page_id( 'shop' ) ),
		)
	);
	?>

	<?php
	if ( have_posts() ) :
		?>
		<section class="ecs-section-md">
			<div class="ecs-container">
				<div class="ecs-product-cards-container"> 
					<?php
					while ( have_posts() ) :
						the_post();
						wc_get_template_part( 'content', 'product' );
					endwhile;
					?>
				</div>
			</div>
		</section>
		<?php
		get_template_part( 'template-parts/components/pagination' );
	else :
		get_template_part( 'template-parts/components/no-posts' );
	endif;
	?>
</main>

<?php get_footer(); ?>