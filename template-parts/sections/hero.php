<?php
$heading    = get_theme_mod( 'ecs_hero_heading' ) ? get_theme_mod( 'ecs_hero_heading' ) : get_bloginfo( 'name' );
$subheading = get_theme_mod( 'ecs_hero_subheading' ) ? get_theme_mod( 'ecs_hero_subheading' ) : get_bloginfo( 'description' );
$btn_text   = get_theme_mod( 'ecs_hero_btn_text' );
$btn_link   = get_theme_mod( 'ecs_hero_btn_link' );
$img        = get_theme_mod( 'ecs_hero_img' );
?>

<section class="ecs-section-lg ecs-hero">
	<div class="ecs-container ecs-fade-in">
		<div class="ecs-hero-col">
			<h1><?php echo esc_html( $heading ); ?></h1>
			<p><?php echo esc_html( $subheading ); ?></p>

			<?php if ( $btn_text && $btn_link ) : ?>
				<a href="<?php echo esc_url( $btn_link ); ?>" class="ecs-btn ecs-hero-btn"><?php echo esc_html( $btn_text ); ?></a>
			<?php endif; ?>
		</div>

		<?php if ( $img ) : ?>
			<img class="ecs-hero-img" alt="<?php esc_attr_e( 'Hero image', 'elevation-career-services' ); ?>" src="<?php echo esc_url( $img ); ?>" />
		<?php endif; ?>
	</div>
</section>