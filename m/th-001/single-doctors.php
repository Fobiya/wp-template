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
                   <div _ngcontent-kpp-c20="" class="availability  name__title">
                    <h2 _ngcontent-kpp-c20=""><?= get_the_title(); ?></h2>
                    
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
 
             </div>
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
