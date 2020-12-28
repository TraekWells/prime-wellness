<?php get_header(); ?>

<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

<div id="content">

<div class="intro page-section">
  
  <div class="container wide">
    
    <div class="title-holder align-center">
    
      <h1><?php the_title(); ?></h1>

      <p>Your Journey Commences Now!</p>

    </div>

  </div>

</div>

<div class="page-section">
  
  <div class="container wide">

    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        
        <h2>I'd Love To Hear From You!</h2>
        <p>Feel free to send us any questions you may have. I am happy to answer them.</p>

        <form id="contact-form" class="contact-form style-2" action="mail.php">

          <div class="contact-item">
            
            <label class="required">Your Name</label>
            <input type="text" name="cf-name" required>

          </div>

          <div class="contact-item">
            
            <label class="required">Your Email</label>
            <input type="email" name="cf-email" required>

          </div>

          <div class="contact-item">
            
            <label>Phone</label>
            <input type="tel" name="cf-phone">

          </div>

          <div class="contact-item">
            
            <label>I'm interested in</label>
            <input type="text" name="cf-subject">

          </div>

          <div class="contact-item">
            
            <label>Message</label>
            <textarea rows="4" name="cf-message"></textarea>

          </div>

          <div class="contact-item">
            
            <button type="submit" class="btn btn-style-5" data-type="submit">Send Message</button>

          </div>

        </form>

      </div>
    </div>

  </div>

</div>

</div>

<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

<?php get_footer(); ?>