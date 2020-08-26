<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fobiya
 */
?>


<footer>
  <div class="container">
    <div class="row">
        <div class="col m12 s12 l4 x14">
                
               <?php if(0){ ?> 
                 <a class="logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>  
                  <?php } ?>   
                            
               <?php if( get_field('footer_title','option')): ?><!-- if under__the -->
                  <h5><?php the_field('footer_title','option'); ?></h5>
               <?php endif; ?>      
 
               <?php if( get_field('footer_content','option')): ?><!-- if under__the -->
                  <?php the_field('footer_content','option'); ?>
               <?php endif; ?>      
        
             <?php 
          
//              wp_nav_menu(
//                    array(
//                        'menu' => 'Footer links',
//                                'theme_location' => 'footer',
//                                'container_class' => 'footer-link',
//                                'container' => 'nav',
//                       'items_wrap' => '<ul class="footer-policy %2$s">%3$s</ul>',
//                    )
//                );
            ?>
          
        
        </div>

      <div class="col m12 s12 l8 xl7 offset-xl1">
        <ul class="menu">
        <?php
                wp_nav_menu(
                    array(
                        'menu' => 'footer',
                                'theme_location' => 'footer',
                                'container_class' => 'footer-menu',
                                'container' => 'nav',
                       'items_wrap' => '<ul class="footer-policy %2$s">%3$s</ul>',
                    )
                );
        ?>
        </ul>
      </div>

    </div>
  </div>
  
  

</footer>

  <div class="copyright">
       <div class="container">
    <div class="row">
        <div class="col m12 s12 l12 xl12">
        
        
            <p class="copy">Copyright  &middot;  All Rights Are Reserved &copy; <?php echo date('Y'); ?> <a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a> </p>

       

       
       
        </div>
    </div>
  </div>
   
      
  </div>
     

 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	

<!--Script--><?= jsuni('navigation.js');?>

<!--Script--><?= jsuni('slick.min.js');?>


<?php wp_footer(); ?>


</body>
</html>
