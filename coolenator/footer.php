<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolenator
 */

?>

<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="footer-col">
              <div class="logo"> <a href="/"><img src="<?= get_template_directory_uri(); ?>/dist/images/logo-white.png"></a></div>
				<div class="soc">
					<ul>
                       
                        <?php while (have_rows('fotter_social_network', 'option')) : the_row();  ?>

                            <?php if (get_row_layout() == 'facebook_1') : ?>
                                <li>
                                    <a target="_blank" class="facebook-footer icon-g-64" href="<?php the_sub_field('facebook'); ?>">
                                        <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/icon-facebook.png" alt="">
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_row_layout() == 'youtube_1') : ?>
                                <li>
                                    <a target="_blank" class="youtube" href="<?php the_sub_field('youtube'); ?>">
                                        <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/icon-youtube.png" alt="">
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_row_layout() == 'twitter_1_') : ?>
                                <li>
                                    <a target="_blank" class="twitter icon-h-58" href="<?php the_sub_field('twitter'); ?>">
                                        <i class='ion-social-twitter'></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_row_layout() == 'google_1_') : ?>
                                <li>
                                    <a target="_blank" class="google icon-g-66" href="<?php the_sub_field('google'); ?>"></a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_row_layout() == 'instagram_1') : ?>
                                <li>
                                    <a target="_blank" class="instagram icon-g-67" href="<?php the_sub_field('instagram'); ?>">
                                        <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/icon-instagram.png" alt="">
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_row_layout() == 'linkedin_1_') : ?>
                                <li>
                                    <a target="_blank" class="linkedin" href="<?php the_sub_field('linkedin'); ?>">
                                        <i class='ion-social-linkedin'></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_row_layout() == 'telegram_1') : ?>
                                <li>
                                    <a target="_blank" class="telegram" href="<?php the_sub_field('telegram'); ?>">
                                        <img src="<?= get_template_directory_uri(); ?>/dist/images/icons/icon-telegram.png" alt="">
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_row_layout() == 'skype_1_') : ?>
                                <li>
                                    <a target="_blank" class="skype" href="<?php the_sub_field('skype'); ?>"></a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_row_layout() == 'vkontakte_1_') : ?>
                                <li>
                                    <a target="_blank" class="vkontakte" href="<?php the_sub_field('vkontakte'); ?>"></a>
                                </li>
                            <?php endif; ?>

                        <?php endwhile; ?>	
						
					</ul>
				</div>
			</div>
			

          <?php if( have_rows('footer_menu', 'option') ): ?>
         
              <?php while( have_rows('footer_menu', 'option') ): the_row();
                  // vars
                 // $footer_menu = get_sub_field('footer_menu'); ?>
                 
                    <div class="footer-col">

                <?php $featured_posts = get_sub_field('link_pages', 'option');
                      if( $featured_posts ): ?>
                          <ul class="menu">
                            <?php foreach( $featured_posts as $post ): 

                                // Setup this post for WP functions (variable must be named $post).
                                setup_postdata($post); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php endforeach; ?>
                          </ul>
                          <?php 
                          // Reset the global post object so that the rest of the page works correctly.
                          wp_reset_postdata(); ?>
                      <?php endif; ?>

    </div>

                <?php endwhile; ?>
            
            <?php endif; ?>

			
			<div class="footer-col">
				<h3>Contact Us</h3>
				<div class="footer-list">
    
                <?php if(do_shortcode('[code var=phone_link]')){  ?>
					<div class="footer-item"><img src="<?= get_template_directory_uri(); ?>/dist/images/icons/calling.png"><?php echo do_shortcode('[code var=phone_link]'); ?></div>
                  <?php }  ?>
                  
                 <?php if(do_shortcode('[code var=email_link]')){  ?>
					<div class="footer-item"><img src="<?= get_template_directory_uri(); ?>/dist/images/icons/mail.png"><?php echo do_shortcode( '[code var=email_link]' ); ?></div>
                  <?php }  ?>
                 <?php if(do_shortcode('[code var=time_work]')){  ?>
					<div class="footer-item"><img src="<?= get_template_directory_uri(); ?>/dist/images/icons/time.png">
						<Mon-Fri><?php echo do_shortcode( '[code var=time_work]' ); ?></Mon-Fri>
                  <?php }  ?>         
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">

		
		    <?php if( get_field('footer_copyright','option')){ ?>
			  <p><?php echo get_field('footer_copyright','option'); ?></p>
			<?php } ?>
			<div class="links">
			
              <?php $featured_posts = get_field('copyright_link', 'option');
                    if( $featured_posts ): ?>

                      <?php foreach( $featured_posts as $post ): 

                          // Setup this post for WP functions (variable must be named $post).
                          setup_postdata($post); ?>

                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                      <?php endforeach; ?>

                    <?php 
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                <?php endif; ?>

			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>