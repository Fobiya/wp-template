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