<?php

function eneh_customizer_menu() {
    add_theme_page(__('Customize theme', 'eneh'), __('Customize theme', 'eneh'), 'edit_theme_options', 'customize.php');
}
add_action( 'admin_menu', 'eneh_customizer_menu' );

function eneh_customize($wp_customize) {

  $wp_customize->add_section( 'sec_eneh_frontend' , array(
    'title'      => __('JS library', 'eneh'),
    'capability' => 'edit_theme_options',
    'priority'   => 1,
  ));
  
  $wp_customize->add_setting(
      'eneh_frontend_jsopt',
      array(
	 'default' => 0,
	 'type'    => 'option',
	 'capability' => 'edit_theme_options',
      )
  );
  
  $wp_customize->add_control('eneh_frontend_jsopt', array(
    'label'   => 'Select a library:',
    'section' => 'sec_eneh_frontend',
    'type'    => 'select',
    'choices'    => array(
        'jquery' => 'jQuery',
        'zepto'  => 'Zepto',
        ),
  ));
  
  $wp_customize->add_section( 'sec_eneh_layout' , array(
    'title'      => __('Layout', 'eneh'),
    'capability' => 'edit_theme_options',
    'priority'   => 2,
  ));
  
  $wp_customize->add_setting(
      'eneh_frontend_lopt',
      array(
	 'default' => 0,
	 'type'    => 'option',
	 'capability' => 'edit_theme_options',
      )
  );
   
  $wp_customize->add_control('eneh_frontend_lopt', array(
    'label'   => 'Select a layout type:',
    'section' => 'sec_eneh_layout',
    'type'    => 'select',
    'choices'    => array(
        'lbar' => 'Sidebar on the left',
        'rbar' => 'Sidebar on the right',
        'nbar' => 'NO sidebar',
        ),
  ));
  
  $wp_customize->add_section( 'sec_eneh_layout_page_met' , array(
    'title'      => __('Layout - page', 'eneh'),
    'capability' => 'edit_theme_options',
    'priority'   => 2,
  ));
  
  $wp_customize->add_setting(
      'eneh_layout_page_met',
      array(
	 'default' => 0,
	 'type'    => 'option',
	 'capability' => 'edit_theme_options',
      )
  );
  
  $wp_customize->add_control('eneh_layout_page_met', array(
    'label'   => 'Select a layout meta:',
    'section' => 'sec_eneh_layout_page_met',
    'settings'=> 'eneh_layout_page_met',
    'type'    => 'select',
    'choices'    => array(
        'wme' => 'Meta',
        'nom' => 'NO meta',
        ),
  ));
  
}
add_action( 'customize_register', 'eneh_customize' );

?>

