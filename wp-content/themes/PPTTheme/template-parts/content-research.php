<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>

   <?php $post_date = get_the_date( 'l F j, Y' ); ?> 
   <p>Date Published: <?php echo $post_date; ?></p>

    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
  
   <div class="entry-content">
    <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <div class="entry-meta">
      <?php echo '<a href="'. get_post_permalink() .'">read more</a>';
      echo '<a href="'. get_post_meta( get_the_ID(), '_ppt_research_pdf_url', true ) .'">download guidlines</a>'; ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->


</article><!-- #post-## -->
