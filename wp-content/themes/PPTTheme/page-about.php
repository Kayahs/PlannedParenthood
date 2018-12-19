<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="top-hero-green about-hero">
      <h1>about us</h1>
      <img src = <?php echo get_site_url() . '/wp-content/uploads/2018/12/About-hero.jpg' ?> alt="About Us hero image">
      <!-- Inside this div will be placed the green background, the text as well as the hero image -->
      </div><!-- .top-hero-green -->
      <div class="about-navigation">
        <h2>about us</h2>
        <h2 class="greyed-out">board of directors</h2>
        <h2 class="greyed-out">strategic plan & annual report</h2>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>

       <div class="entry-content">
         <?php the_content(); ?>
       </div><!-- .entry-content -->

     <?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>