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

   $fact_meta->add_field( array(
    'name' => 'PDF File',
    'desc' => 'Upload a PDF or enter an URL.',
    'id' => $prefix . 'fact_pdf_url',
    'type' => 'file',
    'query_args' => array(
      'type' => 'application/pdf'
    ),
   ));

   $research_meta = new_cmb2_box( array(
    'id'            => $prefix . 'research_metabox',
    'title'         => 'Research Metabox',
    'object_types'  => array( 'research' ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
  ) );

   $research_meta->add_field( array(
    'name' => 'PDF URL',
    'desc' => 'Upload a PDF or enter an URL.',
    'id' => $prefix . 'research_pdf_url',
    'type' => 'file',
    'query_args' => array(
      'type' => 'application/pdf'
    ),
   ));
     //Create MetaBox for the Three Icons Template (For Services Page and Education Page)

    $sections_meta = new_cmb2_box( array(   
    'id'            => $prefix . 'sections_metabox',
    'title'         => 'Sections Metabox',
    'object_types' => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'three-icons-template.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, 
  ) );

    $sections_meta->add_field( array(
    'name' => 'Image for section 1',
    'desc' => 'Set the image icon for section 1.',
    'id'   => $prefix . 'image_section1',
    'type' => 'file',
  ) );    

   $sections_meta->add_field( array(
    'name' => 'Title for section 1',
    'desc' => 'Set the title for section 1.',
    'id'   => $prefix . 'title_section1',
    'type' => 'text',
  ) );

   $sections_meta->add_field( array(
    'name' => 'Url for section 1',
    'desc' => 'Set the hyperlink for section 1.',
    'id'   => $prefix . 'url_section1',
    'type' => 'text',
  ) );

    $sections_meta->add_field( array(
    'name' => 'Desciption for section 1',
    'desc' => 'Set the description for section 1.',
    'id'   => $prefix . 'description_section1',
    'type' => 'textarea',
  ) );

    $sections_meta->add_field( array(
    'name' => 'Image for section 2',
    'desc' => 'Set the image icon for section 2.',
    'id'   => $prefix . 'image_section2',
    'type' => 'file',
  ) );    

   $sections_meta->add_field( array(
    'name' => 'Title for section 2',
    'desc' => 'Set the title for section 2.',
    'id'   => $prefix . 'title_section2',
    'type' => 'text',
  ) );

    $sections_meta->add_field( array(
    'name' => 'Url for section 2',
    'desc' => 'Set the hyperlink for section 2.',
    'id'   => $prefix . 'url_section2',
    'type' => 'text',
  ) );

    $sections_meta->add_field( array(
    'name' => 'Desciption for section 2',
    'desc' => 'Set the description for section 2.',
    'id'   => $prefix . 'description_section2',
    'type' => 'textarea',
  ) );

    $sections_meta->add_field( array(
    'name' => 'Image for section 3',
    'desc' => 'Set the image icon for section 3.',
    'id'   => $prefix . 'image_section3',
    'type' => 'file',
  ) );    

   $sections_meta->add_field( array(
    'name' => 'Title for section 3',
    'desc' => 'Set the title for section 3.',
    'id'   => $prefix . 'title_section3',
    'type' => 'text',
  ) );

    $sections_meta->add_field( array(
    'name' => 'Url for section 3',
    'desc' => 'Set the hyperlink for section 3.',
    'id'   => $prefix . 'url_section3',
    'type' => 'text',
  ) );

    $sections_meta->add_field( array(
    'name' => 'Desciption for section 3',
    'desc' => 'Set the description for section 3.',
    'id'   => $prefix . 'description_section3',
    'type' => 'textarea',
  ) );
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