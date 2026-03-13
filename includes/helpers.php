<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ecs_has_posts( $post_type ) {
	return get_posts(
		array(
			'post_type'      => $post_type,
			'posts_per_page' => 1,
			'fields'         => 'ids',
		)
	);
}
