<?php get_header(); ?>
<section id="category">
<?php if(have_posts()) : ?> 
	
	   <?php if (in_category('art')): ?>
	   
	      <?php $c=0; $imgs = array(); ?>
	   
	      <?php while(have_posts()) : the_post(); ?>
	      
		  <?php $imgs[] = get_field('image'); $img = get_field('image');?>
	      
		  <article class="art-show <?php if($c > 0): ?>hide<?php else: ?>stage-image<?php endif; ?>">
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
		    
		    <div class="image-container"><img class="framed" src="<?=$imgs[$c]['sizes']['large']; ?>" alt="<?php if($imgs[$c]['alt'] != ''): ?><?=get_bloginfo('name'); ?> - <?=$imgs[$c]['alt']; ?> - <?=$imgs[$c]['alt']; ?> - <?=$imgs[$c]['title']; ?> <?php else: ?> <?=get_bloginfo('name'); ?> - <?=$imgs[$c]['title']; ?><?php endif; ?>" title="<?=$imgs[$c]['title']; ?>" data-src-base='<?=$base?>' 
							  data-src='<542:<?=$small; ?>,
                                                          <975:<?=$medium; ?>,
                                                          <1260:<?=$large; ?>,
                                                          >1260:<?=$large; ?>' /></div>
		    
		    
		    <footer><?php the_content(); ?></footer>
		  </article>
		  
		  
	      <?php $c++; endwhile; ?>
	
	  <?php else: ?>
	   
	      <?php while(have_posts()) : the_post(); ?>
		  <article><?php the_content(); ?></article>
	      <?php endwhile; ?>
	
	  <?php endif; ?>
	
<?php endif; ?>
</section>

<aside class="bottom-control">
 <a class="eneh-step" id="step-left">&laquo;</a>
 <div id="eneh-mask">
 <ul id="eneh-slide">
  <?php $max = count($imgs); $i = 0; foreach($imgs as $img): ?>
    <li data-index="<?=$i;?>" class="<?php if($i == 0): ?>first <?php elseif($i == $max-1): ?>last <?php endif; ?>art-slide"><a><img class="framed" src="<?=$img['sizes']['thumbnail']; ?>" /></a></li>
  <?php $i++; endforeach; ?>
 </ul>
 </div>
 <a class="eneh-step" id="step-right">&raquo;</a>
</aside>

<?php get_footer(); ?>
