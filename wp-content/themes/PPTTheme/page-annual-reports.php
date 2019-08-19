<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main annual-reports" role="main">

      <header class="banner">
        <?php the_title( '<h1>', '</h1>' ); ?>
        <!-- <div class="hero-img-container"> -->
          <img src="<?php bloginfo('template_directory');?>/assets/hero-images/Volunteer-hero.png">
        <!-- </div> -->
      </header>

      <section>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>
      </section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>