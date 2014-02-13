<?php

  if ( !defined('ABSPATH')) exit;
  
  //Thumbnails support
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(520, 250, true);
    
  if ( function_exists( 'add_image_size' ) ) {  
    add_image_size( 'enehgal-smallest', 50, false);
    add_image_size( 'enehgal-smaller', 150, false);
    add_image_size( 'enehgal-small', 250, false);
    add_image_size( 'enehgal-med', 450, false );
    add_image_size( 'enehgal-large', false, 500 );
    add_image_size( 'enehgal-larger', 800, false );
  }
  
  add_filter( 'jpeg_quality', 'tgm_image_full_quality' );
  add_filter( 'wp_editor_set_quality', 'tgm_image_full_quality' );
  /**
  * Filters the image quality for thumbnails to be at the highest ratio possible.
  *
  * Supports the new 'wp_editor_set_quality' filter added in WP 3.5.
  *
  * @since 1.0.0
  *
  * @param int $quality The default quality (90)
  * @return int $quality Amended quality (100)
  */
  function tgm_image_full_quality( $quality ) {
      return 75;
  }
  
  //wp_enqueue_style('parent', get_template_directory_uri() . '/style.css',false,'1.1','all');
  //wp_enqueue_style('lightbox', get_stylesheet_directory_uri() . '/lib/lightbox/css/lightbox.css',false,'1.1','all');
  //wp_enqueue_style('contactform', get_stylesheet_directory_uri() . '/css/contactform.css',false,'1.1','all');

?>
