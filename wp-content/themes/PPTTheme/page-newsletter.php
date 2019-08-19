<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main newsletter" role="main">

      <header class="banner">
        <?php the_title( '<h1>', '</h1>' ); ?>
      </header>

      <section>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>

      </section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?> 