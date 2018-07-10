<?php
/**
 * Template Name: Referenties
 */
?>
<div id="referenties">
	<div class="container">
		<div class="row">
		<div class="col-md-12">
			<h1><?php echo get_the_title(); ?></h1>
			<?php echo apply_filters('the_content', get_post_field('post_content', $id)); ?>
		</div>
		<div class="col-md-12">
			<div id="referentieItems">
				<?php get_template_part('templates/includes/referentie'); ?>
			</div>
		</div>
		</div>
	</div>
</div>