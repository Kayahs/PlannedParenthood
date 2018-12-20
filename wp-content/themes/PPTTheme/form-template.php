<?php
/**
 * The template for displaying form pages.
 *
 * Template Name: Form Template
 * Template Post Type: program
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="wrapper top-hero">
          <h1 class="page-title"><?php echo get_post_meta(get_the_ID(), "_ppt_single_program_title", true); ?> </h1>
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
       </div><!-- .top-hero-blue -->
        <div class="entry-content">
          <?php the_content(); ?>
        </div><!-- .entry-content -->

      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
