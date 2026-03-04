<article id="post-<?php the_ID(); ?>" <?php post_class( 'ecs-post' ); ?>>
	<?php
	get_template_part(
		'template-parts/components/header-banner',
		null,
		array(
			'title'     => get_the_title(),
			'subtitle'  => get_the_date(),
			'thumbnail' => get_the_post_thumbnail_url( get_the_ID() ),
		)
	);
	?>
	
	<div class="ecs-section-sm">
		<div class="ecs-container-sm">
			<?php the_content(); ?>
		</div>
	</div>
</article>