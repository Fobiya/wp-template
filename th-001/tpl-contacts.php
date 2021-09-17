<?php
/**
* Template Name: Contacts Page*
* Template Post Type: post, page
*
*/
get_header(); ?>
   
   

<section class="cd-hero pagetitle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="m-lg-0"><?= the_title(); ?></h1>
                </div>
                <div class="col-lg-6">
                  <nav class="float-lg-right">
                    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                  </nav>
              </div>
            </div>
        </div>
    </section>

  <style>
    .cd-auto-hide-header{
          background: #506D85;
    }
  </style>


<?=  get_template_part('tpl-maps'); ?>

<?php get_footer();