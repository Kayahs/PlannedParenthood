<?php
/**
 * The template for displaying all single researches.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); 
      $pdfurl = get_post_meta(get_the_ID(), "_ppt_research_pdf_url", true);
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <div class="content-container">
            <?php the_content(); ?>
          </div>
        </div><!-- .entry-content -->
        <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>
        <footer class="entry-footer">
          <?php red_starter_entry_footer(); ?>
        </footer><!-- .entry-footer -->
      </article><!-- #post-## -->

    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
