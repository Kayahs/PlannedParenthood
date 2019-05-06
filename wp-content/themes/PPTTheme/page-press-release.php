<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main bod" role="main">

    <?php if ( have_posts() ) : ?>

    <header class="news page-header">
      <h1 class="page-title">media statements  &amp; press releases</h1>
      <?php
          
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
    </header><!-- .page-header -->
    
    <div class="news-content">
      <h2>media number</h2>
      (416) 961-0113 x 124
    <h2>press releases</h2>
      <div class="press-releases">
        <?php $query_vars = $wp_query->query_vars;

           $query_vars['posts_per_page'] = 12;
           $new_query = new WP_Query($query_vars); ?>
         <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

          <?php
          get_template_part( 'template-parts/content','press' );
        ?>          

      <?php endwhile; ?>
      <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>
    </div> <!-- .press-releases -->
</div> <!-- .news-content -->
     
     
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
