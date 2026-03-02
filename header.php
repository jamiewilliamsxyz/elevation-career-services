<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav>
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


