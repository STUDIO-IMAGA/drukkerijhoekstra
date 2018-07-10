<div id="kerstkaarten">
	<div class="container">
		<div class="row">
			



						
						<div class="col-md-12">
						<h1>U kunt weer kerstkaarten kopen bij ons!</h1>
						<p>Een passende kaart voor uw bedrijf, wenst u voor het nieuwe jaar een originele kaart geheel in uw eigen (huis)stijl, dan kunnen wij samen met u en onze vormgevers de kaart voor u ontwerpen die geheel bij de uitstraling van uw bedrijf past. Of kies een kaart hieronder en laat uw bedrijfs logo en wens indrukken.</p>
						<p>Ook hebben wij collectieboeken waaruit u thuis of op kantoor, op uw gemak, een keuze uit kunt maken. Wilt u eerst op internet een indruk krijgen van de diverse collecties dan kunt u terecht op de volgende websites:
	
							<ul>
							<li><a href="http://www.belarto.nl/" target="_blank" title="Belarto">Belarto</a></li>
							<li><a href="http://www.familycards.nl/" target="_blank" title="Familycards">Familycards</a></li>
							<li><a href="http://www.buromac.com/nl-nl" target="_blank" title="Buromac">Buromac</a></li>
							<li><a href="http://www.cartotake.nl/" target="_blank" title="Cartotake">Cartotake</a></li>
							<li><a href="http://www.amcocards.nl/" target="_blank" title="Amcocards">Amcocards</a></li>
							
							</ul>
							
						</p>
						<p>Geef uw kerstwens nog meer inhoud door een kerstkaart te kiezen waarmee u een goed doel steunt. Kies &eacute;&eacute;n van uw favoriete goede doelen via Belarto!</p>
						
						<p>Cliniclowns | War child | Kika | Johan Cruijff foundation | Nederlandse Hartstichting | Pink Ribbon | KWF kankerbestrijding | Wereld Natuurfonds | Unicef</p>
						
						</div>
						
						
						<?php query_posts( array( 'post_type' => 'kerstkaarten', 'posts_per_page' => -1 ) );
						
						while ( have_posts() ) : the_post();
						
					
							$count++; 
							if ($count == '3') { 
								$numberCard = 'kerstkaartLast'; 
								$count = '0'; 
							} else { 
								$numberCard = '';
							} ?>
							<div class="col-md-4">
								<a href="<?php the_permalink(); ?>" title="Bestel <?php the_title_attribute(); ?>">
									<?php if ( has_post_thumbnail() ) :
										the_post_thumbnail(array(286, 286) );
									endif; ?>
								
									<div class="kerstkaartData">
										<?php the_content(); ?>
									</div>
								</a>
								<a href="<?php the_permalink(); ?>" title="Bestel <?php the_title_attribute(); ?>" class="bestelKaart">Bestel deze kerstkaart</a>
							</div>
						<?php endwhile; ?>
					
			
					
				</div>
			</div>
