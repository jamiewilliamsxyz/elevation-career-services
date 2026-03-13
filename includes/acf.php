<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/include_fields', 'ecs_register_acf' );

function ecs_register_acf() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
	}

	// Service Options
	acf_add_local_field_group(
		array(
			'key'                   => 'group_69b009ec76815',
			'title'                 => 'Service Options',
			'fields'                => array(
				array(
					'key'               => 'field_69b009edfd5e4',
					'label'             => 'Service Icon',
					'name'              => 'ecs_service_icon',
					'aria-label'        => '',
					'type'              => 'image',
					'instructions'      => 'Upload a square PNG icon for this service.',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'array',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => 'png',
					'allow_in_bindings' => 0,
					'preview_size'      => 'thumbnail',
				),
				array(
					'key'               => 'field_69b15605089c9',
					'label'             => 'What\'s Included',
					'name'              => 'ecs_whats_included',
					'aria-label'        => '',
					'type'              => 'wysiwyg',
					'instructions'      => 'Write what\'s included in the service as a bullet pointed list',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'allow_in_bindings' => 0,
					'tabs'              => 'all',
					'toolbar'           => 'basic',
					'media_upload'      => 0,
					'delay'             => 0,
				),
				array(
					'key'               => 'field_69b1569d2ea22',
					'label'             => 'How It Works',
					'name'              => 'ecs_how_it_works',
					'aria-label'        => '',
					'type'              => 'wysiwyg',
					'instructions'      => 'Write how the service works or is delivered as a bullet pointed list',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'allow_in_bindings' => 0,
					'tabs'              => 'all',
					'toolbar'           => 'basic',
					'media_upload'      => 0,
					'delay'             => 0,
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'product',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => 'Additional options for service products',
			'show_in_rest'          => 0,
			'display_title'         => 'Service Options',
		)
	);

	// Testimonials
	acf_add_local_field_group(
		array(
			'key'                   => 'group_69b14d0c8451c',
			'title'                 => 'Testimonials',
			'fields'                => array(
				array(
					'key'               => 'field_69b14d0d164ea',
					'label'             => 'Quote',
					'name'              => 'ecs_quote',
					'aria-label'        => '',
					'type'              => 'textarea',
					'instructions'      => 'Enter the testimonial quote',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'maxlength'         => 300,
					'allow_in_bindings' => 0,
					'rows'              => 8,
					'placeholder'       => 'Enter testimonial quote here...',
					'new_lines'         => '',
				),
				array(
					'key'               => 'field_69b14ef7f2306',
					'label'             => 'Name',
					'name'              => 'ecs_name',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => 'Enter the persons name giving the testimonial',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'maxlength'         => 40,
					'allow_in_bindings' => 0,
					'placeholder'       => 'e.g. John Doe',
					'prepend'           => '',
					'append'            => '',
				),
				array(
					'key'               => 'field_69b14f74f2307',
					'label'             => 'Job Title',
					'name'              => 'ecs_job_title',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => 'Enter the persons job title giving the testimonial',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'maxlength'         => 80,
					'allow_in_bindings' => 0,
					'placeholder'       => 'e.g. Website Developer',
					'prepend'           => '',
					'append'            => '',
				),
				array(
					'key'               => 'field_69b14fc68d2db',
					'label'             => 'Profile Photo',
					'name'              => 'ecs_profile_photo',
					'aria-label'        => '',
					'type'              => 'image',
					'instructions'      => 'Enter the persons profile photo giving the testimonial',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'array',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => 'png',
					'allow_in_bindings' => 0,
					'preview_size'      => 'thumbnail',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'ecs_testimonial',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => 'Manages testimonial entries displayed in the testimonials slider on the front page and throughout the site.',
			'show_in_rest'          => 0,
			'display_title'         => 'Testimonials',
		)
	);
}
