<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="ecs-header" class="ecs-header ecs-section-sm">
		<nav class="ecs-container">
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

			<div id="ecs-navbar-container" class="ecs-navbar-container">
				<div class="ecs-navbar-divider"></div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'ecs-navbar-menu',
						'menu_class'     => 'ecs-navbar-menu',
						'container_id'   => 'ecs-navbar-menu-container',
						'fallback_cb'    => false,
						'container'      => false,
					)
				);
				?>
				<div class="ecs-navbar-divider"></div>
				<a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="ecs-navbar-btn ecs-navbar-btn-mobile"><?php esc_html_e( 'View Services', 'elevation-career-services' ); ?></a>
			</div>

			<div class="ecs-navbar-right-row-desktop">
				<a href="<?php echo wc_get_cart_url(); ?>" class="ecs-navbar-basket">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/basket.svg" alt="Basket" />
					<span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
				</a>
				<a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="ecs-navbar-btn ecs-navbar-btn-desktop"><?php esc_html_e( 'View Services', 'elevation-career-services' ); ?></a>
			</div>
			
			<div class="ecs-navbar-right-row-mobile">
				<a href="<?php echo wc_get_cart_url(); ?>" class="ecs-navbar-basket">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/basket.svg" alt="Basket" />
					<span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
				</a>

				<button id="ecs-navbar-toggle" class="ecs-navbar-toggle"  aria-label="Open menu" aria-expanded="false">
					<?php echo file_get_contents( get_template_directory() . '/assets/icons/ecs-x-icon.svg' ); ?>
					<?php echo file_get_contents( get_template_directory() . '/assets/icons/ecs-menu-icon.svg' ); ?>
				</button>
			</div>

		</nav>
	</header>
