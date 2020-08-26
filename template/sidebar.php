<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://github.com/Fobiya/wp-template/
 *
 * @package fobiya
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>
<?php if(dynamic_sidebar( '0' )){?>
  <aside id="secondary" class="widget-area">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </aside><!-- #secondary -->
<?php } ?>