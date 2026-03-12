<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'customize_register', 'ecs_register_customizer' );

function ecs_register_customizer( $wp_customize ) {
	// Front Page
	$wp_customize->add_panel(
		'ecs_front_page_panel',
		array(
			'title'       => __( 'Front Page', 'elevation-career-services' ),
			'description' => __( 'Add front page content here', 'elevation-career-services' ),
			'priority'    => 30,
			'capability'  => 'edit_theme_options',
		)
	);

	$wp_customize->add_section(
		'ecs_hero_section',
		array(
			'title'       => __( 'Hero', 'elevation-career-services' ),
			'description' => __( 'Add hero section content here', 'elevation-career-services' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'ecs_front_page_panel',
		)
	);

	$wp_customize->add_setting(
		'ecs_hero_heading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_hero_heading',
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'ecs_hero_section',
			'label'       => __( 'Heading', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Welcome to Our Website', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_hero_subheading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_textarea_field',

		)
	);

	$wp_customize->add_control(
		'ecs_hero_subheading',
		array(
			'type'        => 'textarea',
			'priority'    => 11,
			'section'     => 'ecs_hero_section',
			'label'       => __( 'Subheading', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'A short description of what you do...', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_hero_btn_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_hero_btn_text',
		array(
			'type'        => 'text',
			'priority'    => 12,
			'section'     => 'ecs_hero_section',
			'label'       => __( 'Button Text', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Get Started', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_hero_btn_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_hero_btn_link',
		array(
			'type'        => 'text',
			'priority'    => 13,
			'section'     => 'ecs_hero_section',
			'label'       => __( 'Button Link', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. /services', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_hero_img',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',

		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'ecs_hero_img',
			array(
				'priority' => 14,
				'section'  => 'ecs_hero_section',
				'label'    => __( 'Image', 'elevation-career-services' ),
			)
		)
	);

	$wp_customize->add_section(
		'ecs_stats_bar_section',
		array(
			'title'       => __( 'Stats Bar', 'elevation-career-services' ),
			'description' => __( 'Add stats bar content here', 'elevation-career-services' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'ecs_front_page_panel',
		)
	);

	$wp_customize->add_setting(
		'ecs_stat_1_number',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_stat_1_number',
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'ecs_stats_bar_section',
			'label'       => __( 'Stat 1 Number', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. 100+', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_stat_1_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_stat_1_text',
		array(
			'type'        => 'text',
			'priority'    => 11,
			'section'     => 'ecs_stats_bar_section',
			'label'       => __( 'Stat 1 Text', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Happy Clients', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_stat_2_number',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_stat_2_number',
		array(
			'type'        => 'text',
			'priority'    => 12,
			'section'     => 'ecs_stats_bar_section',
			'label'       => __( 'Stat 2 Number', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. 99%', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_stat_2_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_stat_2_text',
		array(
			'type'        => 'text',
			'priority'    => 13,
			'section'     => 'ecs_stats_bar_section',
			'label'       => __( 'Stat 2 Text', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Success Rate', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_stat_3_number',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_stat_3_number',
		array(
			'type'        => 'text',
			'priority'    => 14,
			'section'     => 'ecs_stats_bar_section',
			'label'       => __( 'Stat 3 Number', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. 40+', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_stat_3_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_stat_3_text',
		array(
			'type'        => 'text',
			'priority'    => 15,
			'section'     => 'ecs_stats_bar_section',
			'label'       => __( 'Stat 3 Text', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Issues Solved', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_section(
		'ecs_featured_services_section',
		array(
			'title'       => __( 'Featured Services', 'elevation-career-services' ),
			'description' => __( 'Add featured services section content here', 'elevation-career-services' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'ecs_front_page_panel',
		)
	);

	$wp_customize->add_setting(
		'ecs_featured_services_heading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_featured_services_heading',
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'ecs_featured_services_section',
			'label'       => __( 'Heading', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Featured Services', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_featured_services_subheading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_featured_services_subheading',
		array(
			'type'        => 'text',
			'priority'    => 11,
			'section'     => 'ecs_featured_services_section',
			'label'       => __( 'Subheading', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'A brief tagline for this section...', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_featured_services_link_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_featured_services_link_text',
		array(
			'type'        => 'text',
			'priority'    => 12,
			'section'     => 'ecs_featured_services_section',
			'label'       => __( 'Link Text', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. View More', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_featured_services_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_featured_services_link',
		array(
			'type'        => 'text',
			'priority'    => 13,
			'section'     => 'ecs_featured_services_section',
			'label'       => __( 'Link', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. /services', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_section(
		'ecs_testimonials_section',
		array(
			'title'       => __( 'Testimonials', 'elevation-career-services' ),
			'description' => __( 'Add testimonials section content here', 'elevation-career-services' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'ecs_front_page_panel',
		)
	);

	$wp_customize->add_setting(
		'ecs_testimonials_heading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_testimonials_heading',
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'ecs_testimonials_section',
			'label'       => __( 'Heading', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Testimonials', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_testimonials_subheading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_testimonials_subheading',
		array(
			'type'        => 'text',
			'priority'    => 11,
			'section'     => 'ecs_testimonials_section',
			'label'       => __( 'Subheading', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'A brief tagline for this section...', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_section(
		'ecs_about_snippet_section',
		array(
			'title'       => __( 'About Snippet', 'elevation-career-services' ),
			'description' => __( 'Add about snippet content here', 'elevation-career-services' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'ecs_front_page_panel',
		)
	);

	$wp_customize->add_setting(
		'ecs_about_snippet_heading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_about_snippet_heading',
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'ecs_about_snippet_section',
			'label'       => __( 'Heading', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. About Our Company', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_about_snippet_content',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_textarea_field',

		)
	);

	$wp_customize->add_control(
		'ecs_about_snippet_content',
		array(
			'type'        => 'textarea',
			'priority'    => 11,
			'section'     => 'ecs_about_snippet_section',
			'label'       => __( 'Content', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'Tell your story here...', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_about_snippet_link_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_about_snippet_link_text',
		array(
			'type'        => 'text',
			'priority'    => 12,
			'section'     => 'ecs_about_snippet_section',
			'label'       => __( 'Link Text', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Learn More', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_about_snippet_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_about_snippet_link',
		array(
			'type'        => 'text',
			'priority'    => 13,
			'section'     => 'ecs_about_snippet_section',
			'label'       => __( 'Link', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. /about', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_about_snippet_img',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',

		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'ecs_about_snippet_img',
			array(
				'priority' => 14,
				'section'  => 'ecs_about_snippet_section',
				'label'    => __( 'Image', 'elevation-career-services' ),
			)
		)
	);

	$wp_customize->add_section(
		'ecs_cta_banner_section',
		array(
			'title'       => __( 'CTA Banner', 'elevation-career-services' ),
			'description' => __( 'Add CTA banner content here', 'elevation-career-services' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'ecs_front_page_panel',
		)
	);

	$wp_customize->add_setting(
		'ecs_cta_banner_heading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_cta_banner_heading',
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'ecs_cta_banner_section',
			'label'       => __( 'Heading', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Ready to Get Started?', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_cta_banner_subheading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_cta_banner_subheading',
		array(
			'type'        => 'text',
			'priority'    => 11,
			'section'     => 'ecs_cta_banner_section',
			'label'       => __( 'Subheading', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Get in touch today', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_cta_banner_btn_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_cta_banner_btn_text',
		array(
			'type'        => 'text',
			'priority'    => 12,
			'section'     => 'ecs_cta_banner_section',
			'label'       => __( 'Button Text', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. Contact Us', 'elevation-career-services' ),
			),
		)
	);

	$wp_customize->add_setting(
		'ecs_cta_banner_btn_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'ecs_cta_banner_btn_link',
		array(
			'type'        => 'text',
			'priority'    => 13,
			'section'     => 'ecs_cta_banner_section',
			'label'       => __( 'Button Link', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => __( 'e.g. /contact', 'elevation-career-services' ),
			),
		)
	);

	// Footer
	$wp_customize->add_section(
		'ecs_footer',
		array(
			'title'       => __( 'Footer', 'elevation-career-services' ),
			'description' => __( 'Add footer details here', 'elevation-career-services' ),
			'priority'    => 31,
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
		'ecs_copyright_name',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'ecs_copyright_name',
		array(
			'type'        => 'text',
			'priority'    => 14,
			'section'     => 'ecs_footer',
			'label'       => __( 'Copyright Name', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => 'e.g. Doe Services',
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
			'priority'    => 15,
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
			'priority'    => 16,
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
			'priority'    => 17,
			'section'     => 'ecs_footer',
			'label'       => __( 'LinkedIn URL', 'elevation-career-services' ),
			'input_attrs' => array(
				'placeholder' => 'e.g linkedin.com/in/john-doe',
			),
		)
	);
}
