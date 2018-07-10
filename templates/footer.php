<div class="content-info clearfix" role="contentinfo">
	<div class="container">	
		<div class="row">
			  <div class="col-md-4 col-xs-12 left subFooter">
				  <h3>Productcategorie&euml;n</h3>
				  	<div class="row">
				  		<div class="col-sm-12"><?php wp_nav_menu( array('menu' => 'Productcategorieen' )); ?></div>
				  		<!--<div class="col-sm-6"><?php wp_nav_menu( array('menu' => 'Productcategorie rechts' )); ?></div>-->
					</div>
			  </div>
			  <div class="col-md-4 col-xs-12 middle subFooter">
				  <h3>Drukwerk op maat</h3>
					  <?php wp_nav_menu( array('menu' => 'Drukwerk op maat' )); ?>
			</div>
			  <div id="newsletterForm" class="col-md-4 col-xs-12 right subFooter">
				  <h3>Like ons op Facebook</h3>
				 <div class="fb-page" data-href="https://www.facebook.com/Drukkerij-Hoekstra-1205240352841216?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/HDU1859?fref=ts"><a href="https://www.facebook.com/Drukkerij-Hoekstra-1205240352841216?fref=ts">Hoekstra Drukkerij Uitgeverij</a></blockquote></div></div>
				  <!--<h4>Aanbieding &amp; inspiratieservice</h4>
				   <p>Phasellus vitae nunc enim. Proin eleifend varius quam, sit. Hasellus vitae nunc enim.</p>
				   <form action="http://nieuwsbrief.newfish.nl/t/r/s/djididd/" method="post" id="subForm">
				   		<label for="fieldName">Naam:</label> <input id="fieldName" name="cm-name" type="text" /><br/>
				   		<label for="fieldEmail">E-mail:</label> <input id="fieldEmail" name="cm-djididd-djididd" type="email" required /><br/>
				   		<button type="submit">Aanmelden</button>
					</form>-->
			  </div>
		</div>
	</div>  
</div>

<div class="content-naw clearfix">
	<div class="container">	
		<div class="row">
			  <div class="col-md-4 col-xs-12 subFooter">
				<ul>
					<li><h5>Bezoekadres</h5></li>
					<li>Van Harenstraat 23 -27</li>
					<li>9076 BS Sint Annaparochie</li>
					<li><a href="tel:0518401228" title="Bel ons">0518 401228</a></li>
				</ul>
			  </div> 
			<div class="col-md-4 col-xs-12 subFooter">
				<ul>
					<li><h5>Afleveradres</h5></li>
					<li>Expeditie</li>
					<li>Ingang aan de Beuckelaerstraat 31</li>
					<li><a href="mailto:info@drukkerijhoekstra.nl" title="Stuur ons een mail">info@drukkerijhoekstra.nl</a></li>
				</ul>
			</div>
			 <div class="col-md-4 col-xs-12 subFooter" id="hofleverancier">
				<a href="http://www.hofleverancier.nu/" target="_blank" title="HDU is hofleverancier">
					<img width="340" height="88" src="<?= get_template_directory_uri() . '/dist/images/hofleverancier.png'; ?>" alt="HDU is hofleverancier" name="HDU is hofleverancier" title="HDU is hofleverancier" />
				</a>
			</div>
		</div>
	</div>  
</div>
<footer class="site-info">
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li>&copy; Hoekstra 1859 - <?= date("Y"); ?></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/algemene-voorwaarden" title="Algemene voorwaarden">Algemene voorwaarden</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/disclaimer-privacy-policy" title="Disclaimer &amp; Privacy Policy">Disclaimer &amp; Privacy Policy</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/sitemap" title="Sitemap">Sitemap</a></li>
				</ul>
				<!--<ul class="credits">
					<li>Gerealiseerd door: <a href="http://www.brightboysquad.com/" target="_blank" title="Brighboy Squad">Brighboy Squad</a> &amp; <a href="http://newfish.nl" target="_blank" title="newfish.nl">Newfish.nl</a>
					</li>
				</ul>-->
			</div>
		</div>
	</div>		
</footer>