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
 
           <div class="home_pages__slider__section__1">

   
             <?php if( have_rows('box_list') ): ?>

                <?php while( have_rows('box_list') ): the_row();
                    // vars
                    $image = get_sub_field('img');
                    $title = get_sub_field('title');
                    $paragraph = get_sub_field('paragraph');
                    $link = get_sub_field('link');  ?>

                    <div>   
                    <section _ngcontent-rva-c29="" class="banner-area bg-2 banner-area-two" <?php if( !empty( $image ) ): ?>style="background:#fff url(<?php echo esc_url($image['url']); ?>) no-repeat center; background-size: cover;"<?php endif; ?>>
                     
                      <div _ngcontent-rva-c29="" class="section__block">
                        <div _ngcontent-rva-c29="" class="">
                           <div _ngcontent-rva-c29="" class="container">
                              <div _ngcontent-rva-c29="" class="banner-content">
                                <?php if($title){ ?> 
                                 <p _ngcontent-rva-c29="" data-wow-delay="1s" class="wow fadeInDown h1" style="visibility: visible; animation-delay: 1s; animation-name: fadeInDown;"><?= $title; ?></p>
                                <?php } ?>
                                <?php if($paragraph){ ?>
                                 <p _ngcontent-rva-c29="" data-wow-delay="1s" class="wow fadeInLeft" style="visibility: visible; animation-delay: 1s; animation-name: fadeInLeft;"><?= $paragraph; ?></p>
                                <?php } ?>

                                <?php if( $link ): 
                                      $link_url = $link['url'];
                                      $link_title = $link['title'];
                                      $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                     <div _ngcontent-rva-c29="" data-wow-delay="1s" class="banner-btn wow fadeInUp" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                                        <a _ngcontent-rva-c29="" routerlink="/about" class="default-yallow" rel="nofollow" target="<?php echo esc_attr( $link_target ); ?>"  href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                     </div>
                                <?php endif; ?>

                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </section>

                  </div>

                  <?php endwhile; ?>

              <?php endif; ?>

            </div>

           <?php if( have_rows('section_bottom') ): ?>

              <div _ngcontent-bpm-c29="" class="feature-area feature-area-two">
             <div _ngcontent-bpm-c29="" class="container-fluid">
                <div _ngcontent-bpm-c29="" class="row">

              <?php while( have_rows('section_bottom') ): the_row();
                  // vars
                  $image = get_sub_field('images');
                  $title = get_sub_field('title');
                  $paragraph = get_sub_field('paragraph');
                  $link = get_sub_field('link');  ?>

                   <div _ngcontent-bpm-c29="" class="col-lg-4 col-sm-6">
                      <div _ngcontent-bpm-c29="" class="single-feature <?php if(get_row_index() == '2'){ echo 'active'; } ?>">

                       <?php if(get_row_index() == '1'){ ?><a href="/doctors/"><i _ngcontent-lrd-c29="" class="flaticon-doctor-1"></i> <span _ngcontent-bpm-c29=""><?= $title; ?></span></a><?php } ?>
                        <?php if(get_row_index() == '2'){ ?><a data-fancybox="" data-src="#modal__open" href="javascript:;"><img _ngcontent-lrd-c29="" src="<?= get_template_directory_uri(); ?>/img/appointment.png" alt="Image"> <span _ngcontent-bpm-c29=""><?= $title; ?></span></a><?php } ?>
                        <?php if(get_row_index() == '3'){ ?><a href="#doctorhome"><i _ngcontent-lrd-c29="" class="flaticon-first-aid-kit"> <span _ngcontent-bpm-c29=""><?= $title; ?></span></i></a><?php } ?>

                      </div>
                   </div>

                <?php endwhile; ?>


                  </div>
               </div>
            </div>

           <?php endif; ?>

        <?php elseif( get_row_layout() == 'section_2' ): ?>

          <section _ngcontent-rva-c29="" class="choose-us-area-two ptb-100">
           <div _ngcontent-rva-c29="" class="container">
              <div _ngcontent-rva-c29="" class="row align-items-center">
                 <div _ngcontent-rva-c29="" class="col-lg-6 col-md-12">
                    <div _ngcontent-rva-c29="" class="choose-us-content-two">
  
                       <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                            <span + _ngcontent-rva-c29="" class="top-title"><?php the_sub_field('sub_text'); ?></span>
                       <?php endif; ?>
                       
                       <?php if( get_sub_field('title')): ?><!-- if under__the -->
                        <p + _ngcontent-rva-c29="" class="h2"><?php the_sub_field('title'); ?></p>
                       <?php endif; ?>

                       <?php if( get_sub_field('content')): ?><!-- if under__the -->
                        <p + _ngcontent-rva-c29=""><?php the_sub_field('content'); ?></p>
                       <?php endif; ?>
                       
                       <?php if( have_rows('box_list') ): ?>
                         <ul _ngcontent-rva-c29="">
                          <?php while( have_rows('box_list') ): the_row();
                              // vars
                              $image = get_sub_field('imgs');
                               $title = get_sub_field('title');
                              // $paragraph = get_sub_field('paragraph');
                              // $link = get_sub_field('link');  ?>

                              <li _ngcontent-rva-c29=""><span _ngcontent-rva-c29=""><?= get_row_index(); ?></span><?= $title; ?></li>

                            <?php endwhile; ?>
                           </ul>
                        <?php endif; ?>

                    <?php $link = get_sub_field('link'); ?>

                      <?php if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                          <a _ngcontent-rva-c29="" class="default-btn default-yallow" href="<?php echo esc_url( $link_url ); ?>"  target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

                      <?php endif; ?>

                    </div>
                 </div>
           
    
                  <?php if( have_rows('address-and-week') ): ?>
                    <?php while( have_rows('address-and-week') ): the_row(); 

                        // Get sub field values.
                        $image = get_sub_field('image');
                        $link = get_sub_field('link'); ?>



                         <div _ngcontent-rva-c29="" class="col-lg-6 col-md-12">
                            <div _ngcontent-rva-c29="" class="choose-us-img-two">
                               <img _ngcontent-rva-c29="" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                               
                               <?php if(0){ ?>
                                 <div _ngcontent-rva-c29="" class="address-and-week">

                                 <?php if( get_sub_field('title')): ?><!-- if under__the -->
                                  <p + _ngcontent-rva-c29=""><?php the_sub_field('title'); ?></p>
                                 <?php endif; ?>

                                  <div _ngcontent-rva-c29="" class="address-week">
                                     <ul _ngcontent-rva-c29="" class="address">

                                    <?php $phone = get_sub_field('phone'); ?>

                                       <?php if( $phone ): 
                                          $phone_url = $phone['url'];
                                          $phone_title = $phone['title'];
                                          $phone_target = $phone['target'] ? $phone['target'] : '_self'; ?>

                                          <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-telephone-1"></i><span _ngcontent-rva-c29=""></span><a _ngcontent-rva-c29="" href="<?php echo esc_url( $phone_url ); ?>"><?php echo esc_html( $phone_title ); ?></a></li>

                                       <?php endif; ?>



                                    <?php $Email = get_sub_field('Email'); ?>

                                       <?php if( $phone ): 
                                          $Email_url = $Email['url'];
                                          $Email_title = $Email['title'];
                                          $Email_target = $Email['target'] ? $Email['target'] : '_self'; ?>

                                        <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-arroba"></i><span _ngcontent-rva-c29=""></span><a _ngcontent-rva-c29="" href="mailto:<?php echo esc_url( $Email_url ); ?>"><?php echo esc_html( $Email_title ); ?></a></li>
                                     <?php endif; ?>


                                    <?php $address = get_sub_field('address'); ?>

                                   <?php if( $phone ): 
                                      $address_url = $address['url'];
                                      $address_title = $address['title'];
                                      $address_target = $address['target'] ? $address['target'] : '_self'; ?>

                                    <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-address-1"></i><span _ngcontent-rva-c29=""></span><a _ngcontent-rva-c29="" href="<?php echo esc_url( $address_url ); ?>"><?php echo esc_html( $address_title ); ?></a></li>

                                  <?php endif; ?>

                                     </ul>

                                   <?php if( have_rows('week') ): ?>
                                     <ul _ngcontent-rva-c29="" class="week">
                                        <?php while( have_rows('week') ): the_row();
                                            // vars
                                            $image = get_sub_field('imgs');
                                             $title = get_sub_field('title');
                                             $right = get_sub_field('right');
                                             $left = get_sub_field('left');
                                            // $link = get_sub_field('link');  ?>


                                              <li _ngcontent-rva-c29=""> <?= $left; ?> <span _ngcontent-rva-c29=""><?= $right; ?></span></li>

                                          <?php endwhile; ?>
                                         </ul>
                                      <?php endif; ?>


                                  </div>
                               </div>
                               <?php } ?>
                               
                                
                               
                              <div _ngcontent-rva-c29="" class="address-and-week">

                                        <p + _ngcontent-rva-c29=""><?= get_field('title_info', 'options'); ?></p>
                                  <div _ngcontent-rva-c29="" class="address-week">
                                      <ul _ngcontent-rva-c29="" class="address">
                                        <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-telephone-1"></i><span _ngcontent-rva-c29=""></span><?= do_shortcode( '[code var=phone_link]' ); ?></li>
                                        <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-telephone-1"></i><span _ngcontent-rva-c29=""></span><?= do_shortcode( '[code var=next_phone_link]' ); ?></li>
                                        <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-arroba"></i><span _ngcontent-rva-c29=""></span><?= do_shortcode( '[code var=email_link]' ); ?></li>
                                        <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-address-1"></i><span _ngcontent-rva-c29=""></span><?= do_shortcode( '[code var=address]' ); ?></li>
                                     </ul>

                                   <ul _ngcontent-rva-c29="" class="week">
                                      <li _ngcontent-rva-c29=""><?= get_field('time_work', 'options'); ?></li>
                                      <li _ngcontent-rva-c29=""> <?= get_field('consultations', 'options'); ?></li>
                                   </ul>
   
 
                                  </div>
                               </div>
                          
                               
                            
                            </div>
                          </div>

                      <?php endwhile; ?>
                  <?php endif; ?>

             
             
              </div>
           </div>
        </section>

        <?php elseif( get_row_layout() == 'section_3' ): ?>
        
          <?php  $image = get_sub_field('images'); ?>

          <section _ngcontent-rva-c29="" class="appointment-area pb-100">
           <div _ngcontent-rva-c29="" class="container">
              <div _ngcontent-rva-c29="" class="appointment-here-form">
                 <form _ngcontent-rva-c29="">
                    <div _ngcontent-rva-c29="" class="row align-items-center">
                       <div _ngcontent-rva-c29="" class="col-lg-3 col-sm-6">
                          <h3 _ngcontent-rva-c29="">Заказать консультацию</h3>
                       </div>
                       <div _ngcontent-rva-c29="" class="col-lg-3 col-sm-6">
                          <div _ngcontent-rva-c29="" class="form-group">
                             <div _ngcontent-rva-c29="" id="datetimepicker" class="input-group date"><input _ngcontent-rva-c29="" type="text" placeholder="Имя*" class="form-control"><span _ngcontent-rva-c29="" class="input-group-addon"></span></div>

                          </div>
                       </div>

                       <div _ngcontent-rva-c29="" class="col-lg-3 col-sm-6">
                          <div _ngcontent-rva-c29="" class="form-group">
                             <div _ngcontent-rva-c29="" id="datetimepicker" class="input-group date"><input _ngcontent-rva-c29="" type="text" placeholder="Номер телефона*" class="form-control"><span _ngcontent-rva-c29="" class="input-group-addon"></span></div>

                          </div>
                       </div>
                       <div _ngcontent-rva-c29="" class="col-lg-3 col-sm-6"><button _ngcontent-rva-c29="" type="submit" class="default-btn"> ОТПРАВТЬ</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </section>

          <section _ngcontent-rva-c29="" class="services-area services-area-two ptb-100"  <?php if( !empty( $image ) ): ?>style="background:#fff url(<?php echo esc_url($image['url']); ?>) no-repeat center; background-size: cover; background-attachment: fixed;"<?php endif; ?>>
           <div _ngcontent-rva-c29="" class="container">
              <div _ngcontent-rva-c29="" class="section-title">

                   <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                    <span + _ngcontent-rva-c29=""><?php the_sub_field('sub_text'); ?></span>
                   <?php endif; ?>

                   <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <p _ngcontent-rva-c29="" class="h2"><?php the_sub_field('title'); ?></p>
                   <?php endif; ?>

              </div>


          <div + _ngcontent-rva-c29="" class="row services-area__slider">

    
     <?php  
       $args = array(
          'order' => 'DESC', // order filter  last post
          'post_type'  => 'services', // Post type category BLOG
          'posts_per_page' => 6, // echo show three post
             'orderby' => 'post__in', 
    'post__in' => array(230,226,231,769,232,770),
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post();  ?>
  
            

               
                       <div + _ngcontent-rva-c29="" class="col-lg-4 col-sm-6">    

                       <div class="owl-item cloned" style="">
                          <div _ngcontent-rva-c29="" class="single-services-section">
                             <div _ngcontent-rva-c29="" class="services-img">

                              <a _ngcontent-rva-c29="" href="<?= get_the_permalink(); ?>">
                                <img + _ngcontent-rva-c29=""  src="<?= get_the_post_thumbnail_url( get_the_ID(), 'post_img' ); ?>"  alt="slider">
                             </a>
                             </div>
                             <div _ngcontent-rva-c29="" class="services-content">
                                <h3 _ngcontent-rva-c29=""><a _ngcontent-rva-c29="" href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
                             </div>
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

        </section>

        <?php elseif( get_row_layout() == 'section_4' ): ?> 

          <section _ngcontent-hmn-c29="" class="doctors-area pt-100 pb-70">
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
                                   <li _ngcontent-hmn-c29=""><span>Я на :</span> </li>
                                   
                                   
             <?php // check if the flexible content field has rows of data
                  if( have_rows('doctors') ):
                       // loop through the rows of data
                      while ( have_rows('doctors') ) : the_row(); ?>
                      <?php if( get_row_layout() == 'section_1' ): ?>

                        <?php if( have_rows('soseal') ): ?>

                          <?php while( have_rows('soseal') ): the_row();
                              // vars
                              $facebook = get_sub_field('facebook');
                              $youtube = get_sub_field('youtube'); ?>


                              <?php if( $facebook ): 
                                    $link_url = $facebook['url'];
                                    $link_title = $facebook['title'];
                                    $link_target = $facebook['target'] ? $facebook['target'] : '_self'; ?>

                                      <li _ngcontent-kpp-c20=""><a _ngcontent-kpp-c20="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><i _ngcontent-kpp-c20="" class="bx bxl-facebook"></i></a></li>

                              <?php endif; ?>


                              <?php if( $youtube ): 
                                    $link_url = $youtube['url'];
                                    $link_title = $youtube['title'];
                                    $link_target = $youtube['target'] ? $youtube['target'] : '_self'; ?>

                                      <li _ngcontent-kpp-c20=""><a _ngcontent-kpp-c20="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><i _ngcontent-kpp-c20="" class="bx bxl-youtube"></i></a></li>

                              <?php endif; ?>


                            <?php endwhile; ?>
             
                        <?php endif; ?>

                    <?php endif;
                    endwhile;
                endif; ?>
                         
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
 
        <?php elseif( get_row_layout() == 'section_5' ): ?>

          <section _ngcontent-isl-c46="" class="services-area ptb-100">
           <div _ngcontent-isl-c46="" class="container">
             
             
            <div _ngcontent-isl-c46="" class="section-title">
                 
                 <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                      <span + _ngcontent-rva-c29="" class="top-title"><?php the_sub_field('sub_text'); ?></span>
                 <?php endif; ?>
                 
                 <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2 + _ngcontent-hmn-c29=""><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>
                 
                 
              </div>
            <div _ngcontent-isl-c46="" class="row">   
               <div _ngcontent-isl-c46="" class="col-lg-12 col-sm-12">
               
                   <?php the_sub_field('content'); ?>
               </div>
                        
             </div> 
              
              
              <div _ngcontent-isl-c46="" class="row">

                   <?php  
                     $args = array(
                        'order' => 'DESC', // order filter  last post
                        'post_type'  => 'presentation', // Post type category BLOG
                        'posts_per_page' => 3, // echo show three post 
                      );
                      // The Query
                      $the_query = new WP_Query( $args );

                      // The Loop
                      if ( $the_query->have_posts() ) {

                          while ( $the_query->have_posts() ) {
                              $the_query->the_post();  ?>

                               <div _ngcontent-isl-c46="" class="col-lg-4 col-sm-6">
                                  <div _ngcontent-isl-c46="" class="single-services-section">
                                    <div _ngcontent-isl-c46="" class="box__img"><a _ngcontent-isl-c46="" href="<?= get_the_permalink(); ?>">
                                    <img _ngcontent-isl-c46="" src="<?= get_the_post_thumbnail_url( get_the_ID()); ?>" alt="Image">
                                    </a></div>
                                    <a _ngcontent-isl-c46="" href="<?= get_the_permalink(); ?>" class="default-btn"><?= get_the_title(); ?></a>

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
           <div _ngcontent-isl-c46="" class="services-shape"><img _ngcontent-isl-c46="" src="<?= get_template_directory_uri(); ?>/img/services-shape.png" alt="Image"></div>
        </section>

        <?php elseif( get_row_layout() == 'section_6' ): ?>

           <section _ngcontent-hmn-c29="" class="counter-area pb-100">
   <div _ngcontent-hmn-c29="" class="container">
      <div _ngcontent-hmn-c29="" class="counter-bg" style="background: #eaecf1 url('<?= get_template_directory_uri(); ?>/img/counter-bg.03326bc2e4a1f5ffb6eb.png');">
         <div _ngcontent-hmn-c29="" class="row">
           
       <?php if( have_rows('box_list') ): ?>

        <?php while( have_rows('box_list') ): the_row();
            // vars
            $image = get_sub_field('imag');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $link = get_sub_field('link');  ?>
            
             <div _ngcontent-hmn-c29="" class="col-lg-3 col-sm-6">
               <div _ngcontent-hmn-c29="" class="single-counter">
                  <i _ngcontent-hmn-c29="" class="<?php if(get_row_index() == '1'){ echo 'flaticon-satisfy'; }else if(get_row_index() == '2'){ echo 'flaticon-doctor'; }else if(get_row_index() == '3'){ echo 'flaticon-hospital-bed'; }else if(get_row_index() == '4'){ echo 'flaticon-experience'; } ?>"></i>
                  <h2 _ngcontent-hmn-c29="">
                     <span _ngcontent-hmn-c29="" data-count="1688" class="odometer odometer-auto-theme"> <?= $title; ?> </span>
                  </h2>
                  <h3 _ngcontent-hmn-c29=""><?= $paragraph; ?></h3>
               </div>
            </div>
            

          <?php endwhile; ?>

      <?php endif; ?>
   
         </div>
      </div>
   </div>
</section>

        <?php elseif( get_row_layout() == 'section_7' ): ?>

           <section id="doctorhome" _ngcontent-bes-c34="" class="our-portfolio-area ptb-100">
           <div _ngcontent-bes-c34="" class="container">
              <div _ngcontent-bes-c34="" class="section-title">
                
               <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                      <span + _ngcontent-rva-c29="" class="top-title"><?php the_sub_field('sub_text'); ?></span>
                 <?php endif; ?>
                 
                 <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2 + _ngcontent-hmn-c29=""><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

              </div>
              <div _ngcontent-bes-c34="" class="row">
                
                <div class="ourportfolioarea">       
                   <?php  
                     $args = array(
                        'order' => 'DESC', // order filter  last post
                        'post_type'  => 'accommodations', // Post type category BLOG
                        'posts_per_page' => -1, // echo show three post 
                      );
                      // The Query
                      $the_query = new WP_Query( $args );

                      // The Loop
                      if ( $the_query->have_posts() ) {

                          while ( $the_query->have_posts() ) {
                              $the_query->the_post();  ?>

                               <div>
                                  <div _ngcontent-bes-c34="" class="single-portfolio">
                                     <a _ngcontent-rva-c29="" href="<?= get_the_permalink(); ?>"><img _ngcontent-bes-c34="" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'ourportfolio' ); ?>" alt="Image"></a>
                                     <div _ngcontent-bes-c34="" class="portfolio-content">

                                          <h3 _ngcontent-rva-c29=""><a _ngcontent-rva-c29="" href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
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
                
                
             <div _ngcontent-bes-c34="" class="row">
                    <a _ngcontent-dyl-c29="" routerlink="/" class="default-btn default-yallow" data-fancybox="" data-src="#modal__open" href="javascript:;">Бесплатная консультация 24/7</a>
             </div>
                 
                 
           
     
             
           </div>
        </section>

        <?php elseif( get_row_layout() == 'section_8' ): ?>
            

            <section _ngcontent-bes-c19="" class="services-area certificates services-area-two bg-t ptb-100">
               <div _ngcontent-bes-c19="" class="container">
                  <div _ngcontent-bes-c19="" class="section-title">

                 <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                      <span + _ngcontent-rva-c29="" class="top-title"><?php the_sub_field('sub_text'); ?></span>
                 <?php endif; ?>
                 
                 <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2 + _ngcontent-hmn-c29=""><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                    
                  </div>
                  <div _ngcontent-bes-c19="" class="sertification">
                   

                    <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $image = get_sub_field('img');
                            $title = get_sub_field('title');
                            $paragraph = get_sub_field('paragraph');  
                            $link = get_sub_field('link');  ?>

                                 <div _ngcontent-bes-c19="" class="col-lg-3 col-sm-6">
                                    <div _ngcontent-bes-c19="" class="single-services">
                                      <div _ngcontent-bes-c19="" class="services-img">
                                        <a _ngcontent-rva-c29="" href="<?php echo esc_url($image['url']); ?>" data-fancybox="images" class="block__img__slider__"><img _ngcontent-bes-c19="" src="<?php echo $image['sizes']['pictare']; ?>" alt="Image"></a>
                                      </div>

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

                 <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                      <span + _ngcontent-rva-c29="" class="top-title"><?php the_sub_field('sub_text'); ?></span>
                 <?php endif; ?>
                 
                 <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2 + _ngcontent-hmn-c29=""><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                    
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

        <?php elseif( get_row_layout() == 'section_10' ): ?>

          <section _ngcontent-hmn-c29="" class="blog-area pt-100 pb-70">
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
                 
             <?php  
                  
                  $numer = 1;
                  
                     $args = array(
                        'order' => 'DESC', // order filter  last post
                        'post_type'  => 'news', // Post type category BLOG
                        'posts_per_page' => 4, // echo show three post 
                      );
                      // The Query
                      $the_query = new WP_Query( $args );

                      // The Loop
                      if ( $the_query->have_posts() ) {

                          while ( $the_query->have_posts() ) {
                              $the_query->the_post(); ?>
                              
                      
                           
                             
                   <?php if($numer === 1 || $numer === 2) { ?>
                             
                            <?php //  echo  $numer; ?>

                           <div _ngcontent-hmn-c29="" class="col-lg-4 col-md-6">
                              <div _ngcontent-hmn-c29="" class="single-blog-post">
                                 <div _ngcontent-hmn-c29="" class="blog-img">
                                    <a _ngcontent-hmn-c29="" routerlink="/blog-details" href="<?= get_the_permalink(); ?>">
                                      <img _ngcontent-hmn-c29="" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'news' ); ?>" alt="Image">
                                    </a>
                                    <div _ngcontent-hmn-c29="" class="date">
                                       <ul _ngcontent-hmn-c29="">
                                          <li _ngcontent-pem-c12=""><?= the_date('d'); ?></li>
                                          <li _ngcontent-pem-c12=""><?= the_time('M'); ?></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div _ngcontent-hmn-c29="" class="blog-content">
                                    <span _ngcontent-hmn-c29="">Новости</span>
                                    <h3 _ngcontent-hmn-c29=""><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="<?= get_the_permalink(); ?>"><?=  the_title(); ?></a></h3>
                                    <ul _ngcontent-hmn-c29="">
                                      <?php if(0){ ?>
                                       <li _ngcontent-hmn-c29="">By: <a _ngcontent-hmn-c29="" routerlink="/" href="/">Curtis Warren</a></li>
                                         <?php } ?>
                                       <li _ngcontent-hmn-c29="" class="read"><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="<?= get_the_permalink(); ?>">Подробнее <i _ngcontent-hmn-c29="" class="flaticon-right-arrow"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>

                   
                    <?php }else{ ?>
                                          
                          <?php //  echo  $numer; ?>
                              
                          <?php  if($numer === 3){echo '<div _ngcontent-hmn-c29="" class="col-lg-4 col-md-6 offset-md-3 offset-lg-0"> '; } ?>
                          
                          
                            <?php  if($numer === 3 || $numer === 4) { ?>
             
                                <div _ngcontent-hmn-c29="" class="single-blog-post">
                                   <div _ngcontent-hmn-c29="" class="blog-content">
                                      <span _ngcontent-hmn-c29="">Новости</span>
                                      <h3 _ngcontent-hmn-c29=""><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="<?= get_the_permalink(); ?>"><?=  the_title(); ?></a></h3>
                                      <ul _ngcontent-hmn-c29="">
                                                                              <?php if(0){ ?>
                                         <li _ngcontent-hmn-c29="">By: <a _ngcontent-hmn-c29="" routerlink="/" href="/">Milton Baines</a></li>
                                         
                                           <?php } ?>
                                         <li _ngcontent-hmn-c29="" class="read"><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="<?= get_the_permalink(); ?>">Подробнее <i _ngcontent-hmn-c29="" class="flaticon-right-arrow"></i></a></li>
                                      </ul>
                                   </div>
                                </div>

                              <?php } ?>
                              
                                  <?php  if($numer === 4){echo '</div> '; } ?>
                            
              
                                      
                          <?php } ?>
                   
                                                      
                                                         
                                         
                             
                 <?php if(0){ ?>
                  
                   <div _ngcontent-hmn-c29="" class="col-lg-4 col-md-6">
                      <div _ngcontent-hmn-c29="" class="single-blog-post">
                         <div _ngcontent-hmn-c29="" class="blog-img">
                            <a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details"><img _ngcontent-hmn-c29="" src="assets/img/blog/blog-1.jpg" alt="Image"></a>
                            <div _ngcontent-hmn-c29="" class="date">
                               <ul _ngcontent-hmn-c29="">
                                  <li _ngcontent-hmn-c29="">07</li>
                                  <li _ngcontent-hmn-c29="">Sep</li>
                               </ul>
                            </div>
                         </div>
                         <div _ngcontent-hmn-c29="" class="blog-content">
                            <span _ngcontent-hmn-c29="">General news</span>
                            <h3 _ngcontent-hmn-c29=""><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details">It might be time to seek a medical your muscle and joint pain</a></h3>
                            <ul _ngcontent-hmn-c29="">
                               <li _ngcontent-hmn-c29="">By: <a _ngcontent-hmn-c29="" routerlink="/" href="/">Curtis Warren</a></li>
                               <li _ngcontent-hmn-c29="" class="read"><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details">Read More <i _ngcontent-hmn-c29="" class="flaticon-right-arrow"></i></a></li>
                            </ul>
                         </div>
                      </div>
                   </div>

                   <div _ngcontent-hmn-c29="" class="col-lg-4 col-md-6">
                      <div _ngcontent-hmn-c29="" class="single-blog-post">
                         <div _ngcontent-hmn-c29="" class="blog-img">
                            <a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details"><img _ngcontent-hmn-c29="" src="assets/img/blog/blog-2.jpg" alt="Image"></a>
                            <div _ngcontent-hmn-c29="" class="date">
                               <ul _ngcontent-hmn-c29="">
                                  <li _ngcontent-hmn-c29="">08</li>
                                  <li _ngcontent-hmn-c29="">Sep</li>
                               </ul>
                            </div>
                         </div>
                         <div _ngcontent-hmn-c29="" class="blog-content">
                            <span _ngcontent-hmn-c29="">General news</span>
                            <h3 _ngcontent-hmn-c29=""><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details">The reassurance of a safe pregnancy through the birth of your baby</a></h3>
                            <ul _ngcontent-hmn-c29="">
                               <li _ngcontent-hmn-c29="">By: <a _ngcontent-hmn-c29="" routerlink="/" href="/">James Lopez</a></li>
                               <li _ngcontent-hmn-c29="" class="read"><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details">Read More <i _ngcontent-hmn-c29="" class="flaticon-right-arrow"></i></a></li>
                            </ul>
                         </div>
                      </div>
                   </div>

                   <div _ngcontent-hmn-c29="" class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                     
                      <div _ngcontent-hmn-c29="" class="single-blog-post">
                         <div _ngcontent-hmn-c29="" class="blog-content">
                            <span _ngcontent-hmn-c29="">General news</span>
                            <h3 _ngcontent-hmn-c29=""><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details">Read up on different types of fevers that may require a doctor</a></h3>
                            <ul _ngcontent-hmn-c29="">
                               <li _ngcontent-hmn-c29="">By: <a _ngcontent-hmn-c29="" routerlink="/" href="/">Milton Baines</a></li>
                               <li _ngcontent-hmn-c29="" class="read"><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details">Read More <i _ngcontent-hmn-c29="" class="flaticon-right-arrow"></i></a></li>
                            </ul>
                         </div>
                      </div>
                      <div _ngcontent-hmn-c29="" class="single-blog-post">
                         <div _ngcontent-hmn-c29="" class="blog-content">
                            <span _ngcontent-hmn-c29="">General news</span>
                            <h3 _ngcontent-hmn-c29=""><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details">Read up on different types of fevers that may require a doctor</a></h3>
                            <ul _ngcontent-hmn-c29="">
                               <li _ngcontent-hmn-c29="">By: <a _ngcontent-hmn-c29="" routerlink="/" href="/">Milton Baines</a></li>
                               <li _ngcontent-hmn-c29="" class="read"><a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details">Read More <i _ngcontent-hmn-c29="" class="flaticon-right-arrow"></i></a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                     
                  <?php }
                  
                  
                  $numer++;
                            
                  ?>
                             
                             

                             <?php }

                      } else {
                          // no posts found
                      }
                      /* Restore original Post Data */
                      wp_reset_postdata();
                    ?> 
                   
                </div>
             </div>
          </section>

        <?php elseif( get_row_layout() == 'section_11' ): ?>

          <section _ngcontent-rsh-c37="" class="pricing-area pt-100 pb-70">
   <div _ngcontent-rsh-c37="" class="container">
      <div _ngcontent-rsh-c37="" class="section-title">

         <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
              <span + _ngcontent-rva-c29="" class="top-title"><?php the_sub_field('sub_text'); ?></span>
         <?php endif; ?>

         <?php if( get_sub_field('title')): ?><!-- if under__the -->
            <h2 + _ngcontent-hmn-c29=""><?php the_sub_field('title'); ?></h2>
        <?php endif; ?>

      </div>
      <div _ngcontent-rsh-c37="" class="row">
         <div _ngcontent-rsh-c37="" class="col-lg-12 col-sm-12">
          <?php
          $featured_posts = get_sub_field('services');
          if( $featured_posts ): ?>
              <ul class="pricing-area-list">
              <?php foreach( $featured_posts as $post ): 

                  // Setup this post for WP functions (variable must be named $post).
                  setup_postdata($post); ?>
                  <li>
                     
                         <a _ngcontent-rsh-c37="" class="default-btn" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                  </li>
              <?php endforeach; ?>
              </ul>
              <?php 
              // Reset the global post object so that the rest of the page works correctly.
              wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
         
         <?php if(0){ ?>

           <div _ngcontent-rsh-c37="" class="col-lg-4 col-sm-6">
              <div _ngcontent-rsh-c37="" class="single-pricing">
                 <h3 _ngcontent-rsh-c37="">Starter</h3>
                 <h2 _ngcontent-rsh-c37=""><sub _ngcontent-rsh-c37="">$</sub>79</h2>
                 <span _ngcontent-rsh-c37="">Per Mouth</span>
                 <h4 _ngcontent-rsh-c37="">Features</h4>
                 <ul _ngcontent-rsh-c37="">
                    <li _ngcontent-rsh-c37="">Doctors charge fees</li>
                    <li _ngcontent-rsh-c37="">Emergency room</li>
                    <li _ngcontent-rsh-c37="">Hospital services</li>
                    <li _ngcontent-rsh-c37="">Primary care</li>
                    <li _ngcontent-rsh-c37="">Medico legal fees</li>
                    <li _ngcontent-rsh-c37="">Routine checkup</li>
                 </ul>
                 <a _ngcontent-rsh-c37="" routerlink="/" class="default-btn" href="/">Make payment</a>
              </div>
           </div>
           <div _ngcontent-rsh-c37="" class="col-lg-4 col-sm-6">
              <div _ngcontent-rsh-c37="" class="single-pricing active">
                 <h3 _ngcontent-rsh-c37="">Basic</h3>
                 <h2 _ngcontent-rsh-c37=""><sub _ngcontent-rsh-c37="">$</sub>99</h2>
                 <span _ngcontent-rsh-c37="">Per Mouth</span>
                 <h4 _ngcontent-rsh-c37="">Features</h4>
                 <ul _ngcontent-rsh-c37="">
                    <li _ngcontent-rsh-c37="">Doctors charge fees</li>
                    <li _ngcontent-rsh-c37="">Emergency room</li>
                    <li _ngcontent-rsh-c37="">Hospital services</li>
                    <li _ngcontent-rsh-c37="">Primary care</li>
                    <li _ngcontent-rsh-c37="">Medico legal fees</li>
                    <li _ngcontent-rsh-c37="">Routine checkup</li>
                 </ul>
                 <a _ngcontent-rsh-c37="" routerlink="/" class="default-btn" href="/">Make payment</a>
              </div>
           </div>
           <div _ngcontent-rsh-c37="" class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
              <div _ngcontent-rsh-c37="" class="single-pricing">
                 <h3 _ngcontent-rsh-c37="">Premium</h3>
                 <h2 _ngcontent-rsh-c37=""><sub _ngcontent-rsh-c37="">$</sub>129</h2>
                 <span _ngcontent-rsh-c37="">Per Mouth</span>
                 <h4 _ngcontent-rsh-c37="">Features</h4>
                 <ul _ngcontent-rsh-c37="">
                    <li _ngcontent-rsh-c37="">Doctors charge fees</li>
                    <li _ngcontent-rsh-c37="">Emergency room</li>
                    <li _ngcontent-rsh-c37="">Hospital services</li>
                    <li _ngcontent-rsh-c37="">Primary care</li>
                    <li _ngcontent-rsh-c37="">Medico legal fees</li>
                    <li _ngcontent-rsh-c37="">Routine checkup</li>
                 </ul>
                 <a _ngcontent-rsh-c37="" routerlink="/" class="default-btn" href="/">Make payment</a>
              </div>
           </div>

         <?php } ?>
         
      </div>
   </div>
</section>

          <?php endif;
          endwhile;
      endif; ?>


  

 
 



<?php get_footer();