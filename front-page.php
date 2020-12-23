<?php get_header(); ?>

<!-- - - - - - - - - - - - - - Revolution Slider - - - - - - - - - - - - - - - - -->

<div class="rev-slider-wrapper full-scr">

<div id="rev-slider" class="rev-slider tp-simpleresponsive"  data-version="5.0">

  <ul>

    <li data-transition="fade">

      <img src="<?php echo the_post_thumbnail_url(); ?>" class="rev-slidebg" alt="">

      <!-- - - - - - - - - - - - - - Layer 1 - - - - - - - - - - - - - - - - -->

      <div class="tp-caption tp-resizeme scaption-white-large"
        data-x="['center','center','center','center']" data-hoffset="0"
        data-y="['middle','middle','middle','middle']" data-voffset="-50"
        data-whitespace="nowrap"
        data-frames='[{"delay":450,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
        data-responsive_offset="on"
        data-elementdelay="0.05" >Welcome to Prime Wellness
      </div>

      <!-- - - - - - - - - - - - - - End of Layer 1 - - - - - - - - - - - - - - - - -->

      <!-- - - - - - - - - - - - - - Layer 2 - - - - - - - - - - - - - - - - -->

      <div class="tp-caption tp-resizeme scaption-white"
        data-x="['center','center','center','center']" data-hoffset="0"
        data-y="['middle','middle','middle','middle']" data-voffset="30"
        data-whitespace="nowrap"
        data-frames='[{"delay":450,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
        data-responsive_offset="on"
        data-elementdelay="0.05" ><p>Wellness Coaching & Speaking Engagements.</p>
      </div>

      <!-- - - - - - - - - - - - - - End of Layer 2 - - - - - - - - - - - - - - - - -->

      <!-- - - - - - - - - - - - - - Layer 3 - - - - - - - - - - - - - - - - -->

      <div class="tp-caption tp-resizeme scaption-white"
        data-x="['center','center','center','center']" data-hoffset="0"
        data-y="['middle','middle','middle','middle']" data-voffset="120"
        data-whitespace="nowrap"
        data-frames='[{"delay":750,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
        data-responsive_offset="on"
        data-elementdelay="0.05" >
        <a href="#" class="btn btn-big btn-style-5">Contact Me</a>
      </div>

      <!-- - - - - - - - - - - - - - End of Layer 3 - - - - - - - - - - - - - - - - -->

    </li>

  </ul>

</div>

</div>

<!-- - - - - - - - - - - - - - End of Slider - - - - - - - - - - - - - - - - -->

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
        
        <h2 class="title2">About Me</h2>
        <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. </p>
        <a href="<?php echo site_url('/about-me'); ?>">Learn More</a>

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