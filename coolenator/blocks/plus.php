<?php
if( have_rows('list', 'option') ):

?>
	<section class="plus">
	<div class="container">
	<div class="plus-list">
	<?php
	while ( have_rows('list', 'option') ) : the_row();
?>
		<div class="plus-col">
			<div class="plus-item">
				<div class="pic"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></div>
				<h3><?php the_sub_field('text'); ?></h3>
			</div>
		</div>
	<?php
	endwhile;

?>
	</div>
	</div>
	</section>
<?php

endif;

?>
