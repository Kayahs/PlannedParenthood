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
    'desc' => 'Small little blurb to display on the card and at the top of the page.',
    'id'   => $prefix . 'fact_blurb',
    'type' => 'textarea',
  ) );
}

add_action( 'cmb2_admin_init', 'ppt_register_metaboxes' );