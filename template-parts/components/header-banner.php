<?php
$title     = $args['title'] ?? '';
$subtitle  = $args['subtitle'] ?? '';
$thumbnail = $args['thumbnail'] ?? '';
?>

<header
	class="ecs-header-banner ecs-section-md
	<?php echo $thumbnail ? 'ecs-header-banner-has-img' : ''; ?>"

	<?php if ( $thumbnail ) : ?>
		style="background-image: url( '<?php echo esc_url( $thumbnail ); ?>' )"
	<?php endif; ?>
>

	<div class="ecs-container">
		<h1><?php echo esc_html( $title ); ?></h1>
		
		<?php if ( $subtitle ) : ?>
			<div class="ecs-page-subtitle"><?php echo wp_kses_post( $subtitle ); ?></div>
		<?php endif; ?>	
		
	</div>
</header>