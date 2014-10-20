<?php
/*
 *
 * Theme Basic Light
 *
 * @author Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2014, Elggzone
 *
 * @link http://www.perjensen-online.dk/
 *
 */
 
elgg_register_event_handler('init','system','basic_init');
 
function basic_init() {

	$plugin = elgg_get_plugin_from_id('basic_light');

	themes_register_themes();
	
	$action_path = dirname(__FILE__) . '/actions';
	elgg_register_action("basic_light/admin/settings", "$action_path/settings.php", 'admin');
	elgg_register_action("basic_light/admin/sidebar", "$action_path/settings.php", 'admin');		

	elgg_register_js('respond', 'mod/basic_init/vendors/js/respond.js');
	elgg_load_js('respond');
			
	if ($plugin->show_thewire == 'yes'){
		elgg_register_action("basic_light/add", "$action_path/add.php");		
		elgg_require_js('basic_light/update');
	}

	elgg_register_plugin_hook_handler('head', 'page', 'basic_light_setup_head');
	
	elgg_register_event_handler('pagesetup', 'system', 'basic_pagesetup_handler', 1000);

	elgg_register_admin_menu_item('configure', 'basic_light', 'settings');
		
	elgg_extend_view('css/elgg', 'basic_light/css');
	elgg_extend_view('css/admin', 'basic_light/admin');
	
	elgg_unregister_js('elgg.friendspicker');	
	
}

/**
 * Register items for the html head
 *
 * @param string $hook Hook name ('head')
 * @param string $type Hook type ('page')
 * @param array  $data Array of items for head
 * @return array
 */
function basic_light_setup_head($hook, $type, $data) {

	$data['metas'][] = array(
		'name' => 'viewport',
		'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0',
	);

	// https://developer.chrome.com/multidevice/android/installtohomescreen
    $data['metas'][] = array(
        'name' => 'mobile-web-app-capable',
        'content' => 'yes',
    );

    $data['metas'][] = array(
        'name' => 'apple-mobile-web-app-capable',
        'content' => 'yes',
    );
	
	$data['links'][] = array(
		'rel' => 'apple-touch-icon',
		'href' => elgg_normalize_url('mod/basic_light/graphics/homescreen.png'),
	);
		
	$data['links'][] = array(
		'rel' => 'icon',
		'href' => elgg_normalize_url('mod/basic_light/graphics/favicon.ico'),
	);

	return $data;
}

function themes_register_themes() {
	$themes = array('default', 'bronco', 'palesky');

	foreach($themes as $theme) {
		elgg_register_simplecache_view("css/themes/$theme");
		$url = elgg_get_simplecache_url('css', "themes/$theme");
		elgg_register_css($theme, $url);
	}
}

function basic_pagesetup_handler() {

	$plugin = elgg_get_plugin_from_id('basic_light');

	if ($plugin->active_theme != 'default' && elgg_get_context() != 'admin'){
		elgg_load_css($plugin->active_theme);
	}
	
	if (elgg_is_logged_in()	&& elgg_get_context() == 'activity'){
			
		if ($plugin->show_thewire == 'yes'){	
			elgg_extend_view('page/layouts/elements/header', 'page/elements/riverwire', 1);
		}
		if ($plugin->show_icon != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_icon, 'page/elements/rivericon', '501');
		}
		if ($plugin->show_menu != 'no'){		
			elgg_extend_view('page/elements/' . $plugin->show_menu, 'page/elements/ownermenu', '502');
		}
	}
	if ((elgg_get_context() == 'activity') || (elgg_get_context() == 'thewire')){
		if ($plugin->show_custom != 'no'){
			elgg_extend_view('page/elements/' . $plugin->show_custom, 'page/elements/custom_module', 504);
		}
	}
	
	elgg_unextend_view('page/elements/header', 'search/header');

	elgg_unregister_menu_item('topbar', 'dashboard');
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	// Extend footer with copyright
	$year = date('Y');	
	$href = "http://www.perjensen-online.dk";
	elgg_register_menu_item('footer', array(
		'name' => 'copyright_this',
		'href' => $href,
		'title' => elgg_echo('basic_light:tooltip'),
		'text' => elgg_echo('basic_light:copyright') . $year . elgg_echo(' Elggzone'),
		'priority' => 1,
		'section' => 'alt',
	));	
	
	if (elgg_is_logged_in()) {	
		$user = elgg_get_logged_in_user_entity();
		
		if (elgg_is_active_plugin('dashboard')) {
			elgg_register_menu_item('site', array(
				'name' => 'dashboard',
				'href' => 'dashboard',
				'text' => elgg_view_icon('home') . elgg_echo('dashboard'),
				'priority' => 1000,
				'section' => 'default',
			));
		}

		if (elgg_is_active_plugin('reportedcontent')) {
			$item = elgg_unregister_menu_item('footer', 'report_this');
			if ($item) {
				$item->setText(elgg_view_icon('report-this'));
				$item->setPriority(100);
				elgg_register_menu_item('extras', $item);
			}
		}
		
		if (elgg_is_active_plugin('site_notifications')) {
			$item = elgg_get_menu_item('topbar', 'site_notifications');
			if ($item) {
				$item->setText(elgg_echo('site_notifications:topbar'));
				$item->setPriority(103);
			}
		}
	}
}
