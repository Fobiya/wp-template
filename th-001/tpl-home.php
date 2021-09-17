<?php
/**
* Template Name: Home Page*
*
*/
get_header(); ?>


<?php // check if the flexible content field has rows of data
    if( have_rows('home_pages') ):
         // loop through the rows of data
        while ( have_rows('home_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?> 

            <section class="cd-hero_js cd-hero">
               <div class="cd-hero-content">
                  <div class="display-3 QanelasThin">
                     <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <strong class="QanelasBold"><?php the_sub_field('title'); ?></strong>
                     <?php endif; ?>
                     <br> 
                     <?php the_sub_field('sub_text'); ?>     
                  </div>
                  
                <?php $link = get_sub_field('link'); ?>

                <?php if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-outline-primary SmoothScroll scroll__"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>

               </div>
            </section>

        <?php elseif( get_row_layout() == 'section_2' ): ?>

            <div class="about__doctor">
               <div class="container">
                  <div class="row">
                     <div class="col-md-7 col-lg-8">

                     <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h1 class="title"><?php the_sub_field('title'); ?></h1>
                     <?php endif; ?>
                       
                     <?php if( get_sub_field('content')): ?><!-- if under__the -->
                        <?php the_sub_field('content'); ?>
                     <?php endif; ?>
  
                        
                      <?php $link = get_sub_field('link'); ?>

                      <?php if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                          <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn p-0 linkicon"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>                   
                                                                    
                     </div>
                     <div class="col-md-5 col-lg-4">
                        <img alt="Хирург Руткас Александр Анатольевич" src="<?= get_template_directory_uri(); ?>/img/rutkas_schema.jpg" title="фото - Руткас Александр Анатольевич" class="img-fluid sr-only">

                        <?php $image = get_sub_field('image'); ?>

                        <?php if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>"  title="фото - Руткас Александр Анатольевич" class="img-fluid mt-4 mt-md-0">
                        <?php endif; ?>        

                     </div>
                  </div>
               </div>
            </div>

        <?php elseif( get_row_layout() == 'section_3' ): ?>

            <div class="featured__doctor">
               <div class="container">
                  <div class="row">

                    <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $paragraph = get_sub_field('paragraph');
                            $link = get_sub_field('link');  ?>

                             <div class="col-md-4 mb-5 mb-md-0">
                                <div class="f__d-item">
                                   <div class="f__d-icon01">

                                      <?php if( !empty( $image ) ): ?>
                                          <img width="64" height="64"  src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                      <?php endif; ?>   

                                   </div>
                                   <div class="h3"><?= $title; ?></div>
                                   <p><?= $paragraph; ?></p>
                                </div>
                             </div>

                          <?php endwhile; ?>

                      <?php endif; ?>

                    
                  </div>
               </div>
            </div>

        <?php elseif( get_row_layout() == 'section_4' ): ?> 

            <div class="service__doctor" id="service">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 mb-5 mb-lg-0">
 
                       <?php if( get_sub_field('title')): ?><!-- if under__the -->
                          <div class="title white"><?php the_sub_field('title'); ?></div>
                       <?php endif; ?>
                       
                       <?php $argsre = 1;?>
                     
                     
                           <ul class="list-unstyled">
                                          <?php  
                         $args = array(
                              'post_type' => 'uslugi',
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
                                  echo '<li><a data-slide="' . $argsre++ . '">' . get_the_title() . '</a></li>';
                              }

                          } else {
                              // no posts found
                          }
                          /* Restore original Post Data */
                          wp_reset_postdata();
                        ?>
                        
                          </ul>

                      
                       <?php $link = get_sub_field('link'); ?>

                      <?php if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                          <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"  class="btn p-0 linkicon" aria-pressed="true"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>    
 
                        
                     </div>
                     <div class="col-lg-9">
                       
                       
                        <div class="swiper-container swiper-container-horizontal">
                           <div class="swiper-slider">
                            
                            
                            
                       <?php  
                         $args = array(
                              'post_type' => 'uslugi',
                              'order' => 'DESC', // order filter  last post
                  //            'post_type'  => 'blog', // Post type category BLOG
                              'posts_per_page' => -1, // echo show three post 
//                              'category_name' => 'uslugi'
                          );
                          // The Query
                          $the_query = new WP_Query( $args );

                          // The Loop
                          if ( $the_query->have_posts() ) {

                              while ( $the_query->have_posts() ) {
                                  $the_query->the_post();  ?>
                                  
                                 <div>
                                    <div class="swiper-slide swiper-slide-active" data-hash="usluga1" style="width: 255px; margin-right: 30px;">
                                       <div class="s__d-item">
                                          <div class="s__d-cover" style="background: url(<?= get_the_post_thumbnail_url(); ?>); background-size:cover !important;"></div>
                                          <h3 class="itemHeight" style="height: 71px;"><a href="<?= get_the_permalink(); ?>"><?= the_title(); ?></a></h3>
                                       </div>
                                    </div>
                                 </div>
                             
                          <?php    }

                          } else {
                              // no posts found
                          }
                          /* Restore original Post Data */
                          wp_reset_postdata();
                        ?>
                            
                       
      
                           </div>
                           
                           <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>



        <?php endif;
        endwhile;
    endif; ?>



    <!--Header-->


    <!--Featured-->


    <!--Service-->


    <!--Portfolio-->
    

    <!--Review-->


<?=  get_template_part('tpl-maps'); ?>

<?php get_footer();