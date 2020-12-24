<?php get_header(); ?>

<div class="intro intro--home page-section" style='background-image: url("<?php echo the_post_thumbnail_url(); ?>")'>
  
  <div class="container wide">
    
    <div class="title-holder align-center">
      
      <p class="pre-title color2">Welcome</p>
      <h1>Prime Wellness</h1>

      <p>Wellness Coaching & Speaking Engagements.</p>

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
      <div class="col-md-6">
        
        <div class="video-holder">
          <img src="https://via.placeholder.com/660x392" alt="">
        </div>

      </div>
      <div class="col-md-6">
        
        <h2 class="title2">About Prime Wellness</h2>
        <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. </p>
        <a href="<?php echo site_url('/services'); ?>">Learn More</a>

      </div>
    </div>

  </div>

</div>

<?php get_template_part('./template-parts/services'); ?>

<?php get_template_part('./template-parts/what-i-believe'); ?>

<?php get_template_part('./template-parts/testimonials'); ?>

<!-- Page section -->
<div class="page-section-bg parallax-section" data-bg="https://via.placeholder.com/1920x800">
  
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

    <div class="bg-img" data-bg="https://via.placeholder.com/960x392"></div>
    
    <h2 class="call-title">Need a Wellness Coach?</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quos?</p>
    <a href="#" class="btn btn-style-7 btn-big">Contact Me Today</a>

  </div>
  <div class="call-out-col">

    <div class="bg-img" data-bg="https://via.placeholder.com/960x392"></div>
    
    <h2 class="call-title">Need a Public Speaker?</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, dolores.</p>
    <a href="#" class="btn btn-style-7 btn-big">Contact Me Today</a>

  </div>

</div>

</div>

<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

<?php get_footer(); ?>