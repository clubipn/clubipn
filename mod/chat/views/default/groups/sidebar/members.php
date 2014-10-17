<style type="text/css">
 
		
	</style>
<?php
/**
 * Group members sidebar
 *
 * @package ElggGroups
 *
 * @uses $vars['entity'] Group entity
 * @uses $vars['limit']  The number of members to display
 */

$limit = elgg_extract('limit', $vars, 10);

$all_link = elgg_view('output/url', array(
	'href' => 'groups/members/' . $vars['entity']->guid,
	'text' => elgg_echo('groups:members:more'),
));

$body = elgg_list_entities_from_relationship(array(
	'relationship' => 'member',
	'relationship_guid' => $vars['entity']->guid,
	'inverse_relationship' => true,
	'types' => 'user',
	'limit' => $limit,
	'list_type' => 'gallery',
	'gallery_class' => 'elgg-gallery-users',
));

$body .= "<div class='center mts'>$all_link</div>";

echo elgg_view_module('aside', elgg_echo('groups:members'), $body);

?>
<script>

$(document).ready(function(){

	var wh = $(window).height();
	var dH = wh -385;
	$('#gCMd').offset({top:dH});

	$(window).resize(function(){
		var wh = $(window).height();
		
		var dH = wh - 390;

		if(dH < 0)
			$('#gCMd').offset({top:0});
		else
			$('#gCMd').offset({top:dH});
	});
	if(typeof bb_chat_windows != "undefined"){
		var number_of_chat_boxs = bb_chat_windows.length;
		var width = (bb_chat_windows.length + 1) * chat_box_width + 20;
		$(".group_chat_container").css('right', width + 'px');
		$(".group_chat_container").css('display', 'block');
	}
});

	

	jQuery(function( $ ){
		var container = $( "#container" );
		$(".chatWrapper").hide();
		$(".miniMize").hide();
		;$(".maxMize").show();
// 		if (container.is( ":visible" )){

// 			// Hide - slide up.
// 			container.slideUp( 1000 );

// 		} else {

// 			// Show - slide down.
// 			container.slideDown( 1000 );

// 		}			
	});
</script>
<div style="position:fixed; bottom:0%; z-index:9999" id="gCMd" >
<?php

	elgg_load_js('group_chat_jquery_js');
	$content = '';
	$content .= elgg_view('group_chat/chat_process_engine', $guid);
	$content .= elgg_view('group_chat/chat_window', $vars);	
?>

<div id="container" class="group_chat_container" style="display: none; bottom: 0px;" >
		<div id="inner">
			<?php echo $content;?>
		</div>
	</div>
</div>

