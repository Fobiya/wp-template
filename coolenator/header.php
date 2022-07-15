<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolenator
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header class="header">
	<div class="container">
		<div class="header-container">
			<div class="header-right">
				<div class="humberger"><span></span><span></span><span></span></div>
				<div class="logo"><a href = "/"><img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png"></a></div>
				<div class="navigation">
					<div class="close"></div>
<!--					<ul class="menu">-->
<!--						<li class="menu-item-has-children"><a href="#">Shop</a>-->
<!--							<ul class="sub-menu">-->
<!--								<li><a href="#">Classic Coolenator</a></li>-->
<!--								<li><a href="#">Coolenator</a></li>-->
<!--								<li><a href="#">Personalized</a></li>-->
<!--								<li><a href="#">Accessories</a></li>-->
<!--							</ul>-->
<!--						</li>-->
<!--						<li><a href="">Create Own Design</a></li>-->
<!--						<li class="menu-item-has-children"><a href="#">About</a>-->
<!--							<ul class="sub-menu">-->
<!--								<li><a href="#">Classic Coolenator</a></li>-->
<!--								<li><a href="#">Coolenator</a></li>-->
<!--								<li><a href="#">Personalized</a></li>-->
<!--								<li><a href="#">Accessories</a></li>-->
<!--							</ul>-->
<!--						</li>-->
<!--						<li><a href="#">Blog</a></li>-->
<!--						<li><a href="#">Contact Us</a></li>-->
<!--					</ul>-->


        
    
    
<?php if( get_bloginfo('language') == 'en-US' ) : ?>

    <?php
      $argsm = array(
         'menu' => 'header EN',
       // 'container' => 'nav',
       // 'container_class' => 'menu',
      );
    ?>

<?php elseif( get_bloginfo('language') == 'de-DE' ) : ?>

    <?php
      $argsm = array(
         'menu' => 'header Menu (DE)',
       // 'container' => 'nav',
       // 'container_class' => 'menu',
      );
    ?>

<?php elseif( get_bloginfo('language') == 'nl_NL' ) : ?>

    <?php
      $argsm = array(
         'menu' => 'header NL',
       // 'container' => 'nav',
       // 'container_class' => 'menu',
      );
    ?>

<?php endif; ?>
    
    

    <?php  wp_nav_menu( $argsm );?>
<?php if(0){?>
					<?php wp_nav_menu( [
							'theme_location'  => 'header'
					] ); ?>
<?php } ?>
				</div>
			</div>
			<div class="header-left">
				<div class="icon-list">
					<div class="icon-item"><a class="search" href="#"></a></div>
					<div class="icon-item"><a class="cart" href="/cart"></a></div>
					<div class="icon-item"><a class="favorite" href="#"></a></div>
					<div class="icon-item lang"><a class="language" href="#"></a><ul class="lang-list"><?php  pll_the_languages( array( 'show_flags' => 1,'show_names' => 0) ); ?> <?php // echo do_shortcode("[wpml_custom_lang]"); 
                    
                    // echo do_shortcode("[wpml_language_selector_widget]");   ?>
                    
                    </ul></div>
					<div class="site-branding">
						<form id="search-change"  method="POST">
							<div class="post__conteiner">
								<input type="search" class="search-field search-change" placeholder="Search..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ); ?>" />
								<input type="submit" class="search-submit" value="Search" />
								<div class="select">
								</div>
								<?php wp_nonce_field('search_change','search_change_nonce'); ?>
								<input type="hidden" name="post_type" value="product" />
								<input type="hidden" name="action" value="search_post_change">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>