<?php

// Enqueue parent and child theme stylesheets
function gaminglitechild_enqueue_styles() {

    // Enqueue parent stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue child stylesheet
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );

}
add_action( 'wp_enqueue_scripts', 'gaminglitechild_enqueue_styles' );

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key' => 'group_644ff2d942a78',
		'title' => 'Video Game Fields',
		'fields' => array(
			array(
				'key' => 'field_6452fb7f13290',
				'label' => 'Cover Art',
				'name' => 'cover_art',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'medium',
			),
			array(
				'key' => 'field_644ff2f29bc67',
				'label' => 'Description',
				'name' => 'description',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => 500,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_644ff2fa9bc68',
				'label' => 'Platform',
				'name' => 'platform',
				'aria-label' => '',
				'type' => 'checkbox',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'Xbox' => 'Xbox',
					'Playstation' => 'Playstation',
					'PC' => 'PC',
					'Switch' => 'Switch',
				),
				'default_value' => array(
				),
				'return_format' => 'value',
				'allow_custom' => 0,
				'layout' => 'vertical',
				'toggle' => 0,
				'save_custom' => 0,
				'custom_choice_button_text' => 'Add new choice',
			),
			array(
				'key' => 'field_644ff3539bc69',
				'label' => 'ESRB Rating',
				'name' => 'esrb_rating',
				'aria-label' => '',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'A' => 'A',
					'M' => 'M',
					'T' => 'T',
					'E10+' => 'E10+',
					'E' => 'E',
					'RP' => 'RP',
				),
				'default_value' => '',
				'return_format' => 'value',
				'allow_null' => 0,
				'other_choice' => 0,
				'layout' => 'vertical',
				'save_other_choice' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'video-game',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	) );
} );

add_action( 'init', function() {
	register_post_type( 'video-game', array(
		'labels' => array(
			'name' => 'Video Games',
			'singular_name' => 'Video Game',
			'menu_name' => 'Video Games',
			'all_items' => 'All Video Games',
			'edit_item' => 'Edit Video Game',
			'view_item' => 'View Video Game',
			'view_items' => 'View Video Games',
			'add_new_item' => 'Add New Video Game',
			'new_item' => 'New Video Game',
			'parent_item_colon' => 'Parent Video Game:',
			'search_items' => 'Search Video Games',
			'not_found' => 'No video games found',
			'not_found_in_trash' => 'No video games found in Trash',
			'archives' => 'Video Game Archives',
			'attributes' => 'Video Game Attributes',
			'insert_into_item' => 'Insert into video game',
			'uploaded_to_this_item' => 'Uploaded to this video game',
			'filter_items_list' => 'Filter video games list',
			'filter_by_date' => 'Filter video games by date',
			'items_list_navigation' => 'Video Games list navigation',
			'items_list' => 'Video Games list',
			'item_published' => 'Video Game published.',
			'item_published_privately' => 'Video Game published privately.',
			'item_reverted_to_draft' => 'Video Game reverted to draft.',
			'item_scheduled' => 'Video Game scheduled.',
			'item_updated' => 'Video Game updated.',
			'item_link' => 'Video Game Link',
			'item_link_description' => 'A link to a video game.',
		),
		'public' => true,
		'show_in_rest' => true,
		'supports' => array(
			0 => 'title',
		),
		'taxonomies' => array(
			0 => 'video-game-test',
		),
		'delete_with_user' => false,
	) );
} );

add_action( 'init', function() {
	register_taxonomy( 'video-game-test', array(
		0 => 'video-game',
	), array(
		'labels' => array(
			'name' => 'Video Games',
			'singular_name' => 'Video Game',
			'menu_name' => 'Video Games',
			'all_items' => 'All Video Games',
			'edit_item' => 'Edit Video Game',
			'view_item' => 'View Video Game',
			'update_item' => 'Update Video Game',
			'add_new_item' => 'Add New Video Game',
			'new_item_name' => 'New Video Game Name',
			'search_items' => 'Search Video Games',
			'popular_items' => 'Popular Video Games',
			'separate_items_with_commas' => 'Separate video games with commas',
			'add_or_remove_items' => 'Add or remove video games',
			'choose_from_most_used' => 'Choose from the most used video games',
			'not_found' => 'No video games found',
			'no_terms' => 'No video games',
			'items_list_navigation' => 'Video Games list navigation',
			'items_list' => 'Video Games list',
			'back_to_items' => '← Go to video games',
			'item_link' => 'Video Game Link',
			'item_link_description' => 'A link to a video game',
		),
		'public' => true,
		'show_in_menu' => true,
		'show_in_rest' => true,
	) );
} );




