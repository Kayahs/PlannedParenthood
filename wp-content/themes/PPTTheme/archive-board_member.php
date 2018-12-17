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

      <div class="top-hero-purple">
          <h1 class="page-title">board members</h1> ;
          <?php echo '<img src="'. get_site_url() .'/wp-content/uploads/2018/12/Program-hero.png" alt="Program hero image">' ?>
      </div>

      <?php
      $query_vars = $wp_query->query_vars;
/*           $query_vars['orderby'] = 'title';
           $query_vars['order'] = 'ASC';*/
           $query_vars['posts_per_page'] = -1;
           $args = array(
            'post_per_page' => -1,
            'post_type' => 'board_member'
            );
           $new_query = new WP_Query($args); ?>
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
