  <div id="footer">
      <nav><?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?></nav>
      <p>
      <strong>Copyright 2011 <?php bloginfo('name'); ?> | All Rights Reserved.</strong> </a>
      Designed by <a href="http://www.codegarage.net"> Joshy</a>
      </p>
      <p><a href="<?php bloginfo('rss2_url'); ?>">Latest Stories RSS</a> | <a href="<?php comments_rss_link('comment feed'); ?>">Comments RSS</a></p>
      </div>
  </div>
 <!-- end of container div --></div>
 
<?php $meta_opt = get_option('eneh_frontend_jsopt'); ?>
	    
<?php if($meta_opt == "jquery"): ?>
 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

<?php else: ?>

	<script>document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/zepto.min.js"><\/script>')</script>

<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/console.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/respond.min.js"></script>
</body>
