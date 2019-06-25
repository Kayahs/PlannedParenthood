<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main program volunteer-workshop" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <div class="wrapper top-hero blue">
          <h1 class="page-title">workshops</h1>
          <?php printf('<a href="%1$s/education"><img src="%2$s/assets/icons/previous_page_icon.png" alt="Previous button icon"><p>Previous Page</p></a>', get_site_url(), get_template_directory_uri()) ?>
          <?php echo '<img src="'. get_template_directory_uri() .'/assets/hero-images/Workshop-hero.png" alt="Workshop hero image">' ?>
      </div>

      <div class="page-content">
        <div class="page-extra-info">
          <p>PPT offers a wide range of workshops for different communities of youth throughout the city to promote healthy sexuality and informed decision making.  Through workshops ranging from birth control options to healthy relationships and STIs, we give you the knowledge and skills to make healthy choices.</p>
        </div>
      

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          get_template_part( 'template-parts/content','program' );
        ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
