<?php
use Roots\Sage\Config;
use Roots\Sage\Wrapper;
?>
<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
  
        <?php if (is_front_page()) { ?>
		  	<div id="sliderHome">
				<div class="container">
					<?php layerslider(1) ?>
				</div>
			</div>
		<?php } else { ?>
			<div id="headerImage">
				<div class="container">
				<div class="row">
				<div class="col-md-12">
					<?php
					$post_obj = $wp_query->get_queried_object();
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'headerImage' );
					$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
					$formaat = wp_get_attachment_metadata( $post_thumbnail_id );
					if ($post->post_type == 'kerstkaarten') {
						$imageTop = 'http://drukkerijhoekstra.nl/wp-content/uploads/2016/11/kersheader.jpg';
					} elseif (is_tax( 'veelgestelde-vragen' )) {
						$imageTop = 'http://drukkerijhoekstra.nl/wp-content/uploads/2015/04/drukkerij-hoekstra-groot-overkleur-1600x400.jpg';
					} elseif ( is_singular('vragen') ) {
						$imageTop = 'http://drukkerijhoekstra.nl/wp-content/uploads/2015/04/drukkerij-hoekstra-groot-overkleur-1600x400.jpg';
					} elseif (empty($image) || $formaat["width"] < 1100) {
						//$imageTop = get_template_directory_uri() . '/assets/images/hoekstraTop.jpg';
						$imageTop = 'http://drukkerijhoekstra.nl/wp-content/uploads/2015/04/drukkerij-hoekstra-groot-overkleur-1600x400.jpg';
					} else {
						$imageTop = $image[0];
					} ?>
					<img id="imageTop" src="<?php echo $imageTop; ?>" title="Hoekstra Drukkerij" alt="Hoekstra Drukkerij" name="Hoekstra Drukkerij" />
					</div>
				</div>
				</div>
			</div>
		<?php } ?>
        <?php include Wrapper\template_path(); ?>
        <?php if (Config\display_sidebar()) : ?>
          <!--<aside class="sidebar" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside>-->
        <?php endif; ?>

    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>