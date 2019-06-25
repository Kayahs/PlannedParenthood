<?php
/**
 * The template for displaying all single facts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); 
      $blurb = get_post_meta(get_the_ID(), "_ppt_fact_blurb", true);
      $pdfurl = get_post_meta(get_the_ID(), "_ppt_fact_pdf_url", true);
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <?php printf('<a href="%1$s/facts"><img src="%2$s/assets/icons/previous_page_icon.png" alt="Previous button icon"><p>Previous Page</p></a>', get_site_url(), get_template_directory_uri()) ?>
          <div class="fact-blurb">
            <?php echo esc_html($blurb); ?>
          </div>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <div class="fact-sections">
            <h3>Sections</h3>
            <ul class="section-list">
            </ul>
          </div>
          <div class="content-container">
            <div class="content-header">
              <div class="tags-list">
                <?php
                  $fact_tags = get_the_terms(get_the_ID(), 'facttag');
                  $taglist = [];
                  foreach ($fact_tags as $tag) { 
                    $taglist[] = $tag->name;
                  }
                  echo implode(', ', $taglist);
                ?>
              </div>
              <a class="download-container" href="<?php echo $pdfurl ?>">
                Download
              </a>
            </div>
            <?php the_content(); ?>
          </div>
        </div><!-- .entry-content -->
        <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>
      </article><!-- #post-## -->

    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
