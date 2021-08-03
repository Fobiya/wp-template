<?php
/**
* Template Name: Contact Page*
*
*/
get_header(); ?>
    


    

    <?php // check if the flexible content field has rows of data
    if( have_rows('contact_pages') ):
         // loop through the rows of data
        while ( have_rows('contact_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>

            <section _ngcontent-fya-c17="" class="contact-area ptb-100">
            
            <div _ngcontent-fya-c17="" class="container">
              <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            </div>
               
               <div _ngcontent-fya-c17="" class="container">
                  <div _ngcontent-akt-c7="" class="section-title">
                    
                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h1 + _ngcontent-hmn-c29=""><?php the_sub_field('title'); ?></h1>
                    <?php endif; ?>
                    
                  </div>
               </div>

               <div _ngcontent-fya-c17="" class="container">
                  <div _ngcontent-fya-c17="" class="row">
                     <div _ngcontent-fya-c17="" class="col-lg-8">
                        <div _ngcontent-fya-c17="" class="contact-form">
                           <div _ngcontent-fya-c17="" class="contact-title">
                              <h2 _ngcontent-fya-c17="">Drop us message for any query</h2>
                           </div>
                           <form _ngcontent-fya-c17="" id="contactForm">
                              <div _ngcontent-fya-c17="" class="row">
                                 <div _ngcontent-fya-c17="" class="col-lg-6 col-sm-6">
                                    <div _ngcontent-fya-c17="" class="form-group"><label _ngcontent-fya-c17="">Имя</label><input _ngcontent-fya-c17="" type="text" name="name" id="name" class="form-control"></div>
                                 </div>
                                 <div _ngcontent-fya-c17="" class="col-lg-6 col-sm-6">
                                    <div _ngcontent-fya-c17="" class="form-group"><label _ngcontent-fya-c17="">Номер</label><input _ngcontent-fya-c17="" type="text" name="phone_number" id="phone_number" required="" class="form-control"></div>
                                 </div>
                                 <div _ngcontent-fya-c17="" class="col-12">
                                    <div _ngcontent-fya-c17="" class="form-group"><label _ngcontent-fya-c17="">Сообщение</label><textarea _ngcontent-fya-c17="" name="message" id="message" cols="30" rows="10" class="form-control"></textarea></div>
                                 </div>
                                 <div _ngcontent-fya-c17="" class="col-lg-12 col-md-12"><button _ngcontent-fya-c17="" type="submit" class="default-btn btn-two"> Отправить </button></div>
                              </div>
                           </form>
                        </div>
                     </div>
                     
                     <div _ngcontent-fya-c17="" class="col-lg-4">
                     
    
               
                <?php if( have_rows('address-and-week') ): ?>
                  <?php while( have_rows('address-and-week') ): the_row(); 

                      // Get sub field values.
                      $image = get_sub_field('image');
                      $link = get_sub_field('link'); ?>
                      
                  <div _ngcontent-bfe-c17="" class="address-and-week">

                     
                     <?php if(0){ ?>
                       <div _ngcontent-bfe-c17="" class="address-week">
                  <ul _ngcontent-bfe-c17="" class="address">


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
                      
         <?php endwhile; ?>
                <?php endif; ?>
                                    
                      
                       
                     </div>
                  </div>
               </div>
            </section>
 
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



            <div _ngcontent-fya-c17="" class="map-area"><iframe _ngcontent-fya-c17="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96573.31103674119!2d-73.91097366523668!3d40.85176866829554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c28b553a697cb1%3A0x556e43a78ff15c77!2sThe%20Bronx%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1599153418461!5m2!1sen!2sbd"></iframe></div>

       
        <?php elseif( get_row_layout() == 'section_3' ): ?>
     
        <?php elseif( get_row_layout() == 'section_4' ): ?> 
        
      
        <?php elseif( get_row_layout() == 'section_5' ): ?>

        <?php elseif( get_row_layout() == 'section_6' ): ?>


        <?php elseif( get_row_layout() == 'section_7' ): ?>
 

        <?php elseif( get_row_layout() == 'section_8' ): ?>

        <?php elseif( get_row_layout() == 'section_9' ): ?>
        
    

         
          <?php endif;
          endwhile;
      endif; ?>


  

 
 



<?php get_footer();