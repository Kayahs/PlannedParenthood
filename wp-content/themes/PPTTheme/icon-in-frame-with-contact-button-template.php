<?php

/*
Template Name: Icon in Frame with Contact Btn
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    
    <?php if (is_page('Sexual health')) : ?>
    <div class="wrapper top-hero purple">
      <?php the_title( '<h1 class="entry-title">' , '</h1>' ); ?>
      <?php printf('<a href="%1$s/services"><img src="%1$s/wp-content/uploads/2018/12/previous-page-icon-1.png" alt="Previous button icon"><p>Previous Page</p></a>', get_site_url()) ?>
      <img src=" <?php echo get_site_url() .'/wp-content/uploads/2018/12/Sexual-health-hero.png"' ?> alt="Sexual Health hero image">
    </div><!-- .top-hero-purple -->

    <?php else: ?>
      <div class="wrapper top-hero blue">
      <?php the_title( '<h1 class="entry-title">' , '</h1>' ); ?>
      <?php printf('<a href="%1$s/services"><img src="%1$s/wp-content/uploads/2018/12/previous-page-icon-1.png" alt="Previous button icon"><p>Previous Page</p></a>', get_site_url()) ?>
      <img src=" <?php echo get_site_url() .'/wp-content/uploads/2018/12/Services-hero.png"' ?> alt="Services hero image">
    <?php endif; ?>
    
    <?php while ( have_posts() ) : the_post(); ?>


        <?php get_template_part( 'template-parts/content-page' ); ?>

      <?php endwhile; ?>

    <nav class="nav-icon-in-frame nav-sexual-health">
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
        echo sprintf('<article id="component%d"',$x ).'<div class="framed"><img src="'.$image.'" alt="">';
        echo '<h3>'.$title.'</h3>';
        echo '<p>' . $description . '</p>';
        echo '<button><a href="'.get_home_url(). '/contact">contact</a></button>';
        echo '<div class="content">'.$content.'</div></article>';
        $x++;
       } ?>

    <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>

  </main>
</div>

<?php get_footer(); ?>






  

