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

    <?php if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">
      <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
</div><!-- .entry-header -->

  <div class="entry-content">
  <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <?php the_content(); ?>
  </div><!-- .entry-content -->
  </div>
</article><!-- #post-## -->
