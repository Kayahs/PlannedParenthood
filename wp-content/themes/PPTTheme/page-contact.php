<?php
/**
 * The Contact page template file.
 *
 */

get_header(); ?>


    <div id="primary" class="content-area contact-page">
      <main id="main" class="site-main" role="main">
        <div class="entry-header">
          <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </div>

        <div class="entry-content"> 
          <?php dynamic_sidebar( 'contact-page-section-1' ); ?>
          <iframe 
            width="760"
            height="300"
            frameborder="0" style="border:0"
            allowfullscreen
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.9696425072975!2d-79.39966648450172!3d43.6696011791208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34a354c8d223%3A0xc4b516187b19d98d!2s36+B+Prince+Arthur+Ave%2C+Toronto%2C+ON+M5R+1A9!5e0!3m2!1svi!2sca!4v1544120784265">
            </iframe>

          <?php dynamic_sidebar( 'contact-page-section-2' ); ?>

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content' ); ?>

          <?php endwhile; ?>
          
      </main><!-- #main -->
    </div><!-- #primary -->

      <?php get_footer(); ?>