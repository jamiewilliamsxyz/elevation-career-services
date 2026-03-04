<header
	class="ecs-header-banner ecs-section-md
	<?php echo has_post_thumbnail() ? 'ecs-header-banner-has-img' : ''; ?>"

	<?php if ( has_post_thumbnail() ) : ?>
		style="background-image: url( ' <?php the_post_thumbnail_url( 'full' ); ?>' )"
	<?php endif; ?>
>
	

	<div class="ecs-container">
		<h1><?php the_title(); ?></h1>
	</div>
</header>