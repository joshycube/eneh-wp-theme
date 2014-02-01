<?php get_header(); ?>
 
    <div id="innerWrap">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
        <div class="post">
       
            <div class="entry">  
	
		<div class="enehGal">
      
		 <?php 	    
		  $im1 = get_field('product_image_1'); 
		  $im2 = get_field('product_image_2'); 
		  $im3 = get_field('product_image_3'); 
		  $im4 = get_field('product_image_4'); 
		  $im5 = get_field('product_image_5'); 
		  $im6 = get_field('product_image_6'); 
		 ?>
		      
		  <img id="enehGalCover" width="360" height="360" data-orig="<?php echo $im1['url']; ?>" src="<?php echo $im1['sizes']['enehgal-med']; ?>" />
		  <ul class="galCollection">
		    <li class="galItem"><a data-lightbox="product-single" href="<?php echo $im1['url']; ?>"><img width="50" height="50" data-orig="<?php echo $im1['url']; ?>" data-medium="<?php echo $im1['sizes']['enehgal-med']; ?>" src="<?php echo $im1['sizes']['enehgal-small']; ?>" /></a></li>
		    <li class="galItem"><a data-lightbox="product-single" href="<?php echo $im2['url']; ?>"><img width="50" height="50" data-orig="<?php echo $im2['url']; ?>" data-medium="<?php echo $im2['sizes']['enehgal-med']; ?>" src="<?php echo $im2['sizes']['enehgal-small']; ?>" /></a></li>
		    <li class="galItem"><a data-lightbox="product-single" href="<?php echo $im3['url']; ?>"><img width="50" height="50" data-orig="<?php echo $im3['url']; ?>" data-medium="<?php echo $im3['sizes']['enehgal-med']; ?>" src="<?php echo $im3['sizes']['enehgal-small']; ?>" /></a></li>
		    <li class="galItem"><a data-lightbox="product-single" href="<?php echo $im4['url']; ?>"><img width="50" height="50" data-orig="<?php echo $im4['url']; ?>" data-medium="<?php echo $im4['sizes']['enehgal-med']; ?>" src="<?php echo $im4['sizes']['enehgal-small']; ?>" /></a></li>
		    <li class="galItem"><a data-lightbox="product-single" href="<?php echo $im5['url']; ?>"><img width="50" height="50" data-orig="<?php echo $im5['url']; ?>" data-medium="<?php echo $im5['sizes']['enehgal-med']; ?>" src="<?php echo $im5['sizes']['enehgal-small']; ?>" /></a></li>
		    <li><a data-lightbox="product-single" href="<?php echo $im6['url']; ?>"><img width="50" height="50" data-orig="<?php echo $im6['url']; ?>" data-medium="<?php echo $im6['sizes']['enehgal-med']; ?>" src="<?php echo $im6['sizes']['enehgal-small']; ?>" /></a></li>
		  </ul>
		  
		</div>
		 
		<div id="contentLeft">
	    
		  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		  <?php the_content(); ?>
		
		</div>
		
		<div class="clear"></div>

            </div>

    </div>
 
<?php endwhile; ?>
     
<?php endif; ?>
</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/lightbox/js/lightbox-2.6.min.js"></script>

<?php get_sidebar(); ?>  
<?php get_footer(); ?>
