<?php
global $wp_query;

the_posts_pagination(
	array(
		'mid_size'  => 2,
		'prev_text' => '<span class="ecs-pagination-prev">&#8592;</span> ' . esc_html__( 'Previous', 'elevation-career-service' ),
		'next_text' => esc_html__( 'Next', 'elevation-career-services' ) . ' <span class="ecs-pagination-next">&#8594;</span>',
		'total'     => $wp_query->max_num_pages,
	)
);
