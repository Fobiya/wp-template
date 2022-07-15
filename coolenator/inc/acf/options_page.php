<?php
function mil_acf_option_init() {

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' => __('Theme General Settings'),
			'menu_title' => __('Theme Settings'),
			'menu_slug' => 'theme-settings',
			'capability' => 'edit_posts',
			'redirect' => false
		));
	}
}

add_action('acf/init', 'mil_acf_option_init');


function my_register_main_intro() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'front_intro',
			'title'             => __('Front Intro'),
			'render_template'   => 'blocks/front_intro.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_main_intro');


function my_register_row_collection() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'row_collection',
			'title'             => __('Collections'),
			'render_template'   => 'blocks/сollections.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_row_collection');


function my_register_row_plus() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'row_plus',
			'title'             => __('Plus'),
			'render_template'   => 'blocks/plus.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_row_plus');

function my_register_work() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'work',
			'title'             => __('Work'),
			'render_template'   => 'blocks/work.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_work');


function my_register_bestselling() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'best_selling',
			'title'             => __('Best Selling'),
			'render_template'   => 'blocks/best_selling.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_bestselling');

function my_register_video_section() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'video_section',
			'title'             => __('Video section'),
			'render_template'   => 'blocks/video_section.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_video_section');

function my_register_reviews() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'reviews',
			'title'             => __('Reviews'),
			'render_template'   => 'blocks/reviews.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_reviews');

function my_register_preview() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'preview',
			'title'             => __('Preview'),
			'render_template'   => 'blocks/preview.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_preview');

function my_register_instagram() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'instagram',
			'title'             => __('Instagram'),
			'render_template'   => 'blocks/instagram.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_instagram');

function my_register_join() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'join',
			'title'             => __('Join'),
			'render_template'   => 'blocks/join.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_join');



function my_register_intro_page() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'intro_page',
			'title'             => __('Intro Page'),
			'render_template'   => 'blocks/intro_page.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_intro_page');

function my_register_b2b_form () {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'form',
			'title'             => __('Form'),
			'render_template'   => 'blocks/b2b_form.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));
	}
}

add_action('acf/init', 'my_register_b2b_form');

