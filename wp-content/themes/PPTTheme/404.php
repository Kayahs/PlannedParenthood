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
							<h2><?php echo esc_html( 'make an appointment' ); ?></h2>
							<p><?php echo esc_html( 
                'Our doctors and nurse practitioners can help you find the answers to all of your questions 
                about your sexual, mental and physical health.' ); 
              ?></p>
							<br>
							<p><?php echo esc_html( 
                'Appointments are available Monday - Friday. See our contatct page for more details.' ); 
              ?></p>
							<a href='#'><button class="button">Contact</button></a>
						</div>

						<div class="divider"></div>

						<div class="drop-in column">
							<h2><?php echo esc_html( 'drop-in times' ); ?></h2>
              <p><?php echo esc_html( 'Drop-in is for sexual health only' ); ?></p>
							<br>
              <p><?php echo esc_html( 'Saturdays:' ); ?></p>
              <p><?php echo esc_html( '10am - 2pm' ); ?></p>
						</div>

						<div class="divider"></div>

						<div class="teen-health column">
							<h2><?php echo esc_html( 'Teen Health Source' ); ?></h2>
              <p><?php echo esc_html( 
                'THS is a sexual health information service run for and by youth - 
                brought to you by Planned Parenthood Toronto. Want to chat with a volunteer about a question 
                or concern you have about your sexual health? We have trained teen volunteers waiting to speak 
                with you live 5 days a week.' ); 
              ?></p>
							<a href='#'><button class="button">Live Chat</button></a>

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
