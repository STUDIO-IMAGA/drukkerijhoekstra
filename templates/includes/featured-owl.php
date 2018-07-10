<?php
/**

 *  Homepage Slider OWLSLIDER Package
 *  javascript in _main.js 
 */
global $wp_query, $post, $panel_error_message;
$settings['featured_order']  = 'ASC';
$featposts                   = 4;
$orderby                     = 'date';  //rand, none, menu_order
$full_width                  = true;
$show_title	                 = false;
$show_description            = false;
$slides = get_posts(array(
	'post_type' => 'slide',
	'numberposts' => $featposts,
	'order' => $settings['featured_order'],
	'orderby' => $orderby,
	'suppress_filters' => 0
));
$slide_class = (count($slides) == 1 ? "no-carousel" : "owl-carousel");
$slide_id = (count($slides) == 1 ? "no-carousel" : "owl-slider");
if (( count($slides) > 0 )) { ?>
	<div class="slider-container">
		<?php if (!$full_width): ?>
			<div class="container">
		<?php endif; ?>
		<div id="<?= $slide_id ?>" class="<?= $slide_class ?> owl-theme"> 
	    	<?php $count = 1; foreach($slides as $post) : setup_postdata($post); $count++; ?>    
		        <div id="slide-<?php echo $count; ?>" class="item slide-id-<?php the_ID(); ?>" >
		        		<?php
							$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
							$formaat = wp_get_attachment_metadata( $post_thumbnail_id );
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'headerImage' );
						if ( has_post_thumbnail() && $formaat["width"] > 1600 ) {  ?>
							<img id="headerImage" src="<?= $image[0]; ?>" title="Drukkerij Hoekstra" alt="Drukkerij Hoekstra" name="Drukkerij Hoekstra" />	
						<?php } 
							 if ($show_title): ?>
							<h2 class="slider-title"><?php the_title(); ?></h2>
						<?php endif; 
							if ($show_description): ?>
							<div class="slider-content-holder"
								<p class="slider-content"><?php the_content(); ?></p>
			            	</div>
						<?php endif; ?>            	
		            </div>
				<?php endforeach; ?> 
		    </div>
	<?php if (!$full_width): ?>
	</div>
	<?php endif; ?>
</div>    
<?php }?>