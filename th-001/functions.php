<?php
/**
 * th-001 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package th-001
 */

// OFF NEW REDACTOR

add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_block_editor_for_page', '__return_false'); 


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
//	wp_enqueue_style( 'th-001-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
  wp_style_add_data('th-001-style', 'rtl', 'replace');
  wp_enqueue_style('styles.min', get_template_directory_uri() . '/css/styles.min.css');
  wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');
  wp_enqueue_style('starability', get_template_directory_uri() . '/css/starability-all.min.css');
  
  wp_enqueue_style('ba-slider-css', get_template_directory_uri() . '/css/ba-slider.css');
  
  wp_enqueue_style('templayt', get_template_directory_uri() . '/css/templayt.css');
  
  wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css');

  
//  wp_enqueue_style('twd-googlefonts', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

  
  if ( is_rtl() ) {
    wp_enqueue_style('style-rtl', get_template_directory_uri() . '/style-rtl.css', array(), filemtime(get_template_directory() . '/style-rtl.css'), false);
  }

  wp_enqueue_script('jquery');
  
  
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
  wp_enqueue_script('jquery');

  
  wp_enqueue_script('maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array('jquery'), null, true);
  
  wp_enqueue_script('fansy-box', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), null, true);
  wp_enqueue_script('th-001-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), null, true);
//  wp_enqueue_script('slick.min', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, true);

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



/**
 * breadcrumbs
 */
require get_template_directory() . '/breadcrumbs.php';




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


add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

//Template
  
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



//function cc_mime_types($mimes) {
//  $mimes['svg'] = 'image/svg+xml';
//  return $mimes;
//}
//add_filter('upload_mimes', 'cc_mime_types');


// code LINKS
function code_config($atts)
{
	switch ($atts['var']) {
// user__instagram
		case "user__instagram":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			///remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
              return ' <a href="https://www.instagram.com/' .  get_field('__instagram', 'options') . '" target="_blank"><i class="fab fa-instagram"></i> ' .   get_field('__instagram', 'options') . '</a>';
         
              break;  
        
// clinic__instagram
		case "clinic__instagram":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			///remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);

              return ' <a href="https://www.instagram.com/' .  get_field('clin__instagram', 'options') . '" target="_blank"><i class="fab fa-instagram"></i> ' .   get_field('clin__instagram', 'options') . '</a>';
         
              break;
        
// Site URL
		case "url_site":
		   //add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			echo get_site_url();
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// address
		case "time_work":
		   //add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('time_work', 'options');
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// address
		case "address":
		   // add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
            
            $address_phone = get_field('code_address', 'options'); 
 
            if( $address_phone ): 
                  $address_phone_url = $address_phone['url'];
                  $address_phone_title = $address_phone['title'];
                  $address_phone_target = $address_phone['target'] ? $address_phone['target'] : '_self'; 

               return ' <a href="' .  esc_url( $address_phone_url ) . '"   target="' . esc_attr( $address_phone_target ) . '">' .   esc_html( $address_phone_title ) . '</a>';
            endif; 
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// email
		case "email":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('code_email', 'options');
			///remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
		case "email_link":
// email_link
			//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			$registration_page = get_field('registration_page', 'options');
			if (!empty($atts['title'])) {
				$email_tittle = __($atts['title'], 'code');
				return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . $email_tittle . '</a>';
			} else {
				return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . get_field('code_email', 'options') . '</a>';
			}
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;

// tel
		case "tel":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);

			$code_phone = get_field('code_phone', 'options');
			$title_phone = get_field('title_phone', 'options');
			if (!empty($atts['title'])) {
				$phone_tittle = __($atts['title'], 'code');
				return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $phone_tittle . '</a>';
			} else {
				return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $title_phone . '</a>';
			}
			//remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// Phone set
		case "phone_link":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);

            $set_phone = get_field('set_phone', 'options'); 

            if( $set_phone ): 
//                  $set_phone_url = $set_phone['url'];
//                  $set_phone_title = $set_phone['title'];
//                  $set_phone_target = $set_phone['target'] ? $set_phone_link['target'] : '_self'; 

               return ' <a href="tel:' .  preg_replace('![^0-9+]+!', '', $set_phone)  . '">' .    $set_phone  . '</a>';
            endif; 
           
			// remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
		case "next_phone_link":
		//add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);

            $set_phone = get_field('next_set_phone', 'options'); 
 
            if( $set_phone ): 
//                  $set_phone_url = $set_phone['url'];
//                  $set_phone_title = $set_phone['title'];
//                  $set_phone_target = $set_phone['target'] ? $set_phone_link['target'] : '_self'; 

              return ' <a href="tel:' .  preg_replace('![^0-9+]+!', '', $set_phone)  . '">' .    $set_phone  . '</a>';
            endif; 
           
			// remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
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
//add_filter('acf/format_value/type=link', 'do_shortcode');
// END DO_SHORTCODE


// Readmore
function readmore_shortcode($attr, $content = null){
	return '<div class="readmore--content article' . $attr['class'] . '">'.do_shortcode($content).'</div>
    <a class="readmore--btn">' . __('Read More', 'code'). '</a>
    <a class="readmore--btn none">' . __('Read Less', 'code') . '</a>';
}
add_shortcode('readmore', 'readmore_shortcode');
// END Readmore











function blog()
{
	register_post_type('blog', array(
		'labels' => array(
			'name'				=> __('Блог', 'blog-admin'),
			'singular_name'   	=> __('Блог', 'blog-admin'),
			'add_new'		 	=> __('Add post blog', 'blog-admin'),
			'add_new_item'		=> __('Add post blog', 'blog-admin'),
			'edit'				=> __('Edit post blog', 'blog-admin'),
			'edit_item'	   		=> __('Edit post blog', 'blog-admin'),
			'new_item'			=> __('New post blog', 'blog-admin'),
			'all_items'	   		=> __('All post blog', 'blog-admin'),
			'view'				=> __('View post blog', 'blog-admin'),
			'view_item'	   		=> __('View post blog', 'blog-admin'),
			'search_items'		=> __('Search post blog', 'blog-admin'),
			'not_found'	   		=> __('blog not found', 'blog-admin'),
		),
      

		'public' => true, // show in admin panel?
		'menu_position' => 29,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
//		'taxonomies' => array('category_blog'),
		'has_archive' => true,
		'capability_type' => 'page',
		'menu_icon'   => 'dashicons-admin-page',
//		'rewrite' => array( ('slug' => 'blog', 'with_front' => false ),   
	));
}
add_action('init', 'blog');






//function sh_parse_request_tricksy( $query ) {
//
//    // Only loop the main query
//    if ( ! $query->is_main_query() ) {
//        return;
//    }
//
//   //  Only loop our very specific rewrite rule match
//    if ( 2 != count( $query->query )
//        || ! isset( $query->query['page'] ) );
//        return;
//  
//    if ( 3 != count( $query->query )
//        || ! isset( $query->query['post'] ) );
//        return;
//
//    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
//    if ( ! empty( $query->query['name'] ) ) {
//        $query->set( 'post_type', array( '/' ) );
//    }
//}
//add_action( 'pre_get_posts', 'sh_parse_request_tricksy' );




add_image_size( 'postbefor', 625, 469, true  );

add_image_size( 'blog', 390, 248, true  );



//
//add_filter('template_include', 'sermon_template_include');
//function sermon_template_include($template) {
//    if(get_query_var('post_type') == 'doctors') {
//        if ( is_archive() || is_search() ) :
//           if(file_exists(TEMPLATEDIR . '/archive-doctors.php'))
//              return TEMPLATEDIR . '/archive-doctors.php';
//           return dirname(__FILE__) . '/archive-doctors.php';
//        else :
//           if(file_exists(TEMPLATEDIR . '/single-doctors.php'))
//              return TEMPLATEDIR . '/single-doctors.php';
//           return dirname(__FILE__) . '/single-doctors.php';
//        endif;
//    }
//    return $template;
//}



//function my_page_template_redirect(){
//	if( is_page('service') && ! is_user_logged_in() ){
//		wp_redirect( home_url( '/signup/' ) );
//		exit();
//	}
//}
//add_action( 'template_redirect', 'my_page_template_redirect' );




//function include_template_files($template_file) {
//  global $post;
//  $plugindir = dirname( __FILE__ );
//  if ('doctors' == get_post_type()){
//    $templatefilename = 'mytemplate.php';
//    	return get_stylesheet_directory() . '/doctors.php';
//    return $template;
//  }
//  return $template_file;
//}
//add_filter( 'template_include', 'include_template_files' );


//
//add_filter( 'template_include', 'my_template' );
//function my_template( $template ) {
//	# шаблон для страниц для вывод одиночного события произвольного типа "events"
//	// или is_post_type_archive('events'), если бы сделал 'has_archive' => 'events'
//	if ( is_page( 'events' ) ) {
//		return get_stylesheet_directory() . '/calendar/events.php';
//	}
//
//	# шаблон для страниц для выводо одиночного события произвольного типа "events"
//	if ( is_singular( 'events' ) ) {
//		return get_stylesheet_directory() . '/calendar/single-events.php';
//	}
//
//	# шаблон для страниц для выводо таксономий "Города"
//	if ( is_tax( 'doctors' ) ) {
//		return get_stylesheet_directory() . '/single-doctors.php';
//	}
//
//	# шаблон для страниц для выводо таксономий "Календари"
//	if ( is_tax( 'calendars' ) ) {
//		return get_stylesheet_directory() . '/calendar/taxonomy/calendars.php';
//	}
//
//	return $template;
//}


function pages_template($pages){

	if (is_page('demo')) {
		return get_stylesheet_directory() . '/demo.php';
	}

//	if ( is_singular( 'doctors' ) ) {
////		return get_stylesheet_directory() . '/calendar/single-doctors.php';
//		return get_stylesheet_directory() . '/single-doctors.php';
//	}
  
  	return $pages;
}
add_filter('template_include', 'pages_template');

