<?php
/**
 * The template for displaying the Planned Parenthood footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class=" wrapper black-footer">
			  <div class="footer-location">
				<?php //if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
		    <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
        <?php //endif; ?>
				<!-- will place the location widget here -->
				</div>
				<div class="footer-hours">
				<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		    <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
        <?php endif; ?> 
				<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
		    <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
        <?php endif; ?>
				<!-- will place the business hours widget here -->
				</div> <!-- div that has footer 2 and 3 -->
				<div class="footer-social-media">
				<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
		    <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
        <?php endif; ?>
				<!-- will place the social media widget here -->
				</div>
			</div>
			<div class="white-footer-top">
			  <div class="footer-navigation">
				<nav class="footer-nav" role="navigation">
					<button class="menu-toggle"><?php echo esc_html( 'Footer Menu' ); ?></button>
					<?php wp_nav_menu( array( 'menu_id' => 'footer-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<!-- Adjust the menu and add in the proper url's they should go too -->
				</div>
			</div>
			<div class="white-footer-bottom">
			  <div class="footer-text">
				<p>
				Funding for Planned Parenthood Toronto Community Health Centre has been provided by the Toronto Central Local Health Integration Network (LHIN).
				</p>
				<p>
				Any views or opinions presented in this publication are solely those of Planned Parenthood Toronto Community Health Centre and do not necessarily represent the views or opinions of the Province of Ontario or the Toronto Central Local Health Integration Network (LHIN).
				</p>
				<!-- This is where I will place the text in the bottom left of the footer -->
				</div>
				<div class="bottom-footer-icons">
				<a href="http://www.lhins.on.ca/">
        <img src=<?php echo get_template_directory_uri().'/assets/SVG/3-logos-in-footer/LHIN.svg' ?> alt="Ontario Toronto Central Local Health Integration Network">
				</a>
				<a href="https://www.unitedwaygt.org/">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/3-logos-in-footer/UnitedWay.png' ?> alt="United Way">
				</a>
				<!-- This is where I will put the 3 icons with external links in the bottom right of the footer -->
				</div>
			</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
