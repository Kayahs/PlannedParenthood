<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <div class="top-hero-blue">
          <h1 class="page-title">workshops</h1>
          <?php printf('<a href="%1$s/education/"><img src="%1$s/wp-content/uploads/2018/12/previous-page-icon.png" alt="Previous button icon"></a>', get_site_url()) ?>
          <?php echo '<img src="'. get_site_url() .'/wp-content/uploads/2018/12/Workshop-hero.png" alt="Workshop hero image">' ?>
      </div>

      <div class="content">
        <p>PPT offers a wide range of workshops for different communities of youth throughout the city to promote healthy sexuality and informed decision making.  Through workshops ranging from birth control options to healthy relationships and STIs, we give you the knowledge and skills to make healthy choices.</p>
      

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
