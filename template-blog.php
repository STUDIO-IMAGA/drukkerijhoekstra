<?php
/**
 * Template Name: Blog
 */
?>


	<div class="container">
		
							<div class="page-header">
<h1>Nieuws</h1>
</div>
		<div class="contentPage">
		<div class="row">			
					

				

<?php
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		
		
		
		
		<div class="col-md-4 col-sm-6 nieuwsItem">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink(); ?>" title="<?= the_title(); ?>">
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
									<img class="imgAssortiment" src="<?= $image[0]; ?>" title="<?= the_title(); ?>" alt="<?= the_title(); ?>" name="<?= the_title(); ?>" />
									
								</a>
							<?php } ?>
							<a href="<?php the_permalink(); ?>" title="<?= the_title(); ?>">
							<h3><?= the_title(); ?></h3>
							</a>
							<p class="description">
								<?= wp_trim_words( get_the_excerpt(), $num_words = 13, $more = ' ...' ); ?>
							</p>
			
						</div>
		
		
		
		
<?php endwhile; ?>

</div>


		

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts" class="col-sm-12">
			<div class="prev"><?php next_posts_link('&laquo; Vorige berichten'); ?></div>
			<div class="next"><?php previous_posts_link('Volgende berichten &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts" class="col-sm-12">
			<div class="prev"><?php next_posts_link('&laquo; Vorige berichten'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>


		
	</div>
	</div>
</div>