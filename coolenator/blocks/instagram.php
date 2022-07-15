<section class="instagram">
	<div class="section-title">
		<div class="container">
			<h2><?php the_field('title') ?></h2>
		</div>
	</div>
	<div id="instafeed" class="instagram-list"></div>
</section>
<section class="row">

		<?php
		$i = 1;
		$item = get_field('instagram', 'option');
		?>
	<a href="<?php echo $item['link'] ?>">
		<?php
		while ($i <= 50) {
			echo '<span>' .  $item['name'] . '</span>';
			$i++;
		}
		?>
	</a>
</section>
