<?php
$title     = $args['title'] ?? '';
$subtitle  = $args['subtitle'] ?? '';
$thumbnail = $args['thumbnail'] ?? '';
?>

<header
	class="ecs-header-banner <?php echo $thumbnail ? 'ecs-header-banner-has-img' : ''; ?>">
	
	<?php if ( $thumbnail ) : ?>
		<img 
			src="<?php echo esc_url( $thumbnail ); ?>" 
			alt=""
			class="ecs-header-banner-img"
			loading="eager"
			fetchpriority="high"
		>
	<?php endif; ?>

	<div class="ecs-container ecs-fade-in">
		<h1><?php echo esc_html( $title ); ?></h1>
		
		<?php if ( $subtitle ) : ?>
			<div class="ecs-page-subtitle"><?php echo wp_kses_post( $subtitle ); ?></div>
		<?php endif; ?>	
	</div>
</header>