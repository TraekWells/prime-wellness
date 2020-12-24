<?php 

/**
 *  
 * Template Name: Service Page Template
 * 
*/

get_header();
?>

<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

<div id="content">

<div class="intro page-section">
  
  <div class="container wide">
    
    <div class="title-holder align-center">
      
      <p class="pre-title color2">Service</p>
      <h1><?php the_title(); ?></h1>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi at expedita accusantium qui fuga eos!</p>

    </div>

  </div>

</div>

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
        
        <h2 class="title2">What is a Wellness Coach?</h2>
        <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. </p>
        <a class="btn btn-style-5 btn-big" href="<?php echo site_url('/contact-me'); ?>">Get Started Today</a>

      </div>
    </div>

  </div>

</div>

<div class="page-section-bg">
    
  <div class="container wide">
    
    <div class="info-boxes flex-row item-col-3">

      <div class="info-box">
            
        <div class="box-img">
          <img src="https://via.placeholder.com/430x308" alt="">
        </div>

        <h3 class="box-title">Benefit One</h3>
        <p>Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
        Ut tellus dolor, dapibus eget, elementum.</p>

      </div>

      <div class="info-box">
            
        <div class="box-img">
          <img src="https://via.placeholder.com/430x308" alt="">
        </div>

        <h3 class="box-title">Benefit Two</h3>
        <p>Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
        Ut tellus dolor, dapibus eget, elementum.</p>

      </div>

      <div class="info-box">
            
        <div class="box-img">
          <img src="https://via.placeholder.com/430x308" alt="">
        </div>

        <h3 class="box-title">Benefit Three</h3>
        <p>Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
        Ut tellus dolor, dapibus eget, elementum.</p>

      </div>

    </div>

  </div>

</div>

<div class="call-out parallax-section" data-bg="https://via.placeholder.com/1920x800">
          
  <div class="container wide">
    
    <div class="align-center">
      <!-- <div class="pre-title">Ready to help?</div> -->
      <h2 class="call-title">Get a Wellness Coach!</h2>
      <a href="<?php echo site_url('/contact-me'); ?>" class="btn btn-style-7 btn-big">Get Started Today</a>
    </div>

  </div>

</div>

<?php get_template_part('./template-parts/testimonials'); ?>

<?php get_template_part('./template-parts/what-i-believe'); ?>

</div>

<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

<?php get_footer(); ?>