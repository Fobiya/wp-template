<section class="videos">
	<div class="videos-container">
		<?php if( have_rows('first_video') ):
			while( have_rows('first_video') ): the_row();
				?>
				<div class="videos-col">
					<a data-fancybox data-width="640" data-height="360" href="<?php the_sub_field('video') ?>"  class="videos-item"><img class="img" src="<?php the_sub_field('picture') ?>" alt="pic">
						<div class="play"></div>
					</a>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if( have_rows('second_video') ):
			while( have_rows('second_video') ): the_row();
				?>
				<div class="videos-col">
					<a  data-fancybox data-width="640" data-height="360" href="<?php the_sub_field('video') ?>"  class="videos-item"><img class="img" src="<?php the_sub_field('picture') ?>" alt="pic">
						<div class="play"></div>
					</a>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</section>
