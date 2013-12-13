
 

<!-- end of container div --><div class="push"></div></div>
<footer class="row">
        <div class="large-12 columns"><hr>
            <div class="row">
 
              <div class="large-6 columns">
                  <p>© Copyright no one at all. Go to town.</p>
              </div>
 
              <div class="large-6 small-12 columns">
                  <ul class="inline-list right">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                  </ul>
              </div>
 
            </div>
        </div>
      </footer>

<?php $meta_opt = get_option('eneh_frontend_jsopt'); ?>
	    
<?php if($meta_opt == "jquery"): ?>
 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.9.1.min.js"><\/script>')</script>

<?php else: ?>

	<script>document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/zepto.min.js"><\/script>')</script>

<?php endif; ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/console.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.jscrollpane.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
</body>
