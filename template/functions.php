<?php

wp_enqueue_script('jquery');



//add_image_size( 'image_540', 540, 250, true  );
add_image_size( 'image_700',700, 429, true );
//add_image_size( 'image_300', 300, 200, true);
add_image_size( 'image_400', 400, 245, true);


add_image_size( 'slider_500',500, 306, true );
add_image_size( 'slider_300', 300, 184, true);


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






function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home']     = 'Home'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search']   = 'Search results for the query "%s"'; // текст для страницы с результатами поиска
	$text['tag']      = 'Posts tagged "%s"'; // текст для страницы тега
	$text['author']   = 'Author\'s articles %s'; // текст для страницы автора
	$text['404']      = 'Error 404'; // текст для страницы 404
	$text['page']     = 'Page %s'; // текст 'Страница N'
	$text['cpage']    = 'Comments page %s'; // текст 'Страница комментариев N'

	$wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep            = '<span class="breadcrumbs__separator ion-ios-arrow-forward"></span>'; // разделитель между "крошками"
	$before         = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
	$after          = '</span>'; // тег после текущей "крошки"

	$show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_url       = home_url('/');
	$link           = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
	$link          .= '<meta itemprop="position" content="%3$s" />';
	$link          .= '</span>';
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

	} else {

		$position = 0;

		echo $wrap_before;

		if ( $show_home_link ) {
			$position += 1;
			echo $home_link;
		}

		if ( is_category() ) {
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			foreach ( array_reverse( $parents ) as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$cat = get_query_var('cat');
				echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_search() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $show_home_link ) echo $sep;
				echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_time('Y') . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_month() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_day() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
			$position += 1;
			echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$position += 1;
				$post_type = get_post_type_object( get_post_type() );
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;
			} else {
				$cat = get_the_category(); $catID = $cat[0]->cat_ID;
				$parents = get_ancestors( $catID, 'category' );
				$parents = array_reverse( $parents );
				$parents[] = $catID;
				foreach ( $parents as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				if ( get_query_var( 'cpage' ) ) {
					$position += 1;
					echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
					echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					if ( $show_current ) echo $sep . $before . get_the_title() . $after;
					elseif ( $show_last_sep ) echo $sep;
				}
			}

		} elseif ( is_post_type_archive() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . $post_type->label . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_attachment() ) {
			$parent = get_post( $parent_id );
			$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
			$parents = get_ancestors( $catID, 'category' );
			$parents = array_reverse( $parents );
			$parents[] = $catID;
			foreach ( $parents as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			$position += 1;
			echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_title() . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_page() && $parent_id ) {
			$parents = get_post_ancestors( get_the_ID() );
			foreach ( array_reverse( $parents ) as $pageID ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
			}
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$tagID = get_query_var( 'tag_id' );
				echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . $text['404'] . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
} // end of dimox_breadcrumbs()




// OFF STANDART STYLE

  function smartwp_remove_wp_block_library_css(){
      wp_dequeue_style( 'wp-block-library' );
      wp_dequeue_style( 'wp-block-library-theme' );
      wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
  } 
  add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );





//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');



//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);








/**
 * Enqueue scripts and styles.
 */
function partners_scripts() {
//	wp_enqueue_style( 'partners-style', get_stylesheet_uri(), array(), _S_VERSION );

//    wp_enqueue_style('Noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap', array(), false );
//    wp_enqueue_style('Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;900&display=swap', array(), false );
    

    wp_enqueue_style('style.css', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);

	wp_enqueue_style('ionicons.css', get_template_directory_uri() . '/css/ionicons.css', array(), filemtime(get_template_directory() . '/css/ionicons.css'), false);


//    wp_enqueue_style('fancybox.css', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), filemtime(get_template_directory() . '/css/jquery.fancybox.css'), false);
//    wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', array(), false );

       
    if ( is_rtl() ) {
      wp_enqueue_style( 'style-rtl', get_template_directory_uri() . '/style-rtl.css', array(), filemtime(get_template_directory() . '/style-rtl.css'), false);
    }
     


	wp_enqueue_script( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js', array(), _S_VERSION, true );
//	wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), _S_VERSION, true );

//	wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), _S_VERSION, true );
    // wp_enqueue_script( 'partners-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
  
  
//     wp_enqueue_script( 'appjs', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true );

//        wp_enqueue_script('app.js', get_template_directory_uri() . '/js/app.js', array(), filemtime(get_template_directory() . '/js/app.js'), false);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'partners_scripts' );








//function create_our_news()
//{
//	register_post_type('our-news', array(
//		'labels' => array(
//			'name'				=> __('OUR NEWS', 'our-news-admin'),
//			'singular_name'   	=> __('OUR NEWS', 'our-news-admin'),
//			'add_new'		 	=> __('Add OUR NEWS', 'our-news-admin'),
//			'add_new_item'		=> __('Add OUR NEWS', 'our-news-admin'),
//			'edit'				=> __('Edit OUR NEWS', 'our-news-admin'),
//			'edit_item'	   		=> __('Edit OUR NEWS', 'our-news-admin'),
//			'new_item'			=> __('New OUR NEWS', 'our-news-admin'),
//			'all_items'	   		=> __('All OUR NEWS', 'our-news-admin'),
//			'view'				=> __('View OUR NEWS', 'our-news-admin'),
//			'view_item'	   		=> __('View OUR NEWS', 'our-news-admin'),
//			'search_items'		=> __('Search OUR NEWS', 'our-news-admin'),
//			'not_found'	   		=> __('Webinars not found', 'our-news-admin'),
//		),
//		'public' => true, // show in admin panel?
//		'menu_position' => 22,
//		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes'),
//		'taxonomies' => array('our-news'),
//		'has_archive' => false,
//		'capability_type' => 'post',
//		'menu_icon'   => 'dashicons-text-page',
//		'rewrite' => array('slug' => 'our-news'),
//	));
//}
//add_action('init', 'create_our_news');
//



//// Registering Custom Post Type Themes
//add_action( 'init', 'register_themepost', 20 );
//function register_themepost() {
//    $labels = array(
//        'name' => _x( 'our-news', 'my_custom_post','custom' ),
//        'singular_name' => _x( 'Theme', 'my_custom_post', 'custom' ),
//        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),
//        'add_new_item' => _x( 'Add New NewsPost', 'my_custom_post', 'custom' ),
//        'edit_item' => _x( 'Edit NewsPost', 'my_custom_post', 'custom' ),
//        'new_item' => _x( 'New NewsPost', 'my_custom_post', 'custom' ),
//        'view_item' => _x( 'View NewsPost', 'my_custom_post', 'custom' ),
//        'search_items' => _x( 'Search NewsPosts', 'my_custom_post', 'custom' ),
//        'not_found' => _x( 'No NewsPosts found', 'my_custom_post', 'custom' ),
//        'not_found_in_trash' => _x( 'No NewsPosts found in Trash', 'my_custom_post', 'custom' ),
//        'parent_item_colon' => _x( 'Parent NewsPost:', 'my_custom_post', 'custom' ),
//        'menu_name' => _x( 'Our News Posts', 'my_custom_post', 'custom' ),
//    );
//
//    $args = array(
//        'labels' => $labels,
//        'hierarchical' => false,
//        'description' => 'Custom Theme Posts',
//        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'post-formats', 'custom-fields' ),
//        'taxonomies' => array( 'post_tag','our-news_categories'),
//        'show_ui' => true,
//        'show_in_menu' => true,
//        'menu_position' => 5,
//        'menu_icon'   => 'dashicons-text-page',
//        'show_in_nav_menus' => true,
//        'publicly_queryable' => true,
//        'exclude_from_search' => false,
//        'query_var' => true,
//        'can_export' => true,
//        'rewrite' => array( 'slug' => 'our-news' ),
//        'public' => true,
//        'has_archive' => 'our-news',
//        'capability_type' => 'post'
//    );
//    register_post_type( 'our-news', $args ); // max 20 character cannot contain capital letters and spaces
//}


// ADD CONTENT TEMPLATE 




if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'partners_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function partners_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on partners, use a find and replace
		 * to change 'partners' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'partners', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'partners' ),
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
				'partners_custom_background_args',
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
add_action( 'after_setup_theme', 'partners_setup' );

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
