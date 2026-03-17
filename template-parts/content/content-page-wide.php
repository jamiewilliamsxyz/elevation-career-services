<article id="post-<?php the_ID(); ?>" <?php post_class( 'ecs-page' ); ?>>
	<?php
	get_template_part(
		'template-parts/components/header-banner',
		null,
		array(
			'title'     => get_the_title(),
			'thumbnail' => get_the_post_thumbnail_url( get_the_ID() ),
		)
	);
	?>
	
	<div class="ecs-section-md">
		<div class="ecs-container">
			<?php the_content(); ?>
		</div>
	</div>
</article>