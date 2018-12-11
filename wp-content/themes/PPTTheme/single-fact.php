<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); 
      $blurb = get_post_meta(get_the_ID(), "_ppt_fact_blurb", true);
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <div class="fact-blurb">
            <?php echo esc_html($blurb); ?>
          </div>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php the_content(); ?>
          <?php
            wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
              'after'  => '</div>',
            ) );
          ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
          <?php red_starter_entry_footer(); ?>
        </footer><!-- .entry-footer -->
      </article><!-- #post-## -->

    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
