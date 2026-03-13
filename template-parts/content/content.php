<article id="post-<?php the_ID(); ?>" <?php post_class( 'ecs-post-card' ); ?>>
	<h3><?php the_title(); ?></h3>
 
	<span class="ecs-text-sm"><?php the_excerpt(); ?></span>

	<a href="<?php the_permalink(); ?>">
		<?php esc_html_e( 'Read more', 'elevation-career-services' ); ?>
	</a>
</article>