<?php
/**
 * Template Name: Contact page
 */

get_header();

$img = get_theme_mod( 'ecs_contact_page_img' );
?>

<main>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'ecs-page-contact' ); ?>>
				<?php
				get_template_part(
					'template-parts/components/header-banner',
					null,
					array(
						'title'     => get_the_title(),
						'thumbnail' => get_the_post_thumbnail_url( get_the_ID() ),
					)
				);
				?>
				
				<section class="ecs-section-md">
					<div class="ecs-container">
						<?php if ( $img ) : ?>
							<img alt="<?php esc_attr_e( 'Contact page image', 'elevation-career-services' ); ?>" src="<?php echo esc_url( $img ); ?>" />
						<?php endif; ?>

						<div><?php the_content(); ?></div>
					</div>
				</section>
			</article>
			<?php
		endwhile;
	endif;
	?>
</main>

<?php get_footer(); ?>
