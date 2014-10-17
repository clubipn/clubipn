<?php
/**
 * group_chats
 *
 * @package group_chat
 *
 * @todo
 * - Either drop support for "publish date" or duplicate more entity getter
 * functions to work with a non-standard time_created.
 * - Pingbacks
 * - Notifications
 * - River entry for posts saved as drafts and later published
 */

elgg_register_event_handler('init', 'system', 'group_chat_init');

/**
 * Init group_chat plugin.
 */
function group_chat_init() {

	elgg_register_library('elgg:group_chat', elgg_get_plugins_path() . 'group_chat/lib/group_chat.php');
	
	// entity menu
	//elgg_register_plugin_hook_handler('register', 'menu:page', 'chat_group_page_menu');
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'group_chat_owner_block_menu');
	
	elgg_register_entity_url_handler('group_chat', '', 'group_chat_url'); 
	
	elgg_register_page_handler('chat', 'group_chat_page_handler');

	// To Register JS 
	//$js_url = 'mod/chat/js/jquery.js'; 
	//elgg_register_js('group_chat_jquery_js', $js_url);
	
	// Extend the main css view
	elgg_extend_view('css/elgg', 'group_chat/css');
	
	
	elgg_extend_view('groups/tool_latest', 'group_chat/group_module');
	
	// Register action
	$action_base = elgg_get_plugins_path() . 'chat/actions/chat';
	elgg_register_action("group_chat/process","$action_base/process.php", 'public');
	
	// Bottom_bar
	
	global $CONFIG;
	elgg_extend_view('css/elgg', 'css/bottom_bar');
	if (elgg_is_logged_in()) {
		elgg_extend_view('page/elements/footer', 'page_elements/bottom_bar');
			
	} else {
		elgg_extend_view('page/elements/footer', 'page_elements/clear_cookies');
	}
}


function get_chat_content(){

	$guid = elgg_get_page_owner_guid();
	$days = elgg_get_plugin_setting('group_chat_days', 'group_chat');
	global $CONFIG;
	$fileContent = '';
    $days = ($days)?$days:2;
	for($i=$days;$i>=0;$i--){
	
		$filename = date('mdY', strtotime('-'.$i.' Days')).'.txt';
		$filepath = $CONFIG->dataroot.'/group_chat/'.$guid.'/'.$filename;		
		$content = file_get_contents($filepath);
		if($content)
		$fileContent .= '<li class="dateD" >'.date('D, F d, Y', strtotime('-'.$i.' Days')).'<li>';
	
		$fileContent .= $content;
		
	}
	
	return $fileContent;
	
}
?>
