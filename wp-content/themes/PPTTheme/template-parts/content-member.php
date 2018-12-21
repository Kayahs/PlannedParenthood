<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-stuff">
  <div class="entry-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>

</div><!-- .entry-header -->

  <div class="entry-content">
  <?php the_title('<h2 class="entry-title">', '</h2>' ); ?>
    <?php the_content(); ?>
  </div><!-- .entry-content -->
  </div>
</article><!-- #post-## -->
