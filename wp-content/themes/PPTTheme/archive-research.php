<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main arc-research" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <div class="wrapper top-hero">
          <?php printf('<a href="%1$s/education"><img src="%2$s/assets/icons/previous_page_icon.png" alt="Previous button icon"><p>Previous Page</p></a>', get_site_url(), get_template_directory_uri()) ?>
          <h1 class="page-title">research</h1>

      </div>


      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          get_template_part( 'template-parts/content','research' );
        ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

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
