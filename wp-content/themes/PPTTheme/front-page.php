<?php
/**
 * The template for the front/home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="wrapper top-hero purple">
      <h1><p>boldly</p><p>empowering</p><p>toronto's youth</p></h1>
      <img src = <?php echo get_template_directory_uri() . '/assets/hero-images/Home-page-hero.png' ?> alt="Homepage hero image">
      <!-- Inside this div will be placed the purple background, the text as well as the hero image -->
      </div><!-- .top-hero-purple -->
      <div class="bottom-hero-black grid-container">
        <div class="make-appointment black-div grid-item1">
          <h2>make an appointment</h2>
          <p>Our doctors and nurse practicioners can help you find all the answers to your questions about your sexual, mental and physical heatlh.Appointments are available Monday - Friday. See our contact page for more details.</p>
        </div>
				<button type="button" class="fp-contact-button grid-item2">contact</button>
				  
        <div class="drop-in-widget black-div grid-item3">
          <h2>drop-in hours</h2>
          <div class="footer-sat-hours"> 
  				<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
  		    <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
          <?php endif; ?>
				  </div>
        </div>

        <div class="teen-health black-div grid-item4">
          <h2>teen health source</h2>
          <p>THS is a sexual health information  service run for and by youth - brought to you by Planned Parenthood Toronto. Want to chat with a volunteer about a question or concern you have about your sexual health? We have trained teen volunteers waiting to speak with you live 5 times a week.</p>
        </div>
				 <button type="button" class="fp-mk-appointment-button grid-item5" >make an appointment</button>

      <!-- this div is where the 3 boxes of text will be placed underneath the hero image -->
      </div><!-- .bottom-hero-black -->
      <div class="white-icon-container"> <!-- grid container -->
        <div class="item-b-control fp-item">
        <a href="<?php echo get_site_url() .'/sexual-health/' ?>">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home-page-svg/home-page-birth-control-icon.png' ?> alt="Birth Control icon">
        <h2>birth control</h2>
        </a>
        <p>your body, your options</p>
        </div>
        <div class="item-fact-sheets fp-item">
        <a href="<?php echo get_site_url() .'/facts/' ?>">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home-page-svg/fact-sheet.svg' ?> alt="Fact Sheets icon">
        <h2>fact sheets</h2>
        </a>
        <p>the info you want</p>
        </div>
        <div class="item-workshops fp-item">
        <a href="<?php echo get_site_url() .'/programcat/workshop/' ?>">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home-page-svg/workshops.svg' ?> alt="Workshops icon">
        <h2>workshops</h2>
        </a>
        <p>the tools you need</p>
        </div>
        <div class="item-testing fp-item">
        <a href="<?php echo get_site_url() .'/sexual-health/' ?>">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home-page-svg/sti.svg' ?> alt="Testing icon">
        <h2>HIV & STI testing</h2>
        </a>
        <p>know your status</p>
        </div>
        <div class="item-counselling fp-item">
        <a href="<?php echo get_site_url() .'/mental-health/' ?>">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home-page-svg/counselling.svg' ?> alt="Counselling icon">
        <h2>counselling</h2>
        </a>
        <p>what's on your mind</p>
        </div>
        <div class="item-resources fp-item">
        <a href="<?php echo get_site_url() .'/mental-health/' ?>">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home-page-svg/life-resources.svg' ?> alt="Life Resources icon">
        <h2>life resources</h2>
        </a>
        <p>connecting you to support</p>
        </div>
      </div><!-- .white-ico-container -->

      <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>