<?php get_header(); ?>

<main>
	<section class="ecs-section-md">
		<div class="ecs-container">
			<?php
			if ( have_posts() ) :
				?>
				<div class="ecs-post-cards-container">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content/content' );
					endwhile;
					?>
				</div>
				<?php
			else :
				get_template_part( 'template-parts/components/no-posts' );
			endif;
			?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
