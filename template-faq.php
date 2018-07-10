<?php
/**
 * Template Name: FAQ
 */
?>
<div id="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
			
			
		
			<div id="searchFaq" class="col-md-8 col-sm-6">
				
				<?php echo apply_filters('the_content', get_post_field('post_content', $id)); ?>
				<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
					<input id="zoekVeld" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Zoek naar antwoorden binnen de klantenservice" />
					<button id="zoekButton" type="submit"><i class="fa fa-search"></i> Zoek</button>
					<input type="hidden" name="post_type" value="veelgestelde-vragen" />
				</form>
				
			</div>
			
				
		
			<div class="col-md-4 col-sm-6">
				<div id="faqNaw">
				<h2>Hulp nodig?</h2>
				<p>Wij zijn er voor u, chat, bel of mail</p>
				<ul>
					<li><i class="fa fa-weixin fa-2x"></i> Chat</li>
					<li><i class="fa fa-phone fa-2x"></i> <a href="tel:0518401228" title="Bel ons">0518 401228</a></li>
					<li><i class="fa fa-envelope fa-2x"></i> <a href="mailto:info@hdu.nl" title="Stuur ons een e-mail">info@drukkerijhoekstra.nl</a></li>
				</ul>
				</div>
			</div>
		
	
		<div id="faqItems">
		
				<?php get_template_part('templates/includes/faq'); ?>
		
		</div>
	</div>
</div>
</div>