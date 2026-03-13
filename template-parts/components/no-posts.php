<div class="ecs-no-posts">
	<p class="ecs-section-subtitle">
		<?php
		if ( is_woocommerce() ) {
			esc_html_e( 'No services found', 'elevation-career-services' );
		} else {
			esc_html_e( 'No posts found', 'elevation-career-services' );
		}
		?>
	</p>
</div>