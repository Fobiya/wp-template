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



<section _ngcontent-kpp-c20="" class="doctors-details-area ptb-100">
  
    <div _ngcontent-fya-c17="" class="container">
      <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
    </div>
    
   <div _ngcontent-kpp-c20="" class="container">
      <div _ngcontent-kpp-c20="" class="row">
         <div _ngcontent-kpp-c20="" class="col-lg-4 col-md-12">
            <div _ngcontent-kpp-c20="" class="doctors-sidebar">
               <div _ngcontent-kpp-c20="" class="doctors-img">
                  <img _ngcontent-kpp-c20="" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'post_img' ); ?>" alt="Image">
                <?php // check if the flexible content field has rows of data
                  if( have_rows('doctors') ):
                       // loop through the rows of data
                      while ( have_rows('doctors') ) : the_row(); ?>
                      <?php if( get_row_layout() == 'section_1' ): ?>

                        <?php if( have_rows('soseal') ): ?>
                             <ul _ngcontent-kpp-c20="">
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
                              </ul>
                        <?php endif; ?>

                    <?php endif;
                    endwhile;
                endif; ?>
                  
                  
                  
               </div>
               <div _ngcontent-kpp-c20="" class="availability">
                <?php // check if the flexible content field has rows of data
                  if( have_rows('doctors') ):
                       // loop through the rows of data
                      while ( have_rows('doctors') ) : the_row(); ?>
                      <?php if( get_row_layout() == 'section_1' ): ?>

                     <?php if( get_sub_field('city')): ?><!-- if under__the -->
                      <h3 _ngcontent-kpp-c20=""><i _ngcontent-kpp-c20="" class="bx bx-time"></i><?php the_sub_field('city'); ?></h3>
                     <?php endif; ?>

                    <?php if( have_rows('work') ): ?>
                         <ul _ngcontent-kpp-c20="">
                      <?php while( have_rows('work') ): the_row();
                          // vars
                          $day = get_sub_field('day');
                          $time = get_sub_field('time'); ?>

                             <li _ngcontent-kpp-c20=""><?= $day; ?><span _ngcontent-kpp-c20=""><?= $time; ?></span></li>

                        <?php endwhile; ?>
                          </ul>
                    <?php endif; ?>

   
                  

                    <?php endif;
                    endwhile;
                endif; ?>

                  
               </div>
               <div _ngcontent-kpp-c20="" class="appointment-box">
                  <p _ngcontent-kpp-c20="">Book an appointment</p>
                  <div _ngcontent-kpp-c20="" class="appointment-form">
                     <form _ngcontent-kpp-c20="">
                        <div _ngcontent-kpp-c20="" class="form-group"><input _ngcontent-kpp-c20="" type="text" placeholder="Your Name" class="form-control"></div>
                        <div _ngcontent-kpp-c20="" class="form-group">
                           <select _ngcontent-kpp-c20="" style="display: none;">
                              <option _ngcontent-kpp-c20="" value="">Select Department</option>
                              <option _ngcontent-kpp-c20="" value="">Cardiology</option>
                              <option _ngcontent-kpp-c20="" value="">Neurology</option>
                              <option _ngcontent-kpp-c20="" value="">Cancer Care</option>
                              <option _ngcontent-kpp-c20="" value="">Laboratory</option>
                              <option _ngcontent-kpp-c20="" value="">Dental</option>
                              <option _ngcontent-kpp-c20="" value="">Neurology</option>
                           </select>
                           <div class="nice-select" tabindex="0">
                              <span class="current">Select Department</span>
                              <ul class="list">
                                 <li data-value="" class="option selected">Select Department</li>
                                 <li data-value="" class="option">Cardiology</li>
                                 <li data-value="" class="option">Neurology</li>
                                 <li data-value="" class="option">Cancer Care</li>
                                 <li data-value="" class="option">Laboratory</li>
                                 <li data-value="" class="option">Dental</li>
                                 <li data-value="" class="option">Neurology</li>
                              </ul>
                           </div>
                        </div>
                        <div _ngcontent-kpp-c20="" class="form-group">
                           <select _ngcontent-kpp-c20="" style="display: none;">
                              <option _ngcontent-kpp-c20="" value="">Select A Service</option>
                              <option _ngcontent-kpp-c20="" value="">Services Style One</option>
                              <option _ngcontent-kpp-c20="" value="">Services Style Two</option>
                              <option _ngcontent-kpp-c20="" value="">Services Style Three</option>
                              <option _ngcontent-kpp-c20="" value="">Services Style Four</option>
                              <option _ngcontent-kpp-c20="" value="">Services Style Five</option>
                              <option _ngcontent-kpp-c20="" value="">Services Style Six</option>
                           </select>
                           <div class="nice-select" tabindex="0">
                              <span class="current">Select A Service</span>
                              <ul class="list">
                                 <li data-value="" class="option selected">Select A Service</li>
                                 <li data-value="" class="option">Services Style One</li>
                                 <li data-value="" class="option">Services Style Two</li>
                                 <li data-value="" class="option">Services Style Three</li>
                                 <li data-value="" class="option">Services Style Four</li>
                                 <li data-value="" class="option">Services Style Five</li>
                                 <li data-value="" class="option">Services Style Six</li>
                              </ul>
                           </div>
                        </div>
                        <div _ngcontent-kpp-c20="" class="form-group">
                           <select _ngcontent-kpp-c20="" style="display: none;">
                              <option _ngcontent-kpp-c20="" value="">Select A Location</option>
                              <option _ngcontent-kpp-c20="" value="">London</option>
                              <option _ngcontent-kpp-c20="" value="">United Kingdom</option>
                              <option _ngcontent-kpp-c20="" value="">United States</option>
                              <option _ngcontent-kpp-c20="" value="">Canada</option>
                              <option _ngcontent-kpp-c20="" value="">Australia</option>
                              <option _ngcontent-kpp-c20="" value="">California </option>
                           </select>
                           <div class="nice-select" tabindex="0">
                              <span class="current">Select A Location</span>
                              <ul class="list">
                                 <li data-value="" class="option selected">Select A Location</li>
                                 <li data-value="" class="option">London</li>
                                 <li data-value="" class="option">United Kingdom</li>
                                 <li data-value="" class="option">United States</li>
                                 <li data-value="" class="option">Canada</li>
                                 <li data-value="" class="option">Australia</li>
                                 <li data-value="" class="option">California </li>
                              </ul>
                           </div>
                        </div>
                        <div _ngcontent-kpp-c20="" class="form-group">
                           <select _ngcontent-kpp-c20="" style="display: none;">
                              <option _ngcontent-kpp-c20="" value="">Select A Preferred Time</option>
                              <option _ngcontent-kpp-c20="" value="">8.00 AM To 9.00 AM</option>
                              <option _ngcontent-kpp-c20="" value="">9.00 AM To 10.00 AM</option>
                              <option _ngcontent-kpp-c20="" value="">11.00 AM To 12.00 AM</option>
                              <option _ngcontent-kpp-c20="" value="">12.00 AM To 1.00 PM</option>
                              <option _ngcontent-kpp-c20="" value="">1.00 PM To 2.00 PM</option>
                              <option _ngcontent-kpp-c20="" value="">2.00 PM To 3.00 pm</option>
                              <option _ngcontent-kpp-c20="" value="">3.00 PM To 4.00 PM</option>
                           </select>
                           <div class="nice-select" tabindex="0">
                              <span class="current">Select A Preferred Time</span>
                              <ul class="list">
                                 <li data-value="" class="option selected">Select A Preferred Time</li>
                                 <li data-value="" class="option">8.00 AM To 9.00 AM</li>
                                 <li data-value="" class="option">9.00 AM To 10.00 AM</li>
                                 <li data-value="" class="option">11.00 AM To 12.00 AM</li>
                                 <li data-value="" class="option">12.00 AM To 1.00 PM</li>
                                 <li data-value="" class="option">1.00 PM To 2.00 PM</li>
                                 <li data-value="" class="option">2.00 PM To 3.00 pm</li>
                                 <li data-value="" class="option">3.00 PM To 4.00 PM</li>
                              </ul>
                           </div>
                        </div>
                        <div _ngcontent-kpp-c20="" class="form-group">
                           <div _ngcontent-kpp-c20="" id="datetimepicker" class="input-group date"><input _ngcontent-kpp-c20="" type="text" placeholder="07/09/2020" class="form-control"><span _ngcontent-kpp-c20="" class="input-group-addon"></span><i _ngcontent-kpp-c20="" class="bx bx-calendar"></i></div>
                        </div>
                        <button _ngcontent-kpp-c20="" type="submit" class="default-btn">Book appointment</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div _ngcontent-kpp-c20="" class="col-lg-8 col-md-12">
            <div _ngcontent-kpp-c20="" class="doctors-details mb-30">
              
               <div _ngcontent-kpp-c20="" class="doctors-history">
                
                
                 
                 
                  <h1 _ngcontent-kpp-c20=""><?= get_the_title(); ?></h1>
                  

              <?php // check if the flexible content field has rows of data
                if( have_rows('doctors') ):
                     // loop through the rows of data
                    while ( have_rows('doctors') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'section_1' ): ?>

                     <?php if( get_sub_field('position')): ?><!-- if under__the -->
                      <span + _ngcontent-kpp-c20=""><?php the_sub_field('position'); ?></span>
                     <?php endif; ?>
 
                     <?php if( get_sub_field('content')): ?><!-- if under__the -->
                     <p _ngcontent-kpp-c20=""><?php the_sub_field('content'); ?></p>
                     <?php endif; ?>
                     
                         

                    <?php if( have_rows('box_list') ): ?>
         
                      <?php while( have_rows('box_list') ): the_row(); ?>
                             
      
                             
                             <div _ngcontent-kpp-c20="" class="row borders">
                                   <div _ngcontent-kpp-c20="" class="col-lg-3 col-md-12 pl-0">
                                      <div _ngcontent-kpp-c20="" class="left-title">
       
                                         <?php if( get_sub_field('title')): ?><!-- if under__the -->
                                          <h3 _ngcontent-kpp-c20=""><?php the_sub_field('title'); ?></h3>
                                         <?php endif; ?>

                                      </div>
                                   </div>
                                   <div _ngcontent-kpp-c20="" class="col-lg-9 col-md-12">
                                      <div _ngcontent-kpp-c20="" class="right-title">
                                         <ul _ngcontent-kpp-c20="">
                                           
                                            <?php if( have_rows('list-box') ): ?>

                                                <?php while( have_rows('list-box') ): the_row();  ?>
                    
                                                     <?php if( get_sub_field('content')): ?><!-- if under__the -->
                                                       <li _ngcontent-kpp-c20=""><i _ngcontent-kpp-c20="" class="bx bxs-hand-right"></i> <?php the_sub_field('content'); ?></li>
                                                     <?php endif; ?>

                                                  <?php endwhile; ?>

                                              <?php endif; ?>

                                            
                                            
                                         </ul>
                                      </div>
                                   </div>
                                </div>


                        <?php endwhile; ?>
                    <?php endif; ?>

                        
   
   

                <?php endif;
                endwhile;
            endif; ?>

                  
                  
               </div>
            </div>
            
            <?php if(0){ ?>
              <div _ngcontent-kpp-c20="" class="doctors-details">
                 <div _ngcontent-kpp-c20="" class="doctors-history">
                    <h2 _ngcontent-kpp-c20="">Dr. Oncologist</h2>
                    <span _ngcontent-kpp-c20="">MBBS (Sydney), FRACS (Paediatric Anastasia)</span>
                    <p _ngcontent-kpp-c20="" class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, totam! Dicta rerum deserunt itaque. Incidunt in quo architecto eveniet rem facere, necessitatibus, dolorem voluptas deleniti iure fuga magni velit molestiae ipsum dolor sit amet consectetur adipisicing elit. Repellat, totam adipisicing.</p>
                    <p _ngcontent-kpp-c20="" class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, totam! Dicta rerum deserunt itaque. Incidunt in quo architecto eveniet rem facere, necessitatibus, dolorem voluptas deleniti iure fuga magni velit molestiae ipsum dolor sit amet consectetur adipisicing elit. Repellat, totam adipisicing.</p>
                    <p _ngcontent-kpp-c20="" class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, totam! Dicta rerum deserunt itaque. Incidunt in quo architecto eveniet rem facere, necessitatibus, dolorem voluptas deleniti iure fuga magni velit molestiae ipsum dolor sit amet consectetur adipisicing elit. Repellat, totam adipisicing.</p>
                 </div>
              </div>
            <?php } ?>
            
         </div>
      </div>
   </div>
</section>
	
<!-- END #SINGLE -->
<?php
//get_sidebar();
get_footer();
