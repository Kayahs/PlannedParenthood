<?php
/**
 * Custom metaboxes for this theme using CMB2.
 *
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

if ( file_exists( get_template_directory() . '/inc/cmb2/init.php' ) ) {
  require_once( get_template_directory() . '/inc/cmb2/init.php' );
}

/**
 * Metaboxes for single fact
 */

function ppt_register_metaboxes() {

  // Start with an underscore to hide fields from custom fields list
  $prefix = '_ppt_';

  $fact_meta = new_cmb2_box( array(
    'id'            => $prefix . 'fact_metabox',
    'title'         => 'Fact Metabox',
    'object_types'  => array( 'fact' ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
  ) );

   $fact_meta->add_field( array(
    'name' => 'Fact Blurb',
    'desc' => 'Small little blurb to display under the title at the top of the page.',
    'id'   => $prefix . 'fact_blurb',
    'type' => 'textarea',
  ) );
   $fact_meta->add_field( array(
    'name' => 'Card Excerpt',
    'desc' => 'Excerpt to show on Factsheets page.',
    'id' => $prefix . 'card_excerpt',
    'type' => 'text',
   ));
}

add_action( 'cmb2_admin_init', 'ppt_register_metaboxes' );

add_action( 'rest_api_init', function() {
  register_rest_field( 
    'fact',
    '_ppt_card_excerpt',
    array(
      'get_callback'    => 'ppt_get_card_excerpt',
      'update_callback' => 'ppt_update_card_excerpt',
      'schema'          => null,
    )
  );
});

function ppt_get_card_excerpt( $object, $field_name, $request ) {
  $fact = get_post( $object['id'] );
  return $fact->_ppt_card_excerpt;
}

function ppt_update_card_excerpt( $value, $object, $field_name ) {
  if ( ! $value || ! is_string( $value ) ) {
    return;
  }

  $fact = get_post( $object->ID );
  $fact->_ppt_card_excerpt = $value;
  return wp_update_post( $fact );
}