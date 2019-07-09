<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main annual-reports" role="main">

      <header class="banner">
        <?php the_title( '<h1>', '</h1>' ); ?>
      </header>

      <section>
        <h3>current edition</h3>
        <iframe style="border:none;width:100%;height:500px;" src="//e.issuu.com/embed.html#28573712/62553054" allowfullscreen></iframe>
        
        <h4>download</h4>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/annual-report/PPT_ANNUALREPORT_2018_WEB.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Annual Report 2017-2018</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/annual-report/PPT_ANNUALREPORT_2017.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Annual Report 2016-2017</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/annual-report/PPT_ANNUALREPORT_2016_WEB.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Annual Report 2015-2016</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/annual-report/PPT_AnnualReport_2015_Web.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Annual Report 2014-2015</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/annual-report/PPT_AnnualReport_2014.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Annual Report 2013-2014</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/annual-report/PPT_AnnualReport_2013_online.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Annual Report 2012-2013</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/annual-report/PPT_AnnualReport_2012-FINAL.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Annual Report 2011-2012</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/annual-report/PPT_AnnualReport_10-11_pdf.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Annual Report 2010-2011</p>
        </a>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/annual-report/PPT_AnnualReport_09-10.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto Annual Report 2009-2010</p>
        </a>

        <h3 class="strategic-h3">strategic plan</h3>
        <h4>download</h4>
        <a href="<?php bloginfo('template_directory');?>/assets/PDF/strategic-plan/Strategy_Map_Updated_2018_Final.pdf" target="_blank">
          <img src="<?php bloginfo('template_directory');?>/assets/icons/green-pdf.svg">
          <p>Planned Parenthood Toronto 2015-2020 Strategic Plan</p>
        </a>
      </section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>