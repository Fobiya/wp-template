<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

	<div class="business">
		<button>
			<img src="<?php echo THEME_DIR_URI ?>/dist/images/icons/present.png" alt="icon">
			Business Gift?
		</button>
	</div>

<?php

if ( $upsells ) : ?>

	<section class="up-sells upsells products">
		<?php
		$heading = apply_filters( 'woocommerce_product_upsells_products_heading', __( 'Also you can interested in', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h3><?php echo esc_html( $heading ); ?></h3>
		<?php endif; ?>

<!--		--><?php //woocommerce_product_loop_start(); ?>

			<?php foreach ( $upsells as $upsell ) : ?>

				<?php
				$post_object = get_post( $upsell->get_id() );

				setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
				?>
					<div class="upsell-row">
						<div class="pic">
							<a href=""><?php do_action('woocommerce_before_shop_loop_item_title'); ?></a>
						</div>
						<div class="content">
							<?php

							do_action('woocommerce_shop_loop_item_title');
							do_action( 'woocommerce_after_shop_loop_item_title' );
							do_action( 'woocommerce_after_shop_loop_item' );
							?>
						</div>
					</div>
			<?php endforeach; ?>

<!--		--><?php //woocommerce_product_loop_end(); ?>

	</section>

	<?php
endif;

wp_reset_postdata();
