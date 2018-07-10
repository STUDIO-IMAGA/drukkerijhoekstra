<?php
/**
 * Template Name: Presentatie
 */
?>
<div id="presentatie">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php echo apply_filters('the_content', get_post_field('post_content', $id)); ?>
			</div>
			<div class="col-md-12 text-center">
				<a class="viewPDF" target="_blank" href="http://drukkerijhoekstra.nl/wp-content/uploads/2017/10/plek_voor_een_feestje.pdf" title="Bekijk de PDF">Bekijk de PDF</a>
			</div>
		</div>
	</div>
</div>