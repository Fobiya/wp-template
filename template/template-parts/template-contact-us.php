<?php
get_header();?>
<!--Link--><?= css();?>
<?php
// check if the flexible content field has rows of data
if (have_rows('contact_us_page')) :
    // loop through the rows of data
    while (have_rows('contact_us_page')) : the_row();  ?>
        <section class="section__contact section__ oh-y">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-5 col-xl-5">
                        <h2><?php the_sub_field('tittle'); ?></h2>
                        <p><?php the_sub_field('content'); ?></p>
                            <?php if (have_posts()) : while (have_posts()) : the_post();
                                  the_content();
                                  endwhile;
                                else : ?>
                                <!-- <p>Sorry, no posts matched your criteria.</p> -->
                            <?php endif;?>
                    </div>
                      <div class="col-xs-12 col-md-6 col-lg-7 col-xl-7"> 

                        <div class="box__map">
                              <div id="map"></div>
                        </div>

                          <script type="text/javascript">
                              function createMap(){
                                  var opts = {

                                            center: {
                                   <?php if( have_rows('google_map','option') ): ?>
                                      <?php while( have_rows('google_map','option') ): the_row(); ?>
                                                lat: <?php echo the_sub_field('lat','option'); ?>,
                                                lng: <?php echo the_sub_field('lng','option'); ?>,
                                      <?php endwhile; ?>
                                  <?php endif; ?>
                                            },

                                    
                                      zoom: 18,
                                      zoomControl: true,
                                      zoomControlOptions: {
                                          position: google.maps.ControlPosition.LEFT_BOTTOM
                                      },
                                      mapTypeControl:false,
                                      scaleControl: false,
                                      streetViewControl: false,

                                      fullscreenControl: true,
                                      fullscreenControlOptions: {
                                          position: google.maps.ControlPosition.TOP_LEFT
                                      },

                                    
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
                                           <?php if( have_rows('google_map','option') ): ?>
                                              <?php while( have_rows('google_map','option') ): the_row(); ?>
                                                        lat: <?php echo the_sub_field('lat','option'); ?>,
                                                        lng: <?php echo the_sub_field('lng','option'); ?>,
                                              <?php endwhile; ?>
                                          <?php endif; ?>
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

                       
<!--
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/contact-us-macbook.png?" media="(min-width: 601px)">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/contact-us-macbook-mob.png?" media="(max-width: 600px)">
                            <img class="contact_us_img" srcset="<?php echo get_template_directory_uri(); ?>/img/contact-us-macbook.png">
                        </picture>
-->
                      </div>
                   </div>
            </div>
        </section>
<?php endwhile;
endif;?>




<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDo5PKemTCTYVggybmmNMczPa0lMo5zExA&v=3.31&language=en&libraries=places,geometry&callback=createMap"></script> 
<?php get_footer(); ?>