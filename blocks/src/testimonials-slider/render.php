<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div <?php echo get_block_wrapper_attributes( array( 'class' => 'ecs-testimonials-slider-block' ) ); ?>>
	<?php
	$testimonials = new WP_Query(
		array(
			'post_type'      => 'ecs_testimonial',
			'posts_per_page' => $attributes['count'],
		)
	);

	if ( $testimonials->have_posts() ) :
		?>
		<div class="ecs-testimonials-track">
			<?php
			while ( $testimonials->have_posts() ) :
				$testimonials->the_post();

				$quote = get_field( 'ecs_quote' );
				$photo = get_field( 'ecs_profile_photo' );
				$name  = get_field( 'ecs_name' );
				$job   = get_field( 'ecs_job_title' );
				?>
				<div class="ecs-testimonial-slide">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/quote-icon.svg' ); ?>"
						alt=""
						class="ecs-testimonial-quote-icon"
					/>

					<p class="ecs-testimonial-quote">"<?php echo esc_html( $quote ); ?>"</p>

					<div class="ecs-testimonial-bottom-row">
						<img
							src="<?php echo esc_url( $photo['url'] ); ?>" 
							alt="<?php echo esc_attr( $photo['alt'] ); ?>"
						/>

						<div>
							<p class="ecs-testimonial-name"><?php echo esc_html( $name ); ?></p>
							<p class="ecs-text-sm"><?php echo esc_html( $job ); ?></p>
						</div>
					</div>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>

		<div class="ecs-testimonials-nav">
			<button class="ecs-testimonials-nav-prev" aria-label="Previous testimonial">&#8592;</button>
			<button class="ecs-testimonials-nav-next" aria-label="Next testimonial">&#8594;</button>
		</div>
		<?php
	endif;
	?>
</div>
