<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

?>

<?php get_header(); ?>
 
<section id="post">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
  <article class="post">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
         
       <?php the_post_thumbnail(); ?>
       <?php the_excerpt(); ?>
       
       <span class="datetime"><?php the_date(); ?></span>
                
  </article>
<?php endwhile; ?>
         
  <nav class="navigation"><?php posts_nav_link(); ?></nav>
         
<?php endif; ?>
</section>
 
<?php get_footer(); ?>