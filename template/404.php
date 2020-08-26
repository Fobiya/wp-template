<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fobiya
 */

get_header();

//$previous = home_url();
//if(isset($_SERVER['HTTP_REFERER'])) {
//$previous = $_SERVER['HTTP_REFERER'];
//}
?>
<!--link-->
<?php
//$filename = get_template_directory_uri().'/css/template-404.css';
//if (file_exists($filename)) {	echo filemtime($filename);}
?>

<!--link-->
<section class="errorpage section__ oh-y">
		<div class="container">
          	<div class="row">
             	<div class="col-xs-12 col-md-12 col-lg-8 col-xl-8">
					<div class="box">
					<h2 class="glitch">404</h2>
					</div><!-- .page-content --> 
			   	</div>
				<div class="content-404 col-xs-12 col-md-12 col-lg-4 col-xl-4">
				<h2>Page Error 404</h2>
				<p>Uh Oh, This Page doesn't exist.</p>
				<p>We suggest you check one of these page:</p>
					<?php
//					wp_nav_menu(
//						array(
//							'menu' => 'error-menu',
//					//                                'theme_location' => 'Main menu',
//					//                                'container_class' => 'footer-menu',
//					//                                'container' => 'nav',
//						'items_wrap' => '<ul class="error-menu %2$s">%3$s</ul>',
//						)
//					);
					?>
				<a href="<?= $previous ?>" class="transparent">Back</a>
				</div>
		   	</div>
		</div>
</section>
<?php
get_footer();
