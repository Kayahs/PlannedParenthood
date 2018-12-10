<?php

/*
Template Name: Three Icons Template
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

    <?php the_title( '<h2 class="entry-title">' , '</h2>' ); ?>

    <?php
    for ($x = 1; $x <= 3; $x++) {
      $image = get_post_meta( get_the_ID(), sprintf('_ppt_image_section%d',$x ), true );
      $url = get_post_meta( get_the_ID(), sprintf('_ppt_url_section%d',$x ), true );
      $title = get_post_meta( get_the_ID(), sprintf('_ppt_title_section%d',$x ), true );
      $description = get_post_meta( get_the_ID(), sprintf('_ppt_description_section%d',$x ), true );
      echo '<div class="section"><a href="' . $url . '"><img src="'.$image.'" alt=""><h3>'.$title.'</h3></a>';
      echo '<p>' . $description . '</p></div>';
    } ?>

      <?php if (is_page('services')) {
        echo '<div class="banner">';
        echo '<p>come see what makes us different</p>';
        echo '<p>We put you – and your unique needs – at the centre of the respectful, confidential, and non-judgmental care we offer.</p>';
        dynamic_sidebar( 'banner' );
        echo '<a href="PlannedParenthood/contact"><button>appointments</button></a>';
        echo '</div>';        
      } ?>

      <?php if (is_page('education')) {
        echo '<div class="banner">';
        echo '<p>Get the facts you need, straight from the source.</p>';
        echo '<p>Teen Health Source is a youth-run sexual health information service brought to you by Planned Parenthood Toronto.</p>';
        echo '<a href="http://teenhealthsource.com/"><button>teen health source</button></a>';
        echo '</div>';        
      } ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content-single' ); ?>
      <?php endwhile; ?>
      <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>