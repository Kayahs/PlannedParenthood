<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <header>
        <div class="banner">
          <h1>donate today</h1>
          <p>You don’t need to be an activist to create  change, but you can add your voice to ours.</p>
          <a href=""><button class="white-btn">donate now</button></a>
        </div>
      </header>

      <section>
        <p>be part of something bigger than yourself </p>
        <p>We believe that everyone should have the right to make informed choices about their sexual health.  We’ve been working tirelessly for more that 50 years to protect and promote that right - because, for all of the strides we’ve made, sexual and reporductive health rights continue to be undermined.  Now, you have a choice to make. Join our ovement to unapologetically revolutionize the sexual health dialogue.</p>
      </section>

      <section>
        <p>donation options</p>
        <p>We offer several options for donation so that you can choose what’s right for you and your giving strategy. Select a one-time gift to affect change today, monthly giving to spread throughout the year, an honourary gift in someone’s name as a tribute or thanks, or a planned gift to ensure support for future generations.</p>
      </section>

      <section>
        <p>prefer to donate offline?</p>
        <p>Give us a call at 416-961-0113 x124,</p>
        <p>email development@ppt.on.ca,  or send regular mail to:</p>
        <?php dynamic_sidebar( 'donate-page' ); ?>
      </section>

      <section>
        <p>you can make an impact</p>
        <div>
          <div>
            <img src="http://localhost/PlannedParenthood/wp-content/uploads/2018/12/donation.png" alt="">
            <p>your $50 donation</p>
            <p>will cover birth control for up to 6 youth, so they can take control of their bodies</p>
          </div>
          <div>
            <img src="http://localhost/PlannedParenthood/wp-content/uploads/2018/12/youth.png" alt="">
            <p>4211 youth per year</p>
            <p>attend PPT workshops that help them make healthy and informed decisions</p>
          </div>
          <div>
            <img src="http://localhost/PlannedParenthood/wp-content/uploads/2018/12/IUDs.png" alt="">
            <p>376 IUD’s inserted anually</p>
            <p>At a cost of $236 each, PPT saves youth $88,736 per year on IUD’s</p>
          </div>
        </div>
      </section>

      <section>
        <img src="http://localhost/PlannedParenthood/wp-content/uploads/2018/12/donation-page-mother-daughter.png" alt="">
        <p>“ I have nothing but good things to say about anyone I’ve interacted with who works at PPT!”</p>
        <p>– Client survey, 2018</p>
      </section>

      <section>
        <p>join our movement</p>
        <a href=""><img src="http://localhost/PlannedParenthood/wp-content/uploads/2018/12/mission.png" alt=""><p>our mission, vision, & values</p></a>
        <a href=""><img src="http://localhost/PlannedParenthood/wp-content/uploads/2018/12/annual-report.png" alt=""><p>download
annual reports</p></a>
        <a href=""><img src="http://localhost/PlannedParenthood/wp-content/uploads/2018/12/strategic-plan.png" alt=""><p>strategic plan
2015-2020</p></a>
      </section>

      <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>
      


    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
