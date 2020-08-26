<?php
get_header();?>
<!--Link--><?= css();?>
<!--Script--><?= js();?>

    <section class="contact_1 section__">
      <div class="container">
<?php

//$reg_link = get_permalink(get_field('registration_page', 'options'));

// check if the flexible content field has rows of data
if( have_rows('contact_pages') ):

     // loop through the rows of data
    while ( have_rows('contact_pages') ) : the_row();  ?>

      
      <?php
        if( get_row_layout() == 'contact_1' ): ?>
       
        <div class="row">
          <div class="col m12 s12 l6 xl6">
    
                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2 class="element"><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>
          </div>
          <div class="col m12 s12 l6 xl6">
            <div class="time">
           
                  <?php if( get_sub_field('time_work')): ?><!-- if under__the -->
                    <p><?php the_sub_field('time_work'); ?></p>
                  <?php endif; ?>
            </div>
            <div class="soseal">
              <ul class="social-networks">

                <?php while (have_rows('fotter_social_network', 'option')) : the_row();  ?>

                    <?php if (get_row_layout() == 'facebook_1') : ?>
                        <li>
                            <a target="_blank" class="facebook-footer" href="<?php the_sub_field('facebook'); ?>">
                                <i class='ion-social-facebook'></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'youtube_1') : ?>
                        <li>
                            <a target="_blank" class="youtube" href="<?php the_sub_field('youtube'); ?>">
                                <i class='ion-social-youtube'></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'twitter_1') : ?>
                        <li>
                            <a target="_blank" class="twitter" href="<?php the_sub_field('twitter'); ?>">
                                <i class='ion-social-twitter'></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'instagram_1') : ?>
                        <li>
                            <a target="_blank" class="instagram" href="<?php the_sub_field('instagram'); ?>">
                                <i class='ion-social-instagram-outline'></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'linkedin_1') : ?>
                        <li>
                            <a target="_blank" class="linkedin" href="<?php the_sub_field('linkedin'); ?>">
                                <i class='ion-social-linkedin'></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'telegram_1') : ?>
                        <li>
                            <a target="_blank" class="skype" href="<?php the_sub_field('telegram'); ?>">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                                  <path d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z">
                                  </path>
                               </svg>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'skype_1') : ?>
                        <li>
                            <a target="_blank" class="skype" href="<?php the_sub_field('skype'); ?>">
                              <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                <title>ionicons-v5_logos</title>
                                <path d="M467.16,303.6a205.69,205.69,0,0,0,4.9-45.15c0-116.32-95.69-210.7-213.79-210.7a221.83,221.83,0,0,0-36.52,3A123.58,123.58,0,0,0,155.93,32C87.55,32,32,86.72,32,154.15A119.56,119.56,0,0,0,49,216a211.16,211.16,0,0,0-4.32,42.35c0,116.44,95.69,210.7,213.67,210.7a214,214,0,0,0,39.09-3.5A125.45,125.45,0,0,0,356.07,480C424.57,480,480,425.28,480,357.85A118,118,0,0,0,467.16,303.6ZM368,359c-9.92,13.76-24.51,24.73-43.41,32.43S283.36,403,257.69,403c-30.69,0-56.36-5.37-76.55-15.87a101,101,0,0,1-35.24-30.8c-9.11-12.83-13.66-25.66-13.66-38,0-7.7,3-14.35,8.87-19.95,5.84-5.37,13.42-8.17,22.29-8.17,7.35,0,13.65,2.1,18.79,6.42,4.9,4.08,9.1,10.15,12.48,18.08A108.09,108.09,0,0,0,207,336.15q6.32,8.22,17.86,13.65c7.82,3.62,18.2,5.48,31,5.48,17.62,0,32.09-3.73,42.94-11.08,10.74-7.12,15.88-15.75,15.88-26.25,0-8.28-2.69-14.82-8.29-19.95-5.83-5.37-13.42-9.57-22.87-12.37-9.69-3-22.87-6.18-39.21-9.56-22.17-4.67-41-10.27-56-16.57-15.28-6.42-27.65-15.4-36.76-26.48-9.22-11.32-13.77-25.55-13.77-42.24a67.86,67.86,0,0,1,14.47-42.58c9.57-12.25,23.46-21.82,41.55-28.35,17.74-6.53,38.86-9.8,62.66-9.8,19.14,0,35.83,2.22,49.83,6.42s25.91,10.15,35.36,17.38,16.34,14.93,20.77,23,6.66,16.22,6.66,24c0,7.46-2.92,14.35-8.76,20.3a29.65,29.65,0,0,1-21.94,9.1c-7.93,0-14.12-1.87-18.43-5.6-4-3.5-8.17-8.87-12.72-16.69-5.37-9.91-11.79-17.85-19.14-23.45-7.24-5.36-19.14-8.16-35.71-8.16-15.29,0-27.77,3-37,9-8.87,5.72-13.19,12.37-13.19,20.18a18.26,18.26,0,0,0,4.32,12.25,38.13,38.13,0,0,0,12.72,9.57,90.14,90.14,0,0,0,17.15,6.53c6,1.64,15.87,4.09,29.53,7.12,17.38,3.62,33.25,7.82,47.26,12.13,14.24,4.55,26.49,10,36.52,16.45a72.93,72.93,0,0,1,24.16,25.09c5.72,10,8.64,22.63,8.64,37.1A75.09,75.09,0,0,1,368,359Z"></path>
                              </svg>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (get_row_layout() == 'vkontakte_1') : ?>
                        <li>
                            <a target="_blank" class="vkontakte" href="<?php the_sub_field('vkontakte'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                  <title>ionicons-v5_logos</title>
                                  <path d="M484.7,132c3.56-11.28,0-19.48-15.75-19.48H416.58c-13.21,0-19.31,7.18-22.87,14.86,0,0-26.94,65.6-64.56,108.13-12.2,12.3-17.79,16.4-24.4,16.4-3.56,0-8.14-4.1-8.14-15.37V131.47c0-13.32-4.06-19.47-15.25-19.47H199c-8.14,0-13.22,6.15-13.22,12.3,0,12.81,18.81,15.89,20.84,51.76V254c0,16.91-3,20-9.66,20-17.79,0-61-66.11-86.92-141.44C105,117.64,99.88,112,86.66,112H33.79C18.54,112,16,119.17,16,126.86c0,13.84,17.79,83.53,82.86,175.77,43.21,63,104.72,96.86,160.13,96.86,33.56,0,37.62-7.69,37.62-20.5V331.33c0-15.37,3.05-17.93,13.73-17.93,7.62,0,21.35,4.09,52.36,34.33C398.28,383.6,404.38,400,424.21,400h52.36c15.25,0,22.37-7.69,18.3-22.55-4.57-14.86-21.86-36.38-44.23-62-12.2-14.34-30.5-30.23-36.09-37.92-7.62-10.25-5.59-14.35,0-23.57-.51,0,63.55-91.22,70.15-122" style="fill-rule:evenodd"></path>
                                </svg>
                            </a>
                        </li>
                    <?php endif; ?>

                  <?php endwhile; ?>

              </ul>
            </div>
          </div>
        </div>
        
         <?php
        elseif( get_row_layout() == 'contact_2' ): ?>

          <?php if( have_rows('box_list') ): ?>
            <div class="row">
              <?php while( have_rows('box_list') ): the_row(); 
                  // vars
                  $images = get_sub_field('images'); 
                  $title = get_sub_field('title'); 
                  $element_link = get_sub_field('element_link'); ?> 

                <div class="col m6 s12 l4 xl4">
                  <div class="box__info">

                     <?php if(!empty( $images ) ): ?>
                  <img class="icon" src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" >
                <?php endif; ?>



                   <span class="name"><?php echo $title ?></span>
                    <p><?php echo $element_link ?></p>
                  </div>
                </div>

              <?php endwhile; ?> 
            </div>
          <?php endif; ?>
 
          <div class="row">
            <div class="col m6 s12 l12 xl12">
               
                <?php if( get_sub_field('title')): ?><!-- if under__the -->
                  <h2><?php the_sub_field('title'); ?></h2>
                <?php endif; ?>
                  
              <?php $file = get_sub_field('bottom_download');
                  if( $file ):
                  // Extract variables.
                  $url = $file['url']; ?>
                  
                  <a class="download" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>"><img class="icon" srcset="<?php echo get_template_directory_uri(); ?>/img/contact_1_download.png" alt="contact_1_download"><?php the_sub_field('name_option'); ?></a>
              <?php endif; ?>

              <?php
              $file = the_sub_field('');
              if( $file ): ?>
                
              <?php endif; ?>

            </div>
          </div>
           

          <?php if( have_rows('gruap_list') ): ?>
            <div class="row">
              <?php while( have_rows('gruap_list') ): the_row(); 
                  // vars
                  $images = get_sub_field('images'); 
                  $title = get_sub_field('title'); 
                  $element_link = get_sub_field('position'); ?> 

                <div class="col m6 s12 l3 xl3">
                  <div class="box_user">

                     <?php if(!empty( $images ) ): ?>
                  <img class="icon" src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" >
                <?php endif; ?>

                   <span class="name"><?php echo $title ?></span>
                    <p><?php echo $element_link ?></p>
                  </div>
                </div>

              <?php endwhile; ?> 
            </div>
          <?php endif; ?>
          <?php
        elseif( get_row_layout() == 'contact_3' ): ?>
        
        <div class="row">
          <div class="col m6 s12 l12 xl12">
            <hr>
          </div>
        </div>
        
        <div class="row">
          <div class="col m6 s12 l6 xl6">
                   
            <?php if( get_sub_field('title')): ?><!-- if under__the -->
              <h3><?php the_sub_field('title'); ?></h3>
            <?php endif; ?>
            
            <form method="POST" action="javascript:void(null);">
              <!-- Hidden Required Fields-->
              <div class="form_input"><span class="field">
                  <input class="name" type="text" name="name" required="" value="" placeholder="Name"></span></div>
              <div class="form_input"><span class="field">
                  <input class="mail" type="tel" name="tel" required="" value="" placeholder="phone"></span></div>
              <div class="form_input"><span class="field">
                  <input class="mail" type="email" name="email" required="" value="" placeholder="Email"></span></div>
              <button class="purpur-back" type="submit" name="send">SEND</button>
            </form>
          </div>
          
          <div class="col m6 s12 l6 xl6">
           
            <div id="map"></div> 
            <style>
                #map {
                    height: 450px;
                    width: 100%;
                }
            </style>

            <script type="text/javascript">
                function createMap(){
                    var opts = {
                        center: {
                            lat: 34.693741,
                            lng: 33.079914,
                        },
                        zoom: 15,
                        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}],
                        maxZoom: 20,
                        minZoom: 0,
                        mapTypeId: 'roadmap',
                    };

                    opts.clickableIcons = true;
                    opts.disableDoubleClickZoom = false;
                    opts.draggable = true;
                    opts.keyboardShortcuts = true;
                    opts.scrollwheel = true;

                    var map = new google.maps.Map(document.getElementById('map'), opts);

                    (function(){
                        var markerOptions = {
                            map: map,
                            position: {
                                lat: 34.693741,
                                lng: 33.079914
                            }
                        };

                        markerOptions.icon = {
                            path: 'M11 2c-3.9 0-7 3.1-7 7 0 5.3 7 13 7 13 0 0 7-7.7 7-13 0-3.9-3.1-7-7-7Zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5 0-1.4 1.1-2.5 2.5-2.5 1.4 0 2.5 1.1 2.5 2.5 0 1.4-1.1 2.5-2.5 2.5Z',
                            scale: 1.6363636363636363636363636364,
                            anchor: new google.maps.Point(11, 22),
                            fillOpacity: 1,
                            fillColor: '#f44336',
                            strokeOpacity: 0
                        };

                        var marker = new google.maps.Marker(markerOptions);

                    })();				

                }
            </script>
          </div>
        </div>
        
         
          <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
				//
            endwhile;
        else : ?>
            <!-- <p>Sorry, no posts matched your criteria.</p> -->
        <?php endif; ?>
		
      <?php 
        endif;

    endwhile;

endif;

?>

     
      </div>
    </section>






<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDo5PKemTCTYVggybmmNMczPa0lMo5zExA&v=3.31&language=en&libraries=places,geometry&callback=createMap"></script> 
<?php get_footer(); ?>