<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="wrapper top-hero funders-hero green">
  <?php the_title( '<h1 class="funders-title">' , '</h1>' ); ?>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content funders-content"> 
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>
      
		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>