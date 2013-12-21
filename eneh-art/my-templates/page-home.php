<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section id="welcome" data-type="background" data-speed="15">
  <article>
 
	<?php if(have_posts()) : ?>
	   <?php while(have_posts()) : the_post(); ?>
	      <?php the_content(); ?>
	  <?php endwhile; ?>
	<?php endif; ?>
   
    <!--<a class="button artistic brown jumpto" data-destination="1000">Galéria</a>-->
  </article>
</section>

<section id="art" data-type="background" data-speed="15">
  <article>
    <ul id="art-categories">
      <li>
	<a href=""><img class="framed" src="<?php echo get_stylesheet_directory_uri(); ?>/img/categories/portrait.jpg" /></a>
	<h3>Portrék</h3>
      </li>
      <li>
	<a href=""><img class="framed" src="<?php echo get_stylesheet_directory_uri(); ?>/img/categories/still-life.jpg" /></a>
	<h3>Csendélet</h3>
      </li>
      <li>
	<a href="/category/art/landscape"><img class="framed" src="<?php echo get_stylesheet_directory_uri(); ?>/img/categories/landscape.jpg" /></a>
	<h3>Tájkép</h3>
      </li>
      <li>
	<a href=""><img class="framed" src="<?php echo get_stylesheet_directory_uri(); ?>/img/categories/moments.jpg" /></a>
	<h3>Életképek</h3>
      </li>
      <li>
	<a href=""><img class="framed" src="<?php echo get_stylesheet_directory_uri(); ?>/img/categories/other.jpg" /></a>
	<h3>Egyéb</h3>
      </li>
      <li>
	<a href=""><img class="framed" src="<?php echo get_stylesheet_directory_uri(); ?>/img/categories/all.jpg" /></a>
	<h3>Összes</h3>
      </li>
    </ul>
  </article>
</section>

<?php get_footer(); ?>
