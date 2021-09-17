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

      
      
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                 
                   <?php
                    $footermenu = array(
                       'menu' => 'footer-menu',
                      'container' => 'nav',
                      'container_class' => 'footer_menu list-unstyled',  );  ?>
                      
                  <?php  wp_nav_menu( $footermenu );?>   

               </div>
               <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <ul class="footer_menu list-unstyled">
 
                       <?php  
                         $args = array(
                              'post_type' => 'blog',
                              'order' => 'DESC', // order filter  last post
                  //            'post_type'  => 'blog', // Post type category BLOG
                              'posts_per_page' => 7, // echo show three post 
//                              'category_name' => 'uslugi' 
                          );
                          // The Query
                          $the_query = new WP_Query( $args );

                          // The Loop
                          if ( $the_query->have_posts() ) {

                              while ( $the_query->have_posts() ) {
                                  $the_query->the_post();
                                  echo '<li class="ion-arrow-right-c"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                              }

                          } else {
                              // no posts found
                          }
                          /* Restore original Post Data */
                          wp_reset_postdata();
                        ?>

                  </ul>
               </div>
            </div>
         </div>
         <div class="container text-center">Copyright © 2021 Dr. Rutkas Aleksandr</div>
      </footer>

<!--      <link rel="preload" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" as="style">-->
<!--      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">-->
<!--      <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDHja2q452WNRnj5Ms4Tve4o6W_8y-XoCU&callback=t_handleGoogleApiReady_118949452"></script>-->
      
<!--      <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>-->
      
<!--      <script type="text/javascript" src="/bitrix/cache/js/s1/rhinoplasty/template_ab9d4068cae11b3a272e7fb2b125b2a9/template_ab9d4068cae11b3a272e7fb2b125b2a9_v1.js?1623334555401719"></script>-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTDEPIwEB1-24n1QrA4FVZAoidbHzrtYU&callback=initMap"></script>
                                               
    <?php if(0){ ?>         
      
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
                       'post_type' => 'post',
                        'order' => 'DESC', // order filter  last post
//                          'post_type'  => 'uslugi', // Post type category BLOG
                        'posts_per_page' => 7, // echo show three post 
//                        'category_name' => 'uslugi',
//                       'slug' => 'uslugi' ,
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
    
<?php } ?>
    
    
    <!-- //// MODAL ////-->
    <div style="display: none;" id="modal_question">
        <div class="form_content">
            <div class="h3 mb-4" style="margin: 0 !important;">Задать вопрос</div>
            <br>
            <div class="form-group">
                <label for="exampleInputName1">Ваше имя*</label>
                <input type="text" class="form-control" id="exampleInputName1">
            </div>
            <div class="form-group mb-4">
                <label for="exampleInputQe1">Ваш вопрос*</label>
                <textarea type="text" class="form-control" id="exampleInputQe1" rows="4"></textarea>
            </div>
            <button type="button" id="send_que" class="btn btn-primary">Отправить</button>
        </div>
        <div style="display: none" class="success_text alert m-0"></div>
    </div>
    <!-- //// MODAL ////-->
    <div style="display: none;" id="info">
       
       				 <form class="form_content"  method="POST" action="javascript:void(null);">
                      <input type="hidden" name="project_name" value="project_name">
                      <input type="hidden" name="admin_email" value="admin_email">
                      <input type="hidden" name="form_subject" value="url">
                         <div class="h3 mb-4" style="margin: 0 !important;">Консультация</div>
                          <br>
				
							<div class="form-group field">
							 <label for="exampleInputName1">Ваше имя*</label>
								<input type="text" name="name" class="form-control" required=""  value=""  placeholder="Ваше имя*">
							</div>
							<div class="form-group field">
							       <label for="exampleInputName1">Телефон*</label>
								<input type="text" name="text" class="form-control phone" required="" value="" placeholder="Телефон*">
							</div>
							<div class="form-group field">
							   <label for="exampleInputName1">Email*</label>
								<input type="text" name="email" class="form-control" required=""  value="" placeholder="Email*">
							</div>
			
					<div class="text-center">
						<button  type="submit" id="send_que"  name="send" class="btn btn-primary">Отправить</button>
					</div>
				</form> 

        <div style="display: none" class="success_text alert m-0"></div>
    </div>
    <!-- //// MODAL //// --> 
    <div id="saccsse" action="" method="post" style="display: none; border-radius: 6px;" >
        <div class="content_modal cont__hill">
          
          <h3>Спасибо!!!</h3>
		
        </div>
    </div>



<script>
  

$( document ).ready(function() {

      $("[name=send]").click(function () {

          $(":input.error").removeClass('error');
//          $(":select.error").removeClass('error');
          $(":input").parent('.field').removeClass('border_dashed');
          $("select").parent('.field').removeClass('border_dashed');
     
          $(".allert").remove();
          var error;
          var btn = $(this);
          var ref = btn.closest('form').find('[required]');
          var msg = btn.closest('form').find('input, textarea, select');


          var send_btn = btn.closest('form').find('[name=send]');

           $(ref).each(function() {
              if ($(this).val() == '') {
                  var errorfield = $(this);
                  $(this).addClass('error').parent('.field') /*.append('<span class="allert">Fill this field</span>') */;
                  error = 1;
                  $(":input.error:first");
                  return;
              } else {
                  var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                  if ($(this).attr("type") == 'email') {
                      if(!pattern.test($(this).val())) {
  //                        $("[name=email]").val('');
                          $(this).addClass('error').parent('.field') /*.append('<span class="allert">Enter a valid e-mail</span>') */;
                          error = 1;
                          $(":input.error:first");
                      }
                  }
                  var patterntel = /^()[0-9]{9,18}/i;
                  if ( $(this).attr("type") == 'tel') {
                      if(!patterntel.test($(this).val())) {
  //                        $("[name=phone]").val('');
                          $(this).addClass('error').parent('.field') /*.append('<span class="allert">Enter a valid phone number</span>') */;
                          error = 1;
                          $(":input.error:first");
                      }
                  }

                
              }

  });

          if (!(error == 1)) {
              $(send_btn).each(function () {
                  $(this).attr('disabled', true);
              });
              $(function () {
                  var form = $(this).closest('form'),
                      name = form.find('.name').val();
                  if ($(this).val() == '') {


                      $.ajax({
                          type: 'POST',
                          url: '/send.php',
                        
              
                          data: msg,
                          success: function() {
                                $.fancybox.close();
                              $('form').trigger("reset");
                              setTimeout(function(){  $("[name=send]").removeAttr("disabled"); }, 1000);
                            
//                             window.location.href = '/success';
                            
                           
                            
                              $.fancybox.open({
                                src  : '#saccsse',
                                type : 'inline',
                                'autoScale' : false,
                                'padding' :0,
                                 opts : {
                                    afterShow : function( instance, current ) {
                                        console.info( 'done!' );
                                    }
                                },
        

                                'onComplete' : function(){
                                    $('#fancybox-content').css({height:'800px',width:'675px'});
                                }
                               });
                            
                            
                                  setTimeout(function(){    $.fancybox.close(); }, 1000);

                          },
                          error: function(xhr, str) {
                              alert('ERROR: ' + xhr.responseCode);
                          }
                      });

                  }


              });
          } ;


          return false;
      });

   $('[class*="phone"]').mask("+38(999) 999-99-99");
  
  
  

    var height = $(window).scrollTop();

    if(height => 190 ) {
  //    $('.scroll__menu').addClass('top');
    }

    $(window).scroll(function() {
        var height = $(window).scrollTop();

        if(height > 190 ) {
              $('header').addClass('cd-auto-hide-header-shrink');
        } else {
             $('header').removeClass('cd-auto-hide-header-shrink');
        }
    });
  
      });
  
  
  $('.nav-trigger').click(function(){
    $('.cd-primary-nav ul').toggleClass('open');
  });
  
</script>



<?php wp_footer(); ?>
<!-- END #wp_footer -->
</body>
</html>
