<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<nav>
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

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'ecs-navbar-menu',
					'menu_class'      => 'ecs-navbar-menu',
					'container_class' => 'ecs-navbar-menu-container',
					'container_id'    => 'ecs-navbar-menu-container',
					'fallback_cb'     => false,
				)
			);
			?>
		</nav>
	</header>


