<?php
/**
 * The template for displaying the fact archive page.
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <header class="page-header">
        <h1 class="page-title">employment</h1>
      </header><!-- .page-header -->
      <div class="main-container">
        <div class="page-description">
          <h2>be the change you want to see in the world</h2>
          <p>Want to be part of something bigger than yourself? Join our movement to unapologetically revolutionize the sexual health dialogue.</p>
          <h2>why join us?</h2>
          <p>Turn your career into a calling. As a valued member of the PPT family, you’ll be part of a community of like-minded people who share your values – values we live, every day. We are a passionate bunch, so we often get loud. Our promise to you: At PPT, your voice will be heard, you will be respected, your ideas will be valued, and your work will be a catalyst for social change.</p>
          <h2>what makes us – and you – different</h2>
          <h3>we are provocative</h3>
          <p>We actively provoke new and different ways of thinking and doing things. We stimulate thought, challenge conventions, and make things happen. We know we’ll spark debate with our words and actions, and we welcome the challenge.</p>
          <h3>we are savvy</h3>
          <p>We believe knowledge is most valuable when it is shared. That’s a belief we put into action, both within PPT and out in the community. We are candid and engaging. We are strategic, and grounded in the facts. We use facts – and our contextual knowledge and experience with youth – to drive change and nurture advocates.</p>
          <h3>we are passionate</h3>
          <p>We are optimistic and empathetic. We love what we do – and it shows. To inspire people to join us and take up our cause, we speak about what we stand for with passion, purpose, and conviction.</p>
          <h3>we are intrepid</h3>
          <p>We are fearless. We aren’t afraid to present a point of view, or address the issues that may make people feel uncomfortable. We take calculated risks. We aren’t afraid to do things differently, to lead the way forward.</p>
          <p>We have an awesome, diverse and supportive multi-disciplinary team, and work every day to promote informed choice, champion youth and youth engagement, and provide some of the best healthcare in the
          city. That really sounds like something worth being a part of, right? It totally is</p>
        </div>
       
        

        <div class="order-container">Order 
          <select id=orderJobSelector>
            <option value="a-z">A-Z</option>
            <option value="z-a">Z-A</option>
            <option value="earliest">Earliest</option>
            <option value="latest">Latest</option>
          </select>
        </div>
        <div class="jobs-container">
          <div class="left-container">
            <div class="tag-organizer">
              <strong>Tags</strong>
              <ul class="job-tag-list">
                <?php 
                $tags = get_terms( array(
                  'taxonomy' => 'jobtag',
                  'hide_empty' => false,
                )); 
                foreach ($tags as $tag) {
                  echo "<li tagid='$tag->term_id'> $tag->name </li>";
                }
                ?>
              </ul>
            </div>
            <div class="job-clear-filter">
              Clear Filters
            </div>

            <div class="disclaimer">
              Follow us on twitter, facebook and linkedin to be the first to know about all ppt employment opportunities
            </div>
          </div>


         <!--  bat dau phan cac jobs -->
          <div class="job-right-container">
            <?php 
              $query_vars = $wp_query->query_vars;
              $query_vars['orderby'] = 'title';
              $query_vars['order'] = 'ASC'; 
              $query_vars['posts_per_page'] = 18;
              $new_query = new WP_Query($query_vars);
 
              echo "<h3>current openings</h3>" ; 
              echo "<div class='job-right-container-section job-open-section'>";
              while ( $new_query->have_posts() ) : $new_query->the_post();
                
               $categories = array_reverse(get_the_terms(get_the_ID(), 'jobcat'));
               foreach($categories as $category):
                if ($category->name == 'open'): ?>

                  <!-- <div class="job-right-container-section"> -->
                  
                  <div class="card-container">
                    <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                    <?php the_title( '<div class="card-title">', '</div>' ); ?>
                    </a>
                    <div class="card-excerpt"><?php the_excerpt(); ?></div>
                    <div class="card-tags">
                      <div class="pre-tag">Tags:</div> 
                      <?php
                        $job_tags = get_the_terms(get_the_ID(), 'jobtag');
                        $tags = array();
                        foreach ($job_tags as $tag) { 
                          $tags[] = $tag->name;
                        }
                        echo implode(', ',$tags);
                      ?>
                    </div> <!-- card-tags -->
                  </div> <!-- card-container -->
                
                <?php
                endif;
              endforeach;
              
              endwhile;
              echo "</div>";


              echo "<h3>archive</h3>" ; 
              echo "<div class='job-right-container-section job-closed-section'>";
              while ( $new_query->have_posts() ) : $new_query->the_post();
                
               $categories = array_reverse(get_the_terms(get_the_ID(), 'jobcat'));
               foreach($categories as $category):
                if ($category->name == 'closed'): ?>
                  <div class="card-container">
                    <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                    <?php the_title( '<div class="card-title">', '</div>' );?>
                    </a>
                    <div class="card-excerpt"><?php the_excerpt(); ?></div>
                    <div class="card-tags">
                      <div class="pre-tag">Tags:</div> 
                      <?php
                        $job_tags = get_the_terms(get_the_ID(), 'jobtag');
                        $tags = array();
                        foreach ($job_tags as $tag) { 
                          $tags[] = $tag->name;
                        }
                        echo implode(', ',$tags);
                      ?>
                    </div>
                    </div>

              <?php 
                endif;
              endforeach;
 
            endwhile;
                         echo "</div>"; ?>
           
          </div>
        </div>
      </div>
      <div class="job-load-more">
        <button class="job-load-button">Load More</button>
      </div>
      <?php require get_template_directory() . '/template-parts/donate-cta.php'; ?>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
