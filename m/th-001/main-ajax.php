<?php 

  function search_chang_post(){
      if ( empty($_POST) || ! wp_verify_nonce( $_POST['search_change_nonce'], 'search_change') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{



        if(sanitize_text_field($_POST['s']) !== ''){

            $options = array(
                'posts_per_page' => -1,
                'suppress_filters' => false, // important!
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby'     => 'title', 
                'order'       => 'ASC'  
            );
            $keyword = sanitize_text_field($_POST['s']);

            add_filter( 'posts_where', function ($where) use ($keyword) {
                global $wpdb;
                $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $keyword ) ) . '%\'';
                return $where;
            });
            $posts = get_posts( $options );

              echo '<ul class="list open">';
              foreach( $posts as $post ){   ?>
                  <li><a href="<?php echo the_permalink($post); ?>"><?php echo get_the_title($post); ?></a></li>
                  <?php
              }
              echo '</ul>';
          }
      }
      die;
  }

add_action( 'wp_ajax_search_post_change', 'search_chang_post' );
add_action( 'wp_ajax_nopriv_search_post_change', 'search_chang_post' );
