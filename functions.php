<?php

function file_setup() {
  wp_enqueue_script('modernizer', get_theme_file_uri('js/libs/jquery.modernizr.js'), NULL, '1.0', true);
  wp_enqueue_script('jquery', get_theme_file_uri('js/libs/jquery-2.2.4.min.js'), NULL, '1.0', true);
  wp_enqueue_script('jquery-ui', get_theme_file_uri('js/libs/jquery-ui.min.js'), NULL, '1.0', true);
  wp_enqueue_script('local-scroll', get_theme_file_uri('plugins/jquery.localScroll.min.js'), NULL, '1.0', true);
  wp_enqueue_script('scroll-to', get_theme_file_uri('plugins/jquery.scrollTo.min.js'), NULL, '1.0', true);
  wp_enqueue_script('fancy-box', get_theme_file_uri('plugins/fancybox/jquery.fancybox.js'), NULL, '1.0', true);
  wp_enqueue_script('custom-select', get_theme_file_uri('plugins/mad.customselect.js'), NULL, '1.0', true);
  wp_enqueue_script('theme-punch', get_theme_file_uri('plugins/revolution/js/jquery.themepunch.tools.min.js?ver=5.0'), NULL, '1.0', true);
  wp_enqueue_script('theme-punch-revolution', get_theme_file_uri('plugins/revolution/js/jquery.themepunch.revolution.min.js?ver=5.0'), NULL, '1.0', true);
  wp_enqueue_script('query-loader', get_theme_file_uri('plugins/jquery.queryloader2.min.js'), NULL, '1.0', true);
  wp_enqueue_script('owl-carousel', get_theme_file_uri('plugins/owl.carousel.min.js'), NULL, '1.0', true);
  
  wp_enqueue_script('plugins', get_theme_file_uri('/js/plugins.js'), NULL, '1.0', true);
  wp_enqueue_script('main_scripts', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);

  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/styles.css?v1', array(), filemtime(get_template_directory() . '/css/styles.css'), false );
}

add_action( 'wp_enqueue_scripts', 'file_setup' );

function add_google_fonts() {
  echo "<link rel='preconnect' href='https://fonts.gstatic.com'>";
  echo "<link href='https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Lora:ital,wght@0,400;0,700;1,400;1,700&display=swap' rel='stylesheet'>";
}

add_action('wp_head', 'add_google_fonts');

function website_features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'website_features');