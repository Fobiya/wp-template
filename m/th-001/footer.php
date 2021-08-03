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
          
      
 <section _ngcontent-hmn-c6="" class="footer-area footer-area-two pt-100 ">
   <div _ngcontent-hmn-c6="" class="container">
      <div _ngcontent-hmn-c6="" class="row">
         <div _ngcontent-hmn-c6="" class="col-lg-3 col-md-6">
            <div _ngcontent-hmn-c6="" class="single-footer-widget">
             
              <?php $logo = get_field('logo','option'); ?>
              <?php if( !empty( $logo ) ): ?>
                    <a _ngcontent-lyj-c5="" routerlink="/" href="/"><img src="<?php echo esc_url($logo['url']); ?>"  alt="<?php echo esc_attr($logo['alt']); ?>"></a>
              <?php endif; ?>   

                              <p _ngcontent-hmn-c6=""><?= get_field('title_info','option'); ?></p>
               

            </div>
         </div>
         <div _ngcontent-hmn-c6="" class="col-lg-3 col-md-6">
            <div _ngcontent-hmn-c6="" class="single-footer-widget">
               <h3 _ngcontent-hmn-c6="">Наши Услуги</h3>
               
                  <ul _ngcontent-hmn-c6="">         
                    <?php  
                     $args = array(
                          'order' => 'DESC', // order filter  last post
                          'post_type'  => 'services', // Post type category BLOG
                          'posts_per_page' => 7, // echo show three post 
                      );
                      // The Query
                      $the_query = new WP_Query( $args );

                      // The Loop
                      if ( $the_query->have_posts() ) {

                          while ( $the_query->have_posts() ) {
                              $the_query->the_post(); ?>
                            <li _ngcontent-tft-c43=""><a _ngcontent-tft-c43="" routerlink="/services-details" href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></li>
                        <?  }

                      } else {
                          // no posts found
                      }
                      /* Restore original Post Data */
                      wp_reset_postdata();
                    ?>
               </ul>
            </div>
         </div>
         <div _ngcontent-hmn-c6="" class="col-lg-3 col-md-6">
            <div _ngcontent-hmn-c6="" class="single-footer-widget">
               <h3 _ngcontent-hmn-c6="">Другое</h3>
               
                  <?php
                    $fooargsm = array(
                       'menu' => 'footer-right',
              //        'container' => 'nav',
              //        'container_class' => 'menu',
              //        'before' => '<h2>', 
              //        'after'  => '</h2>',
                    );
                  ?>
               
               <ul _ngcontent-hmn-c6="">
                  <?php  wp_nav_menu( $fooargsm );?>
               </ul>
            </div>
         </div>
         <div _ngcontent-hmn-c6="" class="col-lg-3 col-md-6">
            <div _ngcontent-hmn-c6="" class="single-footer-widget">
               <h3 _ngcontent-hmn-c6="">Контакты</h3>

               <ul _ngcontent-hmn-c6="" class="contact">
                  <li _ngcontent-hmn-c6=""><span _ngcontent-hmn-c6=""><i _ngcontent-rva-c29="" class="flaticon-telephone-1"></i></span> <?= do_shortcode( '[code var=phone_link]' ); ?></li>
                  <li _ngcontent-hmn-c6=""><span _ngcontent-hmn-c6=""><i _ngcontent-rva-c29="" class="flaticon-telephone-1"></i></span> <?= do_shortcode( '[code var=next_phone_link]' ); ?></li>
                  <li _ngcontent-hmn-c6=""><span _ngcontent-hmn-c6=""><i _ngcontent-rva-c29="" class="flaticon-arroba"></i></span> <?= do_shortcode( '[code var=email_link]' ); ?></li>
                  <li _ngcontent-hmn-c6=""><span _ngcontent-hmn-c6=""><i _ngcontent-rva-c29="" class="flaticon-address-1"></i></span> <?= do_shortcode( '[code var=address]' ); ?></li>
               </ul>
               <?php if(0){ ?>
               <ul _ngcontent-hmn-c6="" class="open-day">
                  <li _ngcontent-hmn-c6=""> <?= get_field('time_work','option'); ?></li>
                  <li _ngcontent-hmn-c6=""> <?= get_field('consultations','option'); ?></li>
               </ul>
                 <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>
         
<div _ngcontent-hmn-c6="" class="copy-right-area copy-right-area-two">
   <div _ngcontent-hmn-c6="" class="container">
      <p _ngcontent-hmn-c6="">

        Copyright  &middot;  All Rights Are Reserved &copy; <?php echo date('Y'); ?> <a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>

      </p>
   </div>
</div>   
   
   
   <div _ngcontent-qkf-c6="" class="go-top active"><i _ngcontent-qkf-c6="" class="bx bx-chevrons-up"></i><i _ngcontent-qkf-c6="" class="bx bx-chevrons-up"></i></div>
    
    
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
<?php if(0){ ?>
<a class="bot_modal none" data-fancybox="" data-src="#modal__open" href="javascript:;">Open Modal</a>
<?php } ?>
    <!-- //// MODAL ////-->
    <div id="modal__open" style="display: none;">

           <form _ngcontent-rva-c29="" class="form__modal">


                    <h3 _ngcontent-rva-c29="">Заказать консультацию</h3>


                    <div _ngcontent-rva-c29="" class="form-group">
                       <div _ngcontent-rva-c29="" id="datetimepicker" class="input-group date"><input _ngcontent-rva-c29="" type="text" placeholder="Имя*" class="form-control"><span _ngcontent-rva-c29="" class="input-group-addon"></span></div>

                    </div>



                    <div _ngcontent-rva-c29="" class="form-group">
                       <div _ngcontent-rva-c29="" id="datetimepicker" class="input-group date"><input _ngcontent-rva-c29="" type="text" placeholder="Номер телефона*" class="form-control"><span _ngcontent-rva-c29="" class="input-group-addon"></span></div>

                    </div>

                 <button _ngcontent-rva-c29="" type="submit" class="default-btn"> ОТПРАВТЬ</button>

           </form>

    </div>
    
    <div id="modal__thx" style="display: none;">

      <h3 _ngcontent-rva-c29="">Текст для модала:Ваша заявка отправлена. Специалист свяжется с Вами в ближайшее время!</h3>

    </div>

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
