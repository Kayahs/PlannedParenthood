<?php
/**
 * The template for the front/home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="top-hero-purple">
      <h1><p>boldly</p><p>empowering</p><p>toronto's youth</p></h1>
      <img src = <?php echo get_site_url() . '/wp-content/uploads/2018/12/Home-page-hero.png' ?> alt="Homepage hero image">
      <!-- Inside this div will be placed the purple background, the text as well as the hero image -->
      </div><!-- .top-hero-purple -->
      <div class="bottom-hero-black">
        <div class="make-appointment black-div">
          <h2>make an appointment</h2>
          <p>
          Our doctor's and nurse practicioners can help you find all the answers to your questions about your sexual, mental and physical heatlh. 
          Appointments are available Monday - Friday. 
          See our contact page for more details.
          </p>
          <div>
				      <button type="button" class="fp-contact-button" >contact</button>
				  </div> <!-- .fp-contact-button-->
        </div>
        <div class="drop-in-widget black-div">
        <h2>drop-in hours</h2>
        <p>
        Placeholder text for the widget that i ssupposed to be inserted here
        </p>
        <!-- this is where the drop in widget will be inserted -->
        </div>
        <div class="teen-health black-div">
        <h2>teens health source</h2>
        <p>
        THS is a sexual health information  service run for and by youth - brought to you by Planned Parenthood Toronto. Want to chat with a volunteer about a question or concern you have about your sexual health? We have trained teen volunteers waiting to speak with you live 5 times a week.
        </p>
        <div>
				      <button type="button" class="fp-mk-appointment-button" >make an appointment</button>
				  </div> <!-- .fp-mk-appointment-button-->
        </div>
      <!-- this div is where the 3 boxes of text will be placed underneath the hero image -->
      </div><!-- .bottom-hero-black -->
      <div class="white-icon-container"> <!-- grid container -->
        <div class="item-b-control">
        <a href="">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home%20page%20svg/birth%20control.svg' ?> alt="Birth Control icon">
        <h2>birth control</h2>
        </a>
        <p>your body, your options</p>
        </div>
        <div class="item-fact-sheets">
        <a href="">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home%20page%20svg/fact%20sheet.svg' ?> alt="Fact Sheets icon">
        <h2>fact sheets</h2>
        </a>
        <p>the info you want</p>
        </div>
        <div class="item-workshops">
        <a href="">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home%20page%20svg/workshops.svg' ?> alt="Workshops icon">
        <h2>workshops</h2>
        </a>
        <p>the tools you need</p>
        </div>
        <div class="item-testing">
        <a href="">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home%20page%20svg/sti.svg' ?> alt="Testing icon">
        <h2>HIV & STI testing</h2>
        </a>
        <p>know your status</p>
        </div>
        <div class="item-counselling">
        <a href="">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home%20page%20svg/counselling.svg' ?> alt="Counselling icon">
        <h2>counselling</h2>
        </a>
        <p>what's on your mind</p>
        </div>
        <div class="item-resources">
        <a href="">
        <img src = <?php echo get_template_directory_uri().'/assets/SVG/home%20page%20svg/life%20resources.svg' ?> alt="Life Resources icon">
        <h2>life resources</h2>
        </a>
        <p>connecting you to support</p>
        </div>
      </div><!-- .white-ico-container -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>