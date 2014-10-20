<?php 

/* Group Chat Function */

function group_chat_handle_group_page($groupChat) {

	gatekeeper();
	$guid = $groupChat['guid'];
	$group = get_entity($guid);
	$title = elgg_echo('group_chat');
	
	elgg_push_breadcrumb(ucfirst($group->name), $group->getURL());
	elgg_push_breadcrumb($title);
	
	$content = '';
	$content .= $groupChat['processEngine'];
	$content .= elgg_view('group_chat/chat_window');

	$params = array(
		'content' => $content,
		'title' => $title,
		'filter' => '',
	);
	return $params;

}
?>