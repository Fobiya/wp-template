<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package th-001
 */

get_header(); ?>
<!-- #SINGLE -->

		<?php
		while ( have_posts() ) :
			the_post(); ?>

              <div _ngcontent-ixk-c9="" class="blog-details-area ptb-100">
                 <div _ngcontent-pem-c12="" class="container">
                    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                 </div>
                 <div _ngcontent-ixk-c9="" class="container">
                    <div _ngcontent-ixk-c9="" class="row">
                       <div _ngcontent-ixk-c9="" class="col-lg-12">
                          <div _ngcontent-ixk-c9="" class="blog-details-content">
                             <div _ngcontent-ixk-c9="" class="blog-details-img">
                                <img _ngcontent-ixk-c9="" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'postcontent' ); ?>" alt="Image">
                             </div>
                             <div _ngcontent-ixk-c9="" class="blog-top-content">

                              <?php if( get_the_title() ): ?><!-- if under__the -->
                                <h1 + _ngcontent-ixk-c9=""><?= get_the_title() ?></h1>
                              <?php endif; ?>

                              <?php // check if the flexible content field has rows of data
                              if( have_rows('single_post') ):
                                   // loop through the rows of data
                                  while ( have_rows('single_post') ) : the_row(); ?>
                                  <?php if( get_row_layout() == 'section_1' ): ?>

                                     <?php if( get_sub_field('title')): ?><!-- if under__the -->
                                        <h3 + _ngcontent-ixk-c9=""><?php the_sub_field('title'); ?></h3>
                                     <?php endif; ?>

                                  <?php elseif( get_row_layout() == 'section_2' ): ?>

                                   <div _ngcontent-ixk-c9="" class="news-content-2">
                                      <?php if( get_sub_field('title')): ?><!-- if under__the -->
                                          <p + _ngcontent-ixk-c9=""><?php the_sub_field('title'); ?></p>
                                       <?php endif; ?>
                                    </div>


                                  <?php elseif( get_row_layout() == 'section_3' ): ?>

                                    <blockquote _ngcontent-ixk-c9="">
                                      <?php if( get_sub_field('title')): ?><!-- if under__the -->
                                          <p + _ngcontent-ixk-c9=""><?php the_sub_field('title'); ?></p>
                                       <?php endif; ?>
                                       <i _ngcontent-ixk-c9="" class="flaticon-straight-quotes"></i>
                                    </blockquote>

                                  <?php elseif( get_row_layout() == 'section_4' ): ?>

                                    <div _ngcontent-ixk-c9="" class="row">
                                       <div _ngcontent-ixk-c9="" class="col-lg-6 col-md-6">
                                          <div _ngcontent-ixk-c9="" class="single-blog-post-img">

                                              <?php $images__1 = get_sub_field('images__12'); ?>

                                              <?php if( !empty( $images__1 ) ): ?>
                                                  <img + src="<?php echo esc_url($images__1['url']); ?>"  alt="<?php echo esc_attr($images__1['alt']); ?>">
                                              <?php endif; ?>   
                                          </div>
                                       </div>
                                       <div _ngcontent-ixk-c9="" class="col-lg-6 col-md-6">
                                          <div _ngcontent-ixk-c9="" class="single-blog-post-img">

                                              <?php $images__2 = get_sub_field('images__22'); ?>

                                              <?php if( !empty( $images__2 ) ): ?>
                                                  <img + src="<?php echo esc_url($images__2['url']); ?>"  alt="<?php echo esc_attr($images__2['alt']); ?>">
                                              <?php endif; ?>   

                                          </div>
                                       </div>
                                    </div>

                              <?php endif;
                              endwhile;
                          endif; ?>





                             </div>
                               <?php if(0){ ?>
                             <div _ngcontent-ixk-c9="" class="social">
                                <span _ngcontent-ixk-c9="">Share this post:</span>
                                <ul _ngcontent-ixk-c9="">
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" href="#" target="_blank"><i _ngcontent-ixk-c9="" class="bx bxl-facebook"></i></a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" href="#" target="_blank"><i _ngcontent-ixk-c9="" class="bx bxl-pinterest-alt"></i></a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" href="#" target="_blank"><i _ngcontent-ixk-c9="" class="bx bxl-twitter"></i></a></li>
                                </ul>
                             </div>


                             <div _ngcontent-ixk-c9="" class="comments">
                                <h3 _ngcontent-ixk-c9="">Comments (2)</h3>
                                <ul _ngcontent-ixk-c9="">
                                   <li _ngcontent-ixk-c9="">
                                      <img _ngcontent-ixk-c9="" src="assets/img/blog-details/comments-img-1.jpg" alt="Image">
                                      <h3 _ngcontent-ixk-c9="">Juanita Jones</h3>
                                      <span _ngcontent-ixk-c9="">Monday, August 20, 2020</span>
                                      <p _ngcontent-ixk-c9="">Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco laboris</p>
                                      <a _ngcontent-ixk-c9="" routerlink="/blog-details" href="/blog-details"> Reply </a>
                                   </li>
                                   <li _ngcontent-ixk-c9="">
                                      <img _ngcontent-ixk-c9="" src="assets/img/blog-details/comments-img-2.jpg" alt="Image">
                                      <h3 _ngcontent-ixk-c9="">Ward F. Nelson</h3>
                                      <span _ngcontent-ixk-c9="">Monday, August 20, 2020</span>
                                      <p _ngcontent-ixk-c9="">Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco laboris</p>
                                      <a _ngcontent-ixk-c9="" routerlink="/blog-details" href="/blog-details"> Reply </a>
                                   </li>
                                </ul>
                             </div>
                             <div _ngcontent-ixk-c9="" class="leave-reply">
                                <h3 _ngcontent-ixk-c9="">Leave a reply</h3>
                                <p _ngcontent-ixk-c9="">Your email address will not be published. Required fields are marked*</p>
                                <form _ngcontent-ixk-c9="">
                                   <div _ngcontent-ixk-c9="" class="row">
                                      <div _ngcontent-ixk-c9="" class="col-lg-6 col-sm-6">
                                         <div _ngcontent-ixk-c9="" class="form-group"><label _ngcontent-ixk-c9="">Name*</label><input _ngcontent-ixk-c9="" type="text" name="name" id="name" class="form-control"></div>
                                      </div>
                                      <div _ngcontent-ixk-c9="" class="col-lg-6 col-sm-6">
                                         <div _ngcontent-ixk-c9="" class="form-group"><label _ngcontent-ixk-c9="">Email address*</label><input _ngcontent-ixk-c9="" type="email" name="email" id="email" class="form-control"></div>
                                      </div>
                                      <div _ngcontent-ixk-c9="" class="col-lg-12">
                                         <div _ngcontent-ixk-c9="" class="form-group"><label _ngcontent-ixk-c9="">Your website</label><input _ngcontent-ixk-c9="" type="text" name="your-website-link" id="your-website-link" class="form-control"></div>
                                      </div>
                                      <div _ngcontent-ixk-c9="" class="col-lg-12 col-md-12">
                                         <div _ngcontent-ixk-c9="" class="form-group"><label _ngcontent-ixk-c9="">Comment</label><textarea _ngcontent-ixk-c9="" name="message" id="message" rows="8" class="form-control"></textarea></div>
                                      </div>
                                      <div _ngcontent-ixk-c9="" class="col-12">
                                         <div _ngcontent-ixk-c9="" class="form-group"><input _ngcontent-ixk-c9="" type="checkbox" id="chb2"><span _ngcontent-ixk-c9=""> Save my name, email, and website in this browser for the next time I comment. </span></div>
                                      </div>
                                      <div _ngcontent-ixk-c9="" class="col-lg-12 col-md-12"><button _ngcontent-ixk-c9="" type="submit" class="default-btn page-btn"> Post a comment </button></div>
                                   </div>
                                </form>
                             </div>
                             
                         <?php } ?>


                          </div>
                       </div>

                      <?php if(0){ ?>

                       <div _ngcontent-ixk-c9="" class="col-lg-4">
                          <div _ngcontent-ixk-c9="" class="widget-sidebar">
                             <div _ngcontent-ixk-c9="" class="sidebar-widget search">
                                <form _ngcontent-ixk-c9="" class="search-form"><input _ngcontent-ixk-c9="" name="search" placeholder="Search here" type="text" class="form-control"><button _ngcontent-ixk-c9="" type="submit" class="search-button"><i _ngcontent-ixk-c9="" class="bx bx-search"></i></button></form>
                             </div>
                             <div _ngcontent-ixk-c9="" class="sidebar-widget categories">
                                <h3 _ngcontent-ixk-c9="">Categories</h3>
                                <ul _ngcontent-ixk-c9="">
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Healthcare center</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/"> Dental care</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Cancer care</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Immediate care</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Diagnostic center</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Pediatric services</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Cardiology services</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Physical therapy</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Rehavilitation</a></li>
                                </ul>
                             </div>
                             <div _ngcontent-ixk-c9="" class="sidebar-widget tags">
                                <h3 _ngcontent-ixk-c9="">Tags</h3>
                                <ul _ngcontent-ixk-c9="">
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Equipment</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Health</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Mask</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Gloves</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Virus</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Cancer care</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Thermometer</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Medical</a></li>
                                   <li _ngcontent-ixk-c9=""><a _ngcontent-ixk-c9="" routerlink="/" href="/">Doctor</a></li>
                                </ul>
                             </div>
                             <div _ngcontent-ixk-c9="" class="sidebar-widget gallery mb-0">
                                <h3 _ngcontent-ixk-c9="" class="widget-title">Gallery</h3>
                                <ul _ngcontent-ixk-c9="">
                                   <li _ngcontent-ixk-c9=""><img _ngcontent-ixk-c9="" src="assets/img/gallery/gallery-1.jpg" alt="Image"></li>
                                   <li _ngcontent-ixk-c9=""><img _ngcontent-ixk-c9="" src="assets/img/gallery/gallery-2.jpg" alt="Image"></li>
                                   <li _ngcontent-ixk-c9=""><img _ngcontent-ixk-c9="" src="assets/img/gallery/gallery-3.jpg" alt="Image"></li>
                                   <li _ngcontent-ixk-c9=""><img _ngcontent-ixk-c9="" src="assets/img/gallery/gallery-4.jpg" alt="Image"></li>
                                   <li _ngcontent-ixk-c9=""><img _ngcontent-ixk-c9="" src="assets/img/gallery/gallery-5.jpg" alt="Image"></li>
                                   <li _ngcontent-ixk-c9=""><img _ngcontent-ixk-c9="" src="assets/img/gallery/gallery-6.jpg" alt="Image"></li>
                                </ul>
                             </div>
                          </div>
                       </div>

                      <?php } ?>

                    </div>
                 </div>
              </div>





			<?php 

//            the_post_navigation(
//				array(
//					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'th-001' ) . '</span> <span class="nav-title">%title</span>',
//					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'th-001' ) . '</span> <span class="nav-title">%title</span>',
//				)
//			);

			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>

<?php if(0){ ?>

	<main id="primary" class="site-main">
    
    

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'th-001' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'th-001' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	
<?php } ?>
	
<!-- END #SINGLE -->
<?php
//get_sidebar();
get_footer();
