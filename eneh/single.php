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
       <?php the_content(); ?>
 
       <p class="postmetadata">
         <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
         <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
       </p>
                
  </article>
  
  <section id="comments">
    <?php comments_template(); ?>
  </section>
  
<?php endwhile; ?>
         
  <nav class="pager"><?php previous_post_link('&laquo %link') ?> <?php next_post_link(' %link &raquo') ?></nav>
         
<?php endif; ?>
</section>

<?php get_sidebar(); ?>  
<?php get_footer(); ?>

