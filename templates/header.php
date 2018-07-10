<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.5&appId=1633385630230111";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81313305-1', 'auto');
  ga('send', 'pageview');

</script>
<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<div id="headerTop">
		<div class="container">
			<div class="row">
				<div id="nawTop" class="col-md-9 col-sm-10 col-xs-12">
					<ul>
						<!--<li id="logoSmall">
							<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'description' ); ?>">
								<img width="100" height="22" src="<?= get_template_directory_uri() . '/dist/images/hoekstraTop.jpg'; ?>" alt="<?php bloginfo( 'name' ); ?>" name="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />
							</a>
						</li>-->
						<li id="belons"><a href="tel:0518401228" title="Bel ons">0518 401228</a></li>
						<li id="nawText"><a href="mailto:info@drukkerijhoekstra.nl" title="Stuur ons een mail">info@drukkerijhoekstra.nl</a></li>
						<li id="mailText"><a href="https://www.google.nl/maps/place/Hoekstra+Drukkerij+St.+Annaparochie+Friesland/@53.276721,5.6574203,17z/data=!3m1!4b1!4m2!3m1!1s0x47c91d6c9ffb428f:0xd4b2b46573699abf" target="_blank" title="Routebeschrijving">Van Harenstraat 23-27</a></li>
						<li id="nawPostal"><a href="https://www.google.nl/maps/place/Hoekstra+Drukkerij+St.+Annaparochie+Friesland/@53.276721,5.6574203,17z/data=!3m1!4b1!4m2!3m1!1s0x47c91d6c9ffb428f:0xd4b2b46573699abf" target="_blank" title="Routebeschrijving">9076 BS Sint Annaparochie</a></li>
					</ul>
				</div>
				<div id="searchTop" class="col-md-3 col-sm-2 col-xs-12">
          <form class="searchbox" action="/" method="get">
            <input id="search" type="text" placeholder="Zoeken......" name="s" class="searchbox-input" value="<?php the_search_query(); ?>" onkeyup="buttonUp();" required>
            <button type="submit" class="searchbox-submit"><i class="fa fa-search"></i></button>
            <span class="searchbox-icon"><i class="fa fa-search"></i></span>
          </form>
          <div class="socialmedia">
            <a href="https://www.linkedin.com/company/hoekstra-drukkerij-en-uitgeverij/" target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
            <a href="https://nl-nl.facebook.com/drukkerijhoekstra/" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/drukkerijhoekstra/" target="_blank">
              <i class="fa fa-instagram"></i>
            </a>
          </div>
				</div>
			</div>
		</div>
	</div>
	<div id="headerLogo">
		<div class="container">
			<?php $logo = get_template_directory_uri() . '/dist/images/logoNew.png'; ?>
			<a id="logo" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'description' ); ?>">
	    		<img width="233" height="140" src="<?= $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" name="<?php bloginfo( 'name' ); ?>" />
			</a>
    	</div>

	</div>
	<div id="headerMenu">
		<div class="container">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
		  				<span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
		  				<span class="icon-bar"></span>
		  				<span class="icon-bar"></span>
		  				<span class="icon-bar"></span>
		  			</button>
			<nav class="collapse navbar-collapse" role="navigation">
				<?php if (has_nav_menu('primary_navigation')) :
					wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
				endif; ?>
			</nav>
		</div>
	</div>
</header>
