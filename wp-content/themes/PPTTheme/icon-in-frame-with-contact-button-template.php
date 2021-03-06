<?php

/*
Template Name: Icon in Frame with Contact Btn
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main icon-in-frame" role="main">
    
    <?php if (is_page('Sexual health')) : ?>
    <div class="wrapper top-hero purple">
      <?php the_title( '<h1 class="entry-title">' , '</h1>' ); ?>
      <img src=" <?php echo get_template_directory_uri() .'/assets/hero-images/Sexual-health-hero.png"' ?> alt="Sexual Health hero image">
    </div><!-- .top-hero purple -->
    <nav class="wrapper nav-icon-in-frame-mobile purple <?php if (is_page('primary-care')) echo 'no-border' ?>" >
      <ul>
        <?php 
        $x = 1;
        while ((get_post_meta( get_the_ID(), sprintf('_ppt_title_component%d',$x ), true ))  && (get_post_meta( get_the_ID(), '_ppt_title_component2', true )) && ($x <= 3)) {
          $title = get_post_meta( get_the_ID(), sprintf('_ppt_title_component%d',$x ), true );
          echo sprintf('<li><a href="#component%d"',$x ).'>'.$title.'</a>';
          $x++;
        } ?>
      </ul>
    </nav>

    <?php else: ?>
      <div class="wrapper top-hero blue">
      <?php the_title( '<h1 class="entry-title">' , '</h1>' ); ?>
      <img src=" <?php echo get_template_directory_uri() .'/assets/hero-images/Services-hero.png"' ?> alt="Services hero image">
    </div>
    <nav class="wrapper nav-icon-in-frame-mobile blue <?php if (is_page('primary-care')) echo 'no-border' ?>" >
      <ul>
        <?php 
        $x = 1;
        while ((get_post_meta( get_the_ID(), sprintf('_ppt_title_component%d',$x ), true ))  && (get_post_meta( get_the_ID(), '_ppt_title_component2', true )) && ($x <= 3)) {
          $title = get_post_meta( get_the_ID(), sprintf('_ppt_title_component%d',$x ), true );
          echo sprintf('<li><a href="#component%d"',$x ).'>'.$title.'</a>';
          $x++;
        } ?>
      </ul>
    </nav>
    <?php endif; ?>


    
    <?php while ( have_posts() ) : the_post(); ?>


        <?php get_template_part( 'template-parts/content-page' ); ?>

      <?php endwhile; ?>

    <nav class="wrapper nav-icon-in-frame <?php if (is_page('primary-care')) echo 'no-border' ?>" >
      <ul>
        <?php 
        $x = 1;
        while ((get_post_meta( get_the_ID(), sprintf('_ppt_title_component%d',$x ), true ))  && (get_post_meta( get_the_ID(), '_ppt_title_component2', true )) && ($x <= 3)) {
          $title = get_post_meta( get_the_ID(), sprintf('_ppt_title_component%d',$x ), true );
          echo sprintf('<li><a href="#component%d"',$x ).'>'.$title.'</a>';
          $x++;
        } ?>
      </ul>
    </nav>



    <?php
      $x = 1;
      while ((get_post_meta( get_the_ID(), sprintf('_ppt_title_component%d',$x ), true )) && ($x <= 3)) {
        $image = get_post_meta( get_the_ID(), sprintf('_ppt_image_component%d',$x ), true );
        $title = get_post_meta( get_the_ID(), sprintf('_ppt_title_component%d',$x ), true );
        $description = get_post_meta( get_the_ID(), sprintf('_ppt_description_component%d',$x ), true );
        $content = get_post_meta( get_the_ID(), sprintf('_ppt_content_component%d',$x ), true );
        echo sprintf('<article id="component%d">',$x ).'<div class="framed"><img src="'.$image.'" alt="">';
        echo '<h3>'.$title.'</h3>';
        echo '<p class="framed-description">' . $description . '</p>';
        echo '<a class="framed-button-desktop" href="'.get_home_url(). '/contact"><button>contact</button></a></div>';
        echo 
          '<div class="content">
            '.$content.'
            <a class="framed-button-mobile" href="'.get_home_url(). '/contact">contact</a>
          </div></div></article>';
        $x++;
       } ?>

    <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>

  </main>
</div>

<?php get_footer(); ?>






  

