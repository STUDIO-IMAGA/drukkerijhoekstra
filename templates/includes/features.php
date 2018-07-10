<div id="features">
<?php query_posts( array( 'post_type' => 'feature', 'posts_per_page' => 3 ) );
	if ( have_posts() ) : $count = 0; ?>
	  <div class="clearfix" id="feature">
		  	<div class="row">
				<?php while ( have_posts() ) : the_post();
					$count++; ?>
					<section class="col-sm-4">
						<?php if ( has_post_thumbnail() ) { ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'iconFeatures' ); ?>
							<div class="centerImage">
								<img class="imgFeature" src="<?= $image[0]; ?>" title="<?= the_title(); ?>" alt="<?= the_title(); ?>" name="<?= the_title(); ?>" />
							</div>
						<?php } ?>
						<h3><?= the_title(); ?></h3>
						<p class="description">
							<?= get_the_excerpt(); ?>
						</p>
					</section>
				<?php endwhile; ?>
		  	</div>
	  	</div>
	<?php endif; ?>
<?php wp_reset_query(); ?>
</div>