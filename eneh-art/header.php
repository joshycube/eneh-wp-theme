<?php

if ( !defined('ABSPATH')) exit;

?>

<!doctype html>
<!--[if !IE]>      <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<title><?php wp_title('&#124;', true, 'right'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_enqueue_style('eneh', get_stylesheet_uri(), false, '1.0.0');?>
<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 7]>
 <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<nav class="top-bar">
    <ul class="title-area">
      <li class="hide">
        <a id="artist-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/artist-icon.png" /></a>
      </li>
      <li>
        <h1 class="noton-small"><a id="artist-name" href="/"><?=get_bloginfo('name'); ?></a></h1>
      </li>
    </ul>
    <section class="top-bar-section">
      <ul class="right">
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>
      </ul>
    </section>
</nav>

<div id="container">
