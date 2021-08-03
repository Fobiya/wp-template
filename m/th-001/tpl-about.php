<?php
/**
* Template Name: About Page*
*
*/
get_header(); ?>
   
   
   
    <?php // check if the flexible content field has rows of data
    if( have_rows('about_pages') ):
         // loop through the rows of data
        while ( have_rows('about_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>
    
           <section _ngcontent-jiu-c7="" class="choose-us-area ptb-100">
              <div _ngcontent-fya-c17="" class="container">
                <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
              </div>

              <div _ngcontent-jiu-c7="" class="container">

                 <div _ngcontent-jiu-c7="" class="row align-items-center">
                    <div _ngcontent-jiu-c7="" class="col-lg-12 col-md-12">
                        <div _ngcontent-jiu-c7="" class="section-title">
                           <?php if( get_sub_field('title')): ?><!-- if under__the -->
                            <h2 + _ngcontent-rva-c29=""><?php the_sub_field('title'); ?></h2>
                           <?php endif; ?>
                       </div>
                    </div>
                    <div _ngcontent-jiu-c7="" class="col-lg-6 col-md-12">
                    

                    
                    
                   <?php $ittmage = get_sub_field('images'); ?>

                    <?php if( !empty( $ittmage ) ): ?>
                        <img src="<?php echo esc_url($ittmage['url']); ?>"  alt="<?php echo esc_attr($ittmage['alt']); ?>">
                    <?php endif; ?>  
                    
                   </div>
                    
                    <div _ngcontent-jiu-c7="" class="col-lg-6 col-md-12">
                       <div _ngcontent-jiu-c7="" class="choose-us-content">
                           <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                            <h3 + _ngcontent-jiu-c7=""><?php the_sub_field('sub_text'); ?></h3>
                           <?php endif; ?>

                           <?php if( get_sub_field('content')): ?><!-- if under__the -->
                            <p + _ngcontent-jiu-c7=""><?php the_sub_field('content'); ?></p>
                           <?php endif; ?>
                       </div>
                    </div>
                 </div>
              </div>
              <div _ngcontent-jiu-c7="" class="choose-us-shape"><img _ngcontent-jiu-c7="" src="<?= get_template_directory_uri(); ?>/img/choose-us-shape.png" alt="Image"></div>
           </section>

   
           <?php elseif( get_row_layout() == 'section_2' ): ?>
           

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

              <?php elseif( get_row_layout() == 'section_3' ): ?>

              <section _ngcontent-nbv-c19="" class="services-area about-us bg-t ptb-100">
             <div _ngcontent-nbv-c19="" class="container">
               <?php if(0){ ?>
                <div _ngcontent-nbv-c19="" class="section-title">
                   <span _ngcontent-nbv-c19="">Our departments</span>
                   <h2 _ngcontent-nbv-c19="">All the services that I provide to my patients in the field of treatment</h2>
                </div>
               <?php } ?>
                <div _ngcontent-nbv-c19="" class="row about_gallary">
                 
                 
                 
                 <?php 
                    $images = get_sub_field('about_gallery');
                    if( $images ): ?>

                        <?php foreach( $images as $image ): ?>
                           <div _ngcontent-nbv-c19="" class="col-lg-4 col-sm-6">
                              <div _ngcontent-nbv-c19="" class="single-services-section">
                               
                                <a href="<?php echo esc_url($image['url']); ?>"  data-fancybox="images">
                                     <img src="<?php echo esc_url($image['sizes']['gallery__ser']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                            </div>
                         </div>
                         
                      <?php endforeach; ?>
                  <?php endif; ?>

                   
                   
                </div>
             </div>
          </section>
  
            <?php elseif( get_row_layout() == 'section_5' ): ?>
     

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
  
            <?php elseif( get_row_layout() == 'section_4' ): ?>
            
            
         <section _ngcontent-nbv-c19="" class="services-area about-us bg-t ptb-100">
                       
               <div _ngcontent-nbv-c19="" class="container">
                                       <?php if( get_sub_field('content')): ?><!-- if under__the -->
                            <?php the_sub_field('content'); ?>
                           <?php endif; ?>
                         </div> 
                       
             <div _ngcontent-nbv-c19="" class="container">
         
                <div _ngcontent-nbv-c19="" class="row about_gallary">
                 
                 
                 
                  <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row();
                        // vars
                        $image = get_sub_field('imgeer');
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');
                        $link = get_sub_field('link');  ?>
            
                          
                          
                           <div _ngcontent-nbv-c19="" class="col-lg-4 col-sm-6">
                              <div _ngcontent-nbv-c19="" class="single-services-section">
                               
                                <a  data-fancybox href="<?= $title; ?>">
                                    
                                   <?php if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php endif; ?>    

                                </a>
                            </div>
                         </div>
                         
             
                    <?php endwhile; ?>

                <?php endif; ?>
         

                   
                   
                </div>
             </div>
          </section>
  
            
                <?php elseif( get_row_layout() == 'section_6' ): ?>  
                
         <section _ngcontent-nbv-c19="" class="services-area about-us bg-t ptb-100">
                       
               <div _ngcontent-nbv-c19="" class="container">
                                       <?php if( get_sub_field('content')): ?><!-- if under__the -->
                            <?php the_sub_field('content'); ?>
                           <?php endif; ?>
                         </div> 
                       
  
                </section>
       
                          
                                    
   <?php if(0){ ?>         
   <section _ngcontent-jiu-c7="" class="choose-us-area-two pb-100">
      <div _ngcontent-jiu-c7="" class="container">
         <div _ngcontent-jiu-c7="" class="row align-items-center">
            <div _ngcontent-jiu-c7="" class="col-lg-6 col-md-12">
               <div _ngcontent-jiu-c7="" class="choose-us-content-two">
                  <span _ngcontent-jiu-c7="" class="top-title">Why choose us</span>
                  <h2 _ngcontent-jiu-c7="">A hospital is an institution where patients are treated. Our doctors are always engaged in this work</h2>
                  <p _ngcontent-jiu-c7="">We will transfer your prescriptions to the specified department and set up your service Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <ul _ngcontent-jiu-c7="">
                     <li _ngcontent-jiu-c7=""><span _ngcontent-jiu-c7="">1</span> We coordinate</li>
                     <li _ngcontent-jiu-c7=""><span _ngcontent-jiu-c7="">2</span> We schedule</li>
                     <li _ngcontent-jiu-c7=""><span _ngcontent-jiu-c7="">3</span> We package</li>
                  </ul>
               </div>
            </div>
            <div _ngcontent-jiu-c7="" class="col-lg-6 col-md-12">
               <div _ngcontent-jiu-c7="" class="choose-us-img-two">
                  <img _ngcontent-jiu-c7="" src="assets/img/choose-us-img-2.jpg" alt="Image">
                  <div _ngcontent-jiu-c7="" class="address-and-week">
                     <p _ngcontent-jiu-c7="">For 24/7 emergency please call us. If is no emergency, contact at normal time.</p>
                     <div _ngcontent-jiu-c7="" class="address-week">
                        <ul _ngcontent-jiu-c7="" class="address">
                           <li _ngcontent-jiu-c7=""><i _ngcontent-jiu-c7="" class="flaticon-telephone-1"></i><span _ngcontent-jiu-c7="">Call:</span><a _ngcontent-jiu-c7="" href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a></li>
                           <li _ngcontent-jiu-c7=""><i _ngcontent-jiu-c7="" class="flaticon-arroba"></i><span _ngcontent-jiu-c7="">Email:</span><a _ngcontent-jiu-c7="" href="mailto:support@scora.com">support@scora.com</a></li>
                           <li _ngcontent-jiu-c7=""><i _ngcontent-jiu-c7="" class="flaticon-address-1"></i><span _ngcontent-jiu-c7="">Address:</span> 6890 Blvd, The Bronx, NY 1058 New York, USA </li>
                        </ul>
                        <ul _ngcontent-jiu-c7="" class="week">
                           <li _ngcontent-jiu-c7=""> Weekdays: <span _ngcontent-jiu-c7="">8:00 am – 8:00 pm</span></li>
                           <li _ngcontent-jiu-c7=""> Saturday: <span _ngcontent-jiu-c7="">9:00 am – 5:00 pm</span></li>
                           <li _ngcontent-jiu-c7=""> Sunday: <span _ngcontent-jiu-c7="">9:00 am – 3:00 pm</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
      <?php  } ?> 
           
            <?php elseif( get_row_layout() == 'section_7' ): ?>  
 
   <section _ngcontent-jiu-c7="" class="online-treatment-area ptb-100">
      <div _ngcontent-jiu-c7="" class="container">
         <div _ngcontent-jiu-c7="" class="row align-items-center">
            <div _ngcontent-jiu-c7="" class="col-lg-6 col-md-12">
               <div _ngcontent-jiu-c7="" class="online-treatment-img">
               
               
               
                  <?php
                 
                   $image = get_sub_field('images');
                 
                 if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endif; ?>    

     
               
               </div>
               
               
               
            </div>
            <div _ngcontent-jiu-c7="" class="col-lg-6 col-md-12">
               <div _ngcontent-jiu-c7="" class="online-treatment-content">
      
                  
                  
                          <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                             <span _ngcontent-jiu-c7=""><?php the_sub_field('sub_text'); ?></span>
                           <?php endif; ?>
     
                          <?php if( get_sub_field('title')): ?><!-- if under__the -->
                            <h2 _ngcontent-jiu-c7=""><?php the_sub_field('title'); ?></h2>
                           <?php endif; ?>
     
                  
    <?php if( have_rows('box_list') ): ?>
  <ul _ngcontent-jiu-c7="">
        <?php while( have_rows('box_list') ): the_row();
            // vars
            $image = get_sub_field('imag');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $link = get_sub_field('link');  ?>
            
              <li + _ngcontent-jiu-c7=""><i _ngcontent-jiu-c7="" class="bx bx-check"></i> <?= $title; ?></li> 

          <?php endwhile; ?>
     </ul>
      <?php endif; ?>

               </div>
            </div>
         </div>
      </div>
   </section>
   

          <?php endif;
          endwhile;
      endif; ?>

    
    
    
    
    
    
    
    
   <?php // check if the flexible content field has rows of data
    if( have_rows('home_pages' , '51') ):
         // loop through the rows of data
        while ( have_rows('home_pages' , '51') ) : the_row(); ?>
        
        <?php if( get_row_layout() == 'section_40' ): ?>

          <section _ngcontent-hmn-c29="" class="doctors-area pt-100 pb-70">
           <div _ngcontent-hmn-c29="" class="container">
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

                  <a _ngcontent-dyl-c29="" routerlink="/" class="default-btn"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
              </div>
             </div>
           </div>
        </section>
 
        <?php elseif( get_row_layout() == 'section_8' ): ?>

          <section _ngcontent-bes-c19="" class="services-area certificates services-area-two bg-t ptb-100">
               <div _ngcontent-bes-c19="" class="container">
                  <div _ngcontent-bes-c19="" class="row sertification ">
                   

        <?php if( have_rows('box_list') ): ?>

            <?php while( have_rows('box_list') ): the_row();
                // vars
                $image = get_sub_field('img');
                $title = get_sub_field('title');
                $paragraph = get_sub_field('paragraph');  
                $link = get_sub_field('link');  ?>
            
                     <div _ngcontent-bes-c19="" class="col-lg-3 col-sm-6">
                        <div _ngcontent-bes-c19="" class="single-services">
                          <div _ngcontent-bes-c19="" class="services-img"><a _ngcontent-rva-c29="" href="<?php echo esc_url($image['url']); ?>" data-fancybox="images" class="block__img__slider__"><img _ngcontent-bes-c19="" src="<?php echo $image['sizes']['pictare']; ?>" alt="Image"></a></div>
      
                        </div>
                     </div>

              <?php endwhile; ?>

          <?php endif; ?>

                    

                     
   
                    
                  </div>
               </div>
            </section>

        <?php elseif( get_row_layout() == 'section_90' ): ?>
        
        

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
                                        <a _ngcontent-rva-c29="" routerlink="/about" class="default-btn" rel="nofollow" target="<?php echo esc_attr( $link_target ); ?>"  href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
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
                      <?php if( !empty( $image ) ): ?>
                          <img  _ngcontent-bpm-c29="" src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                      <?php endif; ?>
                      <span _ngcontent-bpm-c29=""><?= $title; ?></span></div>
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

                          <a _ngcontent-rva-c29="" class="default-btn" href="<?php echo esc_url( $link_url ); ?>"  target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

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

                                        <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-telephone-1"></i><span _ngcontent-rva-c29="">Call:</span><a _ngcontent-rva-c29="" href="<?php echo esc_url( $phone_url ); ?>"><?php echo esc_html( $phone_title ); ?></a></li>

                                     <?php endif; ?>



                                  <?php $Email = get_sub_field('Email'); ?>

                                     <?php if( $phone ): 
                                        $Email_url = $Email['url'];
                                        $Email_title = $Email['title'];
                                        $Email_target = $Email['target'] ? $Email['target'] : '_self'; ?>

                                      <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-arroba"></i><span _ngcontent-rva-c29="">Email:</span><a _ngcontent-rva-c29="" href="mailto:<?php echo esc_url( $Email_url ); ?>"><?php echo esc_html( $Email_title ); ?></a></li>
                                   <?php endif; ?>


                                  <?php $address = get_sub_field('address'); ?>

                                 <?php if( $phone ): 
                                    $address_url = $address['url'];
                                    $address_title = $address['title'];
                                    $address_target = $address['target'] ? $address['target'] : '_self'; ?>

                                  <li _ngcontent-rva-c29=""><i _ngcontent-rva-c29="" class="flaticon-address-1"></i><span _ngcontent-rva-c29="">Address:</span><a _ngcontent-rva-c29="" href="<?php echo esc_url( $address_url ); ?>"><?php echo esc_html( $address_title ); ?></a></li>

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


      <div + _ngcontent-rva-c29="" class="row">

     <?php  
       $args = array(
          'order' => 'DESC', // order filter  last post
          'post_type'  => 'services', // Post type category BLOG
          'posts_per_page' => 6, // echo show three post 
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

           <?php if(0){ ?>

             <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;">
                <div style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; background-image: url(&quot;https://vuci-ng.envytheme.com/services-bg.4a3c2cfb6bb94a643f12.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 2225.65px; height: 920.4px; overflow: hidden; pointer-events: none; margin-left: -192.326px; margin-top: -137.7px; visibility: visible; transform: translateY(87.3px) translateZ(0px);"></div>
             </div>

           <?php } ?>

        </section>

        <?php if(0){ ?>
          <section class="section bg--white--shaped cs--carousel isolated--bottom">

              <div class="media-block block--col block--md">
                  <div class="center--block center--text">
                     <?php if( get_sub_field('title')): ?><!-- if under__the -->
                        <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                      <?php endif; ?>
                  </div>


                  <section class="section block--row gallery js-paginate-slider gap--xs">


                    <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $image = get_sub_field('img');
                            $titlee = get_sub_field('titlee');
                            $paragraph = get_sub_field('paragraph');
                            $link = get_sub_field('link');  ?>

                              <?php if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                  <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--tertiary btn--xl f-1 block--col  <?php if(get_row_index() == '1'){ echo 'btn__active'; } ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?= $titlee; ?>
                              <?php else: ?>

                                <a + href="#" class="btn btn--tertiary btn--xl f-1 block--col  <?php if(get_row_index() == '1'){ echo 'btn__active'; } ?>" target="<?php echo esc_attr( $link_target ); ?>">demo

                              <?php endif; ?>

                                  <h3 + class="center--block"><?= $title; ?></h3>

                             <?php if( $link ): ?>
                                </a>
                             <?php else: ?>
                                </a>
                             <?php endif; ?>

                          <?php endwhile; ?>

                      <?php endif; ?>


                  </section>
              </div>


              <div class="media-block--container">


                    <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $image = get_sub_field('img');
                            $titlee = get_sub_field('titlee');
                           // $paragraph = get_sub_field('paragraph');
                            $link = get_sub_field('link');  ?>

                                <figure class="isolated--sm media-block block--md block--double js-content-slider"
                                    style="display: none; left: 20%; opacity: 0;">
                                    <div class="media-block--text-content center--block f-1">

                                   <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
                                      <?php the_sub_field('paragraph'); ?>
                                    <?php endif; ?>

                                      <?php if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                          <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--primary" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>

                                    </div>
                                    <div class="media-block--image-content f-1">

                                      <?php if( !empty( $image ) ): ?>
                                          <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" width="400px">
                                      <?php endif; ?>        

                                    </div>
                                </figure>

                          <?php endwhile; ?>

                      <?php endif; ?>


              </div>



</section>
        <?php } ?>

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

                  <a _ngcontent-dyl-c29="" routerlink="/" class="default-btn"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
              </div>
             </div>
           </div>
        </section>
 
        <?php if(0){ ?>
          <section class="section bg--gray">
              <div class="media-block">
                  <div class=" center--block center--text">

                   <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                  </div>
              </div>
              <div class="section media-block">
                  <div class="gallery--cards">


                    <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $image = get_sub_field('imge');
                            $title = get_sub_field('title');
                            $paragraph = get_sub_field('paragraph');
                            $link = get_sub_field('link');  ?>

                              <div class="gallery--card-item card-item isolated--sm bg--white f-1">
                                  <figure class="media-block--image-content cs--cards">
                                    <?php if( !empty( $image ) ): ?>
                                        <img + src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" height="80px">
                                    <?php endif; ?>        
                                  </figure>
                                  <h4 class="text-block--paragraph"><?= $title; ?></h4>
                                  <p class="text-block--paragraph"><?= $paragraph; ?></p>
                              </div>

                          <?php endwhile; ?>

                      <?php endif; ?>

                  </div>
              </div>
              <div class="section media-block isolated--xs">

                  <?php $link = get_sub_field('link'); ?>

                  <?php if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                      <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--secondary__ghost center--block" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>

              </div>
          </section>
        <?php } ?>
        
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
                                  <div _ngcontent-isl-c46="" class="single-services">
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

          
        <?php if(0){ ?>
          <section class="section bg--gray isolated--top">
            <div class="media-block">
                <div class="center--text center--block">
                    <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                      <h3 + class="text-block--title"><?php the_sub_field('sub_text'); ?></h3>
                    <?php endif; ?>                
                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="section media-block block--col cs--integrations bg--integrations">

            <div class="gallery--grid">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row();
                        // vars
                        $image = get_sub_field('img');
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');
                        $link = get_sub_field('link');  ?>

                        <?php if( get_row_index() == '4' || get_row_index() == '3' || get_row_index() == '2' || get_row_index() == '1'){?>

                            <?php if( $link ): 
                                  $link_url = $link['url'];
                                  $link_title = $link['title'];
                                  $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                <a + href="<?php echo esc_url( $link_url ); ?>" class="grid-item " target="<?php echo esc_attr( $link_target ); ?>">
                            <?php endif; ?>

                                  <?php if( !empty( $image ) ): ?>
                                      <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                  <?php endif; ?> 

                             <?php if( $link ): ?>  
                                    </a>
                             <?php endif; ?>

                          <?php } ?>

                      <?php endwhile; ?>

                  <?php endif; ?>

             </div>

            <div class="gallery--grid">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row();
                        // vars
                        $image = get_sub_field('img');
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');
                        $link = get_sub_field('link');  ?>

                        <?php if(get_row_index() == '5' || get_row_index() == '6' || get_row_index() == '7' || get_row_index() == '8' || get_row_index() == '9'){?>

                            <?php if( $link ): 
                                  $link_url = $link['url'];
                                  $link_title = $link['title'];
                                  $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                <a + href="<?php echo esc_url( $link_url ); ?>" class="grid-item " target="<?php echo esc_attr( $link_target ); ?>">
                            <?php endif; ?>

                                  <?php if( !empty( $image ) ): ?>
                                      <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                  <?php endif; ?> 

                             <?php if( $link ): ?>  
                                    </a>
                             <?php endif; ?>

                          <?php } ?>

                      <?php endwhile; ?>

                  <?php endif; ?>

             </div>

            <div class="gallery--grid">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row();
                        // vars
                        $image = get_sub_field('img');
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');
                        $link = get_sub_field('link');  ?>

                        <?php if(get_row_index() == '10' || get_row_index() == '11' || get_row_index() == '12' || get_row_index() == '13'){?>

                            <?php if( $link ): 
                                  $link_url = $link['url'];
                                  $link_title = $link['title'];
                                  $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                <a + href="<?php echo esc_url( $link_url ); ?>" class="grid-item " target="<?php echo esc_attr( $link_target ); ?>">
                            <?php endif; ?>

                                  <?php if( !empty( $image ) ): ?>
                                      <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                  <?php endif; ?> 

                             <?php if( $link ): ?>  
                                    </a>
                             <?php endif; ?>

                          <?php } ?>

                      <?php endwhile; ?>

                  <?php endif; ?>

             </div>

            </div>
            <div class="media-block isolated--xs">

               <?php $link = get_sub_field('link'); ?>

                <?php if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                    <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--secondary__ghost center--block" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>

            </div>
        </section>
        <?php } ?>
        
        

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
                  <i _ngcontent-hmn-c29="" class="flaticon-satisfy"></i>
                  <h2 _ngcontent-hmn-c29="">
                     <span _ngcontent-hmn-c29="" data-count="1688" class="odometer odometer-auto-theme"> <?= $title; ?> </span>
                  </h2>
                  <h3 _ngcontent-hmn-c29=""><?= $paragraph; ?></h3>
               </div>
            </div>
            

          <?php endwhile; ?>

      <?php endif; ?>
         
           

         <?php if(0){ ?>
            <div _ngcontent-hmn-c29="" class="col-lg-3 col-sm-6">
               <div _ngcontent-hmn-c29="" class="single-counter">
                  <i _ngcontent-hmn-c29="" class="flaticon-doctor"></i>
                  <h2 _ngcontent-hmn-c29="">
                     <span _ngcontent-hmn-c29="" data-count="100" class="odometer odometer-auto-theme">
                        <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                     </span>
                     <span _ngcontent-hmn-c29="" class="target">+</span>
                  </h2>
                  <h3 _ngcontent-hmn-c29="">Medical specialist</h3>
               </div>
            </div>
            <div _ngcontent-hmn-c29="" class="col-lg-3 col-sm-6">
               <div _ngcontent-hmn-c29="" class="single-counter">
                  <i _ngcontent-hmn-c29="" class="flaticon-hospital-bed"></i>
                  <h2 _ngcontent-hmn-c29="">
                     <span _ngcontent-hmn-c29="" data-count="347" class="odometer odometer-auto-theme">
                        <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span></div>
                     </span>
                  </h2>
                  <h3 _ngcontent-hmn-c29="">Medical beds</h3>
               </div>
            </div>
            <div _ngcontent-hmn-c29="" class="col-lg-3 col-sm-6">
               <div _ngcontent-hmn-c29="" class="single-counter">
                  <i _ngcontent-hmn-c29="" class="flaticon-experience"></i>
                  <h2 _ngcontent-hmn-c29="">
                     <span _ngcontent-hmn-c29="" data-count="25" class="odometer odometer-auto-theme">
                        <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div>
                     </span>
                     <span _ngcontent-hmn-c29="" class="target">+</span>
                  </h2>
                  <h3 _ngcontent-hmn-c29="">Years Of experience</h3>
               </div>
            </div>
         <?php } ?>
            
         </div>
      </div>
   </div>
</section>
  
          
          
   <?php if(0){ ?>
          <section class="section bg--gray">
            <div class="media-block block--md block--double card-item__ghost isolated--sm cs--whatsapp">

                <div class="media-block--text-content center--block f-3">

                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                    <?php if( get_sub_field('content')): ?><!-- if under__the -->
                      <p class="text-block--paragraph"><?php the_sub_field('content'); ?></p>
                    <?php endif; ?>

                      <?php $link = get_sub_field('link'); ?>

                      <?php if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                          <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--primary btn--sm center--block" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>


                </div>
                <figure class="media-block--image-content f-2">

                    <?php $image = get_sub_field('imag'); ?>

                    <?php if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" width="281px">
                    <?php endif; ?>        


                </figure>
            </div>
        </section>
  <?php } ?>
        <?php elseif( get_row_layout() == 'section_7' ): ?>
        
         <section _ngcontent-bes-c34="" class="our-portfolio-area ptb-100">
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
                    <a _ngcontent-dyl-c29="" routerlink="/" class="default-btn" href="https://mma.uh-vpn.org/all-doctors/" target="_self">Бесплатная консультация 24/7</a>
             </div>
                 
                 
           
     
             
           </div>
        </section>

       
   <?php if(0){ ?>
        sssssssssssssss

        <section class="section bg--white--shaped__flip">
              <div class="media-block">
                  <div class="center--text center--block">

                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                  </div>
              </div>
            <div>
              <div class="gallery--testimonial">

                  <?php if( have_rows('box_list') ): ?>

                      <?php while( have_rows('box_list') ): the_row();
                          // vars
                          $image = get_sub_field('img');
                          $title = get_sub_field('title');
                          $paragraph = get_sub_field('paragraph');
                          $position = get_sub_field('position');
                          $link = get_sub_field('link');  ?>


                            <div class="gallery--testimonial-item testimonial-item bg--white">
                                  <p class="text-block--description"><?= $paragraph; ?></p>
                                  <div class="testimonial--persona">
                                      <span class="testimonial--persona__image">
                                        <?php if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                        <?php endif; ?>       
                                      </span>
                                      <span class="testimonial--persona__text">
                                          <p class="persona__name"><?= $title; ?></p>
                                          <p class="persona__from"><?= $position; ?></p>
                                      </span>
                                  </div>
                              </div>

                        <?php endwhile; ?>

                    <?php endif; ?>


                 </div>
            </div>
        </section>
    <?php } ?>
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
                  <div _ngcontent-bes-c19="" class="row">
                   

        <?php if( have_rows('box_list') ): ?>

            <?php while( have_rows('box_list') ): the_row();
                // vars
                $image = get_sub_field('img');
                $title = get_sub_field('title');
                $paragraph = get_sub_field('paragraph');  
                $link = get_sub_field('link');  ?>
            
                     <div _ngcontent-bes-c19="" class="col-lg-3 col-sm-6">
                        <div _ngcontent-bes-c19="" class="single-services">
                          <div _ngcontent-bes-c19="" class="services-img"><a _ngcontent-rva-c29="" href="<?php echo esc_url($image['url']); ?>" data-fancybox="images"><img _ngcontent-bes-c19="" src="<?php echo $image['sizes']['pictare']; ?>" alt="Image"></a></div>
      
                        </div>
                     </div>

              <?php endwhile; ?>

          <?php endif; ?>

                    

                     
   
                    
                  </div>
               </div>
            </section>

    <?php if(0){ ?>
            <section class="isolated--top">
                <div class=" bg--blue__secondary--textured isolated--xxl">
                    <div class="center--text center--block">

                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                        <form id="signUpWithEmail" class="gap--xxs" >
                            <input class="input input--primary btn--md" name="email" required
                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,20}" type="text"
                                placeholder="Email Empresarial">
                            <button type="submit" class="btn btn--primary">Empieza tu prueba gratuita</button>
                        </form>
                    </div>
                </div>
            </section>
    <?php } ?>
         
         
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
                                    <a _ngcontent-hmn-c29="" routerlink="/blog-details" href="/blog-details">
                                      <img _ngcontent-hmn-c29="" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'news' ); ?>" alt="Image">
                                    </a>
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

                   
                    <?php }else{ ?>
                                          
                          <?php //  echo  $numer; ?>
                              
                          <?php  if($numer === 3){echo '<div _ngcontent-hmn-c29="" class="col-lg-4 col-md-6 offset-md-3 offset-lg-0"> '; } ?>
                          
                          
                            <?php  if($numer === 3 || $numer === 4) { ?>
             
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