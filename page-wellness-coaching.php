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

      <p>Relationship/Career/Family/Money​/Lifestyle Balance/Health & Body​/Communication​ ​</p>

    </div>

  </div>

</div>

<!-- Page section -->
<div class="page-section">
  
  <div class="container wide">
    
    <div class="row row-wide align-items-center">
      <div class="col-md-6 offset-md-3" style="text-align: center;">
        
        <h2 class="title2">What is a Wellness Coach?</h2>
        <p>Wellness Coaching will augment self-directed, lasting changes, aligned with your core values and beliefs. These ideas assist in the promotion of your health and wellness and, thereby, aim to enhance your overall well-being.</p>
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
          <img src="<?php echo get_theme_file_uri( '/img/mental-fortification-icon.png' );  ?>" alt="Mental fortification icon">
        </div>

        <h3 class="box-title">Mental Fortification</h3>
        <p>You will embark on a journey that will not only be conducive to your growth but will also create future circumstances that will be congruent with values and beliefs.</p>

      </div>

      <div class="info-box">
            
        <div class="box-img">
          <img src="<?php echo get_theme_file_uri( '/img/confront-conflict-icon.png' );  ?>" alt="Confronting the conflict icon">
        </div>

        <h3 class="box-title">Confront the Conflict</h3>
        <p>With a Wellness Coach you will address these issues on the surface and then delve into the unconscious of underlying contributors that could potentially be exacerbating the problem making it more difficult to contrive a solution.</p>

      </div>

      <div class="info-box">
            
        <div class="box-img">
          <img src="<?php echo get_theme_file_uri( '/img/clarity-icon.png' );  ?>" alt="Clarity icon">
        </div>

        <h3 class="box-title">Clarity</h3>
        <p>Everything from your values, beliefs, history, ambitions, and problems will be assessed and addressed to assist you finding the most apt and exciting lifestyle balance! The aim is to provide you with a balanced lifestyle that meets your internal needs and assists in capitalizing on previously unforeseen opportunities!</p>

      </div>

    </div>

  </div>

</div>

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