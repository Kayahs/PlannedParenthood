<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main donate" role="main">

      <header>
        <div class="banner">
          <h1>donate today</h1>
          <p>You don’t need to be an activist to create</p>
          <p>change, but you can add your voice to ours.</p>
          <button type="button" class="dcta-button coloured-button"><a href="https://www.gifttool.com/donations/Donate?ID=1417&AID=4934" target="_blank">donate</a></button>
        </div>
      </header>
      <div class="banner-text-block">
      <section>
        <h3>be part of something bigger than yourself </h3>
        <p>We believe that everyone should have the right to make informed choices about their sexual health.  We’ve been working tirelessly for more that 50 years to protect and promote that right - because, for all of the strides we’ve made, sexual and reporductive health rights continue to be undermined.  Now, you have a choice to make. Join our ovement to unapologetically revolutionize the sexual health dialogue.</p>
      </section>

      <section>
        <h3>donation options</h3>
        <p>We offer several options for donation so that you can choose what’s right for you and your giving strategy. Select a one-time gift to affect change today, monthly giving to spread throughout the year, an honourary gift in someone’s name as a tribute or thanks, or a planned gift to ensure support for future generations.</p>
      </section>

      <section>
        <h3>prefer to donate offline?</h3>
        <p>Give us a call at 416-961-0113 x124,</p>
        <p>email development@ppt.on.ca,  or send regular mail to:</p>
        <!-- this dynamic sidebar thing below is not appearing on the site it needs to be fixed (location widget) -->
        <?php dynamic_sidebar( 'donate-page' ); ?>
      </section>
      </div> <!-- .banner-text-block -->
      
      <section>
        <div class="impactu">
        <h1>you can make an impact</h1>
        </div> <!-- .impactu -->
        <div class="top-grid">
          <div class="donate-item">
            <?php echo '<img src="' . get_template_directory_uri() .'/assets/SVG/donation-page-svg/donation.svg" alt="">' ?>
            <h2>your $50 donation</h2>
            <h3>will cover birth control for up to 6 youth, so they can take control of their bodies</h3>
          </div>
          <div class="donate-item">
          <?php echo '<img src="' . get_template_directory_uri() .'/assets/SVG/donation-page-svg/youth.svg" alt="">' ?>
            <h2>4211 youth per year</h2>
            <h3>attend PPT workshops that help them make healthy and informed decisions</h3>
          </div>
          <div class="donate-item">
          <?php echo '<img src="' . get_template_directory_uri() .'/assets/SVG/donation-page-svg/IUD.svg" alt="">' ?>
            <h2>376 IUD’s inserted anually</h2>
            <h3>At a cost of $236 each, PPT saves youth $88,736 per year on IUD’s</h3>
          </div>
        </div> <!-- .top-grid -->
      </section>

      <section>
        <div class="donate-image">
      <?php echo '<img src="' . get_template_directory_uri() .'/assets/hero-images/donation-page-mother-daughter.png" alt="">' ?>
      </div> <!-- .donate-image -->
      <div class="donate-img-banner">
        <p>“I have nothing but good things to say</p>
        <p>about anyone I’ve interacted with who</p>
        <p>works at PPT!”</p>
        <p>– Client survey, 2018</p>
      </div> <!-- .donate-img-banner -->
      </section>

      <section>
        <div class="impactu">
        <h1>join our movement</h1>
        </div> <!-- .impactu -->
        <div class="low-grid">
        <div class="grid-center">
        <a href="">
          <?php echo '<img src="' . get_template_directory_uri() .'/assets/SVG/donation-page-svg/mission.svg" alt="">
          <p>our mission,</p><p>vision, & values</p></a>' ?>
        </div>
        <div class="grid-center">
        <a href=""><?php echo '<img src="' . get_template_directory_uri() .'/assets/SVG/donation-page-svg/annual-report.svg" alt="">
        <p>download</p><p>annual reports</p></a>' ?>
        </div>
        <div class="grid-center">
        <a href=""><?php echo '<img src="' . get_template_directory_uri() .'/assets/SVG/donation-page-svg/strategic-plan.svg" alt=""><p>strategic plan</p><p>2015-2020</p></a>' ?>
        </div>
        </div> <!-- .impactu -->
      </section>


      <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>
      


    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
