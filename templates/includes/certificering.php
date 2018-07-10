<div id="certificering">
<?php query_posts( array( 'post_type' => 'certificering', 'posts_per_page' => 3 ) );
	if ( have_posts() ) : $count = 0; ?>
	  <div class="clearfix" id="certificaat">
		  		<div class="row">
					<?php while ( have_posts() ) : the_post();
						$count++; 
						$button = get_post_meta( get_the_ID(), 'wpcf-button', true );
						$url = get_post_meta( get_the_ID(), 'wpcf-url', true );
						$afbeelding = types_render_field( "afbeelding", array( "alt" => $post->post_title, "title" => $post->post_title, "class" => "certImageOver",  "width" => "90", "height" => "90", "proportional" => "false" ) );
						if (!empty($button)) {
							$buttonText = $button;
						} else {
							$buttonText = 'Meer informatie';
						}

						if (!empty($url)) {
							$buttonURL = $url;
						} else {
							$buttonURL = get_permalink();
						} ?>

						<section class="col-sm-4">
							<h3><?= the_title(); ?></h3>
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?= $buttonURL; ?>" title="<?= the_title(); ?>">
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' ); ?>
									<img class="imgCert" src="<?= $image[0]; ?>" title="<?= the_title(); ?>" alt="<?= the_title(); ?>" name="<?= the_title(); ?>" />
									<?php echo $afbeelding; ?>
								</a>
							<?php } ?>
							<p class="description">
								<?= wp_trim_words( get_the_excerpt(), $num_words = 29, $more = ' ...' ); ?>
							</p>
							<a class="certButton" href="<?= $buttonURL; ?>" title="<?= the_title(); ?>">
								<?= $buttonText; ?>
							</a>
						</section>
					<?php endwhile; ?>
		  	</div>
	  	</div>
	<?php endif; ?>
<?php wp_reset_query(); ?>
</div>