<?php
/**
 * Template part for displaying posts.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php 
    $categories = array_reverse(get_the_terms(get_the_ID(), 'presscat'));

    if (! empty( $categories ) && ! is_wp_error( $categories )) :
      echo "<div class='press'>";   
      foreach($categories as $category):     
        echo "<p class='press-title'><a href=" . esc_url( get_permalink() ) .">" . get_the_date() . " | " . $category->name . " - " . get_the_title() . "</a></p>";
      endforeach;           
      echo "</div>";
    endif; 
  ?>
  </article><!-- #post-## -->
