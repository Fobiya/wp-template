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
  
<!--archive-doctors.php-->
 
 
<section _ngcontent-ktm-c21="" class="doctors-area pt-100 pb-70">
   <div _ngcontent-ktm-c21="" class="container">
      <div _ngcontent-ktm-c21="" class="section-title">
         <span _ngcontent-ktm-c21="">Наши специалисты</span>
         <h1 _ngcontent-ktm-c21="">Специалисты МАА</h1>
      </div>
      <div _ngcontent-ktm-c21="" class="row">
         <div _ngcontent-ktm-c21="" class="col-lg-12 col-sm-12">

            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

         </div>
      </div>
      <div _ngcontent-ktm-c21="" class="row">
        
        
        <?php 
          $namber = (int) $_GET['pages']; 
        
         if(!$namber){
           $namber = '1'; 
         }else{
           $namber = (int) $_GET['pages']; 
         }
        
        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : $namber ;
        
      $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'doctors', // Post type category BLOG
            'posts_per_page' => -1, // echo show three post 
            'paged'          => $paged,
        );
        // The Query
        $the_query = new WP_Query( $args );

        
        ?>
        
     	<?php if (  $the_query->have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while (  $the_query->have_posts() ) :
				$the_query->the_post(); ?>

        
                   <div _ngcontent-ktm-c21="" class="col-lg-3 col-sm-6">
                      <div _ngcontent-ktm-c21="" class="single-doctors-user">
                         <div _ngcontent-ktm-c21="" class="doctors-img">
                            <a href="<?= get_the_permalink(); ?>"><img _ngcontent-ktm-c21="" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'doctor_img' ); ?>" alt="Image"></a>
                            
                <?php // check if the flexible content field has rows of data
                  if( have_rows('doctors') ):
                       // loop through the rows of data
                      while ( have_rows('doctors') ) : the_row(); ?>
                      <?php if( get_row_layout() == 'section_1' ): ?>

                        <?php if( have_rows('soseal') ): ?>
                              <ul _ngcontent-ktm-c21="">
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
                         <div _ngcontent-ktm-c21="" class="doctors-content">
                            <span _ngcontent-ktm-c21="">Cosmetic Surgeon</span>
                            <h3 _ngcontent-ktm-c21=""><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
                         </div>
                      </div>
                   </div>

         
         <?php	endwhile; 
        
        wp_reset_postdata();
        
        ?>

           <div _ngcontent-pem-c12="" class="col-lg-12 col-md-12">
             
              <div _ngcontent-pem-c12="" class="pagination-area">
              
             
              
              <?php  $big = 999999999; // need an unlikely integer
              echo paginate_links( array(
                  'format' => '?pages=%#%',
                  'current' => $paged,
                  'total' => $the_query->max_num_pages,
                  'prev_text'    => __('«'),
                  'next_text'    => __('»'),
                  'type' => 'list'
              ) ); ?>
          
              </div>
              
           </div>
           

			<?php //  the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

     
     </div>
   </div>
</section>
 
  
     <?php if(0){ ?> 

  <div _ngcontent-pem-c12="" class="blog-column-three-area ptb-100">
   <div _ngcontent-pem-c12="" class="container">
      <h1 class="category_center"><?= single_cat_title(); ?></h1>
   </div>

   <div _ngcontent-pem-c12="" class="container">
      <div _ngcontent-pem-c12="" class="row">
        
     	<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

        
         <div _ngcontent-pem-c12="" class="col-lg-4 col-md-6">
            <div _ngcontent-pem-c12="" class="single-blog-post">
               <div _ngcontent-pem-c12="" class="blog-img">
                  <a _ngcontent-pem-c12="" routerlink="<?= get_the_permalink(); ?>" href="<?= get_the_permalink(); ?>"><img _ngcontent-pem-c12="" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'catygorypost' ); ?>" alt="Image"></a>
                  <div _ngcontent-pem-c12="" class="date">
                     <ul _ngcontent-pem-c12="">
                        <li _ngcontent-pem-c12=""><?= the_date('d'); ?></li>
                        <li _ngcontent-pem-c12=""><?= the_time('M'); ?></li>
                     </ul>
                  </div>
               </div>
               <div _ngcontent-pem-c12="" class="blog-content">
                  <span _ngcontent-pem-c12="">Новости</span>
                  <h3 _ngcontent-pem-c12=""><a _ngcontent-pem-c12="" routerlink="<?= get_the_permalink(); ?>" href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
                  
                  
                <?php // check if the flexible content field has rows of data
                if( have_rows('single_post') ):
                     // loop through the rows of data
                    while ( have_rows('single_post') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'section_2' ): ?>
           
                          <?php if( get_sub_field('title')): ?><!-- if under__the -->
                              <p + _ngcontent-ixk-c9=""><?php  echo substr( get_sub_field('title') , 0, 240); ?></p>
                           <?php endif; ?>
                           
                         <?php break; ?>
  
                  <?php endif;
                  endwhile;
              endif; ?>

                  <ul _ngcontent-pem-c12="">
                      <?php if(0){ ?>
                     <li _ngcontent-pem-c12=""> By: <a _ngcontent-pem-c12="" routerlink="/" href="/">Curtis Warren</a></li>
                       <?php } ?>
                     <li _ngcontent-pem-c12="" class="read"><a _ngcontent-pem-c12="" routerlink="/blog-details" href="<?= get_the_permalink(); ?>"> Read More <i _ngcontent-pem-c12="" class="flaticon-right-arrow"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
  
         
         <?php	endwhile; ?>

           <div _ngcontent-pem-c12="" class="col-lg-12 col-md-12">
             
              <div _ngcontent-pem-c12="" class="pagination-area">
              
             
              
              <?php  $big = 999999999; // need an unlikely integer
              echo paginate_links( array(
//                  'format' => '?pages=%#%',
//        'current' => $paged,
//                  'total' => $loop->max_num_pages,
                  'prev_text'    => __('«'),
                  'next_text'    => __('»'),
                  'type' => 'list'
              ) ); ?>
          
              </div>
              
           </div>
           

			<?php //  the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

         
         
         
      </div>
   </div>
</div>
  
  
  


	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
	
  <?php } ?>
	
	
  <!-- END #archive.php -->
<?php
//get_sidebar();
get_footer();
