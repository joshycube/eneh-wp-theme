<!-- end of container div --></div>
<footer>
  <p>Máté Sándor &copy;</p>
  <p>Created by Joshy - http://www.codegarage.net</p>
  <p>
    <ul>
    <li><a href="">FB</a></li>
    </ul>
  </p>
</footer>

<?php $meta_opt = get_option('eneh_frontend_jsopt'); ?>
	    
<?php if($meta_opt == "jquery"): ?>
 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.9.1.min.js"><\/script>')</script>

<?php else: ?>

	<script>document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/zepto.min.js"><\/script>')</script>

<?php endif; ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/console.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
</body>
