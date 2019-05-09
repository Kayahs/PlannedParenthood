<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main arc-news" role="main">

    <?php if ( have_posts() ) : ?>

      <div class="wrapper top-hero">
          <h1 class="page-title">news</h1>
      </div>


      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          get_template_part( 'template-parts/content','news' );
        ?>

      <?php endwhile; ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>
    <div class="donor-movement banner">
      <div class="donor-text">
      <h2>join our movement.</h2>
      <h2>become a donor today.</h2>
      <h3>Together, we can break down barriers,</h3>
      <h3>challenge conventions, and change hearts,</h3>
      <h3>minds and lives.</h3>
      </div><!-- .donor-text -->
      <div class="donor-movement-button">
      <button type="button" class="donor-movement-button coloured-button">donate</button>
      </div>
    </div><!-- .donor-movement -->
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
