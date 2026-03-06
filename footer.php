<?php $template_dir = get_template_directory_uri(); ?>

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
				<p class="ecs-text-sm"><?php esc_html_e( 'Helping you land your next role with confidence', 'elevation-career-services' ); ?>.</p>
				<div class="ecs-footer-social-icons">
					<a href="https://www.facebook.com" rel="noopener" target="_blank">
						<img src="<?php echo $template_dir; ?>/assets/icons/facebook.svg" alt="Facebook"/>
					</a>
					<a href="https://www.instagram.com" rel="noopener" target="_blank">
						<img src="<?php echo $template_dir; ?>/assets/icons/instagram.svg" alt="Instagram" />
					</a>
					<a href="https://www.linkedin.com" rel="noopener" target="_blank">
						<img src="<?php echo $template_dir; ?>/assets/icons/linkedin.svg" alt="LinkedIn" />
					</a>
				</div>
			</div>

			<div class="ecs-footer-divider"></div>

			<div class="ecs-footer-section">
				<p class="ecs-footer-title"><?php esc_html_e( 'Get In Touch', 'elevation-career-services' ); ?></p>
				<ul class="ecs-footer-details">
					<li class="ecs-text-sm">contact@elevationcareerservices.co.uk</li>
					<li class="ecs-text-sm">07123 456789</li>
					<li class="ecs-text-sm">London, UK</li>
				</ul>
			</div>
		</div>
		<div class="ecs-footer-divider ecs-footer-divider-desktop"></div>

		<div class="ecs-footer-section ecs-footer-bottom-row-desktop">
			<div class="ecs-footer-links">
				<a href="<?php echo esc_url( home_url( '/terms' ) ); ?>">
					<?php esc_html_e( 'Terms & Conditions', 'elevation-career-services' ); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">
					<?php esc_html_e( 'Privacy Policy', 'elevation-career-services' ); ?>
				</a>
			</div>
			<p class="ecs-text-sm">@ 2026 Elevation Career Services</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>