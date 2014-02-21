<!-- end of container div --></main>
<footer id="end" class="non-tie">
  <div>Created by Joshy - <a href="http://www.codegarage.net" target="_blank">codegarage.net</a></div>
  <div>Máté Sándor &copy;</div>
  <div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
</footer>

<?php $meta_opt = get_option('eneh_frontend_jsopt'); ?>
	    
<?php if($meta_opt == "jquery"): ?>
 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

<?php else: ?>

	<script>document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/zepto.min.js"><\/script>')</script>

<?php endif; ?>

<?php if(ENVIRONMENT == 'local' || ENVIRONMENT == 'dev'): ?>

<!-- for dev purpose -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/console.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/responsive-images.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/fitvids.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/framework/core/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/framework/core/utils.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/framework/core/api.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/framework/core/core.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/components/navigation.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/components/effects.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/components/gallery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/framework/start.js"></script>

<?php else: ?>

<!-- build:js /wp-content/themes/eneh-wp-theme/eneh-art/js/footer.js -->
  <script src="../eneh/js/vendor/console.js"></script>
  <script src="../eneh/js/vendor/responsive-images.js"></script>
  <script src="../eneh/js/vendor/fitvids.js"></script>
  <script src="../eneh/js/framework/core/main.js"></script>
  <script src="../eneh/js/framework/core/utils.js"></script>
  <script src="../eneh/js/framework/core/api.js"></script>
  <script src="../eneh/js/framework/core/core.js"></script>
  <script src="js/components/navigation.js"></script>
  <script src="js/components/effects.js"></script>
  <script src="js/components/gallery.js"></script>
  <script src="../eneh/js/framework/start.js"></script>
<!-- endbuild -->

<?php endif; ?>

</body>
