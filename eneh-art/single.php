<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

?>

<?php get_header(); ?>
 
<section id="post">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
  <article class="post">
    <h1><a><?php the_title(); ?></a></h1>
         
       <?php the_post_thumbnail(); ?>
       <?php the_content(); ?>
                
  </article>

<?php endwhile; ?>
         
  <nav class="pager"><?php previous_post_link('&laquo %link') ?> <?php next_post_link(' %link &raquo') ?></nav>
         
<?php endif; ?>
</section>

<?php get_footer(); ?>

