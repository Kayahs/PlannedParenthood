<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main fqa" role="main">

    <h1>frequently asked questions</h1>

    <article>
      <h2 class="question">Can I book an appointment over email?</h2>
      <div class="answer">
        <p>Unfortunately we can’t book appointments over email. Appointments can only be made over the phone or in person at the clinic. Your privacy is important to us and this is the best way to keep your information confidential.</p>
        <p>To make an appointment, please call our clinic receptionist at <span><?php do_action( 'phone_number' ); ?></span>. Visit our <span>contact page</span> to see opening hours and wait times. </p>
        <p>Please visit our <span>accessibility page</span> if you require accommodations while booking your appointment.</p>
      </div>
    </article>
    <article>
      <h2 class="question">Do I need to have health insurance to visit the clinic?</h2>
      <div class="answer">
        <p>We are able to provide all of our services free of charge to anyone living in Canada, with or without OHIP. Unfortunately, we are not able to provide services to those visiting as tourists. </p>
      </div>
    </article>
    <article>
      <h2 class="question">Do you give away free condoms?</h2>
      <div class="answer">
        <p>We always have a small quantity of safer sex supplies available in our waiting room, which you are welcome to come by and pick up. For larger quantities, please contact Toronto Public Health.</p>
      </div>
    </article>
    <article>
      <h2 class="question">Can I have my prescription transferred to a pharmacy?</h2>
      <div class="answer">
        <p>It is possible to transfer prescriptions, but first you will either need to call us at <?php do_action( 'phone_number' ); ?> with the below information, or have your pharmacy fax a request to the clinic fax line <?php do_action( 'fax_number' ); ?>.  This info can not be sent over email.</p>
        <p>Please note the info we need includes:</p>
        <ul>
          <li>your full name and birthday</li>
          <li>health card # (if you have one)</li>
          <li>name of medication</li>
          <li>amount you want transferred (can be the remainder of entire prescription)</li>
          <li>name, address, fax and phone number of the pharmacy you want the prescription transferred to</li>
        </ul>
        <p>Please allow us up to 48 business hours to accommodate this request.</p>
        <p>Please note that once you transfer your prescription to a pharmacy, you will no longer be able to pick it up and Planned Parenthood Toronto, and you will need to book an appointment to get a new prescription should you wish to pick it up from us in the future. If you have any questions, please call the clinic at <?php do_action( 'fax_number' ); ?>.</p>
      </div>
    </article>
    <article>
      <h2 class="question">Can I get a health consultation over email?</h2>
      <div class="answer">
        <p>We cannot provide any health consultation by email. To discuss your options or book an appointment, please call our clinic at <?php do_action( 'phone_number' ); ?>. Your privacy is important to us and this is the best way to keep your information confidential. </p>
        <p>Visit our <span>contact page</span> to see opening hours and wait times. If you have questions related to sexual health, Teen Health Source volunteers are available for <span>online chat</span> 5 days a week. </p>
      </div>
    </article>
    <article>
      <h2 class="question">I am having a crisis, what should I do?</h2>
      <div class="answer">
        <p>PPT does not provide crisis services. If you are in crisis please call the Gerstein Centre at <span>416-929-5200</span> or the Distress Centre at <span>416-408-4357</span> or go to your nearest hospital emergency room.</p>
      </div>
    </article>
    <article>
      <h2 class="question">Do you provide educational material?</h2>
      <div class="answer">
        <p>Visit our <span>fact sheet page</span> for downloadable PDF fact sheets on a variety of topics. We have a small number of physical copies available in our waiting room, which you are welcome to come by and pick up. For larger quantities, please let us know your needs and deadline so we can prepare them in advance.</p>
      </div>
    </article>
    <article>
      <h2 class="question">I have an event that may interest the PPT community, will you post my flyer?</h2>
      <div class="answer">
        <p>Ocassionally we will post relevant information on our community board.  This will need to be submitted by email to <span><?php do_action( 'email_address' ); ?> </span>.  It will then be reviewed for content and posted only if approved.  We do not offer cross promotion on our social media channels, unless we are directly partnering.</p>
      </div>
    </article>
    <article>
      <h2 class="question">Can interview someone from PPT for my school project?</h2>
      <div class="answer">
        <p> Yes, but we may not be able to accommodate all requests. Please send an email to <?php do_action( 'email_address' ); ?> with a description of the project, your deadline, any questions you’d like answered, and your research ethics approval (if applicable). We’ll then look into whether we can connect you with one of our staff.</p>
      </div>
    </article>

  </main>
</div>

<?php get_footer(); ?>

