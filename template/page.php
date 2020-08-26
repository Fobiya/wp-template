<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://github.com/Fobiya/wp-template/
 *
 * @package fobiya
 */

get_header();
?>
<!-- all includ pages -->
  <?php // get_template_part( 'template-parts/content-header-pages'); ?>
  <?php 
 // add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
 // echo do_shortcode('[cta class="blue"]'); 
  //remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);


?>
 
 <!-- breadcrumbs__ -->
<?php if ( !is_front_page() ) { ?>

  <div class="breadcrumbs__">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl12">

              <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

        </div>
      </div>
    </div>
  </div>

<?php } ?>
<!-- END breadcrumbs__ -->
 
 
<section class="home_section_new section__ oh-y  <?php if(get_row_index() == '1'){ echo 'num__';}?>">
     <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl12">

              <?php the_content(); ?>

        </div>

      </div>
    </div>

</section> 

<?php
//get_sidebar();
get_footer();
