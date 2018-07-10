<div id="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php printf(single_cat_title( '', false ) . '' ); ?></h1>
			</div>
			<div id="faqTop">
			<div id="searchFaq" class="col-md-8 col-sm-6">
				<?php if (!have_posts()) : ?>
					<div class="alert alert-warning">
						<?php _e('Sorry, no results were found.', 'sage'); ?>
  					</div>
  				<?php endif; ?>
  				<div class="panel-group" id="accordion">
  				<?php $count = 0; while (have_posts()) : the_post(); $count ++; ?>
  					
  						<div class="panel panel-default">
  							<div class="panel-heading">
  								<h4 class="panel-title">
  									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel<?php echo $count; ?>"><i class="glyphicon glyphicon-minus"></i><?php the_title(); ?></a>
            					</h4>
        					</div>
							<div id="panel<?php echo $count; ?>" class="panel-collapse collapse">
								<div class="panel-body"><?php the_content(); ?></div>
        					</div>
						</div>
					
   				<?php endwhile; ?>
   				</div>
				<a id="veelgesteldeLink" href="/veelgestelde-vragen" title="Terug naar de veelgestelde vragen">Terug naar de veelgestelde vragen</a>
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
		</div>
		</div>
	</div>
</div>