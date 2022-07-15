<section class="preview">
	<div class="section-title">
		<div class="container">
			<h2><?php the_field('title') ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="preview-container">
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 4,
				'orderby' => 'date',
				'order' => 'DESC',
			);
			$q = new WP_Query($args);
			$item = 1;
			?>

			<?php if ($q->have_posts()) : ?>
			<?php echo '<div class="preview-col">' ?>
			<?php while ($q->have_posts()) :
			$q->the_post(); ?>
			<?php if ($item == 1) { ?>
			<a class="preview-item big" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
					<div class="data"><?php echo get_the_date() ?></div>
					<div class="content">
						<h3><?php the_title(); ?></h3>
						<p><?php
							$info = get_the_excerpt();
							$tm =  substr( strip_tags($info), 0, 100);
							echo $tm;
							echo (strlen($tm)<strlen($info))?'[...]':''
							?></p>
					</div>
				</a></div>
			<div class="preview-col">
				<?php } else { ?>
					<div class="preview-item small"><a class="pic" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<div class="content">
							<div class="data"><?php echo get_the_date() ?></div>
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3></a>
							<p><?php
								$info = get_the_excerpt();
								$tm =  substr( strip_tags($info), 0, 100);
								echo $tm;
								echo (strlen($tm)<strlen($info))?'[...]':''
								?></p>
						</div>
					</div>
				<?php }
				$item++ ?>
				<?php endwhile; ?>
				<?echo '</div>' ?>
				<?php endif; ?>

				<?php wp_reset_postdata(); ?>

			</div>
	</div>
</section>
