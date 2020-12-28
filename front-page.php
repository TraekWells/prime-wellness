<?php get_header(); ?>

<div class="intro intro--home page-section" style='background-image: url("<?php echo the_post_thumbnail_url(); ?>")'>
  
  <div class="container wide">
    
    <div class="title-holder align-center">
      
      <p class="pre-title color2">Welcome</p>
      <h1>Prime Wellness</h1>

      <p class="lead">Wellness Coaching and Speaking Engagements.</p>

      <a href="<?php echo site_url('/contact-me'); ?>" class="btn btn-big btn-style-5">Get Started Today</a>

    </div>

  </div>

</div>

<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

<div id="content">

<!-- Page section -->
<div class="page-section">
  
  <div class="container wide">
    
    <div class="row row-wide align-items-center">
      <div class="col-md-6 offset-md-3" style="text-align: center;">
        
        <h2 class="title2">About Prime Wellness</h2>
        <p>Life is extremely short. The lives that we live in that short amount of time should be filled with clarity, joy and meaning. That's why here at Prime Wellness, I focus on helping people to maximize their mental and physical well being.</p>
        <a href="<?php echo site_url('/services'); ?>">Learn More</a>

      </div>
    </div>

  </div>

</div>

<?php get_template_part('./template-parts/services'); ?>

<?php get_template_part('./template-parts/what-i-believe'); ?>

<?php get_template_part('./template-parts/testimonials'); ?>

<!-- Page section -->
<div class="page-section-bg" data-bg="<?php echo get_theme_file_uri( '/img/quote-background-image.jpg' );  ?>">
  
  <div class="container wide">
    
    <div class="row">
      <div class="col-md-6">
        
        <div class="act align-center">
          
          <h3 class="section-title-2 color2"><b>You have power over your mind - not outside events. Realize this, and you will find strength.</b></h3>
          <p><b>Marcus Aurelius</b></p>

        </div>

      </div>
      <div class="col-md-6"></div>
    </div>

  </div>

</div>

<div class="call-out half-section">

  <div class="call-out-col">

    <div class="bg-img" data-bg="<?php echo get_theme_file_uri( '/img/wellness-coach-cta-image.jpg' );  ?>"></div>
    
    <h2 class="call-title">Need a Wellness Coach?</h2>
    <p>With Wellness Coaching, you will sit down with a Coach and map where it is you currently are, how that came to be, and ultimately what it is you would like to become.</p>
    <a href="<?php echo site_url('/contact-me'); ?>" class="btn btn-style-7 btn-big">Contact Me Today</a>

  </div>
  <div class="call-out-col">

    <div class="bg-img" data-bg="<?php echo get_theme_file_uri( '/img/public-speaking-cta-image.jpg' );  ?>"></div>
    
    <h2 class="call-title">Need a Public Speaker?</h2>
    <p>A public speaker is there to remind people of their potential and the importance of unity.</p>
    <a href="<?php echo site_url('/contact-me'); ?>" class="btn btn-style-7 btn-big">Contact Me Today</a>

  </div>

</div>

</div>

<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

<?php get_footer(); ?>