<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package th-001
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

  <script>
  
//const data = state.source.get('/post');
//const page = state.source[data.type][data.id];  
//  
//(function($) {
//
//	var apiURL = 'https://stryi.online/';
//
//	// Получим последние записи
//	$.ajax( {
//		url: apiURL + 'wp-json/acf/v3/posts',
//		success: function ( posts ) {
//			console.log( 'Array of posts', posts );
//		},
//		error:  function( err ) {
//			console.log( 'Error: ', err );
//		}
//	} );
//
//	// Получим запись с ID=1
//	$.ajax( {
//		url: apiURL + 'wp-json/acf/v3/posts',
//		success: function ( post ) {
//			console.log( 'Array of posts', post );
//		},
//		error:  function( err ) {
//			console.log( 'Error: ', err );
//		}
//	});
//
//})( jQuery );
//  
  </script>

  <!-- #header -->
  <?php if(0){ ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'th-001' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$th_001_description = get_bloginfo( 'description', 'display' );
			if ( $th_001_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $th_001_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'th-001' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
  <?php } ?>  <!-- END #header -->
  
 


<header _ngcontent-lyj-c5="" class="header-area header-area-two">
    
     <div _ngcontent-lyj-c5="" class="top-header top-header-two">
      <div _ngcontent-lyj-c5="" class="container">
         <div _ngcontent-lyj-c5="" class="row align-items-center">
            <div _ngcontent-lyj-c5="" class="col-lg-3 col-sm-4">
               <ul _ngcontent-lyj-c5="" class="header-left-content">
                  <li _ngcontent-lyj-c5=""><a _ngcontent-lyj-c5="" href="#" target="_blank"><i _ngcontent-lyj-c5="" class="bx bxl-facebook"></i></a></li>
                  <li _ngcontent-lyj-c5=""><a _ngcontent-lyj-c5="" href="#" target="_blank"><i _ngcontent-lyj-c5="" class="bx bxl-pinterest-alt"></i></a></li>
                  <li _ngcontent-lyj-c5=""><a _ngcontent-lyj-c5="" href="#" target="_blank"><i _ngcontent-lyj-c5="" class="bx bxl-twitter"></i></a></li>
               </ul>
            </div>
            <div _ngcontent-lyj-c5="" class="col-lg-9 col-sm-8">
               <ul _ngcontent-lyj-c5="" class="header-right-content">
                 
                 
                 


                  <li _ngcontent-lyj-c5=""><i _ngcontent-lyj-c5="" class="flaticon-clock"></i> Бесплатная консультация <span _ngcontent-lyj-c5="">24/7. Звоните!</span></li>
                  <li _ngcontent-lyj-c5=""><i _ngcontent-lyj-c5="" class="flaticon-call"></i> Call Now <a _ngcontent-lyj-c5="" href="tel:+15143125678">+380 (066) 276-84-64</a><a _ngcontent-lyj-c5="" href="tel:+15143125678">+380 (096) 710-81-51</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
     <div _ngcontent-lyj-c5="" class="navbar-area">
      <div _ngcontent-lyj-c5="" class="mobile-nav">
         <div _ngcontent-lyj-c5="" class="container"><a _ngcontent-lyj-c5="" routerlink="/" class="logo" href="/"><img _ngcontent-lyj-c5="" src="assets/img/logo.png" alt="Logo"></a></div>
      </div>
      
      
      
      <div _ngcontent-lyj-c5="" class="main-nav">
         <div _ngcontent-lyj-c5="" class="container">
            <nav _ngcontent-lyj-c5="" class="navbar navbar-expand-md">
               <a _ngcontent-lyj-c5="" routerlink="/" class="navbar-brand" href="/"><img _ngcontent-lyj-c5="" src="assets/img/logo.png" alt="Logo"></a>
               
                <!-- MENU -->
                       
               <div _ngcontent-lyj-c5="" class="collapse navbar-collapse mean-menu" style="display: block;">
                  <ul _ngcontent-lyj-c5="" class="navbar-nav m-auto">
                     <li _ngcontent-lyj-c5="" class="nav-item">
                        <a _ngcontent-lyj-c5="" href="javascript:void(0)" class="nav-link">Home <i _ngcontent-lyj-c5="" class="bx bx-chevron-down"></i></a>
                        <ul _ngcontent-lyj-c5="" class="dropdown-menu">
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/" routerlinkactive="active" class="nav-link" href="/">Home One</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/home-two" routerlinkactive="active" class="nav-link" href="/home-two">Home Two</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/home-three" routerlinkactive="active" class="nav-link" href="/home-three">Home Three</a></li>
                        </ul>
                     </li>
                     <li _ngcontent-lyj-c5="" class="nav-item">
                        <a _ngcontent-lyj-c5="" href="javascript:void(0)" class="nav-link">Pages <i _ngcontent-lyj-c5="" class="bx bx-chevron-down"></i></a>
                        <ul _ngcontent-lyj-c5="" class="dropdown-menu">
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/about" routerlinkactive="active" class="nav-link" href="/about">About</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item">
                              <a _ngcontent-lyj-c5="" href="javascript:void(0)" class="nav-link">Doctors <i _ngcontent-lyj-c5="" class="bx bx-chevron-right"></i></a>
                              <ul _ngcontent-lyj-c5="" class="dropdown-menu">
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/doctors" routerlinkactive="active" class="nav-link" href="/doctors">Doctors</a></li>
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/doctor-details" routerlinkactive="active" class="nav-link" href="/doctor-details">Doctor Details</a></li>
                              </ul>
                           </li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/appointment" routerlinkactive="active" class="nav-link" href="/appointment">Appointment</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item">
                              <a _ngcontent-lyj-c5="" href="javascript:void(0)" class="nav-link">Services <i _ngcontent-lyj-c5="" class="bx bx-chevron-right"></i></a>
                              <ul _ngcontent-lyj-c5="" class="dropdown-menu">
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/services-style-one" routerlinkactive="active" class="nav-link" href="/services-style-one">Services Style One</a></li>
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/services-style-two" routerlinkactive="active" class="nav-link" href="/services-style-two">Services Style Two</a></li>
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/services-style-three" routerlinkactive="active" class="nav-link" href="/services-style-three">Services Style Three</a></li>
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/services-details" routerlinkactive="active" class="nav-link" href="/services-details">Service Details</a></li>
                              </ul>
                           </li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/testimonials" routerlinkactive="active" class="nav-link" href="/testimonials">Testimonials</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item">
                              <a _ngcontent-lyj-c5="" href="javascript:void(0)" class="nav-link">Departments <i _ngcontent-lyj-c5="" class="bx bx-chevron-right"></i></a>
                              <ul _ngcontent-lyj-c5="" class="dropdown-menu">
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/departments" routerlinkactive="active" class="nav-link" href="/departments">Departments</a></li>
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/department-details" routerlinkactive="active" class="nav-link" href="/department-details">Department Details</a></li>
                              </ul>
                           </li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/pricing" routerlinkactive="active" class="nav-link" href="/pricing">Pricing</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item">
                              <a _ngcontent-lyj-c5="" href="javascript:void(0)" class="nav-link">User <i _ngcontent-lyj-c5="" class="bx bx-chevron-right"></i></a>
                              <ul _ngcontent-lyj-c5="" class="dropdown-menu">
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/my-account" routerlinkactive="active" class="nav-link" href="/my-account">My Account</a></li>
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/login" routerlinkactive="active" class="nav-link" href="/login">Login</a></li>
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/register" routerlinkactive="active" class="nav-link" href="/register">Register</a></li>
                                 <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/recover-password" routerlinkactive="active" class="nav-link" href="/recover-password">Recover Password</a></li>
                              </ul>
                           </li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/faq" routerlinkactive="active" class="nav-link" href="/faq">FAQ</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/privacy-policy" routerlinkactive="active" class="nav-link" href="/privacy-policy">Privacy Policy</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/terms-conditions" routerlinkactive="active" class="nav-link" href="/terms-conditions">Terms &amp; Conditions</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/coming-soon" routerlinkactive="active" class="nav-link" href="/coming-soon">Coming Soon</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/error" routerlinkactive="active" class="nav-link" href="/error">404 Error Page</a></li>
                        </ul>
                     </li>
                     <li _ngcontent-lyj-c5="" class="nav-item">
                        <a _ngcontent-lyj-c5="" href="javascript:void(0)" class="nav-link">Portfolio <i _ngcontent-lyj-c5="" class="bx bx-chevron-down"></i></a>
                        <ul _ngcontent-lyj-c5="" class="dropdown-menu">
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/portfolio-two-column" routerlinkactive="active" class="nav-link" href="/portfolio-two-column">Portfolio Two Column</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/portfolio-three-column" routerlinkactive="active" class="nav-link" href="/portfolio-three-column">Portfolio Three Column</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/portfolio-four-column" routerlinkactive="active" class="nav-link" href="/portfolio-four-column">Portfolio Four Column</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/portfolio-filter" routerlinkactive="active" class="nav-link" href="/portfolio-filter">Portfolio Filter</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/portfolio-details" routerlinkactive="active" class="nav-link" href="/portfolio-details">Portfolio Details</a></li>
                        </ul>
                     </li>
                     <li _ngcontent-lyj-c5="" class="nav-item">
                        <a _ngcontent-lyj-c5="" href="javascript:void(0)" class="nav-link">Shop <i _ngcontent-lyj-c5="" class="bx bx-chevron-down"></i></a>
                        <ul _ngcontent-lyj-c5="" class="dropdown-menu">
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/products" routerlinkactive="active" class="nav-link" href="/products">Products</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/cart" routerlinkactive="active" class="nav-link" href="/cart">Cart</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/checkout" routerlinkactive="active" class="nav-link" href="/checkout">Checkout</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/single-products" routerlinkactive="active" class="nav-link" href="/single-products">Single Products</a></li>
                        </ul>
                     </li>
                     <li _ngcontent-lyj-c5="" class="nav-item">
                        <a _ngcontent-lyj-c5="" href="javascript:void(0)" class="nav-link">Blog <i _ngcontent-lyj-c5="" class="bx bx-chevron-down"></i></a>
                        <ul _ngcontent-lyj-c5="" class="dropdown-menu">
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/blog-one-column" routerlinkactive="active" class="nav-link active" href="/blog-one-column">Blog One Column</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/blog-two-column" routerlinkactive="active" class="nav-link" href="/blog-two-column">Blog Two Column</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/blog-three-column" routerlinkactive="active" class="nav-link" href="/blog-three-column">Blog Three Column</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/blog-left-sidebar" routerlinkactive="active" class="nav-link" href="/blog-left-sidebar">Blog Left Sidebar</a></li>
                           <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/blog-details" routerlinkactive="active" class="nav-link" href="/blog-details">Blog Details</a></li>
                        </ul>
                     </li>
                     <li _ngcontent-lyj-c5="" class="nav-item"><a _ngcontent-lyj-c5="" routerlink="/contact" routerlinkactive="active" class="nav-link" href="/contact">Contact</a></li>
                  </ul>
                  
               </div>
               
                <!-- END MENU -->
               
            </nav>
         </div>
      </div>
      
      
      
      <div _ngcontent-lyj-c5="" class="others-option-for-responsive">
         <div _ngcontent-lyj-c5="" class="container">
            <div _ngcontent-lyj-c5="" class="dot-menu">
               <div _ngcontent-lyj-c5="" class="inner">
                  <div _ngcontent-lyj-c5="" class="circle circle-one"></div>
                  <div _ngcontent-lyj-c5="" class="circle circle-two"></div>
                  <div _ngcontent-lyj-c5="" class="circle circle-three"></div>
               </div>
            </div>
            <div _ngcontent-lyj-c5="" class="container">
               <div _ngcontent-lyj-c5="" class="option-inner">
                  <div _ngcontent-lyj-c5="" class="others-option justify-content-center d-flex align-items-center">
                     <div _ngcontent-lyj-c5="" class="option-item">
                        <i _ngcontent-lyj-c5="" class="search-btn bx bx-search"></i><i _ngcontent-lyj-c5="" class="close-btn bx bx-x"></i>
                        <div _ngcontent-lyj-c5="" class="search-overlay search-popup">
                           <div _ngcontent-lyj-c5="" class="search-box">
                              <form _ngcontent-lyj-c5="" class="search-form"><input _ngcontent-lyj-c5="" name="search" placeholder="Search" type="text" class="search-input"><button _ngcontent-lyj-c5="" type="submit" class="search-button"><i _ngcontent-lyj-c5="" class="bx bx-search"></i></button></form>
                           </div>
                        </div>
                     </div>
                     <div _ngcontent-lyj-c5="" class="cart-icon"><a _ngcontent-lyj-c5="" routerlink="/cart" href="/cart"><i _ngcontent-lyj-c5="" class="bx bx-cart"></i><span _ngcontent-lyj-c5="">0</span></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
  
</header>
	