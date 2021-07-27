<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package th-001
 */

?>
          
      
 <section _ngcontent-hmn-c6="" class="footer-area footer-area-two pt-100 pb-70">
   <div _ngcontent-hmn-c6="" class="container">
      <div _ngcontent-hmn-c6="" class="row">
         <div _ngcontent-hmn-c6="" class="col-lg-3 col-md-6">
            <div _ngcontent-hmn-c6="" class="single-footer-widget">
               <a _ngcontent-hmn-c6="" routerlink="/" href="/"><img _ngcontent-hmn-c6="" src="assets/img/logo.png" alt="Image"></a>
               <p _ngcontent-hmn-c6="">Our priority is to ensure the well being of patients. Our service and the work efficiency of our staff are the reason for our success to ensure the well being.</p>
               <p _ngcontent-hmn-c6="" class="address"><span _ngcontent-hmn-c6="">Address:-</span> 6890 Blvd, The Bronx, NY 1058 New York, USA</p>
            </div>
         </div>
         <div _ngcontent-hmn-c6="" class="col-lg-3 col-md-6">
            <div _ngcontent-hmn-c6="" class="single-footer-widget">
               <h3 _ngcontent-hmn-c6="">Our departments</h3>
               <ul _ngcontent-hmn-c6="">
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Pediatric clinic</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Oral medicine</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Neurology</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Disability</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Cardiology</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Pediatrician</a></li>
               </ul>
            </div>
         </div>
         <div _ngcontent-hmn-c6="" class="col-lg-3 col-md-6">
            <div _ngcontent-hmn-c6="" class="single-footer-widget">
               <h3 _ngcontent-hmn-c6="">Popular links</h3>
               <ul _ngcontent-hmn-c6="">
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">About us</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Emergency department</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Contact us</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Terms and conditions</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Privacy policy</a></li>
                  <li _ngcontent-hmn-c6=""><a _ngcontent-hmn-c6="" routerlink="/" href="/">Find a doctor</a></li>
               </ul>
            </div>
         </div>
         <div _ngcontent-hmn-c6="" class="col-lg-3 col-md-6">
            <div _ngcontent-hmn-c6="" class="single-footer-widget">
               <h3 _ngcontent-hmn-c6="">Contact us</h3>
               <p _ngcontent-hmn-c6="">For 24/7 emergency please call us. If there is no emergency, contact at time.</p>
               <ul _ngcontent-hmn-c6="">
                  <li _ngcontent-hmn-c6=""><span _ngcontent-hmn-c6="">Call:-</span><a _ngcontent-hmn-c6="" href="tel:+15143125678">+1 (514) 312-5678</a></li>
                  <li _ngcontent-hmn-c6=""><span _ngcontent-hmn-c6="">Email:-</span><a _ngcontent-hmn-c6="" href="mailto:support@vuci.com">support@vuci.com</a></li>
               </ul>
               <ul _ngcontent-hmn-c6="" class="open-day">
                  <li _ngcontent-hmn-c6=""> Weekdays <span _ngcontent-hmn-c6="">8:00 am - 6:00 pm</span></li>
                  <li _ngcontent-hmn-c6=""> Sunday <span _ngcontent-hmn-c6="">9:00 am - 3:00 pm</span></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
         
<div _ngcontent-hmn-c6="" class="copy-right-area copy-right-area-two">
   <div _ngcontent-hmn-c6="" class="container">
      <p _ngcontent-hmn-c6="">
      
      
      
      Copyright @2020 <strong _ngcontent-hmn-c6="">Vuci</strong>. Designed <a _ngcontent-hmn-c6="" href="https://envytheme.com/" target="_blank">EnvyTheme</a>
      
      
      </p>
   </div>
</div>   
    
    
     <?php if(0){ ?>         

					<ul class='social-networks tt-social-icon'>

							<?php while (have_rows('fotter_social_network', 'option')) : the_row();  ?>

								<?php if (get_row_layout() == 'facebook_1') : ?>
									<li>
										<a target="_blank" class="facebook-footer icon-g-64" href="<?php the_sub_field('facebook'); ?>">
											<i class='ion-social-facebook'></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if (get_row_layout() == 'youtube_1') : ?>
									<li>
										<a target="_blank" class="youtube" href="<?php the_sub_field('youtube'); ?>">
											<i class='ion-social-youtube'></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if (get_row_layout() == 'twitter_1') : ?>
									<li>
										<a target="_blank" class="twitter icon-h-58" href="<?php the_sub_field('twitter'); ?>">
											<i class='ion-social-twitter'></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if (get_row_layout() == 'google_1') : ?>
									<li>
										<a target="_blank" class="google icon-g-66" href="<?php the_sub_field('google'); ?>"></a>
									</li>
								<?php endif; ?>
						
								<?php if (get_row_layout() == 'instagram_1') : ?>
									<li>
										<a target="_blank" class="instagram icon-g-67" href="<?php the_sub_field('instagram'); ?>">
											<i class='ion-social-instagram-outline'></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if (get_row_layout() == 'linkedin_1') : ?>
									<li>
										<a target="_blank" class="linkedin" href="<?php the_sub_field('linkedin'); ?>">
											<i class='ion-social-linkedin'></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if (get_row_layout() == 'telegram_1') : ?>
									<li>
										<a target="_blank" class="telegram" href="<?php the_sub_field('telegram'); ?>"></a>
									</li>
								<?php endif; ?>

								<?php if (get_row_layout() == 'skype_1') : ?>
									<li>
										<a target="_blank" class="skype" href="<?php the_sub_field('skype'); ?>"></a>
									</li>
								<?php endif; ?>

								<?php if (get_row_layout() == 'vkontakte_1') : ?>
									<li>
										<a target="_blank" class="vkontakte" href="<?php the_sub_field('vkontakte'); ?>"></a>
									</li>
								<?php endif; ?>

							<?php endwhile; ?>

						</ul>
<?php } ?>

<!-- #wp_footer -->
<?php if(0){ ?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'th-001' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'th-001' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'th-001' ), 'th-001', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<?php } ?>

<script>
  

$( document ).ready(function() {

  var height = $(window).scrollTop();

  if(height => 150 ) {
//    $('.navbar-area').addClass('is-sticky');
  }

  $(window).scroll(function() {
      var height = $(window).scrollTop();

      if(height > 150 ) {
            $('.navbar-area').addClass('is-sticky');
      } else {
           $('.navbar-area').removeClass('is-sticky');
      }
  });
  
});


</script>



<?php wp_footer(); ?>
<!-- END #wp_footer -->
</body>
</html>
