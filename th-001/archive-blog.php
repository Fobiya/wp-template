<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package th-001
 */

get_header(); ?>
  <!-- #archive.php -->


<section class="cd-hero pagetitle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="m-lg-0"><?= single_cat_title(); ?><?= the_title(); ?></h1>
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
  
  .menu-item-346>a:after{
      width: 100% !important;
  }

</style>
  
  
  
  <main>
   <div class="uslugi">
    <div class="container">
           
      
                   
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();  ?>
				
				
				
                   
            <div class="row s__d_page-item align-items-center pb-5">
                <div class="col-md-5">
                    <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'catalog' ); ?>" class="img-fluid rounded mb-4 mb-md-0" alt="Услуга - Реконструктивная ринопластика">
                </div>
                <div class="col-md-7">
                    <h2 class="mb-4 pl-3 pr-3"><?= the_title(); ?></h2>
                    <p class="mb-4 pl-3 pr-3">Пластика носа при врожденных дефектах носа, сложных посттравматических деформациях носа, ожогах, при отсутствии хрящевых, костных и мягких тканей носа после неудачной операции.</p>
                    <p class="pl-3 pr-3 mb-0"><a href="<?= get_permalink(); ?>" class="btn btn-outline-primary">Подробнее</a></p>
                </div>
            </div>
				
				
				  <?php if(0){ ?>

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
				
				  <?php } ?>

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
                   

           
      
            </div>
</div>
    </main>
    
    
    
    <?=  get_template_part('tpl-maps'); ?>

  
  
  <?php if(0){ ?>

	<main id="primary" class="site-main">



	</main><!-- #main -->
	
  <?php } ?>
	
	
  <!-- END #archive.php -->
<?php
//get_sidebar();
get_footer();
