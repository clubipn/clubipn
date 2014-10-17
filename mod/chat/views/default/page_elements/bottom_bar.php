<?php
$showFriendIcon = elgg_get_plugin_user_setting ( "friends_icons", $_SESSION ['user']->guid, "bottom_bar" ) != "false";

?>


<div id="elggchat_toolbar" style="width: 98%; display: block;">

	<div id="elggchat_toolbar_left">


		<div id="elggchat_friends" style="width: 205px;">
			<div style="margin-top: 5px;">
				<center>
					<a href="javascript:toggleFriendsPicker();">Friends Chat</a>
				</center>
			</div>
		</div>
		<div id="elggchat_friends_picker">


<?php
function isExisted($users_online, $user){
	foreach ($users_online as $user_online){
		if($user->guid == $user_online->guid){
			return true;
		}
	}
	return false;
}

$users_online = get_online_users();
$friends = $_SESSION ['user']->getFriends ( "", 1000 );
$friends_online = 0;
if (count ( $friends ) > 0) {
	echo "<table width=100% id='bb_friendslist'  style='border: solid 1px #fff;'>";
	foreach ( $friends as $friend ) {
		
		$icon = $friend->getIconUrl ( 'topbar' );
		if ($friend->last_action < time () - 180) {
			echo "<tr>";
			if ($showFriendIcon)
				echo "<td><img src='$icon'></td>";
			echo "<td><a href='#' value='0' id='bottom_chat_user_" . $friend->guid . "' class='bottom_chat_users' onClick='addChat(\"" . $friend->guid . "\", \"" . $friend->name . "\");'>" . $friend->name . "</a></td><td>";
			echo "<img value='0' id='bottom_chat_icon_onoff_".$friend->guid."' src='" . $CONFIG->wwwroot . "mod/chat/graphics/icons/inactive.png'>";
			$friends_online ++;
		} else {
			echo "<tr>";
			if ($showFriendIcon)
				echo "<td ><img style='max-width: none;' src='$icon'></td>";
			echo "<td style='padding-left: 5px;'><a href='#' value='1' id='bottom_chat_user_" . $friend->guid . "' class='bottom_chat_users' onClick='addChat(\"" . $friend->guid . "\", \"" . $friend->name . "\");'>" . $friend->name . "</a></td><td width=10 style='padding-top: 3px;'>";
			echo "<img value='1' style='max-width: none;' id='bottom_chat_icon_onoff_" . $friend->guid. "' src='" . $CONFIG->wwwroot . "mod/chat/graphics/icons/online_s.png'>";
			$friends_online ++;
		}
		echo "</td></tr>";
	}
	echo "</table>";
}

// if ($friends_online == 0) {
// 	echo "<tr><td>";
// 	echo elgg_echo ( 'bbar:bar:noneonline' );
// 	echo "</td></tr>"
// }
?>
</div>
	</div>
	<div id='elggchat_sessions' style="float: right;"></div>
</div>
<script>
function toggleFriendsPicker(){
	$("#elggchat_friends_picker").slideToggle('fast');
}
</script>

<script>
<?php require_once("functions.php"); ?>
initPage();
</script>