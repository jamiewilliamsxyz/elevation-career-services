<?php get_header(); ?>

<main>
	<?php
	get_template_part(
		'template-parts/components/header-banner',
		null,
		array(
			'title' => post_type_archive_title( '', false ),
		)
	);
	?>
	
	<?php
	if ( have_posts() ) :
		?>
		<section class="ecs-section-md">
			<div class="ecs-container">
				<div class="ecs-post-cards-container">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content/content' );
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
