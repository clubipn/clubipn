<?php
/**
 * Walled Garden layout
 *
 * @uses $vars['content'] Main content
 * @uses $vars['class']   CSS classes
 * @uses $vars['id']      CSS id
 */

$class = elgg_extract('class', $vars, 'elgg-layout elgg-layout-one-column');
echo elgg_view_module('walled', '', $vars['content'], array(
	'class' => $class,
	'id' => elgg_extract('id', $vars, ''),
	'header' => ' ',
	'footer' => ' ',
));

if (!elgg_is_logged_in() && (elgg_get_context() == 'main')){	
	$box = elgg_view("core/account/login_box");         
	echo elgg_view_module('featured',  '', $box);
}

