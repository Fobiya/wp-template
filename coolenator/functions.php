<?php
/**
 * coolenator functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package coolenator
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function coolenator_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on coolenator, use a find and replace
		* to change 'coolenator' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'coolenator', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'coolenator' ),
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
			'coolenator_custom_background_args',
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
add_action( 'after_setup_theme', 'coolenator_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function coolenator_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'coolenator_content_width', 640 );
}
add_action( 'after_setup_theme', 'coolenator_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function coolenator_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'coolenator' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'coolenator' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'coolenator_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function coolenator_scripts() {
	wp_enqueue_style( 'coolenator-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'coolenator-style', 'rtl', 'replace' );
    
  	wp_enqueue_style( 'style-info', get_template_directory_uri() . '/style.css' );

	wp_enqueue_script( 'coolenator-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'coolenator_scripts' );

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


define('THEME_DIR', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

require_once THEME_DIR .'/inc/acf/options_page.php';
require_once THEME_DIR .'/inc/helpers/file.php';
require_once THEME_DIR .'/inc/wp/theme_support.php';
require_once THEME_DIR .'/inc/wp/enqueue_scripts.php';

function my_stylesheet1(){
	wp_enqueue_style("style-admin",get_bloginfo('stylesheet_directory')."/css/style-admin.css");
	wp_enqueue_script('jquery');
}
add_action('admin_head', 'my_stylesheet1');

// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 15;' ), 20 );

add_filter( 'woocommerce_pagination_args', function ( $args ) {
	$args['prev_text'] = '<img src="' . THEME_DIR_URI . '/dist/images/icons/arrow-short-left.png">'; // ваша стрелка
	$args['next_text'] = '<img src="' . THEME_DIR_URI . '/dist/images/icons/arrow-short-right.png">'; // ваша стрелка

	return $args;
} );



add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

function true_loadmore_scripts() {

	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/ajax-load-more.js', array('jquery'), time() );
	wp_enqueue_script( 'search', get_stylesheet_directory_uri() . '/search.js', array('jquery'), time() );

	wp_localize_script(
		'true_loadmore',
		'misha',
		array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) )
	);

	wp_enqueue_script( 'true_loadmore' );
}

function true_loadmore() {

	$paged = ! empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;
	$paged++;

	$args = array(
		'paged' => $paged,
		'post_status' => 'publish'
	);

	query_posts( $args );

	while( have_posts() ) : the_post();

	?>
		<div class="preview-item middle"><a class="pic" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<div class="content">
				<div class="data"><?php echo get_the_date() ?></div>
				<a href="<?php the_permalink(); ?>">
					<h3><?php
						$title = get_the_title();
						$tm1 =  substr( strip_tags($title), 0, 50);
						echo $tm1;
						echo (strlen($tm1)<strlen($title))?'...':''
						?></h3></a>
				<p><?php
					$info = get_the_excerpt();
					$tm =  substr( strip_tags($info), 0, 100);
					echo $tm;
					echo (strlen($tm)<strlen($info))?'[...]':''
					?></p>
			</div>
		</div>
<?php
	endwhile;

	die;

}

add_action( 'wp_ajax_loadmore', 'true_loadmore' );
add_action( 'wp_ajax_nopriv_loadmore', 'true_loadmore' );

function search_chang_post(){

	if ( empty($_POST) || ! wp_verify_nonce( $_POST['search_change_nonce'], 'search_change') ){
		print 'Sorry, the verification data does not match 1111.';
		exit;
	}else{

		if(sanitize_text_field($_POST['s']) !== ''){

			$options = array(
					'posts_per_page' => -1,
					'suppress_filters' => false, // important!
					'post_type' => 'product',
					'post_status' => 'publish',
					'orderby'     => 'title',
					'order'       => 'ASC'
			);
			$keyword = sanitize_text_field($_POST['s']);

			add_filter( 'posts_where', function ($where) use ($keyword) {
				global $wpdb;
				$where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $keyword ) ) . '%\'';
				return $where;
			});
			$posts = get_posts( $options );


			echo '<ul class="list open">';
			foreach( $posts as $post ){   ?>
				<li><a href="<?php echo the_permalink($post); ?>"><?php echo get_the_title($post); ?></a></li>
				<?php
			}
			echo '</ul>';
		}

	}
	die;
}

add_action( 'wp_ajax_search_post_change', 'search_chang_post' );
add_action( 'wp_ajax_nopriv_search_post_change', 'search_chang_post' );






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

	
add_filter( 'wpcf7_validate_configuration', '__return_false' );


if( !function_exists( 'wpex_wpml_lang_translate' ) ) {
	function wpex_wpml_lang_translate( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'lang'	=> '',
		), $atts ) );
		$lang_active = ICL_LANGUAGE_CODE;
		if($lang == $lang_active){
			return do_shortcode($content);
		}
	}
	add_shortcode( 'wpml_translate', 'wpex_wpml_lang_translate' );
}

/*
 * Shortcode Usage
 *
 *[wpml_translate lang=es]Hola[/wpml_translate]
 *[wpml_translate lang=en]Hello[/wpml_translate]
 *
*/

/**
 * Positron functions and definitions
 *
 */
function positronx_set_post_views($post_id) {
    $count_key = 'wp_post_views_count';
    $count = get_post_meta($post_id, $count_key, true);
     
    if($count == '') {
        $count = 0;
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
    } else {
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}