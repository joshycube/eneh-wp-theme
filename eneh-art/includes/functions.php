<?php

  if ( !defined('ABSPATH')) exit;
  
  //Thumbnails support
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(520, 250, true);
    
  if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'enehgal-smallest', 50, false);
    add_image_size( 'enehgal-smaller', 150, false);
    add_image_size( 'enehgal-small', 250, false);
    add_image_size( 'enehgal-med', 500, false );
    add_image_size( 'enehgal-large', 900, false );
    add_image_size( 'enehgal-larger', 1000, false );
  }
  
  //wp_enqueue_style('parent', get_template_directory_uri() . '/style.css',false,'1.1','all');
  //wp_enqueue_style('lightbox', get_stylesheet_directory_uri() . '/lib/lightbox/css/lightbox.css',false,'1.1','all');
  //wp_enqueue_style('contactform', get_stylesheet_directory_uri() . '/css/contactform.css',false,'1.1','all');

?>
