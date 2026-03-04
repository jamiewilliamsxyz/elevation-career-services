<article id="post-<?php the_ID(); ?>" <?php post_class( 'ecs-page' ); ?>>
	<?php get_template_part( 'template-parts/components/header-banner' ); ?>
	
	<div class="ecs-section-sm">
		<div class="ecs-container-sm">
			<?php the_content(); ?>
		</div>
	</div>
</article>