<?php
/**
 * The Contact page template file.
 *
 */

get_header(); ?>


    <div id="primary" class="content-area contact-page">
      <main id="main" class="site-main contact-page" role="main">
        
      <div class="entry-header">
          <?php the_title( '<h1 class="entry-title visually-hidden">', '</h1>' ); ?>
      </div>

      <div class="banner">
        <p>to set up an appointment,</p>
        <p>call us now: <?php do_action( 'phone_number' ); ?></p> 
      </div>
      <div class="for-the-quotation-shape"></div>

        <div class="content"> 
          <section class="section1">
            <?php dynamic_sidebar( 'contact-page-section-1' ); ?>
          </section>
          
          <iframe 
            width="760"
            height="300"
            frameborder="0" style="border:0"
            allowfullscreen
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.9696425072975!2d-79.39966648450172!3d43.6696011791208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34a354c8d223%3A0xc4b516187b19d98d!2s36+B+Prince+Arthur+Ave%2C+Toronto%2C+ON+M5R+1A9!5e0!3m2!1svi!2sca!4v1544120784265">
            </iframe>
          <div class="hours">
            <section class="section2"><h3>clinic hours</h3><?php dynamic_sidebar( 'contact-page-section-2' ); ?></section>
            <section class="section2"><h3>drop-in hours</h3><?php dynamic_sidebar( 'contact-page-section-3' ); ?></section>
          </div>


      <?php while ( have_posts() ) : the_post(); ?>

        <div class="entry-content">
          <h3>things to know before calling</h3>
          <p>If it’s your first appointment, please arrive 15 minutes early to fill out the required paper work.</p>

          <p>To all appointments, please bring:</p>
          <ul>
            <li>something with your name on it</li>
            <li>your health card (if you have one)</li>
            <li>medical insurance information (if you have it)</li>
          </ul>
          <p>PPT can provide all services free of charge to anyone living in Canada, with or without OHIP. If you are eligible for OHIP but don’t have the card, let us know. We can help. Unfortunately, we are not able to provide services to those visiting as tourists.</p>
          <p>Our current wait time for an appointment may be up to three weeks. However, we often have same or next day appointments available. Call us when we open (9:30 am) to book a same-day appointment. They are booked first-call, first-served.</p>
          <p>You can find answers for frequently asked questions related to booking appointments on our <a href="<?php echo get_site_url() .'/faq' ?>">FAQ page</a>.</p>

          <h3>accessibility</h3>
          <p>Do you require accessibility supports? Need to book an appointment by email?</p>
          <p>Request accommodations for your appointment at <span>access@ppt.on.ca.</span> In all other cases, due to privacy concerns, we cannot make appointments over email.</p>
          <p>Regrettably PPT is not fully wheelchair accessible.* Require mobility accessible services?</p>
          <p>Book an appointment at our satellite location <a href="http://www.edgewest.ca/">EdgeWest here.</a></p>
          
          <h3>alternative clinics</h3>
          <p>We partner with clinics across the GTA, so that you can have the access you need. See a full list on Teen Health Source, an affilitate of PPT: <a href="http://teenhealthsource.com/services/">teenhealthsource.com/services</a></p>

          <h3>client rights</h3>
          <p>As a client of Planned Parenthood Toronto, you have the right to:</p>
          <ul>
            <li>be treated with respect and dignity regardless of age, sex, gender identity, sexual orientation, race, ethnicity, citizenship, education, physical and/or mental abilities;</li>
            <li>health care even if you do not have a health card;</li>
            <li>be referred to by the name and pronoun that you use;</li>
            <li>share only the information you want with the people serving you;</li>
            <li>bring a friend or support person with you to an appointment and/or into the exam room; refuse the presence of an observer or student;</li>
            <li>refuse any care, services or treatment;</li>
            <li>be presented with all the information you need, where you feel comfortable making your own decisions and be supported in your decision making;</li>
            <li>easily accessible health care services that are provided in a safe, comfortable, respectful and confidential environment within legal limits; and a fair, safe and clear process of complaint</li>
            <li>know the names, roles and positions of the people serving you, and</li>
            <li>know the experience and qualifications of the people serving you.</li>
          </ul>

          <h3>how to make a complaint</h3>
          <p>Please download and follow the instructions below to make a complaint to PPT.</p>

          <p><a href="<?php echo get_site_url() .'wp-content/uploads/2018/12/How-to-make-a-complaint.pdf' ?>">Download our How To Make A Complaint instructions</a></p>
          <p><a href="<?php echo get_site_url() .'wp-content/uploads/2018/12/CLIENT-COMPLAINT-REPORTING-FORM.pdf' ?>">Download our Client Complaint Reporting Form</a></p>
          <p><a href="<?php echo get_site_url() .'/wp-content/uploads/2018/12/PART-16-Client-Complaint.pdf' ?>">Download our Client Complaint Policy and Procedures</a></p>
          <p><a href="<?php echo get_site_url() .'wp-content/uploads/2018/12/WORKPLACE-HSD.pdf' ?>">Download our Workplace Harassment, Solicitation and Discrimination Policy</a></p>
        </div><!-- .entry-content -->

      <?php endwhile; // End of the loop. ?>

          
      </main><!-- #main -->
    </div><!-- #primary -->

      <?php get_footer(); ?>


