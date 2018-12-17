<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main bod" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <div class="top-hero-green">
          <h1 class="page-title">board members</h1> ;
          <?php printf('<a href="%1$s/services/"><img src="%1$s/wp-content/uploads/2018/12/previous-page-icon.png" alt="Previous button icon"></a>', get_site_url()) ?>
          <?php echo '<img src="'. get_site_url() .'/wp-content/uploads/2018/12/About-hero.jpg" alt="About hero image">' ?>
      </div>

      <div class="about-navigation">
       <h2>about us</h2>
       <h2>board of directors</h2>
       <h2>strategic plan & annual report</h2>
     </div>

        <?php $query_vars = $wp_query->query_vars;

           $query_vars['posts_per_page'] = 15;
           $new_query = new WP_Query($query_vars); ?>
         <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>


        <?php
          get_template_part( 'template-parts/content','member' );
        ?>

      <?php endwhile; ?>


    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
