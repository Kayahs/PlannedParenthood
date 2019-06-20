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
    <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
