<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
do_action( 'woocommerce_before_main_content' );

?>
<section class="catalog-intro">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</section>
<!--<header class="woocommerce-products-header">-->
<!--	--><?php //if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
<!--		<h1 class="woocommerce-products-header__title page-title">--><?php //woocommerce_page_title(); ?><!--</h1>-->
<!--	--><?php //endif; ?>
<!---->
<!--	--><?php
//	/**
//	 * Hook: woocommerce_archive_description.
//	 *
//	 * @hooked woocommerce_taxonomy_archive_description - 10
//	 * @hooked woocommerce_product_archive_description - 10
//	 */
//	do_action( 'woocommerce_archive_description' );
//	?>
<!--</header>-->
<div class="container">
	<div class="catalog-container">
		<?php if ( woocommerce_product_loop() ) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action( 'woocommerce_before_shop_loop' );

			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		} ?>
	</div>
</div>
<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action( 'woocommerce_sidebar' );
?>

	<section class="preview">
		<div class="section-title">
			<div class="container">
				<h2>Blog</h2>
			</div>
		</div>
		<div class="container">
			<div class="preview-container">
				<?php
				$args = array(
						'post_type' => 'post',
						'posts_per_page' => 4,
						'orderby' => 'date',
						'order' => 'DESC',
				);
				$q = new WP_Query($args);
				$item = 1;
				?>

				<?php if ($q->have_posts()) : ?>
				<?php echo '<div class="preview-col">' ?>
				<?php while ($q->have_posts()) :
				$q->the_post(); ?>
				<?php if ($item == 1) { ?>
				<a class="preview-item big" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
					<div class="data"><?php echo get_the_date() ?></div>
					<div class="content">
						<h3><?php the_title(); ?></h3>
						<p><?php
							$info = get_the_excerpt();
							$tm =  substr( strip_tags($info), 0, 100);
							echo $tm;
							echo (strlen($tm)<strlen($info))?'[...]':''
							?></p>
					</div>
				</a></div>
			<div class="preview-col">
				<?php } else { ?>
					<div class="preview-item small"><a class="pic" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<div class="content">
							<div class="data"><?php echo get_the_date() ?></div>
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3></a>
							<p><?php
								$info = get_the_excerpt();
								$tm =  substr( strip_tags($info), 0, 100);
								echo $tm;
								echo (strlen($tm)<strlen($info))?'[...]':''
								?></p>
						</div>
					</div>
				<?php }
				$item++ ?>
				<?php endwhile; ?>
				<?echo '</div>' ?>
				<?php endif; ?>

				<?php wp_reset_postdata(); ?>

			</div>
		</div>
	</section>
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

<?php
get_footer( 'shop' );
