<?php get_header(); ?>
<section id="page">
      <article>
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
	    <header><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></header>

            <?php the_content(); ?>
 
	    <?php $meta_opt = get_option('eneh_layout_page_met'); ?>
	    
	    <?php if($meta_opt == "wme"): ?>
	    
                <p class="postmetadata">
                <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                </p>
		
	    <?php endif; ?>
 
        </div>
         
	<?php endwhile; ?>
	
	    <footer>
		<?php posts_nav_link(); ?>
	    </footer>
	
	<?php endif; ?>
      </article>

</section>
 
<?php get_sidebar(); ?>  
<?php get_footer(); ?>
