      </div>

      <!-- - - - - - - - - - - - - - End of site wrapper  - - - - - - - - - - - - - - - - -->
      
      <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

      <footer id="footer" class="footer">

      <div class="container wide">

        <!-- main footer -->
        <div class="main-footer">
          
          <div class="row">
        
            <div class="col-lg-4 col-sm-6">
              
              <div class="widget">
                
                <h5 class="widget-title">About Me</h5>
        
                <p>Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. </p>

                <a href="#" class="btn btn-style-8">Contact Me Today</a>
        
              </div>
        
            </div>
            <div class="col-lg-4 offset-lg-2 col-sm-6">
              
              <div class="widget">

                <h5 class="widget-title">Pages</h5>
                
                <ul class="menu-list">
                    
                  <li><a href="<?php echo get_site_url( '/' ); ?>">Home</a></li>
                  <li><a href="<?php echo site_url( '/wellness-coaching' ); ?>">Wellness Coaching</a></li>
                  <li><a href="<?php echo site_url( '/public-speaking-engagements' ); ?>">Public Speaking Engagements</a></li>
                  <li><a href="<?php echo site_url( '/about-me' ); ?>">About Me</a></li>
                  <li><a href="<?php echo site_url( '/blog' ); ?>">Blog</a></li>
                  <li><a href="<?php echo site_url( '/contact-me' ); ?>">Contact Me</a></li>
                
                </ul>

              </div>

            </div>
        
          </div>
        
        </div>
        
      </div>

      <div class="copyright">
            
        <p>Copyright © <?php echo date('Y'); ?> Prime Wellness. All Rights Reserved.</p>

      </div>

      </footer>

      <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->
    <?php wp_footer(); ?>
  </body>
</html>