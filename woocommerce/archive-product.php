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

	<section class="ecs-section-md">
		<div class="ecs-container">
			<?php
			if ( have_posts() ) :
				?>
				<div class="ecs-product-cards-container"> 
					<?php
					while ( have_posts() ) :
						the_post();
						wc_get_template_part( 'content', 'product' );
					endwhile;
					?>
				</div> 
				<?php
			else :
				get_template_part( 'template-parts/components/no-posts' );
			endif;
			?>
		</div>
	</section>
</main>

<?php get_footer(); ?>