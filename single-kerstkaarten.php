<div class="container">
	<?php while (have_posts()) : the_post(); ?>
  	<div class="row">
		<div class="col-md-6 col-xs-12">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'medium' ); ?>
			<img src="<?php echo $url ?>" />
			<?php the_content(); ?>
		</div>
		<div class="col-md-6 col-xs-12">
	    	<div id="kerstkaartForm">
	    		<?php echo do_shortcode( '[gravityform id="5" title="false" description="false" ajax="true" tabindex="8"]' ); ?>
	    	</div>
		</div>
    </div>
	<?php endwhile; ?>
</div>