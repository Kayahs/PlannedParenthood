<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main fqa" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <div class="entry-content">
          <?php the_content(); ?>
        </div><!-- .entry-content -->

      <?php endwhile; // End of the loop. ?>

  </main>
</div>

<?php get_footer(); ?>

