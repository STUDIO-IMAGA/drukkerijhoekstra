<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
 // Define Google Fonts
 define("GOOGLE_FONTS", "Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Serif+Caption:400,400i|PT+Serif:400,400i,700,700i");


$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_image_size( 'headerImage', 1600, 400, true );
add_image_size( 'iconFeatures', 999999, 70, false );
add_image_size( 'refImage', 110, 110, true );

//add_filter('show_admin_bar', '__return_false');

function custom_excerpt_length( $length ) {
	return 55;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return __(' ...', 'newfish');
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function gform_column_splits( $content, $field, $value, $lead_id, $form_id ) {
	if( !IS_ADMIN ) { // only perform on the front end

		// target section breaks
		if( $field['type'] == 'section' ) {
			$form = RGFormsModel::get_form_meta( $form_id, true );

			// check for the presence of multi-column form classes
			$form_class = explode( ' ', $form['cssClass'] );
			$form_class_matches = array_intersect( $form_class, array( 'two-column', 'three-column' ) );

			// check for the presence of section break column classes
			$field_class = explode( ' ', $field['cssClass'] );
			$field_class_matches = array_intersect( $field_class, array('gform_column') );

			// if field is a column break in a multi-column form, perform the list split
			if( !empty( $form_class_matches ) && !empty( $field_class_matches ) ) { // make sure to target only multi-column forms

				// retrieve the form's field list classes for consistency
				$form = RGFormsModel::add_default_properties( $form );
				$description_class = rgar( $form, 'descriptionPlacement' ) == 'above' ? 'description_above' : 'description_below';

				// close current field's li and ul and begin a new list with the same form field list classes
				return '</li></ul><ul class="gform_fields '.$form['labelPlacement'].' '.$description_class.' '.$field['cssClass'].'"><li class="gfield gsection empty">';

			}
		}
	}

	return $content;
}
add_filter( 'gform_field_content', 'gform_column_splits', 10, 5 );

function custom_excerpt() {
	$text = preg_replace('/"/', ' ', get_the_excerpt());
	echo $text;
}

/*function enqueue_filterable()
{
    wp_register_script( 'filterable', 'http://files.www.gethifi.com/posts/filterable/js/filterable.pack.js', array( 'jquery' ) );
    wp_enqueue_script( 'filterable' );
}
add_action('wp_enqueue_scripts', 'enqueue_filterable');*/

// Custom Post Type "Kerstkaarten" //
add_action( 'init', 'register_cpt_kerstkaarten' );
function register_cpt_kerstkaarten() {
    $labels = array(
    'name' => _x( 'Kerstkaarten', 'kerstkaarten' ),
    'singular_name' => _x( 'Kerstkaarten', 'kerstkaarten' ),
    'add_new' => _x( 'Kaart toevoegen', 'kerstkaarten' ),
    'add_new_item' => _x( 'Voeg een nieuwe kerstkaart toe', 'kerstkaarten' ),
    'edit_item' => _x( 'Bewerk kerstkaart', 'kerstkaarten' ),
    'new_item' => _x( 'Nieuwe kerstkaart', 'kerstkaarten' ),
    'view_item' => _x( 'Bekijk kerstkaart', 'kerstkaarten' ),
    'search_items' => _x( 'Zoek kerstkaart', 'kerstkaarten' ),
    'not_found' => _x( 'Geen kerstkaarten gevonden', 'kerstkaarten' ),
    'not_found_in_trash' => _x( 'Geen kerstkaart gevonden in de prullenbak', 'kerstkaarten' ),
    'parent_item_colon' => _x( 'Hoofd kerstkaart:', 'kerstkaarten' ),
    'menu_name' => _x( 'Kerstkaarten', 'kerstkaarten' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'page'
    );
    register_post_type( 'kerstkaarten', $args );
}
