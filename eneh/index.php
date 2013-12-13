<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Index Template
 *
 *
 * @file           index.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/index.php
 * @link           http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>
 
    <div id="blog">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
        <div class="post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
         
            <div class="entry">  
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
 
                <p class="postmetadata">
                <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                </p>
 
            </div>
        </div>
<?php endwhile; ?>
         
        <div class="navigation">
        <?php posts_nav_link(); ?>
        </div>
         
        <?php endif; ?>
    </div>
<?php get_sidebar(); ?>  
<?php get_footer(); ?>