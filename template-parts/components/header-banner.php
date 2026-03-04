<?php
$title     = $args['title'] ?? '';
$subtitle  = $args['subtitle'] ?? '';
$thumbnail = $args['thumbnail'] ?? '';
?>

<header
	class="ecs-header-banner ecs-section-md
	<?php echo $thumbnail ? 'ecs-header-banner-has-img' : ''; ?>"

	<?php if ( $thumbnail ) : ?>
		style="background-image: url( ' <?php echo esc_url( $thumbnail ); ?>' )"
	<?php endif; ?>
>

	<div class="ecs-container">
		<h1><?php echo esc_html( $title ); ?></h1>
		
		<?php if ( $subtitle ) : ?>
			<p><?php echo esc_html( $subtitle ); ?></p>
		<?php endif; ?>	
		
	</div>
</header>