<?php get_header(); ?>

<div class="page-section" style='background-image: linear-gradient(rgba(0,0,0,1), rgba(0,0,0,.9)), url("<?php echo the_post_thumbnail_url(); ?>")'>
  
  <div class="container wide">
    
    <div class="title-holder align-center">
      
      <p class="pre-title color2">Blog</p>
      <h2><?php the_title(); ?></h2>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi at expedita accusantium qui fuga eos!</p>

    </div>

  </div>

</div>

<h3>Blog post details go here</h3>

<?php get_footer(); ?>