<section class="catalog">
	<div class="section-title">
		<div class="container">
			<h2><?php the_field('title') ?></h2>
		</div>
	</div>
	<div class="container">

		<?php  echo do_shortcode('[best_selling_products per_page="12"]'); ?>

	</div>
</section>