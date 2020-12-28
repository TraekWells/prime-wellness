<?php get_header(); ?>

<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

<div id="content">

<div class="intro page-section">
  
  <div class="container wide">
    
    <div class="title-holder align-center">
      
      <h1><?php the_title(); ?></h1>

      <p>Purpose. Ritual. Intuition. Meaning. Elevation.</p>

    </div>

  </div>

</div>

<!-- Page section -->
<div class="page-section">
  
  <div class="container wide">
    
    <div class="row row-wide align-items-center">
      <div class="col-md-6 offset-md-3" style="text-align: center;">
        
        <h2 class="title2">About Me</h2>
        <p>Chet's passion is in the reminding of others that there is a Genius within us all, a Genius that can accomplish anything, and to remind us all to never forget.</p>
        <a href="<?php echo site_url('/about-me'); ?>">Learn More</a>

      </div>
    </div>

  </div>

</div>

<?php get_template_part('./template-parts/services'); ?>

<div class="call-out parallax-section" data-bg="<?php echo get_theme_file_uri( '/img/wellness-coach-cta-image.jpg' );  ?>">
          
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