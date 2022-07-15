<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<div class="container">
		<div class="product-container">
			<div class="product-col">
				<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action('woocommerce_before_single_product_summary');
				remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10)
				?>
				<div class="product-akkordion left">
					<?php if (have_rows('description', 'option')):
						while (have_rows('description', 'option')): the_row();
							?>
							<div class="product-akkordion-item">
								<div class="title">
									<?php the_sub_field('title') ?>
								</div>
								<div class="content">
									<?php the_sub_field('content') ?></div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if (have_rows('video', 'option')):
						while (have_rows('video', 'option')): the_row();
							?>
							<div class="product-akkordion-item">
								<div class="title">
									<?php the_sub_field('title') ?>
								</div>
								<div class="content">
									<a data-fancybox data-width="640" data-height="360"
									   href="<?php the_sub_field('link') ?>" class="videos-item"><img class="img"
																									  src="<?php the_sub_field('picture') ?>"
																									  alt="pic">
										<div class="play"></div>
									</a>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if (have_rows('how_to_use', 'option')):
						while (have_rows('how_to_use', 'option')): the_row();
							?>
							<div class="product-akkordion-item">
								<div class="title">
									<?php the_sub_field('title') ?>
								</div>
								<div class="content">
									<?php the_sub_field('content') ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if (have_rows('shipping', 'option')):
						while (have_rows('shipping', 'option')): the_row();
							?>
							<div class="product-akkordion-item">
								<div class="title">
									<?php the_sub_field('title') ?>
								</div>
								<div class="content">
									<table cellpadding="0" cellspacing="0">
										<?php
										if (have_rows('table')):
											?>
											<tr>
											<?php
											while (have_rows('table')) : the_row();
												?>
												<td><?php the_sub_field('column') ?></td>
												<td class="padding"><?php the_sub_field('column_2') ?></td>
												<td><?php the_sub_field('column_3') ?></td>
												<?php
												?>
												</tr>
											<?php
											endwhile;

										endif;
										?>
									</table>
									<p><?php the_sub_field('span') ?></p>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="product-col ">
				<div class="product-info">
					<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */

					remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
					add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 5);
					remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
					add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 0);
					add_action('woocommerce_single_product_summary', 'woocommerce_upsell_display', 40);
					do_action('woocommerce_single_product_summary');
					?>
					<div class="product-akkordion">
						<?php if (have_rows('description', 'option')):
							while (have_rows('description', 'option')): the_row();
								?>
								<div class="product-akkordion-item">
									<div class="title">
										<?php the_sub_field('title') ?>
									</div>
									<div class="content">
										<?php the_sub_field('content') ?></div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if (have_rows('video', 'option')):
							while (have_rows('video', 'option')): the_row();
								?>
								<div class="product-akkordion-item">
									<div class="title">
										<?php the_sub_field('title') ?>
									</div>
									<div class="content">
										<a data-fancybox data-width="640" data-height="360"
										   href="<?php the_sub_field('link') ?>" class="videos-item"><img class="img"
																										  src="<?php the_sub_field('picture') ?>"
																										  alt="pic">
											<div class="play"></div>
										</a>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if (have_rows('how_to_use', 'option')):
							while (have_rows('how_to_use', 'option')): the_row();
								?>
								<div class="product-akkordion-item">
									<div class="title">
										<?php the_sub_field('title') ?>
									</div>
									<div class="content">
										<?php the_sub_field('content') ?>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if (have_rows('shipping', 'option')):
							while (have_rows('shipping', 'option')): the_row();
								?>
								<div class="product-akkordion-item">
									<div class="title">
										<?php the_sub_field('title') ?>
									</div>
									<div class="content">
										<table cellpadding="0" cellspacing="0">
											<?php
											if (have_rows('table')):
												?>
												<tr>
												<?php
												while (have_rows('table')) : the_row();
													?>
													<td><?php the_sub_field('column') ?></td>
													<td class="padding"><?php the_sub_field('column_2') ?></td>
													<td><?php the_sub_field('column_3') ?></td>
													<?php
													?>
													</tr>
												<?php
												endwhile;

											endif;
											?>
										</table>
										<p><?php the_sub_field('span') ?></p>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if( have_rows('list', 'option') ):

		?>
		<div class="plus">
			<div class="container">
				<div class="plus-list">
					<?php
					while ( have_rows('list', 'option') ) : the_row();
						?>
						<div class="plus-col">
							<div class="plus-item">
								<div class="pic"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></div>
								<h3><?php the_sub_field('text'); ?></h3>
							</div>
						</div>
					<?php
					endwhile;

					?>
				</div>
			</div>
		</div>
	<?php

	endif;
	?>


	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
	do_action('woocommerce_after_single_product_summary');
	?>
</div>
<div class="wp-block-woocommerce-all-reviews wc-block-all-reviews has-image has-name has-date has-rating has-content has-product-name" data-image-type="reviewer" data-orderby="most-recent" data-reviews-on-page-load="10" data-reviews-on-load-more="10" data-show-load-more="true" data-show-orderby="true"></div>
<?php //do_action('woocommerce_after_single_product'); ?>
<section class="join">
	<div class="container">
		<h2 class="title">Join our newsletter </h2>
		<p class="text">Receive exclusive offers, promotions and cool tips via mail. </p>
		<form>
			<input type="text" placeholder="Your Email">
			<button type="submit">
				<svg width="22" height="14" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 7.99875L18.86 7.99875L15.23 12.3587C15.0603 12.563 14.9786 12.8262 15.003 13.0907C15.0274 13.3551 15.1558 13.599 15.36 13.7687C15.5642 13.9385 15.8275 14.0201 16.0919 13.9958C16.3563 13.9714 16.6003 13.843 16.77 13.6387L21.77 7.63875C21.8036 7.59102 21.8337 7.54089 21.86 7.48875C21.86 7.43875 21.86 7.40875 21.93 7.35875C21.9753 7.24409 21.9991 7.12204 22 6.99875C21.9991 6.87546 21.9753 6.75341 21.93 6.63875C21.93 6.58875 21.93 6.55875 21.86 6.50875C21.8337 6.45661 21.8036 6.40647 21.77 6.35875L16.77 0.358748C16.676 0.245865 16.5582 0.155085 16.4252 0.0928635C16.2921 0.030642 16.1469 -0.0014911 16 -0.0012527C15.7663 -0.00170953 15.5399 0.0796656 15.36 0.228747C15.2587 0.312696 15.175 0.415798 15.1137 0.532145C15.0523 0.648492 15.0145 0.775798 15.0025 0.906775C14.9904 1.03775 15.0043 1.16982 15.0433 1.29543C15.0824 1.42103 15.1458 1.5377 15.23 1.63875L18.86 5.99875L1 5.99875C0.734784 5.99875 0.480429 6.1041 0.292893 6.29164C0.105357 6.47918 6.35255e-07 6.73353 6.12069e-07 6.99875C5.88883e-07 7.26396 0.105357 7.51832 0.292893 7.70585C0.480429 7.89339 0.734784 7.99875 1 7.99875Z" fill="white"></path>
				</svg>
			</button>
		</form>
	</div>
</section>

<section class="business-form">
	<div class="business-form-block">
		<button class="close"></button>
		<?php echo do_shortcode('[contact-form-7 id="12906" title="Business Gift?"]') ?>
	</div>
</section>
