<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="wrapper top-hero">
        <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        <?php echo '<img src="'. get_template_directory_uri() .'/assets/hero-images/About-hero.png" alt="About hero image">' ?>
      <!-- Inside this div will be placed the green background, the text as well as the hero image -->
      </div><!-- .top-hero-green -->
      <div class="about-navigation">
        <h2>about us</h2>
        <h2 class="greyed-out"><a href="<?php echo get_site_url() .'/board-of-directors/' ?>">board of directors</a></h2>
        <h2 class="greyed-out"><a href="<?php echo get_site_url() . '/annual-reports/' ?>">strategic plan & annual report</a></h2>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>

       <div class="entry-content">
         <?php the_content(); ?>
       </div><!-- .entry-content -->

     <?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>