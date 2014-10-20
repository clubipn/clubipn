<?php
 
function vrawa_template_init() {
    // Extend system CSS with our own styles
    
	elgg_unregister_menu_item('topbar', 'elgg_logo');

	
	//Enhance beauty of CSS with our own styles
	
	
		 /**
     * BOOTSTRAP CSS
     */
    $css_url = 'mod/vrawa/vendors/bootstrap/css/';
    elgg_register_css('bootstrap-css',            $css_url.'bootstrap.min.css', 1);
    elgg_register_css('bootstrap-responsive-css', $css_url.'bootstrap-responsive.min.css', 1);

    elgg_load_css('bootstrap-css');
    elgg_load_css('bootstrap-responsive-css');

    /**
     * jQuery & BOOTSTRAP JS
     */
    $js_url = 'mod/vrawa/vendors/bootstrap/js/';
    elgg_register_js('bootstrap-js',  $js_url.'bootstrap.min.js', 'footer');
    
    elgg_register_js('jquery', 'mod/vrawa/vendors/jquery/jquery-1.7.1.min.js', 'head');
 
    elgg_load_js('jquery');
    elgg_load_js('bootstrap-js');

    /**
     * INTERNAL CSS
     */
    elgg_register_simplecache_view('css/vrawa/css/misc');
    $url = elgg_get_simplecache_url('css', 'vrawa/css/misc');
    elgg_register_css('vrawa:misc', $url);
    elgg_load_css('vrawa:misc');

    /**
     * INTERNAL JS
     */
    elgg_register_simplecache_view('js/vrawa/workarounds');
    $url = elgg_get_simplecache_url('js', 'vrawa/workarounds');
    elgg_register_js('vrawa:workarounds', $url, 'footer');
    elgg_load_js('vrawa:workarounds');

	
    // Replace the default index page
   register_plugin_hook('index','system','vrawa_index');
	
	
			

	
	
}
 
function vrawa_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/vrawa/index.php"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init','system','vrawa_template_init');
?>