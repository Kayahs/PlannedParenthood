<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main search" role="main">
			<div class="search-content-area">

          <div class="search-search-bar">
			<form role="search" method="get" class="search-search-form" action="<?php echo home_url( '/' ); ?>">
						<input type="search" class="search-search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
						<button class="search-search-button">
			      <span class="icon-search" aria-hidden="true">
				    <i class="fa fa-search"></i>
			      </span>
			      <span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		      </button><!-- .search-search-button -->
      </form>
		  </div><!-- .search-search-bar -->

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<h1 class="tangerine">search results</h1>
				<?php echo '<h2 class="space-bottom">' . $wp_query->found_posts . ' results found for <span class="tangerine">' . get_search_query() . '</span></h2>'; ?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="border-top"> 
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

</div>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		  </div><!-- .search-content-area -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
