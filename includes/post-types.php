<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'ecs_register_post_types' );

function ecs_register_post_types() {
	// Testimonial
	register_post_type(
		'ecs_testimonial',
		array(
			'labels'              => array(
				'name'                     => 'Testimonials',
				'singular_name'            => 'Testimonial',
				'menu_name'                => 'Testimonials',
				'all_items'                => 'All Testimonials',
				'edit_item'                => 'Edit Testimonial',
				'view_item'                => 'View Testimonial',
				'view_items'               => 'View Testimonials',
				'add_new_item'             => 'Add New Testimonial',
				'add_new'                  => 'Add New Testimonial',
				'new_item'                 => 'New Testimonial',
				'parent_item_colon'        => 'Parent Testimonial:',
				'search_items'             => 'Search Testimonials',
				'not_found'                => 'No testimonials found',
				'not_found_in_trash'       => 'No testimonials found in the bin',
				'archives'                 => 'Testimonial Archives',
				'attributes'               => 'Testimonial Attributes',
				'insert_into_item'         => 'Insert into testimonial',
				'uploaded_to_this_item'    => 'Uploaded to this testimonial',
				'filter_items_list'        => 'Filter testimonials list',
				'filter_by_date'           => 'Filter testimonials by date',
				'items_list_navigation'    => 'Testimonials list navigation',
				'items_list'               => 'Testimonials list',
				'item_published'           => 'Testimonial published.',
				'item_published_privately' => 'Testimonial published privately.',
				'item_reverted_to_draft'   => 'Testimonial reverted to draft.',
				'item_scheduled'           => 'Testimonial scheduled.',
				'item_updated'             => 'Testimonial updated.',
				'item_link'                => 'Testimonial Link',
				'item_link_description'    => 'A link to a testimonial.',
			),
			'description'         => 'Client success stories and reviews from Elevation Career Services',
			'public'              => true,
			'exclude_from_search' => true,
			'publicly_queryable'  => false,
			'show_in_nav_menus'   => false,
			'show_in_rest'        => true,
			'menu_icon'           => 'dashicons-testimonial',
			'supports'            => array(
				0 => 'title',
			),
			'rewrite'             => false,
			'delete_with_user'    => false,
		)
	);

	// Resources
	register_post_type(
		'ecs_resource',
		array(
			'labels'           => array(
				'name'                     => 'Resources',
				'singular_name'            => 'Resource',
				'menu_name'                => 'Resources',
				'all_items'                => 'All Resources',
				'edit_item'                => 'Edit Resource',
				'view_item'                => 'View Resource',
				'view_items'               => 'View Resources',
				'add_new_item'             => 'Add New Resource',
				'add_new'                  => 'Add New Resource',
				'new_item'                 => 'New Resource',
				'parent_item_colon'        => 'Parent Resource:',
				'search_items'             => 'Search Resources',
				'not_found'                => 'No resources found',
				'not_found_in_trash'       => 'No resources found in the bin',
				'archives'                 => 'Resource Archives',
				'attributes'               => 'Resource Attributes',
				'insert_into_item'         => 'Insert into resource',
				'uploaded_to_this_item'    => 'Uploaded to this resource',
				'filter_items_list'        => 'Filter resources list',
				'filter_by_date'           => 'Filter resources by date',
				'items_list_navigation'    => 'Resources list navigation',
				'items_list'               => 'Resources list',
				'item_published'           => 'Resource published.',
				'item_published_privately' => 'Resource published privately.',
				'item_reverted_to_draft'   => 'Resource reverted to draft.',
				'item_scheduled'           => 'Resource scheduled.',
				'item_updated'             => 'Resource updated.',
				'item_link'                => 'Resource Link',
				'item_link_description'    => 'A link to a resource.',
			),
			'description'      => 'Free guides, templates and advice to help you take the next step in your career.',
			'public'           => true,
			'show_in_rest'     => true,
			'menu_icon'        => 'dashicons-portfolio',
			'supports'         => array(
				0 => 'title',
				1 => 'editor',
				2 => 'excerpt',
				3 => 'thumbnail',
				4 => 'custom-fields',
			),
			'has_archive'      => 'resources',
			'rewrite'          => array(
				'slug'       => 'resources',
				'with_front' => false,
				'feeds'      => false,
			),
			'query_var'        => 'resources',
			'delete_with_user' => false,
		)
	);
}
