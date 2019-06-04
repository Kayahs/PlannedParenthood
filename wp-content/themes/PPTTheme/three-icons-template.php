<?php

/*
 * Template Name: Three Icons Template
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

  <?php if ( have_posts() ) : ?>

    <?php if ( is_home() && ! is_front_page() ) : ?>
      <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      </header>
    <?php endif; ?>

     <div class="wrapper top-hero">
      <?php the_title( '<h1 class="page-title">' , '</h1>' ); ?>
      <?php if (is_page('services')) { echo '<img src="'. get_template_directory_uri() .'/assets/hero-images/Services-hero.png" alt="Services hero image">'; }
      if (is_page('education')) { echo '<img src="' . get_template_directory_uri() .'/assets/hero-images/Education-hero.png" alt="Education hero image">'; } ?>
     </div><!-- .top-hero-blue -->

     <div class='column-container'>
    <?php
    for ($x = 1; $x <= 3; $x++) {
      $image = get_post_meta( get_the_ID(), sprintf('_ppt_image_section%d',$x ), true );
      $url = get_post_meta( get_the_ID(), sprintf('_ppt_url_section%d',$x ), true );
      $title = get_post_meta( get_the_ID(), sprintf('_ppt_title_section%d',$x ), true );
      $description = get_post_meta( get_the_ID(), sprintf('_ppt_description_section%d',$x ), true );
      echo '<div class="section"><a href="' . $url . '"><img src="'.$image.'" alt=""><h3>'.$title.'</h3></a>';
      echo '<p>' . $description . '</p></div>';
    } ?>
    </div>

      <?php if (is_page('services')) {
        echo '<div class="banner">';
        echo '<h2>come see what makes us different</h2>';
        echo '<p>We put you – and your unique needs – at the centre of the respectful, confidential, and non-judgmental care we offer.</p>';
        echo '<p>to set up an appointment call us at <br /> (416) 961-0113</p>';
        echo '<a href="PlannedParenthood/contact"><button class="coloured-button">appointments</button></a>';
        echo '</div>';        
      } ?>

      <?php if (is_page('education')) {
        echo '<div class="banner">';
        echo '<h2>Get the facts you need, straight from the source.</h2>';
        echo '<p>Teen Health Source is a youth-run sexual health information service brought to you by Planned Parenthood Toronto.</p>';
        echo '<a href="http://teenhealthsource.com/"><button class="coloured-button">teen health source</button></a>';
        echo '</div>';        
      } ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); 
        if ( !empty(get_the_content()) ) { 
            get_template_part( 'template-parts/content-single' );
        }
      endwhile; ?>
      <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>