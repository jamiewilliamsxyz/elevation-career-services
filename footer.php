<?php
$template_dir = get_template_directory_uri();
$tagline      = get_theme_mod( 'ecs_company_tagline', get_bloginfo( 'description' ) );
$copyright    = get_theme_mod( 'ecs_copyright_name', get_bloginfo( 'name' ) );
$email        = get_theme_mod( 'ecs_email' );
$phone        = get_theme_mod( 'ecs_phone' );
$address      = get_theme_mod( 'ecs_address' );
$facebook     = get_theme_mod( 'ecs_facebook' );
$instagram    = get_theme_mod( 'ecs_instagram' );
$linkedin     = get_theme_mod( 'ecs_linkedin' );
?>

<footer class="ecs-footer ecs-section-sm">
	<div class="ecs-container">
		<div class="ecs-footer-desktop-row">
			<div class="ecs-footer-section">
				<div class="ecs-footer-logo-container">
					<?php
					if ( has_custom_logo() ) :
						the_custom_logo();
					else :
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php bloginfo( 'name' ); ?>
						</a>
						<?php
					endif;
					?>
				</div>
				<p class="ecs-text-sm">
					<?php echo nl2br( esc_html( $tagline ) ); ?>
				</p>

				<?php
				if ( $facebook || $instagram || $linkedin ) :
					?>
				<div class="ecs-footer-social-icons">
					<?php if ( $facebook ) : ?>
						<a href="<?php echo esc_url( $facebook ); ?>" rel="noopener" target="_blank">
							<img src="<?php echo esc_url( $template_dir ); ?>/assets/icons/facebook.svg" alt="Facebook" aria-label="Facebook" />
						</a>
					<?php endif; ?>

					<?php if ( $instagram ) : ?>
						<a href="<?php echo esc_url( $instagram ); ?>" rel="noopener" target="_blank">
							<img src="<?php echo esc_url( $template_dir ); ?>/assets/icons/instagram.svg" alt="Instagram" aria-label="Instagram" />
						</a>
					<?php endif; ?>

					<?php if ( $linkedin ) : ?>
						<a href="<?php echo esc_url( $linkedin ); ?>" rel="noopener" target="_blank">
							<img src="<?php echo esc_url( $template_dir ); ?>/assets/icons/linkedin.svg" alt="LinkedIn" aria-label="LinkedIn" />
						</a>
					<?php endif; ?>
				</div>
					<?php
				endif;
				?>
			</div>

			<div class="ecs-footer-divider"></div>
			
			<?php
			if ( $email || $phone || $address ) :
				$contact_details = array_filter( array( $email, $phone, $address ) );
				?>
				<div class="ecs-footer-section">
					<p class="ecs-footer-title">
						<?php esc_html_e( 'Get In Touch', 'elevation-career-services' ); ?>
					</p>
					
					<ul class="ecs-footer-details">
						<?php
						foreach ( $contact_details as $detail ) :
							echo '<li class="ecs-text-sm">' . esc_html( $detail ) . '</li>';
						endforeach;
						?>
					</ul>
				</div>
				<?php
			endif;
			?>
		</div>

		<div class="ecs-footer-divider ecs-footer-divider-desktop"></div>

		<div class="ecs-footer-section ecs-footer-bottom-row-desktop">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'ecs-footer-menu',
					'menu_class'     => 'ecs-footer-links',
					'fallback_cb'    => false,
					'container'      => false,
				)
			);
			?>
			<p class="ecs-text-sm">
				&copy; <?php echo gmdate( 'Y' ) . ' ' . esc_html( $copyright ); ?>
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>