<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main program program-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="wrapper top-hero">
					<h1 class="page-title">programs</h1>
					<?php printf('<a href="%1$s"><img src="%2$s/assets/icons/previous_page_icon.png" alt="Previous button icon"><p>Previous Page</p></a>', get_site_url(), get_template_directory_uri()) ?>
					<?php echo '<img src="'. get_template_directory_uri() .'/assets/hero-images/Program-hero.png" alt="Program hero image">' ?>
			</div>

			<div class="page-content">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content','program' );
					?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
