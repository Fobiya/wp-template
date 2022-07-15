<!-- Shop Title -->
<section class="catalog-intro" <?php $image = get_field('background__shop'); if( !empty( $image ) ): ?> style="background: url(<?php echo esc_url($image['url']); ?>) no-repeat center/cover;" <?php endif; ?>>
	<div class="container">
		<h1><?php the_field('title__shop') ?></h1>
	</div>
</section>
<!-- End Shop Title -->




