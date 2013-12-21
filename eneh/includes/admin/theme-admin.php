    <?php
    // Exit if accessed directly
    if ( !defined('ABSPATH')) exit;

    ?>
    <?php
    //add_action('admin_init', 'eneh_theme_options_init');
    //add_action('admin_menu', 'eneh_theme_options_add_page');
    
    //Main menus
    register_nav_menus(array(
	'header-menu' => __('Header'),
	'footer-menu' =>  __('Footer')
    ));   
   
    
    //Thumbnails support
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(520, 250, true);
    
    //Sidebar support
    if (function_exists('register_sidebar')) register_sidebar();
    
    //Permalink structure
    /*add_action('after_setup_theme', function() {
      global $wp_rewrite;
      $wp_rewrite->set_permalink_structure('/%post_id%/%year%/%monthnum%/%postname%/');
      $wp_rewrite->flush_rules();
    });*/
    
    //Custom post type category support 
    function add_custom_types_to_tax( $query ) {
      if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
	  // Get all your post types
	  $post_types = get_post_types();
	  $query->set( 'post_type', $post_types );
	  return $query;
      }
    }
    add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );
    
    //Not in use!
    function eneh_admin_enqueue_scripts( $hook_suffix ) {
     wp_register_style('normalize', get_template_directory_uri() . '/includes/admin/css/normalize.css', array(), '20130721', 'all');
     wp_enqueue_style('normalize');  
     wp_enqueue_style('eneh-theme-options', get_template_directory_uri() . '/includes/admin/css/eneh-admin.css', false, '1.0');
	 wp_enqueue_script('eneh-theme-options', get_template_directory_uri() . '/includes/admin/js/eneh-admin.js', array('jquery'), '1.0', true); //last true = bottom, after DOM
    }
    //add_action('admin_print_styles-appearance_page_theme_options', 'eneh_admin_enqueue_scripts');

    function eneh_theme_options_add_page() {
     add_theme_page(__('Theme Options', 'eneh'), __('Theme Options', 'eneh'), 'edit_theme_options', 'theme_options', 'eneh_options_do_page');
    }

    function eneh_theme_options_init() {
        register_setting('eneh_options', 'eneh_theme_options', 'eneh_theme_options_validate');
    }

 function eneh_options_do_page() {  

  if (!isset($_REQUEST['settings-updated']))
     $_REQUEST['settings-updated'] = false;
 ?>  
 <div class="wrap">  
 
    <?php if (false !== $_REQUEST['settings-updated']) : ?>
        <div class="updated fade"><p><strong><?php _e('Options Saved', 'eneh'); ?></strong></p></div>
    <?php endif; ?>

    <?php screen_icon('themes'); ?> <h2>Enéh settings</h2>  

    <form method="post" action="options.php">

        <?php settings_fields('eneh_options'); ?>
        <?php $options = get_option('eneh_theme_options'); var_dump($options); ?>

        <h3 class="option-item"><a href="#"><?php _e('JS library', 'eneh'); ?></a></h3>
        <div class="option-container">
            <ul>
                <li>
                    <input type="radio" value="1" name="eneh_theme_options['jquery']" <?php checked($options['jquery'], 'jquery', true); ?> />
                    <label>jQuery</label>
                </li>
                <li>
                    <input type="radio" value="1" name="eneh_theme_options['zepto']" <?php checked($options['zepto'], 'zepto', true); ?> />
                    <label>Zepto</label>
                </li>
                <li>
                    <input type="submit" value="<?php _e('Save Options', 'eneh'); ?>" class="button-primary">
                </li>
            </ul>
        </div>

        <h3 class="option-item"><a href="#"><?php _e('Layout orientation', 'eneh'); ?></a></h3>
        <div class="option-container">
            <ul>
                <li>
                    <input type="radio" value="1" name="eneh_theme_options['layout_left']" <?php isset($options['layoutor']) ? checked( '1', $options['layoutor'] ) : checked('0', '1'); ?>/>
                    <label>Left</label>
                </li> 
                <li>
                    <input type="radio" value="1" name="eneh_theme_options['layout_right']" <?php isset($options['layoutor']) ? checked( '1', $options['layoutor'] ) : checked('0', '1'); ?>/>
                    <label>Right</label>
                </li>
                <li>
                    <input type="submit" value="<?php _e('Save Options', 'eneh'); ?>" class="button-primary">
                </li>
            </ul>  
        </div>

        <h3 class="option-item"><a href="#"><?php _e('Social media', 'eneh'); ?></a></h3>
        <div class="option-container">
            <ul>
            </ul>
        </div>

    </form>  

</div>  
<?php  }  

function eneh_theme_options_validate($input) {
    var_dump($input);
    /*foreach (array(
        'jquery',
        'zepto'
        ) as $checkbox) {
        if (!isset($input[$checkbox]))
            $input[$checkbox] = null;
            $input[$checkbox] = ( $input[$checkbox] == 1 ? 1 : 0 );
    }*/
    exit;
    $input['jquery'] = $input['jquery'];
    $input['zepto']  = $input['zepto'];
    $input['layout_left']  = $input['layout_left'];
    $input['layout_right'] = $input['layout_right'];
    return $input;
}
