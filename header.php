<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <?php wp_head(); ?>
</head>
<body>

<!-- - - - - - - - - - - - - - Start of site wrapper  - - - - - - - - - - - - - - - - -->

<div id="wrapper" class="wrapper-container">

  <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

  <nav id="mobile-advanced" class="mobile-advanced"></nav>

  <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

  <header id="header" class="header sticky-header fixed-header">
    
    <!-- searchform -->

    <div class="searchform-wrap">
      <div class="vc-child h-inherit">

        <form class="search-form">
          <button type="submit" class="search-button"></button>
          <div class="wrapper">
            <input type="text" name="search" placeholder="Start typing...">
          </div>
        </form>

        <button class="close-search-form"></button>

      </div>
    </div>

    <!-- top-header -->

    <div class="top-header">

      <!-- logo -->

      <!-- - - - - - - - - - - - / Mobile Menu - - - - - - - - - - - - - -->

      <!--main menu-->

      <div class="menu-holder">
        
        <div class="menu-wrap">

          <div class="nav-item">
            
            <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->

            <nav id="main-navigation" class="main-navigation">
              <ul id="menu" class="clearfix">
                <li class="current"><a href="<?php echo get_site_url( '/' ); ?>">Home</a></li>
                <li><a href="<?php echo site_url( '/services' ); ?>">Services</a>
                  <!--sub menu-->
                  <div class="sub-menu-wrap">
                    <ul>
                      <li><a href="<?php echo site_url( '/services/wellness-coaching' ); ?>">Wellness Coaching</a></li>
                      <li><a href="<?php echo site_url( '/services/public-speaking-engagements' ); ?>">Public Speaking Engagements</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="<?php echo site_url( '/about-me' ); ?>">About</a></li>
                <li><a href="<?php echo site_url( '/contact-me' ); ?>">Contact Me</a></li>
              </ul>
            </nav>

            <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->

          </div>
          
        </div>

      </div>

      <!-- header buttons -->
      
      <div class="header-btns">
        
        <!-- button -->
        <div class="head-btn">
          <a href="<?php echo site_url('/contact-me'); ?>" class="btn btn-style-8">Contact Me Today</span></a>
        </div>

      </div>


    </div>

  </header>

  <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->