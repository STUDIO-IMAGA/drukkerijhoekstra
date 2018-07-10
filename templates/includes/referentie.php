<?php query_posts( array( 'post_type' => 'referenties', 'posts_per_page' => 9, 'orderby' => 'rand' ) );
	if ( have_posts() ) : $count = 0; ?>
	  <div class="clearfix">
		  	<div class="row">
				<?php while ( have_posts() ) : the_post();
					$functie = get_post_meta( get_the_ID(), 'wpcf-functie', true );
					$persoon = get_post_meta( get_the_ID(), 'wpcf-contactpersoon', true );
					$website = get_post_meta( get_the_ID(), 'wpcf-weburl', true );
					$count++; ?>
					<section class="col-sm-4 referentieLine">
						<?php if ( has_post_thumbnail() ) { 
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'refImage' ); ?>
							<div class="centerRefImg">
								<?php if (!empty($website)) { ?>
									<a target="_blank" href="<?= $website; ?>" title="Website <?= the_title(); ?>">
										<img align="middle" class="imgRef" src="<?= $image[0]; ?>" title="<?= the_title(); ?>" alt="<?= the_title(); ?>" name="<?= the_title(); ?>" />
									</a>
								<?php } else { ?>
									<img align="middle" class="imgRef" src="<?= $image[0]; ?>" title="<?= the_title(); ?>" alt="<?= the_title(); ?>" name="<?= the_title(); ?>" />
								<?php } ?>
							</div>
						<?php } ?>
						<div class="bgContentRef">
							<div class="quoteImgLeft">
								<img class="quoteImg" width="50" height="50" src="http://drukkerijhoekstra.nl/wp-content/uploads/2016/01/quoteLeft.jpg" title="Quote" alt="Quote" />
							</div>
							<dic class="theContent">
								<?php echo apply_filters('the_content', get_post_field('post_content', $post->ID)); ?>
								<br><br>
							</dic>
							<div class="nawPerson">
								<?php if (!empty($website)) { ?>
									<a target="_blank" href="<?= $website; ?>" title="Website <?= the_title(); ?>">
										<h3><?= the_title(); ?></h3>
									</a>
								<?php } else { ?>
									<h3><?= the_title(); ?></h3>
								<?php } ?>
								<!--<?php if (!empty($functie)) { ?>
									<div class="persoonRef">
										<?= $functie; ?>
									</div>
								<?php } ?>
								<?php if (!empty($persoon)) { ?>
									<div class="persoonRef">
										<?= $persoon; ?>
									</div>
								<?php } ?>-->
							</div>
							<div class="quoteImgRight">
								<img class="quoteImg" width="50" height="50" src="http://drukkerijhoekstra.nl/wp-content/uploads/2016/01/quoteRight.jpg" title="Quote" alt="Quote" />
							</div>
						</div>
					</section>
				<?php endwhile; ?>
		  	</div>
	  	</div>
	<?php endif; ?>
<?php wp_reset_query(); ?>