<?php
$stats = array(
	'stat_1' => array(
		'num'  => get_theme_mod( 'ecs_stat_1_number' ),
		'text' => get_theme_mod( 'ecs_stat_1_text' ),
	),
	'stat_2' => array(
		'num'  => get_theme_mod( 'ecs_stat_2_number' ),
		'text' => get_theme_mod( 'ecs_stat_2_text' ),
	),
	'stat_3' => array(
		'num'  => get_theme_mod( 'ecs_stat_3_number' ),
		'text' => get_theme_mod( 'ecs_stat_3_text' ),
	),
);

// Render stats bar only if at least one stat has both a number and text set
$has_stats = false;
foreach ( $stats as $stat ) {
	if ( $stat['num'] && $stat['text'] ) {
		$has_stats = true;
		break;
	}
}

if ( $has_stats ) :
	?>
	<section class="ecs-section-sm ecs-stats-bar">
		<div class="ecs-container ecs-fade-in">
			<?php
			foreach ( $stats as $stat ) :
				if ( $stat['num'] && $stat['text'] ) :
					?>
					<div class="ecs-stat">
						<p class="ecs-stat-number"><?php echo esc_html( $stat['num'] ); ?></p>
						<p class="ecs-stat-text"><?php echo esc_html( $stat['text'] ); ?></p>
					</div>
					<?php
				endif;
			endforeach;
			?>
		</div>
	</section>
	<?php
endif;
?>