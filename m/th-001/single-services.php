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


<div _ngcontent-tft-c43="" class="services-details-area ptb-100">

      <div _ngcontent-fya-c17="" class="container">
      <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
    </div>
    
   <div _ngcontent-tft-c43="" class="container">
      <div _ngcontent-tft-c43="" class="row">
         <div _ngcontent-tft-c43="" class="col-lg-4 col-md-12">
            <div _ngcontent-tft-c43="" class="widget-sidebar">
               <div _ngcontent-tft-c43="" class="sidebar-widget-form categories">
               
                  <div _ngcontent-rva-c29="" class="appointment-here-form">
                     <form _ngcontent-rva-c29="">


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
              </div>
               

               <div _ngcontent-tft-c43="" class="sidebar-widget categories">
                 
                 
                  <h3 _ngcontent-tft-c43="">Услуги</h3>
                  
                  
                  <ul _ngcontent-tft-c43="">
                  
                  
                      <?php  
                       $args = array(
                            'order' => 'DESC', // order filter  last post
                            'post_type'  => 'services', // Post type category BLOG
                            'posts_per_page' => -1, // echo show three post 
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
         </div>
         <div _ngcontent-tft-c43="" class="col-lg-8 col-md-12">
            <div _ngcontent-tft-c43="" class="services-details-content blog-details-content">
               <div _ngcontent-tft-c43="" class="services-details-img">
               
                 <img _ngcontent-kpp-c20="" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'services' ); ?>" alt="Image">

               </div>
               <div _ngcontent-tft-c43="" class="services-top-content  blog-top-content news-content-3">
                 
                  <div _ngcontent-tft-c43="" class="news-content">
                     <h1 _ngcontent-tft-c43=""><?php echo the_title(); ?></h1>
                  </div> 
                     
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
                  
                       <?php elseif( get_row_layout() == 'section_6' ): ?>
                       
                          <?php if( have_rows('box_list') ): ?>
                            <ul _ngcontent-hhs-c43="" class="box_list">
                              <?php while( have_rows('box_list') ): the_row();
                                  // vars
                                  $image = get_sub_field('imag');
                                  $title = get_sub_field('title');
                                  $paragraph = get_sub_field('paragraph');
                                  $link = get_sub_field('link');  ?>

                                   <li _ngcontent-hhs-c43=""><i _ngcontent-hhs-c43="" class="bx bx-check"></i> <?= $paragraph; ?></li>

                                <?php endwhile; ?>
                             </ul>
                            <?php endif; ?>

                  
                       <?php elseif( get_row_layout() == 'section_7' ): ?>
                       
                       <?php if( get_sub_field('title')): ?><!-- if under__the -->
                          <p + _ngcontent-ixk-c9="" style="font-size: 25px;margin-bottom: 0;color: #222;font-weight: 700;text-align: center;line-height: 1.2;"><?php the_sub_field('title'); ?></p>
                       <?php endif; ?>
              
                    <div _ngcontent-ixk-c9="" class="row">
                    
                    
                    
                     
                      <?php 
                      $imagesgallery = get_sub_field('box_gallary');
                      if( $imagesgallery ): ?>
                         <div _ngcontent-ixk-c9="" class="slider_box_gallary">
                              <?php foreach( $imagesgallery as $image ): ?>
                               
                                    <div _ngcontent-ixk-c9="" class="single-blog-post-img">
                                            
                                             <img src="<?php echo esc_url($image['sizes']['gallery__ser']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                             
                                       <?php if(0){ ?>
                                        <a href="<?php echo esc_url($image['url']); ?>">
                                             <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </a>
                                       <?php } ?>
                                       
                                    </div>
                              

                              <?php endforeach; ?>
                           </div>
                      <?php endif; ?>
                  </div>
                  
       
     
          <?php endif;
          endwhile;
      endif; ?>
         
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>





   <?php // check if the flexible content field has rows of data
    if( have_rows('home_pages' , '51') ):
         // loop through the rows of data
        while ( have_rows('home_pages' , '51') ) : the_row(); ?>
        
        <?php if( get_row_layout() == 'section_4' ): ?>

          <section _ngcontent-hmn-c29="" class="doctors-area pb-70">
           <div _ngcontent-hmn-c29="" class="container">
              <div _ngcontent-hmn-c29="" class="section-title">

                 <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                      <span + _ngcontent-rva-c29="" class="top-title"><?php the_sub_field('sub_text'); ?></span>
                 <?php endif; ?>
                 
                 <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2 + _ngcontent-hmn-c29=""><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

              </div>
              <div _ngcontent-hmn-c29="" class="row">
                    
        <div class="box__doctors__slid">    
     <?php  
       $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'doctors', // Post type category BLOG
            'posts_per_page' => -1, // echo show three post 
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post();  ?>

                <div>

                    <div _ngcontent-hmn-c29="" class="single-doctors-user">
                       <div _ngcontent-hmn-c29="" class="doctors-img">
                         
                         
                         <a href="<?=  get_the_permalink(); ?>"> <img _ngcontent-hmn-c29="" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'doctor_img' ); ?>" alt="Image"> </a>
                          
                          
                          <ul _ngcontent-hmn-c29="">
                             <li _ngcontent-hmn-c29=""><a _ngcontent-hmn-c29="" href="#" target="_blank"><i _ngcontent-hmn-c29="" class="bx bxl-facebook"></i></a></li>
                             <li _ngcontent-hmn-c29=""><a _ngcontent-hmn-c29="" href="#" target="_blank"><i _ngcontent-hmn-c29="" class="bx bxl-pinterest-alt"></i></a></li>
                             <li _ngcontent-hmn-c29=""><a _ngcontent-hmn-c29="" href="#" target="_blank"><i _ngcontent-hmn-c29="" class="bx bxl-twitter"></i></a></li>
                          </ul>
                       </div>
                       <div _ngcontent-hmn-c29="" class="doctors-content">
                          <span _ngcontent-hmn-c29="">Cosmetic Surgeon</span>
                          <h3 _ngcontent-hmn-c29=""><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
                       </div>
                    </div>
              
                </div>
              
           <?php }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>
      </div>     
            
              </div>
               <div _ngcontent-hmn-c29="" class="row">
               <div class="box__bottom">

              <?php $link = get_sub_field('link'); ?>

              <?php if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                  <a _ngcontent-dyl-c29="" routerlink="/" class="default-yallow"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
              </div>
             </div>
           </div>
        </section>
 
        <?php elseif( get_row_layout() == 'section_8' ): ?>

          <section _ngcontent-bes-c19="" class="services-area certificates services-area-two bg-t ptb-100">
               <div _ngcontent-bes-c19="" class="container">
                  <div _ngcontent-bes-c19="" class="row  sertification ">
                   

        <?php if( have_rows('box_list') ): ?>

            <?php while( have_rows('box_list') ): the_row();
                // vars
                $image = get_sub_field('img');
                $title = get_sub_field('title');
                $paragraph = get_sub_field('paragraph');  
                $link = get_sub_field('link');  ?>
            
                     <div _ngcontent-bes-c19="" class="col-lg-3 col-sm-6">
                        <div _ngcontent-bes-c19="" class="single-services">
                          <div _ngcontent-bes-c19="" class="services-img"><a _ngcontent-rva-c29="" href="<?php echo esc_url($image['url']); ?>" data-fancybox="images"  class="block__img__slider__"><img _ngcontent-bes-c19="" src="<?php echo $image['sizes']['pictare']; ?>" alt="Image"></a></div>
      
                        </div>
                     </div>

              <?php endwhile; ?>

          <?php endif; ?>

                    

                     
   
                    
                  </div>
               </div>
            </section>

        <?php elseif( get_row_layout() == 'section_9' ): ?>
        
        

            <section _ngcontent-bes-c19="" class="section__comment services-area certificates services-area-two bg-t ptb-100">
               <div _ngcontent-bes-c19="" class="container">
                  <div _ngcontent-bes-c19="" class="section-title">

                  </div>
                  <div _ngcontent-bes-c19="" class="row box__comment">

                    <?php

                    
                    while ( have_posts() ) :
                        the_post();

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                  </div>
               </div>
            </section>
            
         
          <?php endif;
          endwhile;
      endif; ?>





<!-- END #SINGLE -->
<?php
//get_sidebar();
get_footer();
