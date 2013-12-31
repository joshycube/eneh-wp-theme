<!-- end of container div --></main>
<footer id="end" class="non-tie">
  <div>Created by Joshy - <a href="http://www.codegarage.net" target="_blank">codegarage.net</a></div>
  <div>Máté Sándor &copy;</div>
  <div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
</footer>

<?php $meta_opt = get_option('eneh_frontend_jsopt'); ?>
	    
<?php if($meta_opt == "jquery"): ?>
 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"><\/script>')</script>

<?php else: ?>

	<script>document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/zepto.min.js"><\/script>')</script>

<?php endif; ?>

<!-- build:js /wp-content/themes/eneh-wp-theme/eneh-art/js/footer.js -->
    <script src="../eneh/js/console.js"></script>
    <script src="../eneh/js/responsive-images.js"></script>
    <script src="js/scripts.js"></script>
<!-- endbuild -->

</body>
