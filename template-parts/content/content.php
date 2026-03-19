<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'ecs-post-card', 'ecs-reveal' ) ); ?>>
	<h3><?php the_title(); ?></h3>
 
	<span class="ecs-text-sm"><?php the_excerpt(); ?></span>

	<a href="<?php the_permalink(); ?>">
		<?php esc_html_e( 'Read more', 'elevation-career-services' ); ?>
	</a>
</article>