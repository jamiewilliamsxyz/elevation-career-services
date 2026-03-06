<?php

add_action( 'customize_register', 'ecs_register_customizer' );

function ecs_register_customizer( $wp_customize ) {
	$wp_customize->add_section(
		'ecs_footer',
		array(
			'title'       => __( 'Footer', 'elevation-career-services' ),
			'description' => __( 'Add footer details here', 'elevation-career-services' ),
			'priority'    => 30,
			'capability'  => 'edit_theme_options',
		)
	);

	$wp_customize->add_setting(
		'ecs_company_tagline',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_textarea_field',

		)
	);

	$wp_customize->add_control(
		'ecs_company_tagline',
		array(
			'type'        => 'textarea',
			'priority'    => 10,
			'section'     => 'ecs_footer',
			'label'       => __( 'Company Tagline', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'Enter tagline here...', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_email',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_email',

		)
	);

	$wp_customize->add_control(
		'ecs_email',
		array(
			'type'        => 'text',
			'priority'    => 11,
			'section'     => 'ecs_footer',
			'label'       => __( 'Email Address', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => 'e.g. doe-services@email.com',
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_phone',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_phone',
		array(
			'type'        => 'text',
			'priority'    => 12,
			'section'     => 'ecs_footer',
			'label'       => __( 'Phone Number', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => 'e.g 07123 456789',
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_address',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_address',
		array(
			'type'        => 'text',
			'priority'    => 13,
			'section'     => 'ecs_footer',
			'label'       => __( 'Address', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => 'e.g. London, UK',
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_facebook',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',

		)
	);

	$wp_customize->add_control(
		'ecs_facebook',
		array(
			'type'        => 'url',
			'priority'    => 14,
			'section'     => 'ecs_footer',
			'label'       => __( 'Facebook URL', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => 'e.g facebook.com/profile.php?id=1',
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_instagram',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',

		)
	);

	$wp_customize->add_control(
		'ecs_instagram',
		array(
			'type'        => 'url',
			'priority'    => 15,
			'section'     => 'ecs_footer',
			'label'       => __( 'Instagram URL', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => 'e.g instagram.com/john-doe',
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_linkedin',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',

		)
	);

	$wp_customize->add_control(
		'ecs_linkedin',
		array(
			'type'        => 'url',
			'priority'    => 16,
			'section'     => 'ecs_footer',
			'label'       => __( 'LinkedIn URL', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => 'e.g linkedin.com/in/john-doe',
			),
		)
	);
}
