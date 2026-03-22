<?php
if ( ! ecs_has_posts( 'ecs_testimonial' ) ) {
	return;
}

$heading    = get_theme_mod( 'ecs_testimonials_heading' );
$subheading = get_theme_mod( 'ecs_testimonials_subheading' );
$link_text  = get_theme_mod( 'ecs_testimonials_link_text' );
$link       = get_theme_mod( 'ecs_testimonials_link' );
?>

<section class="ecs-section-lg ecs-testimonials">
	<div class="ecs-container ecs-fade-in">
		<div class="ecs-testimonials-titles">
			<?php
			if ( $heading ) :
				?>
				<h2><?php echo esc_html( $heading ); ?></h2>
				<?php
			endif;

			if ( $subheading ) :
				?>
				<p class="ecs-section-subtitle"><?php echo esc_html( $subheading ); ?></p>
				<?php
			endif;
			?>
		</div>

		<?php echo do_blocks( '<!-- wp:ecs/testimonials-slider /-->' ); ?>
	</div>
</section>