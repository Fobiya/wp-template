<section class="reviews">
	<div class="container">
		<div class="reviews-container">
			<div class="reviews-content">
				<h2>What Our Clients Say</h2>
				<div class="reviews-list">
<!--					<div class="reviews-col">-->
<!--						<div class="reviews-item">-->
<!--							<div class="pic"><img src="--><?php //echo THEME_DIR_URI ?><!--/dist/images/instagram-7.png" alt="pic"></div>-->
<!--							<div class="content">-->
<!--								<div class="content-top">-->
<!--									<div class="star"><img src="--><?php //echo THEME_DIR_URI ?><!--/dist/images/icons/star-yellow.png" alt="star"><img src="--><?php //echo THEME_DIR_URI ?><!--/dist/images/icons/star-yellow.png" alt="star"><img src="--><?php //echo THEME_DIR_URI ?><!--/dist/images/icons/star-yellow.png" alt="star"><img src="--><?php //echo THEME_DIR_URI ?><!--/dist/images/icons/star-yellow.png" alt="star"><img src="--><?php //echo THEME_DIR_URI ?><!--/dist/images/icons/star-yellow.png" alt="star"></div>-->
<!--									<div class="data">DEC 12, 2022</div>-->
<!--								</div>-->
<!--								<div class="content-center">-->
<!--									<h3 class="title">Leslie Alexander</h3>-->
<!--									<div class="text">-->
<!--										<h4>Excellent!</h4>-->
<!--										<p>Does exactly as described. So goo I have just ordered another! Will also fit a glass in there. Excellent!</p>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="content-bottom"><span>Helpful?</span>-->
<!--									<div class="icon-list"><a class="icon-item like">0</a><a class="icon-item dislike">0</a></div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
					<?php echo do_shortcode('[wc_photo_reviews_shortcode
                   
                   pll_all_languages="on" comments_per_page="999" cols="1" cols_mobile="1" use_single_product="on" cols_gap="" products="" grid_bg_color="" grid_item_bg_color="" grid_item_border_color="" text_color="" star_color="" product_cat="" order="" orderby="comment_date_gmt" show_product="on" filter="on" pagination="on" pagination_ajax="on" pagination_pre="" pagination_next="" loadmore_button="off" filter_default_image="off" filter_default_verified="off" filter_default_rating="" pagination_position="" conditional_tag="" custom_css="" ratings="" mobile="on" style="masonry" masonry_popup="review" enable_box_shadow="on" full_screen_mobile="on" overall_rating="off" rating_count="off" only_images="off" image_popup="below_thumb"]') ?>
<!--					--><?php
//					$args = array(
//							'post_type'      => 'product',
//							'posts_per_page' => - 1,
//							'auction_arhive' => true,
//							'lang' => 'en',
//							'product_type'   => 'auction',
//					);
//					$loop = new WP_Query( $args );
//					$arr = [];
//					$str = '';
//					while ( $loop->have_posts() ) {
//						$loop->the_post();
//						$id = $post->ID;
//						$item = wc_get_product( $id );
//						array_push($arr, $id);
//						$str = $str .','. $id;
//					}
//					wp_reset_postdata();
//					echo do_shortcode('[wc_photo_reviews_shortcode comments_per_page="9999999" use_single_product="on" cols_gap="" products="'. $str .'"]')
//					?>
				</div>
			</div>
			<div class="reviews-pic"><img src="<?php echo THEME_DIR_URI ?>/dist/images/dog.png"></div>
		</div>
	</div>
</section>