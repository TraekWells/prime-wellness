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
      
      <h1><?php the_title(); ?></h1>

      <p>Leadership Qualities/Management Skills/Perspective Shifts/Feedback/Effective Communication</p>

    </div>

  </div>

</div>

<!-- Page section -->
<div class="page-section">
  
  <div class="container wide">
    
    <div class="row row-wide align-items-center">
      <div class="col-md-6 offset-md-3" style="text-align: center;">
        
        <h2 class="title2">About Speaking Engagements</h2>
        <p>At Prime Wellness, we take what may be viewed as Ordinary and bring it to the Extraordinary. Ideas that bring what is limited to the unlimited, what may be previously considered as a barrier and transform it into a bridge, what may be assumed to be separation and division and bring it into alignment and unity. There are no limits when the truth is understood for all that it is and what it can offer.</p>
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
          <img src="<?php echo get_theme_file_uri( '/img/vision-icon.png' );  ?>" alt="Vision icon">
        </div>

        <h3 class="box-title">Vision</h3>
        <p>Focus on who you want to be and put all of your willpower into getting there. The world is a better place because you're here and you owe it to the universe to perform at your maximum potential.</p>

      </div>

      <div class="info-box">
            
        <div class="box-img">
          <img src="<?php echo get_theme_file_uri( '/img/the-genius-within-icon.png' );  ?>" alt="The genius within icon">
        </div>

        <h3 class="box-title">The Genius Within</h3>
        <p>Unlock your inner genius. Think about all you've accomplished and all that you will still achieve. </p>

      </div>

      <div class="info-box">
            
        <div class="box-img">
          <img src="<?php echo get_theme_file_uri( '/img/problem-solving-icon.png' );  ?>" alt="Problem solving icon">
        </div>

        <h3 class="box-title">Problem Solving</h3>
        <p>Learn about how to solve problems and grow as a human being. Problem solving is an extremely underrated skill but it's cruicial for progression.</p>

      </div>

    </div>

  </div>

</div>

<div class="call-out parallax-section" data-bg="<?php echo get_theme_file_uri( '/img/public-speaking-cta-image.jpg' );  ?>">
          
  <div class="container wide">
    
    <div class="align-center">
      <!-- <div class="pre-title">Ready to help?</div> -->
      <h2 class="call-title">Interested in Hearing More?</h2>
      <a href="<?php echo site_url('/contact-me'); ?>" class="btn btn-style-7 btn-big">Get Started Today</a>
    </div>

  </div>

</div>

<?php get_template_part('./template-parts/testimonials'); ?>

<?php get_template_part('./template-parts/what-i-believe'); ?>

</div>

<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

<?php get_footer(); ?>