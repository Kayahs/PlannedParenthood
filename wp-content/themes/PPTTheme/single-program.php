<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main single-program-area" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="wrapper top-hero">
      <?php $title = get_post_meta( get_the_ID(), '_ppt_single_program_title', true );
      echo '<h1 class="entry-title">' .$title. '</h1>'; ?>
      <?php echo '<img src="'. get_template_directory_uri() .'/assets/hero-images/Workshop-snap-hero.png" alt="Workshop hero image">'; ?>
     </div><!-- .top-hero -->
     <div class="single-area">
      <?php get_template_part( 'template-parts/content', 'single-program' );

      $categories = get_the_terms(get_the_ID(), 'programcat');      
              foreach($categories as $category) {
              if ($category->name != 'others') :
                $linkWithSlash = esc_url( get_post_permalink() );               
                $linkWithoutSlash = substr($linkWithSlash,0,strlen($linkWithSlash)-1);
                echo sprintf( '<a href="%1$s-%2$s" rel="bookmark"> %3$s /</a>', $linkWithoutSlash, $category->slug, $category->name);
              endif;
            } 
       echo '<a href="'.get_site_url().'/programs/">back to program</a>' ?>
       </div>

      <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>

    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
