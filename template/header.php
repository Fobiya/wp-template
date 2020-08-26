<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://github.com/Fobiya/wp-template/
 *
 * @package fobiya
 */
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php echo get_bloginfo('name'); ?> | <?php echo the_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  
	<?php wp_head(); ?>
	
  <!--Link--><?= cssuni('fonts.css');?>
  <!--Link--><?= cssuni('style.css');?>

  <!--Link--><?= cssuni('ionicons.css');?>
  <!--Link--><?= cssuni('slick.css');?>


  <?php if ( current_user_can('administrator','admin','editor') ) { ?>
    <!--Link--><?= cssuni('admin.css');?>
  <?php } ?>
  
</head>


<body <?php body_class(); ?>>

    <!--bar-long-->
    <div class="bar-long"></div>
    <!--END bar-long-->
  
    <!--menu__width-->
      <div class="menu__width">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl2">
              <div class="menu-button ion-ios-settings-strong"></div>
              <div class="box__logo">
                <a class="logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
              </div>
              <span class="site_name"><?php echo get_bloginfo( 'name' ); ?></span>
            </div>
            <div class="col m12 s12 l9 xl10">
          <?php
            $args = array(
               'menu' => 'Main Menu',
              'container' => 'nav',
              'container_class' => 'site-menu',
            );
          ?>
          <?php  wp_nav_menu( $args );?>

            </div>
          </div>
        </div>
      </div>
   <!--END menu__width--> 
  
  <!--box__menu-->
  <div class="box__menu">
    <div class="content__menu"> 
        <div class="content__top">
          <a class="menu-button  ion-ios-settings"></a>
      
    </div>
      <div class="site-navigation__menu">
        <?php
          $args = array(
             'menu' => 'Main Menu',
            'container' => 'nav',
            'container_class' => 'site-menu',
          );
        ?>
        <?php  wp_nav_menu( $args );?>
        
      </div>

    </div>
  </div>
<!--END box__menu-->

<?php // get_template_part( 'template-parts/template-header-pages' ); ?>



