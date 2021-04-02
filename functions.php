<?php

wp_enqueue_script('jquery');



/* CSS version, example <!--Link--><?= css();?>  */
function css()
{
	$cssbegin = '<link rel="stylesheet" href="';
	$cssend = '">';
//	if (current_user_can('administrator')) $csspath = '/css/';
//	else $csspath = '/css-min/'; //$csspath='/css-min/';
	$csspath = '/css/'; //$csspath='/css-min/';
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
	$csspath = '/css/';
//	if (current_user_can('administrator')) $csspath = '/css/';
//	else $csspath = '/css-min/'; //$csspath='/css-min/';
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
//	else $jspath = '/js-min/'; //$csspath='/css-min/';
    $jspath = '/js/'; //$csspath='/css-min/';
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
	else $jspath = '/js-min/'; //$jspath='/js-min/';
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

function cl_acf_set_language() {
return acf_get_setting('default_language');
}


function get_global_option($name)
{
	add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
	$option = get_field($name, 'option');
	remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
	return $option;
}


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// code LINKS
function code_config($atts)
{
	switch ($atts['var']) {
        
 // privacy_policy
		case "privacy_policy":    
        

        
             $currentlang = get_bloginfo('language');

             if($currentlang=="en-US"):
            $file =   get_field("file_policy", "options_en"); 
   if( $file ):
            return '<a class="poly" href="' .  $file["url"] . '"  target="_blank">' . $file['title'] . '</a>';
          endif;
        
             else:
   $file =   get_field("file_policy", "options");
        
        if( $file ):
       return '<a class="poly" href="' .  $file["url"] . '"  target="_blank">' .  $file['title'] . '</a>';
        
        endif;
             endif; 
        

			break;

        
// time_work
		case "time_work":
        
        
             $currentlang = get_bloginfo('language');

             if($currentlang=="en-US"):
            
        return get_field('time_work', 'options_en');
             else:
            
        return get_field('time_work', 'options');
             endif; 

		
			break;
// address
		case "address":
        
                 $currentlang = get_bloginfo('language');

             if($currentlang=="en-US"):
            
        return get_field('code_address', 'options_en');
             else:
            
        return get_field('code_address', 'options');
             endif; 
		
			

		break;
// email
		case "email":

            $currentlang = get_bloginfo('language');

             if($currentlang=="en-US"):
            
        return get_field('code_email', 'options_en');
             else:
            
        return get_field('code_email', 'options');
             endif; 

			break;
		case "email_link":
// email_link
        
            $currentlang = get_bloginfo('language');

             if($currentlang=="en-US"):

        $registration_page = get_field('registration_page', 'options_en');
             else:
            
    
        $registration_page = get_field('registration_page', 'options');
             endif; 
		
			
        
        
			if (!empty($atts['title'])) {
				$email_tittle = __($atts['title'], 'code');
              
			
              
            if($currentlang=="en-US"):

           return '<a class="email" href="mailto:' . get_field('code_email', 'options_en') . '">' . $email_tittle . '</a>';
              
             else:

   		   return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . $email_tittle . '</a>';
              
             endif; 
		
              
			} else {
              
            if($currentlang=="en-US"):

        return '<a class="email" href="mailto:' . get_field('code_email', 'options_en') . '">' . get_field('code_email', 'options') . '</a>';
              
             else:

   		 return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . get_field('code_email', 'options') . '</a>';
              
             endif; 
              
				
              
			}
	
			break;

// tel
		case "tel":
        
              $currentlang = get_bloginfo('language');

             if($currentlang=="en-US"):

     	    $code_phone = get_field('code_phone', 'options_en');
			$title_phone = get_field('title_phone', 'options_en');
             else:

          $code_phone = get_field('code_phone', 'options_ru');
			$title_phone = get_field('title_phone', 'options');
             endif; 
        
		
		
			if (!empty($atts['title'])) {
				$phone_tittle = __($atts['title'], 'code');
              
           if($currentlang=="en-US"):

          return '<a class="tel" href="tel:' . get_field('code_phone', 'options_en') . '">' . $phone_tittle . '</a>';
             else:

          return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $phone_tittle . '</a>';
             endif; 
              
				
			} else {
              
              
                if($currentlang=="en-US"):

         return '<a class="tel" href="tel:' . get_field('code_phone', 'options_en') . '">' . $title_phone . '</a>';
             else:

         return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $title_phone . '</a>';
             endif; 
              
				
			}
	
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



// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');
// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
// Отключаем события REST API
remove_action( 'init', 'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );
// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init', 'wp_oembed_register_route');
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );


//remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
//remove_action( 'wp_head', '_wp_render_title_tag', 1 );
