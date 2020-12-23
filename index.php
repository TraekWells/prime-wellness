<?php get_header(); ?>

<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

<div id="content">

<div class="page-section" style='background-image: linear-gradient(rgba(0,0,0,1), rgba(0,0,0,.9)), url("<?php echo the_post_thumbnail_url(); ?>")'>
  
  <div class="container wide">
    
    <div class="title-holder align-center">
      
      <p class="pre-title color2">Blog</p>
      <h2>Blog</h2>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi at expedita accusantium qui fuga eos!</p>

    </div>

  </div>

</div>

<div class="container wide">
  
  <div class="row">
    
    <main id="main" class="col-lg-8 offset-lg-2 mb-3">

      <div class="entry-box list-type">

      <?php  

        if ( have_posts() ) {
          while( have_posts() ) {
            the_post();
      ?>
          
        <!-- Entry -->
        <div class="entry">

          <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
          <div class="thumbnail-attachment">
            <a href="<?php the_permalink(); ?>"><img src="https://via.placeholder.com/1005x588" alt=""></a>
          </div>
          
          <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
          <div class="entry-body">
    
            <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <div class="entry-meta">
            
              <span>on</span>
              <time class="entry-date"><?php the_modified_date(); ?></time>
              <span>by</span>
              <a href="#" class="entry-cat"><?php the_author(); ?></a>
                
            </div>
            <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. </p>
            <div class="flex-row justify-content-between">
              <a href="<?php the_permalink(); ?>" class="btn btn-small btn-style-5">Read More</a>
            </div>
            
          </div>
    
        </div>

        <?php 
            } // end while
          } // end if

        ?>

        
      </div>

    </main>

  </div>

</div>

</div>

<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

<?php get_footer(); ?>