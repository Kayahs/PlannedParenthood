<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main fourohfour" role="main">

			<section class="error-404 not-found">

				<header class="page-header">
					<h1><?php echo esc_html( 'oops, something is missing' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="bold"><?php echo esc_html( 'The page you are looking for isn\'t here. We recommend trying the search bar below to get the best results.' ); ?></p>

					<?php get_search_form(); ?>

					<p class="bold bigger"><?php echo esc_html( 'we are also available to help you.' ); ?></p>

					<div class="suggestions">
						<div class="appointment column">
              <a href="/contact"><h2>make an appointment</h2></a>
              <p>Our team can help you find all the answers to your questions about your sexual, mental and physical health needs. Appointments are available Monday - Friday. See our contact page for more details.</p>
            </div>
            <div class="divider"></div>  
            <div class="drop-in column">
              <h2>drop-in hours</h2>
              <div class="footer-sat-hours"> 
              <?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
              <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
              <?php endif; ?>
              </div>
            </div>
            <div class="divider"></div>

            <div class="teen-health column">
              <a href="http://www.teenhealthsource.com"><h2>teen health source</h2></a>
              <p>THS is a sexual health information  service run for and by youth - brought to you by Planned Parenthood Toronto. Want to chat with a volunteer about a question or concern you have about your sexual health? We have trained teen volunteers waiting to speak with you live 5 times a week.</p>
            </div>

					</div>

					<?php if ( red_starter_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php echo esc_html( 'Most Used Categories' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
