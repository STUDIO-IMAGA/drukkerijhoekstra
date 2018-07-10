<div id="assortimentHome">
	<div class="container">
		<?php get_template_part('templates/includes/assortiment'); ?>
	</div>
</div>
<div id="daaromHoekstra">
	<div class="container">
		<div class="row">
		<div class="col-sm-12">
		<h2>Daarom kiezen klanten al meer dan 155 jaar voor Drukkerij Hoekstra</h2>
		</div>
			<?php 
				$page_data = get_page(14494);
			?>
			<div class="col-md-8 col-sm-12">
				<iframe width="100%" height="422" src="<?php echo get_post_meta($page_data->ID, 'wpcf-youtube-link', true); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-4 col-sm-12">
				<h4><?php echo $page_data->post_title; ?></h4>
				<?php echo apply_filters('the_content', $page_data->post_content); ?>
			</div>
			<div class="col-md-12">
				<div id="bottomYoutube">
			<h3>D&eacute; verpakking- en huisstijlspecialist</h3>
			<ul>
				<li>Foliepreeg</li>
				<li>RVS Effect</li>
				<li>UV-Lak</li>
				<li>Blindpreeg</li>
				<li>Unieke, complexe vormen</li>
			</ul>
			</div>
		</div>
	</div>
</div>
</div>
<div id="featuresHome">
	<div class="container">
		<?php get_template_part('templates/includes/features'); ?>
	</div>
</div>
<div id="dragenZorg">
	<div class="container">
		<h4>Wij dragen zorg voor uw kwaliteit,<br/>onze maatschappij en ons milieu.</h4>
	</div>
</div>
<div id="certificeringHome">
	<div class="container">
		<?php get_template_part('templates/includes/certificering'); ?>
	</div>
</div>