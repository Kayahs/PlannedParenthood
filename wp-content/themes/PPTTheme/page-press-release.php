<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main press-release" role="main">

      <header class="banner">
        <h1 class="page-title">media statements <br/>&amp; press releases</h1>
      </header>

      <section>
        <h3>media number</h3>
        (416) 961-0113 x 124
        <h3>press releases</h3>

        <a href="<?php bloginfo('template_directory');?>/assets/PDF/press-release/Press-release_TeenHealthSource-25years.pdf" download>
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Tuesday, May 8th, 2017 | press release —  Teen Health Source Celebrate 5 Years</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/press-release/PPT-statement_safe-access-zones.pdf" download>
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Wednesday, October 4th, 2017 | ppt statement — Safe Access Zone Bill</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/press-release/Press-release_Send-the-right-message_PPT.pdf" download>
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Wednesday, September 20th, 2017 | press release — Planned Parenthood Toronto to launch Send The Right Message Campaign | download image</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/press-release/statement-ppt-to-receive-CIRF-funding.pdf" download>
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Tuesday, September 5th, 2017 | ppt statement — CIRF Funding Recipient</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/press-release/ppt-mifegymiso-statement.pdf" download>
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Thursday, August 3rd, 2017 | ppt statement — OHIP Funding for Mifegymiso</p>
        </a>
      </section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>