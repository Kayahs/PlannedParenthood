<?php
/**
 * The template for displaying the fact archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <header class="page-header">
        <h1 class="page-title">factsheets</h1>
        <div class="page-description">We believe knowledge is most valuable when it is shared. PPT offers factsheets on birth control options, sexually transmitted infections, sexual pleasure and related issues to help you make informed choices about your sexual health. </div>
      </header><!-- .page-header -->
      <div class="main-container">
        <div class="order-container">Order 
          <select id=orderSelector>
            <option value="a-z">A-Z</option>
            <option value="z-a">Z-A</option>
            <option value="earliest">Earliest</option>
            <option value="latest">Latest</option>
          </select>
        </div>
        <div class="factsheet-container">
          <div class="left-container">
            <div class="tag-organizer">
              <strong>Tags</strong>
              <ul class="tag-list">
                <?php 
                $tags = get_terms( array(
                  'taxonomy' => 'facttag',
                  'hide_empty' => false,
                )); 
                foreach ($tags as $tag) {
                  echo "<li tagid='$tag->term_id'> $tag->name </li>";
                }
                ?>
              </ul>
            </div>
            <div class="clear-filter">
              Clear Filters
            </div>

            <div class="disclaimer">
              Please note that this information is to be used for informational purposes only and is not intended as a substitute for professional medical advice, diagnosis or treatment. Please consult your health care provider for advice about a specific medical condition or call the PPT clinic at 416-961-0113 to discuss your options.
              <br>
              <br>
              For more comprehensive information on sexual health for teens, visit www.TeenHealthSource.com
            </div>
          </div>
          <div class="right-container">
            <?php 
              $query_vars = $wp_query->query_vars;
              $query_vars['orderby'] = 'title';
              $query_vars['order'] = 'ASC'; 
              $query_vars['posts_per_page'] = 9;
              $new_query = new WP_Query($query_vars); ?>
            <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
              <div class="card-container">
                <?php 
                the_title( '<div class="card-title">', '</div>' ); 
                $excerpt = get_post_meta(get_the_ID(), "_ppt_card_excerpt", true);
                ?>
                <div class="card-excerpt"><?php echo $excerpt ?></div>
                <div class="card-tags">
                  <div class="pre-tag">Tags:</div> 
                  <?php
                    $fact_tags = get_the_terms(get_the_ID(), 'facttag');
                    $tags = array();
                    foreach ($fact_tags as $tag) { 
                      $tags[] = $tag->name;
                    }
                    echo implode(', ',$tags);
                  ?>
                </div>
              </div>

            <?php endwhile; ?>
          </div>
        </div>
      </div>
      <div class="load-more">
        <button class="load-button">Load More</button>
      </div>
      <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
