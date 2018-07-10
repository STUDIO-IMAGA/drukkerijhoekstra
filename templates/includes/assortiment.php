<?php query_posts( array( 'post_type' => 'assortiment', 'posts_per_page' => -1 ) );
	if ( have_posts() ) : $count = 0; ?>
	  <div class="clearfix" id="assortiment">
		  	<h2>Ons Assortiment</h2>
		  	<!--<div class="row row-eq-height">-->
			<div class="row">
					<?php while ( have_posts() ) : the_post();
						$count++;
						$excerpt = get_the_excerpt();
						$button = get_post_meta( get_the_ID(), 'wpcf-button', true );
						$extra = get_post_meta( get_the_ID(), 'wpcf-by-line', true );
						$url = get_post_meta( get_the_ID(), 'wpcf-url', true ); 
						if (!empty($button)) {
							$buttonText = $button;
						} else {
							$buttonText = 'Meer informatie';
						}
						if (!empty($url)) {
							$buttonURL = $url;
						} else {
							$buttonURL = get_permalink();
						} 
						/*if ($count == 3) { ?>
							<div class="col-md-4 col-sm-6" id="offerteCalculator">
								<?= do_shortcode( '[gravityform id="2" title="true" description="true" ajax="true" tabindex="0"]' ); ?>
							</div>
						<?php } ?>*/ ?>
						<div class="col-md-4 col-sm-6">
							<h3><?= the_title(); ?></h3>
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?= $buttonURL; ?>" title="<?= the_title(); ?>">
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
									<img class="imgAssortiment" src="<?= $image[0]; ?>" title="<?= the_title(); ?>" alt="<?= the_title(); ?>" name="<?= the_title(); ?>" />
									<?php if (!empty($extra)) { ?>
										<div class="extraAssortiment"><?= $extra; ?></div>
									<?php } ?>
								</a>
							<?php } ?>
							<p class="description">
								<?= wp_trim_words( get_the_excerpt(), $num_words = 13, $more = ' ...' ); ?>
							</p>
							<!--<a class="buttonAssortiment" href="<?= $buttonURL; ?>" title="<?= the_title(); ?>">
								<?= $buttonText; ?>
							</a>-->
						</div>
				<?php endwhile; ?>
		  	</div>
	  	</div>
	<?php endif; ?>
<?php wp_reset_query(); ?>