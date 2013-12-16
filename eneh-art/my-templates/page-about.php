<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<section id="about" data-type="background" data-speed="15">
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
        <article><?php the_content(); ?></article>

    <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
