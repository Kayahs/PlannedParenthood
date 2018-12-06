<?php
/**
 * POST TYPES
 * @package RED_Starter_Theme
 *
 */
 //register custom post type to work with
function create_labels_post_types($label) {
  // set up labels
  $labels = array(
    'name' => $label . 's',
      'singular_name' => $label,
      'add_new' => 'Add New ' . $label,
      'add_new_item' => 'Add New ' . $label,
      'edit_item' => 'Edit ' . $label,
      'new_item' => 'New ' . $label,
      'all_items' => 'All ' . $label . 's',
      'view_item' => 'View ' . $label,
      'search_items' => 'Search ' . $label . 's',
      'not_found' =>  'No ' . $label . 's Found',
      'not_found_in_trash' => 'No ' . $label . 's found in Trash', 
      'parent_item_colon' => '',
      'menu_name' => $label . 's',
    );
    return $labels;
}
function create_post_types() {
  
    //register post type
  register_post_type( 'program', array(
    'labels' => create_labels_post_types("Program"),
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),  
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'programs' ),
    )
  );

  register_post_type( 'fact', array(
    'labels' => create_labels_post_types("Fact"),
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'author', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'facts' ),
    )
  );

  register_post_type( 'career', array(
    'labels' => create_labels_post_types("Career"),
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'author', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
    'taxonomies' => array( 'post_tag', 'category' ),  
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'careers' ),
    )
  );

  register_post_type( 'board_member', array(
    'labels' => create_labels_post_types("Board Member"),
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail','page-attributes' ),  
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'board-of-directors' ),
    )
  );
}
add_action( 'init', 'create_post_types' );

?>