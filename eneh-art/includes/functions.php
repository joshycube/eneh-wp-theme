<?php

  if ( !defined('ABSPATH')) exit;
  
  //Thumbnails support
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(520, 250, true);
    
  if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'enehgal-small', 50, 50, true );
    add_image_size( 'enehgal-med', 360, 360, true );
    add_image_size( 'press-tmb', 90, 130, true );
  }
  
  //wp_enqueue_style('parent', get_template_directory_uri() . '/style.css',false,'1.1','all');
  wp_enqueue_style('lightbox', get_stylesheet_directory_uri() . '/lib/lightbox/css/lightbox.css',false,'1.1','all');
  wp_enqueue_style('contactform', get_stylesheet_directory_uri() . '/css/contactform.css',false,'1.1','all');

?>
