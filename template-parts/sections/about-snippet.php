<?php
$img       = get_theme_mod( 'ecs_about_snippet_img' );
$heading   = get_theme_mod( 'ecs_about_snippet_heading' );
$content   = get_theme_mod( 'ecs_about_snippet_content' );
$link_text = get_theme_mod( 'ecs_about_snippet_link_text' );
$link      = get_theme_mod( 'ecs_about_snippet_link' );

// Don't render the section if there's no meaningful content
if ( ! $content ) {
	return;
}
?>

<section class="ecs-section-lg ecs-about-snippet">
	<div class="ecs-container ecs-fade-in">
		<?php if ( $img ) : ?>
			<img src="<?php echo esc_url( $img ); ?>" alt="<?php esc_attr_e( 'About image', 'elevation-career-services' ); ?>" />
		<?php endif ?>

		<div>
			<?php if ( $heading ) : ?>
				<h2><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>
			
			<p><?php echo nl2br( esc_html( $content ) ); ?></p>

			<?php if ( $link_text && $link ) : ?>
				<a href="<?php echo esc_url( $link ); ?>">
					<?php echo esc_html( $link_text ); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>