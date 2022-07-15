<section class="collection">
	<div class="section-title">
		<div class="container">
			<h2><?php the_field('title') ?></h2>
		</div>
	</div>
	<?php
	if (have_rows('collections_list')):

		?>
		<div class="collection-list">
		<?php
		while (have_rows('collections_list')) : the_row();

			?>
			<div class="collection-col">
			<div class="collection-item">
				<img src="<?php echo get_sub_field('picture'); ?>" alt="">
				<?php
				if (have_rows('button')):
					while (have_rows('button')) : the_row();
						$btn = get_sub_field('link');
						?>
						<a class="btn white" href="<?php echo $btn ?>"><?php the_sub_field('text'); ?></a>
					<?php endwhile;
				endif;
				?>
			</div>
			</div>
		<?php
		endwhile; ?>
		</div><?php
	endif;

	?>
</section>
