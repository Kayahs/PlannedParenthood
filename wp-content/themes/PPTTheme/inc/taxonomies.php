<?php
/**
 * TAXONOMIES
 * @package RED_Starter_Theme
 */

// register two taxonomies to go with the post type

function create_category_labels($label) {
  // set up labels
  $labels = array(
    'name'              => "$label Categories",
    'singular_name'     => "$label Category",
    'search_items'      => "Search $label Categories",
    'all_items'         => "All $label Categories",
    'edit_item'         => "Edit $label Category",
    'update_item'       => "Update $label Category",
    'add_new_item'      => "Add New $label Category",
    'new_item_name'     => "New $label Category",
    'menu_name'         => "$label Categories"
  );

  return $labels;
}

function create_tag_labels($label) {
  // set up labels
  $labels = array(
    'name'              => "$label Tags",
    'singular_name'     => "$label Tag",
    'search_items'      => "Search $label Tags",
    'all_items'         => "All $label Tags",
    'edit_item'         => "Edit $label Tag",
    'update_item'       => "Update $label Tag",
    'add_new_item'      => "Add New $label Tag",
    'new_item_name'     => "New $label Tag",
    'menu_name'         => "$label Tags"
  );

  return $labels;
}

function register_taxonomies() {
  // register taxonomy
  register_taxonomy( 'programcat', 'program', array(
    'hierarchical' => true,
    'labels' => create_category_labels("Program"),
    'query_var' => true,
    'show_admin_column' => true
  ) );

  register_taxonomy( 'newscat', 'news', array(
    'hierarchical' => true,
    'labels' => create_category_labels("News"),
    'query_var' => true,
    'show_admin_column' => true
  ) );

  register_taxonomy( 'facttag', 'fact', array(
    'hierarchical' => true,
    'labels' => create_tag_labels("Fact"),
    'query_var' => true,
    'show_admin_column' => true,
    'show_in_rest' => true
  ) );

  register_taxonomy( 'jobtag', 'job', array(
  'hierarchical' => true,
  'labels' => create_tag_labels("Job"),
  'query_var' => true,
  'show_admin_column' => true,
  'show_in_rest' => true
) );

  register_taxonomy( 'jobcat', 'job', array(
  'hierarchical' => true,
  'labels' => create_category_labels("Job"),
  'query_var' => true,
  'show_admin_column' => true,
  'show_in_rest' => true
) );

}
add_action( 'init', 'register_taxonomies' );
?>

