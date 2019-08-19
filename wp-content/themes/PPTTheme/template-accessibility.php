<?php
/**
 * The template for the accessibility page.
 *
 * Template Name: Accessibility Template
 * 
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      
      <header class="banner access-title">
        <?php the_title( '<h1>', '</h1>' ); ?>
      </header>
      
      <?php while ( have_posts() ) : the_post(); ?>

       <div class="entry-content">
         <?php the_content(); ?>
       </div><!-- .entry-content -->

     <?php endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>