<?php
$heading    = get_theme_mod( 'ecs_cta_banner_heading' );
$subheading = get_theme_mod( 'ecs_cta_banner_subheading' );
$btn_text   = get_theme_mod( 'ecs_cta_banner_btn_text' );
$btn_link   = get_theme_mod( 'ecs_cta_banner_btn_link' );
?>

<?php
if ( ! $heading && ! $subheading && ! ( $btn_text && $btn_link ) ) {
	return;
}
?>

<section class="ecs-section-md ecs-cta-banner">
	<div class="ecs-container">
		<?php if ( $heading ) : ?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

		<?php if ( $subheading ) : ?>
			<p><?php echo esc_html( $subheading ); ?></p>
		<?php endif; ?>

		<?php if ( $btn_text && $btn_link ) : ?>
			<a class="ecs-btn" href="<?php echo esc_url( $btn_link ); ?>"><?php echo esc_html( $btn_text ); ?></a>
		<?php endif; ?>
	</div>
</section>