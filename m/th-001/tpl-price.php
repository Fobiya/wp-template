<?php
/**
* Template Name: Price Page*
*
*/
get_header(); ?>
    

    <style>
      
      ul.title{
        
        display: flex;
        width: 100%;
        
        background: #002D70;
        
      }          
      ul.title li{
        
       padding: 15px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        
        color: #fff;
        
      }     
      
      
            ul.title li:nth-child(1){
        
     width: 60%
        
      }     
            ul.title li:nth-child(2){
        
     width: 20%
        
      }     
            ul.title li:nth-child(3){
        
     width: 20%
        
      }  
      ul.content{
        
        display: flex;
        
      }
      
            ul.content li{
        
       padding: 15px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        
      }  
      
      
            
            ul.content li:nth-child(1){
        
     width: 60%
        
      }     
            ul.content li:nth-child(2){
        
     width: 20%
        
      }     
            ul.content li:nth-child(3){
        
     width: 20%
        
      } 
      
      .cont2,.cont4,.cont6,.cont8,.cont10,.cont12,.cont14,.cont16, .cont18,.cont20{
        background: #E2E6EC;
      }

</style>

    

    <?php // check if the flexible content field has rows of data
    if( have_rows('price_pages') ):
         // loop through the rows of data
        while ( have_rows('price_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>

            <section _ngcontent-fya-c17="" class="contact-area ptb-100">
            
              <div _ngcontent-fya-c17="" class="container">
                <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
              </div>

               <div _ngcontent-fya-c17="" class="container">
                  <div _ngcontent-akt-c7="" class="section-title">
                     <h1 + _ngcontent-hmn-c29=""><?php the_title(); ?></h1>
                  </div>
               </div>
               
                  <div _ngcontent-fya-c17="" class="container">
                  
                    <?php if( have_rows('box_list') ): ?>

                          <?php while( have_rows('box_list') ): the_row();
                              // vars
                              $image = get_sub_field('imag');
                              $title = get_sub_field('title');
                              $paragraph = get_sub_field('paragraph');
                              $link = get_sub_field('link');  ?>
                              
                              
                                <?php if( have_rows('title') ): ?> <!-- Repeater withdrawal__methods__5__diamond__list__content -->

                                  <ul class="title">

                                    <?php while( have_rows('title') ): the_row();  ?> <!-- Repeater withdrawal__methods__5__diamond__list__content -->

                                     <li><?= get_sub_field('title1'); ?></li>
                                     <li><?= get_sub_field('title2'); ?></li>
                                     <li><?= get_sub_field('title3'); ?></li>


                                    <?php endwhile; ?> <!-- END Repeater withdrawal__methods__5__diamond__list__content -->

                                   </ul>

                                <?php endif; ?> <!-- END Repeater withdrawal__methods__5__diamond__list__content -->                              
                              
                                <?php if( have_rows('content') ): ?> <!-- Repeater withdrawal__methods__5__diamond__list__content -->

                              

                                    <?php while( have_rows('content') ): the_row();  ?> <!-- Repeater withdrawal__methods__5__diamond__list__content -->
                                    <ul class="content  cont<?= get_row_index(); ?>">
                                     <li><?= get_sub_field('section1'); ?></li>
                                     <li><?= get_sub_field('section2'); ?></li>
                                     <li><?= get_sub_field('section3'); ?></li>
                                  </ul>

                                    <?php endwhile; ?> <!-- END Repeater withdrawal__methods__5__diamond__list__content -->

                                 

                                <?php endif; ?> <!-- END Repeater withdrawal__methods__5__diamond__list__content -->
                              
                              
                              



                            <?php endwhile; ?>

                        <?php endif; ?>

        </div>

                   <div _ngcontent-fya-c17="" class="container">
                     <div _ngcontent-bes-c34="" class="row">
                            <a _ngcontent-dyl-c29="" routerlink="/" class="default-btn default-yallow" data-fancybox="" data-src="#modal__open" href="javascript:;">Бесплатная консультация 24/7</a>
                     </div>
                   </div>
                   
            </section>
 
  

        <?php elseif( get_row_layout() == 'section_2' ): ?>


       
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