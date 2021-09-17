<?php
/**
* Template Name: About Page*
*
*/
get_header(); ?>
   


    <?php // check if the flexible content field has rows of data
    if( have_rows('about_us') ):
         // loop through the rows of data
        while ( have_rows('about_us') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?> 
  
    <div class="about__doctor singlepage">
        <div class="container">
            <div class="row">
	<div class="col-md-5 col-lg-4">
	
        <?php $image = get_sub_field('images'); ?>

        <?php if( !empty( $image ) ): ?>
            <img + class="rounded img-fluid" src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>    

         <?php if( get_sub_field('title')): ?><!-- if under__the -->
            <h2 + class="title pt-3"><?php the_sub_field('title'); ?></h2>
         <?php endif; ?>
         
		<?php the_sub_field('content'); ?>
	</div>
	<div class="col-md-7 col-lg-8">
		<p><?php the_sub_field('paragraph'); ?></p>
         <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
            <h3 + class="mb-4 pt-3"><?php the_sub_field('sub_text'); ?></h3>
         <?php endif; ?>
		
		<dl class="row">
		
          <?php if( have_rows('box_list') ): ?>

              <?php while( have_rows('box_list') ): the_row();
                  // vars
                  $image = get_sub_field('img');
                  $title = get_sub_field('title');
                  $paragraph = get_sub_field('paragraph');
                  $link = get_sub_field('link');  ?>

                    <dt + class="col-sm-5 col-md-4"><?= $title; ?></dt>
                    <dd + class="col-sm-7 col-md-8"><?= $paragraph; ?></dd>

                <?php endwhile; ?>

            <?php endif; ?>
          
		</dl>
	</div>
</div>
 <br>        </div>
    </div>
    <!--Featured-->
        <?php elseif( get_row_layout() == 'section_2' ): ?>



          <?php endif;
          endwhile;
      endif; ?>
      
 



<?=  get_template_part('tpl-maps'); ?>


<?php get_footer();