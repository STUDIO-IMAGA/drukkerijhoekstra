<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12">




<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Helaas, geen resultaten gevonden. Probeer het nogmaals', 'newfish'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
		</div>
	</div>
</div>