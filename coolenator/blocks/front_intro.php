<?php
if( have_rows('slider') ):
?>

<section class="intro">
	<div class="slider-container">
		<?
	while ( have_rows('slider') ) : the_row();
?>
		<div class="slider-item" style="background-color: <?php the_sub_field('color'); ?>;">
			<div class="name"><span><?php the_sub_field('title_for_tab'); ?></span></div>
			<div class="content">
				<h2><?php the_sub_field('title'); ?></h2>
				<p><?php the_sub_field('text'); ?></p>
				<?php
				if( have_rows('button') ):
					while ( have_rows('button') ) : the_row();
				 ?>
						<a class="btn arrow" href=""><?php the_sub_field('text'); ?></a>
					<?php endwhile;
				endif;
				?>
			</div>
			<div class="pic"><img src="<?php the_sub_field('picture'); ?>" alt="pic"></div>
		</div>

<?php	endwhile; ?>
	</div>
</section>

<?
endif;

