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

      <div class="top-hero">
          <h1 class="page-title">board members</h1> ;
          <?php echo '<img src="'. get_site_url() .'/wp-content/uploads/2018/12/About-hero.jpg" alt="About hero image">' ?>
      </div>

      <div class="about-navigation">
       <h2 class="grey-text"><a href="<?php echo get_site_url() .'/about/' ?>">about us</a></h2>
       <h2>board of directors</h2>
       <h2 class="grey-text">strategic plan & annual report</h2>
     </div>
     <div class="bod-content">
        <?php $query_vars = $wp_query->query_vars;

           $query_vars['posts_per_page'] = 9999;
           $new_query = new WP_Query($query_vars); ?>
         <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>


        <?php
          get_template_part( 'template-parts/content','member' );
        ?>

      <?php endwhile; ?>


    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>
    </div> <!-- .bod-content -->
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
