<?php get_header(); ?>
<section id="post">
<?php if(have_posts()) : ?> 
	

	      <?php $c=0; $imgs = array(); ?>
	   
	      <?php while(have_posts()) : the_post(); ?>
	      
		  <?php $imgs[] = get_field('image'); $img = get_field('image');?>
		  
		  <article class="art-show <?php if($c > 0): ?>hide<?php else: ?>stage-image<?php endif; ?>">
		  
		    <nav class="pager"><?php previous_post_link('&laquo %link') ?> | <?php next_post_link(' %link &raquo') ?></nav>
		  
		    <header><h1><?php the_title(); ?></h1></header>
		    
		    <?php
		      $base     = str_replace(basename($imgs[$c]['sizes']['enehgal-large']), "", $imgs[$c]['sizes']['enehgal-large']);
		      $larger   = basename($imgs[$c]['sizes']['enehgal-larger']);
		      $large    = basename($imgs[$c]['sizes']['enehgal-large']);
		      $medium   = basename($imgs[$c]['sizes']['enehgal-med']);
		      $small    = basename($imgs[$c]['sizes']['enehgal-small']);
		      $smaller  = basename($imgs[$c]['sizes']['enehgal-smaller']);
		      $smallest = basename($imgs[$c]['sizes']['enehgal-smallest']);
		    ?>
		   
		    
		      <div class="image-container"><img class="framed mainimg" data-msrc="<?=$imgs[$c]['sizes']['larger']; ?>" src="<?=$imgs[$c]['sizes']['larger']; ?>" alt="<?php if($imgs[$c]['alt'] != ''): ?><?=get_bloginfo('name'); ?> - <?=$imgs[$c]['alt']; ?> - <?=$imgs[$c]['alt']; ?> - <?=$imgs[$c]['title']; ?> <?php else: ?> <?=get_bloginfo('name'); ?> - <?=$imgs[$c]['title']; ?><?php endif; ?>" title="<?=$imgs[$c]['title']; ?>" data-src-base='<?=$base?>' 
							    data-src='<542:<?=$small; ?>,
							    <975:<?=$medium; ?>,
							    <1260:<?=$larger; ?>,
							    >1260:<?=$larger; ?>' /></div>
		 
		    
		   
		    
		    <footer><?php the_content(); ?></footer>
		  </article>
		  
	      <?php $c++; endwhile; ?>
	
<?php endif; ?>
</section>

<?php get_footer(); ?>

