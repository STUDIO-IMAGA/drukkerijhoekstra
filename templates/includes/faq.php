<?php 
$terms = get_terms( 'veelgestelde-vragen' );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
     foreach ( $terms as $term ) { ?>
		 <div class="col-md-4">
			 <div class="faqItem">
	     		<h3><?= $term->name; ?></h3>
		 		<a href="/veelgestelde-vragen/<?= $term->slug; ?>" title="<?= $term->name; ?>">
		 			<span><?= $term->count; ?> antwoorden</span>
	     		</a>
			 </div>
		 </div>
	   <?php
	}
}
?>