<?php query_posts( array( 'post_type' => 'portfolio', 'posts_per_page' => -1 ) );
	if ( have_posts() ) : $count = 0; ?>
	  <div class="clearfix" id="assortiment">
		  	<h2>Stansvormen</h2>
				<div id="filterCat" class="col-md-12">
					<?php $categories = get_categories('taxonomy=portfolio-category&post_type=portfolio');
				    foreach ($categories as $category) : ?>
						<input class="filterbox" type="checkbox" name="interest" value="<?php echo $category->cat_ID; ?>" /><?php echo $category->name;
				    endforeach; ?>
				</div>
				<?php while ( have_posts() ) : the_post();
						if ( has_post_thumbnail() ) { ?>
							<div class="col-md-4 col-sm-6 stansBox">
								<?php $term_list = wp_get_post_terms($post->ID, 'portfolio-category', array("fields" => "ids")); ?>
								<div class="hidden tags <?php echo $term_list[0]; ?>"></div>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
								<img src="<?= $image[0]; ?>" title="<?= the_title(); ?>" alt="<?= the_title(); ?>" name="<?= the_title(); ?>" />
								<h3><?= the_title(); ?></h3>
								<?php	
									$pdfLink = get_post_meta( get_the_ID(), 'wpcf-pdf', true );
									$excerpt = custom_excerpt( $post );
									$stans = get_post($post->ID);								
								?>
								<?php echo $excerpt; ?>
								<?php if (!empty($pdfLink)) { ?>
									<a class="downloadStans" href="<?php echo $pdfLink; ?>" title="<?= the_title(); ?>">Download</a>
								<?php } else {
									$linkPDF = 'c:/domains/drukkerijhoekstra.nl/wwwroot/pdf/PDF_'.$stans->post_title.'.pdf';
									if (file_exists($linkPDF)) { ?>
										<a class="downloadStans" href="http://drukkerijhoekstra.nl/pdf/PDF_<?= the_title(); ?>.pdf" title="<?= the_title(); ?>">Download</a>
									<?php } ?>
								<?php } ?>
							</div>
						<?php } ?>
				<?php endwhile; ?>
	  	</div>
	<?php endif; ?>
<?php wp_reset_query(); ?>