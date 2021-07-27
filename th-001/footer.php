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
	
	
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- END #wp_footer -->
</body>
</html>
