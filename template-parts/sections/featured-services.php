<?php
if ( ! ecs_has_posts( 'product' ) ) {
	return;
}

$heading    = get_theme_mod( 'ecs_featured_services_heading' );
$subheading = get_theme_mod( 'ecs_featured_services_subheading' );
$link_text  = get_theme_mod( 'ecs_featured_services_link_text' );
$link       = get_theme_mod( 'ecs_featured_services_link' );
?>

<section class="ecs-section-lg ecs-featured-services">
	<div class="ecs-container ecs-reveal">
		<div class="ecs-featured-services-titles">
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

		<?php
		echo do_blocks( '<!-- wp:ecs/featured-services /-->' );

		if ( $link && $link_text ) :
			?>
			<a href="<?php echo esc_url( $link ); ?>">
				<?php echo esc_html( $link_text ); ?>
			</a>
			<?php
		endif;
		?>
	</div>
</section>
