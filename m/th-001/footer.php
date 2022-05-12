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

	<footer class="site-footer">
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

    <script>


      //$( document ).ready(function() {
      //
      //  var height = $(window).scrollTop();
      //
      //  if(height => 150 ) {
      ////    $('.navbar-area').addClass('is-sticky');
      //  }
      //
      //  $(window).scroll(function() {
      //      var height = $(window).scrollTop();
      //
      //      if(height > 150 ) {
      //            $('.navbar-area').addClass('is-sticky');
      //      } else {
      //           $('.navbar-area').removeClass('is-sticky');
      //      }
      //  });
      //  
      //});


    </script>

<?php } ?>


<?php wp_footer(); ?>
<!-- END #wp_footer -->
</body>
</html>
