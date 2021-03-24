<?php
/**
* Template Name: Home Page*
*
*/
get_header(); ?>


    
 <?php if(0){ ?> 

    <?php // check if the flexible content field has rows of data
    if( have_rows('home_pages') ):
         // loop through the rows of data
        while ( have_rows('home_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>

          <section class="section bg--blue--textured--shaped isolated--lg cs--main">
                <div class="media-block block--double ">
                    <div class="center--block f-3">

                      <?php if( get_sub_field('title')): ?><!-- if under__the -->
                        <h1 + class="text-block--title"><?php the_sub_field('title'); ?></h1>
                      <?php endif; ?>

                      <?php if( get_sub_field('content')): ?><!-- if under__the -->
                        <p + class="text-block--big-paragraph"><?php the_sub_field('content'); ?></p>
                      <?php endif; ?>


                    <?php $link = get_sub_field('link'); ?>

                    <?php if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                        <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--primary" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>

                    </div>
                    <figure class="media-block--image-content f-2">
                      <?php $image = get_sub_field('img'); ?>
                         <?php if( !empty( $image ) ): ?>
                          <img + src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" width="340px">
                        <?php endif; ?>
                    </figure>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'section_2' ): ?>


          <section class="section isolated--lg">
            <div class="media-block block--col">
                <div class="center--text">
                   <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="gallery">

                  <?php if( have_rows('box_list') ): ?>

                      <?php while( have_rows('box_list') ): the_row();
                          // vars
                          $image = get_sub_field('imgs');
                          // $title = get_sub_field('title');
                          // $paragraph = get_sub_field('paragraph');
                          // $link = get_sub_field('link');  ?>

                           <?php if( !empty( $image ) ): ?>
                              <img + class="gallery--item"  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                           <?php endif; ?>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>
</section>


        <?php elseif( get_row_layout() == 'section_3' ): ?>


          <section class="section bg--white--shaped cs--carousel isolated--bottom">

            <div class="media-block block--col block--md">
                <div class="center--block center--text">
                   <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>
                </div>


                <section class="section block--row gallery js-paginate-slider gap--xs">


                  <?php if( have_rows('box_list') ): ?>

                      <?php while( have_rows('box_list') ): the_row();
                          // vars
                          $image = get_sub_field('img');
                          $titlee = get_sub_field('titlee');
                          $paragraph = get_sub_field('paragraph');
                          $link = get_sub_field('link');  ?>

                            <?php if( $link ): 
                                  $link_url = $link['url'];
                                  $link_title = $link['title'];
                                  $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--tertiary btn--xl f-1 block--col  <?php if(get_row_index() == '1'){ echo 'btn__active'; } ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                  <?= $titlee; ?>
                            <?php else: ?>

                              <a + href="#" class="btn btn--tertiary btn--xl f-1 block--col  <?php if(get_row_index() == '1'){ echo 'btn__active'; } ?>" target="<?php echo esc_attr( $link_target ); ?>">demo

                            <?php endif; ?>

                                <h3 + class="center--block"><?= $title; ?></h3>

                           <?php if( $link ): ?>
                              </a>
                           <?php else: ?>
                              </a>
                           <?php endif; ?>

                        <?php endwhile; ?>

                    <?php endif; ?>


                </section>
            </div>


            <div class="media-block--container">


                  <?php if( have_rows('box_list') ): ?>

                      <?php while( have_rows('box_list') ): the_row();
                          // vars
                          $image = get_sub_field('img');
                          $titlee = get_sub_field('titlee');
                         // $paragraph = get_sub_field('paragraph');
                          $link = get_sub_field('link');  ?>

                              <figure class="isolated--sm media-block block--md block--double js-content-slider"
                                  style="display: none; left: 20%; opacity: 0;">
                                  <div class="media-block--text-content center--block f-1">

                                 <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
                                    <?php the_sub_field('paragraph'); ?>
                                  <?php endif; ?>

                                    <?php if( $link ): 
                                          $link_url = $link['url'];
                                          $link_title = $link['title'];
                                          $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                        <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--primary" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                      <?php endif; ?>

                                  </div>
                                  <div class="media-block--image-content f-1">

                                    <?php if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" width="400px">
                                    <?php endif; ?>        

                                  </div>
                              </figure>

                        <?php endwhile; ?>

                    <?php endif; ?>


            </div>



        </section>

        <?php elseif( get_row_layout() == 'section_4' ): ?>


          <section class="section bg--gray">
              <div class="media-block">
                  <div class=" center--block center--text">

                   <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                  </div>
              </div>
              <div class="section media-block">
                  <div class="gallery--cards">


                    <?php if( have_rows('box_list') ): ?>

                        <?php while( have_rows('box_list') ): the_row();
                            // vars
                            $image = get_sub_field('imge');
                            $title = get_sub_field('title');
                            $paragraph = get_sub_field('paragraph');
                            $link = get_sub_field('link');  ?>

                              <div class="gallery--card-item card-item isolated--sm bg--white f-1">
                                  <figure class="media-block--image-content cs--cards">
                                    <?php if( !empty( $image ) ): ?>
                                        <img + src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" height="80px">
                                    <?php endif; ?>        
                                  </figure>
                                  <h4 class="text-block--paragraph"><?= $title; ?></h4>
                                  <p class="text-block--paragraph"><?= $paragraph; ?></p>
                              </div>

                          <?php endwhile; ?>

                      <?php endif; ?>

                  </div>
              </div>
              <div class="section media-block isolated--xs">

                  <?php $link = get_sub_field('link'); ?>

                  <?php if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                      <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--secondary__ghost center--block" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>

              </div>
          </section>

        <?php elseif( get_row_layout() == 'section_5' ): ?>

          <section class="section bg--gray isolated--top">
            <div class="media-block">
                <div class="center--text center--block">
                    <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                      <h3 + class="text-block--title"><?php the_sub_field('sub_text'); ?></h3>
                    <?php endif; ?>                
                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="section media-block block--col cs--integrations bg--integrations">

            <div class="gallery--grid">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row();
                        // vars
                        $image = get_sub_field('img');
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');
                        $link = get_sub_field('link');  ?>

                        <?php if( get_row_index() == '4' || get_row_index() == '3' || get_row_index() == '2' || get_row_index() == '1'){?>

                            <?php if( $link ): 
                                  $link_url = $link['url'];
                                  $link_title = $link['title'];
                                  $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                <a + href="<?php echo esc_url( $link_url ); ?>" class="grid-item " target="<?php echo esc_attr( $link_target ); ?>">
                            <?php endif; ?>

                                  <?php if( !empty( $image ) ): ?>
                                      <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                  <?php endif; ?> 

                             <?php if( $link ): ?>  
                                    </a>
                             <?php endif; ?>

                          <?php } ?>

                      <?php endwhile; ?>

                  <?php endif; ?>

             </div>

            <div class="gallery--grid">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row();
                        // vars
                        $image = get_sub_field('img');
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');
                        $link = get_sub_field('link');  ?>

                        <?php if(get_row_index() == '5' || get_row_index() == '6' || get_row_index() == '7' || get_row_index() == '8' || get_row_index() == '9'){?>

                            <?php if( $link ): 
                                  $link_url = $link['url'];
                                  $link_title = $link['title'];
                                  $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                <a + href="<?php echo esc_url( $link_url ); ?>" class="grid-item " target="<?php echo esc_attr( $link_target ); ?>">
                            <?php endif; ?>

                                  <?php if( !empty( $image ) ): ?>
                                      <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                  <?php endif; ?> 

                             <?php if( $link ): ?>  
                                    </a>
                             <?php endif; ?>

                          <?php } ?>

                      <?php endwhile; ?>

                  <?php endif; ?>

             </div>

            <div class="gallery--grid">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row();
                        // vars
                        $image = get_sub_field('img');
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');
                        $link = get_sub_field('link');  ?>

                        <?php if(get_row_index() == '10' || get_row_index() == '11' || get_row_index() == '12' || get_row_index() == '13'){?>

                            <?php if( $link ): 
                                  $link_url = $link['url'];
                                  $link_title = $link['title'];
                                  $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                <a + href="<?php echo esc_url( $link_url ); ?>" class="grid-item " target="<?php echo esc_attr( $link_target ); ?>">
                            <?php endif; ?>

                                  <?php if( !empty( $image ) ): ?>
                                      <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                  <?php endif; ?> 

                             <?php if( $link ): ?>  
                                    </a>
                             <?php endif; ?>

                          <?php } ?>

                      <?php endwhile; ?>

                  <?php endif; ?>

             </div>

            </div>
            <div class="media-block isolated--xs">

               <?php $link = get_sub_field('link'); ?>

                <?php if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                    <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--secondary__ghost center--block" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>

            </div>
        </section>

        <?php elseif( get_row_layout() == 'section_6' ): ?>

          <section class="section bg--gray">
            <div class="media-block block--md block--double card-item__ghost isolated--sm cs--whatsapp">

                <div class="media-block--text-content center--block f-3">

                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                    <?php if( get_sub_field('content')): ?><!-- if under__the -->
                      <p class="text-block--paragraph"><?php the_sub_field('content'); ?></p>
                    <?php endif; ?>

                      <?php $link = get_sub_field('link'); ?>

                      <?php if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                          <a + href="<?php echo esc_url( $link_url ); ?>" class="btn btn--primary btn--sm center--block" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>


                </div>
                <figure class="media-block--image-content f-2">

                    <?php $image = get_sub_field('imag'); ?>

                    <?php if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" width="281px">
                    <?php endif; ?>        


                </figure>
            </div>
        </section>

        <?php elseif( get_row_layout() == 'section_7' ): ?>

        <section class="section bg--white--shaped__flip">
              <div class="media-block">
                  <div class="center--text center--block">

                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                  </div>
              </div>
            <div>
              <div class="gallery--testimonial">

                  <?php if( have_rows('box_list') ): ?>

                      <?php while( have_rows('box_list') ): the_row();
                          // vars
                          $image = get_sub_field('img');
                          $title = get_sub_field('title');
                          $paragraph = get_sub_field('paragraph');
                          $position = get_sub_field('position');
                          $link = get_sub_field('link');  ?>


                            <div class="gallery--testimonial-item testimonial-item bg--white">
                                  <p class="text-block--description"><?= $paragraph; ?></p>
                                  <div class="testimonial--persona">
                                      <span class="testimonial--persona__image">
                                        <?php if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                                        <?php endif; ?>       
                                      </span>
                                      <span class="testimonial--persona__text">
                                          <p class="persona__name"><?= $title; ?></p>
                                          <p class="persona__from"><?= $position; ?></p>
                                      </span>
                                  </div>
                              </div>

                        <?php endwhile; ?>

                    <?php endif; ?>


                 </div>
            </div>
        </section>

        <?php elseif( get_row_layout() == 'section_8' ): ?>

            <section class="isolated--top">
                <div class=" bg--blue__secondary--textured isolated--xxl">
                    <div class="center--text center--block">

                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 + class="text-block--title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                        <form id="signUpWithEmail" class="gap--xxs" >
                            <input class="input input--primary btn--md" name="email" required
                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,20}" type="text"
                                placeholder="Email Empresarial">
                            <button type="submit" class="btn btn--primary">Empieza tu prueba gratuita</button>
                        </form>
                    </div>
                </div>
            </section>

          <?php endif;
          endwhile;
      endif; ?>

 <?php } ?> 


<?php get_footer();