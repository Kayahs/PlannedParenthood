<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main newsletter" role="main">

      <header class="banner">
        <h1>newsletter</h1>
      </header>

      <section>
        <h3>current issue</h3>
        <img src="<?php bloginfo('template_directory');?>/assets/newsletter-page-image.png" width="100%" height="500px" scrolling="no"/>

        <h3 class="strategic-h3">sign up for more news!</h3>

        <h3 class="strategic-h3">download a history of choice</h3> 
        <a href="<?php bloginfo('template_directory');?>/assets/newsletter/Newsletter_web_format_2018.pdf" download>
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Newsletter 2018</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/newsletter/Newsletter_Issue1-2017-FINAL.pdf" download>
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto  Newsletter 2017</p>
        </a>
      </section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?> 