<section class="work">
	<div class="container">
		<?php if( have_rows('content') ):

			while( have_rows('content') ): the_row(); ?>
				<div class="work-content">
					<h2><?php the_sub_field('title') ?></h2>
					<p><?php the_sub_field('text') ?></p>
					<?php
					if( have_rows('button') ):
						while ( have_rows('button') ) : the_row();
							$link = get_sub_field('link'); ?>
							<a class="btn arrow" href="<?php echo $link ?>"><?php the_sub_field('text'); ?></a>
						<?php endwhile;
					endif;
					?>
				</div>
			<?php endwhile; ?>

		<?php endif; ?>

	</div>
	<?php if( have_rows('video') ):

		while( have_rows('video') ): the_row();

			?>
			<a data-fancybox data-width="640" data-height="360" href="<?php the_sub_field('video') ?>" class="work-video"><img src="<?php the_sub_field('picture') ?>" alt="pic"></a>
		<?php endwhile; ?>

	<?php endif; ?>
	<?php if( have_rows('bottle') ):

		while( have_rows('bottle') ): the_row();
			?>
			<div class="work-compound">
				<img src="<?php the_sub_field('picture') ?>" alt="pic">
				<?php if(get_sub_field('text1') ) { ?>
				<span class="item-1"><?php the_sub_field('text1') ?></span>
				<?php }; ?>
				<?php if(get_sub_field('text_2')) { ?>
				<span class="item-2"><?php the_sub_field('text_2') ?></span>
				<?php }; ?>
				<?php if(get_sub_field('text_3')) { ?>
				<span class="item-3"><?php the_sub_field('text_3') ?></span>
				<?php }; ?>
			</div>
		<?php endwhile; ?>

	<?php endif; ?>

</section>
