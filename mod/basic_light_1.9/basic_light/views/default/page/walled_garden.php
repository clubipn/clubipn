<?php
/**
 * Walled garden page shell
 *
 * Used for the walled garden index page
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// render content before head so that JavaScript and CSS can be loaded. See #4032

$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));
$topbar = elgg_view('page/elements/walled_topbar', $vars);
$header = elgg_view('page/elements/walled_header', $vars);
$content = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

$body = <<<__BODY
<div class="elgg-page elgg-page-default basic-light-walled">
	<div class="elgg-page-messages">
		$messages
	</div>
	<div class="elgg-page-topbar">
		<div class="elgg-inner">
			$topbar
		</div>
	</div>
	<div class="elgg-page-header">
		<div class="elgg-inner">
			$header
		</div>
	</div>
	<div class="elgg-page-body">
		<div class="elgg-inner">
			$content
		</div>
	</div>
	<div class="elgg-page-footer">
		<div class="elgg-inner">
			$footer
		</div>
	</div>
</div>
__BODY;

$body .= elgg_view('page/elements/foot');

$head = elgg_view('page/elements/head', $vars['head']);

$params = array(
	'head' => $head,
	'body' => $body,
);

if (isset($vars['body_attrs'])) {
	$params['body_attrs'] = $vars['body_attrs'];
}

echo elgg_view("page/elements/html", $params);