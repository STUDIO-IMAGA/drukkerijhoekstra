<div class="container">
<div class="page-header">
<h1><?php the_title(); ?></h1>
</div>
<div class="contentPage">
		<div class="row">
		
		
			<?php while (have_posts()) : the_post(); ?>
				<div class="col-lg- col-md-8 col-xs-12 col-sm-12">
					
					<div class="entry-content">
						<?php the_content(); ?>
    				</div>
					<footer>
						<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    				</footer>
				</div>
				<div class="col-lg- col-md-4 col-xs-12 col-sm-12">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
					<!--<img class="singleImage" src="<?php echo $image[0]; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />-->
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>