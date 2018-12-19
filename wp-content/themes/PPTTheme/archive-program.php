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
					<?php printf('<a href="%1$s"><img src="%1$s/wp-content/uploads/2018/12/previous-page-icon-1.png" alt="Previous button icon"><p>Previous Page</p></a>', get_site_url()) ?>
					<?php echo '<img src="'. get_site_url() .'/wp-content/uploads/2018/12/Program-hero.png" alt="Program hero image">' ?>
			</div>

			<div class="page-content">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content','program' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
