<?php
/**
 * th-001 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package th-001
 */





if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'th_001_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function th_001_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on th-001, use a find and replace
		 * to change 'th-001' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'th-001', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'th-001' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'th_001_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'th_001_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function th_001_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'th_001_content_width', 640 );
}
add_action( 'after_setup_theme', 'th_001_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function th_001_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'th-001' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'th-001' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'th_001_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function th_001_scripts() {
	wp_enqueue_style( 'th-001-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'th-001-style', 'rtl', 'replace' );
  
    if ( is_rtl() ) {
      wp_enqueue_style( 'style-rtl', get_template_directory_uri() . '/style-rtl.css', array(), filemtime(get_template_directory() . '/style-rtl.css'), false);
    }
  

	wp_enqueue_script( 'th-001-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'th_001_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}








wp_enqueue_script('jquery');




// OFF NEW REDACTOR

add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_block_editor_for_page', '__return_false'); 



/* CSS version, example <!--Link--><?= css();?>  */
function css()
{
	$cssbegin = '<link rel="stylesheet" href="';
	$cssend = '">';
//	if (current_user_can('administrator')) $csspath = '/css/';
	$csspath = '/css/'; //$csspath='/css/';
	$name = substr(basename(get_page_template()), 0, -4) . '.css';
	$filename = get_stylesheet_directory() . $csspath . $name;
	if (file_exists($filename)) return $cssbegin . get_template_directory_uri() . $csspath . $name . '?v=' . filemtime($filename) . $cssend;
	else {   //create new file if no exists
		$fp = fopen($filename, "w");
		fwrite($fp, 'This is new file, add your styles @media(min-width:992px){} @media(max-width:991px) and (min-width:601px){} @media(max-width:600px){}');
		fclose($fp);
		return $cssbegin . get_template_directory_uri() . $csspath . $name . $cssend;
	}
}

/* CSS universal version, example <!--Link--><?= cssuni('name.css');?> */
function cssuni($name)
{
	$cssbegin = '<link rel="stylesheet" href="';
	$cssend = '">';
//	if (current_user_can('administrator')) $csspath = '/css/';
	$csspath = '/css/'; //$csspath='/css/';
	$filename = get_stylesheet_directory() . $csspath . $name;
	if (file_exists($filename)) return $cssbegin . get_template_directory_uri() . $csspath . $name . '?v=' . filemtime($filename) . $cssend;
	return $cssbegin . get_template_directory_uri() . $csspath . $name . $cssend;
}


/* Script version, example <!--Script--><?= js();?>  */
function js()
{
	$jsbegin = '<script type="text/javascript" src="';
	$jsend = '"></script>';
//	if (current_user_can('administrator')) $jspath = '/js/';
	$jspath = '/js/'; //$csspath='/js/';
	$name = substr(basename(get_page_template()), 0, -4) . '.js';
	$filename = get_stylesheet_directory() . $jspath . $name;
	if (file_exists($filename)) return $jsbegin . get_template_directory_uri() . $jspath . $name . '?v=' . filemtime($filename) . $jsend;
	else {   //create new file if no exists
		$fp = fopen($filename, "w");
		fwrite($fp, '(function() { YOU Script })();');
		fclose($fp);
		return $jsbegin . get_template_directory_uri() . $jspath . $name . $jsend;
	}
}


/* Script universal version, example <!--Script--><?= jsuni('name.js');?> */
function jsuni($name)
{
	$jsbegin = '<script type="text/javascript" src="';
	$jsend = '"></script>';
	if (current_user_can('administrator')) $jspath = '/js/';
	else $jspath = '/js/'; //$jspath='/js/';
	$filename = get_stylesheet_directory() . $jspath . $name;
	if (file_exists($filename)) return $jsbegin . get_template_directory_uri() . $jspath . $name . '?v=' . filemtime($filename) . $jsend;
	return $jsbegin . get_template_directory_uri() . $jspath . $name . $jsend;
}





/* plz no comment */
if (function_exists('acf_add_options_page')) {

acf_add_options_page( array(
		'page_title'    => __('Theme settings'),
		'menu_title'    => __('Theme settings'),
		'menu_slug'     => 'general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

  }


// Setting a Post Thumbnail
add_theme_support('post-thumbnails');
// END Setting a Post Thumbnail

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(
    array(
        'menu-1' => __( 'Primary'),
        'footer' => __( 'Footer Menu'),
        'social' => __( 'Social Links Menu'),
    )
);





/**
 * Advanced Custom Fields Options function
 * Always fetch an Options field value from the default language
 */

//function cl_acf_set_language() {
//return acf_get_setting('default_language');
//}
//
//
//function get_global_option($name)
//{
//	add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
//	$option = get_field($name, 'option');
//	remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
//	return $option;
//}


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// code LINKS
function code_config($atts)
{
	switch ($atts['var']) {
// address
		case "time_work":
		    add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('time_work', 'options');
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// address
		case "address":
		    add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('code_address', 'options');
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// email
		case "email":
		add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('code_email', 'options');
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
		case "email_link":
// email_link
			add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			$registration_page = get_field('registration_page', 'options');
			if (!empty($atts['title'])) {
				$email_tittle = __($atts['title'], 'code');
				return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . $email_tittle . '</a>';
			} else {
				return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . get_field('code_email', 'options') . '</a>';
			}
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;

// tel
		case "tel":
		add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			$code_phone = get_field('code_phone', 'options');
			$title_phone = get_field('title_phone', 'options');
			if (!empty($atts['title'])) {
				$phone_tittle = __($atts['title'], 'code');
				return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $phone_tittle . '</a>';
			} else {
				return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $title_phone . '</a>';
			}
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;

	}
}
  add_shortcode('code', 'code_config');
// END code LINKS

// DO_SHORTCODE
add_filter('wpcf7_form_elements', 'do_shortcode');
add_filter('acf/format_value/type=wysiwyg', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');
add_filter('acf/format_value/type=email', 'do_shortcode');
add_filter('acf/format_value/type=url', 'do_shortcode');
add_filter('acf/format_value/type=number', 'do_shortcode');
add_filter('acf/format_value/type=image', 'do_shortcode');
add_filter('acf/format_value/type=link', 'do_shortcode');
// END DO_SHORTCODE


// Readmore
function readmore_shortcode($attr, $content = null){
	return '<div class="readmore--content article' . $attr['class'] . '">'.do_shortcode($content).'</div>
    <a class="readmore--btn">' . __('Read More', 'code'). '</a>
    <a class="readmore--btn none">' . __('Read Less', 'code') . '</a>';
}
add_shortcode('readmore', 'readmore_shortcode');
// END Readmore



//// Отключаем сам REST API
//add_filter('rest_enabled', '__return_false');
//// Отключаем фильтры REST API
//remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
//remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
//remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
//remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
//remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
//// Отключаем события REST API
//remove_action( 'init', 'rest_api_init' );
//remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
//remove_action( 'parse_request', 'rest_api_loaded' );
//// Отключаем Embeds связанные с REST API
//remove_action( 'rest_api_init', 'wp_oembed_register_route');
//remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );


//remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
//remove_action( 'wp_head', '_wp_render_title_tag', 1 );


//add_action( 'init', function() {
//    remove_post_type_support( 'post', 'editor' );
//    remove_post_type_support( 'page', 'editor' );
//}, 99);
