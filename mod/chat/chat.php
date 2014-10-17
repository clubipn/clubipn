<?php

/**
         * Facebook-esque bottom bar
         *
         * @package bottom_bar
         * @author Jay Eames - Sitback
         * @link http://sitback.dyndns.org
         * @copyright (c) Jay Eames 2009
         * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
         */
require_once (dirname ( dirname ( dirname ( __FILE__ ) ) ) . '/engine/start.php');

if (elgg_is_logged_in () && ! is_null ( $_REQUEST ['action'] )) {
	if ($_REQUEST ['action'] == "rx") {
		$chat = $_SESSION ['user']->getObjects ( "bb_chat" );
		if (! is_null ( $chat ) && $chat) {
			$objCount = 0;
			$response = array ();
			foreach ( $chat as $c ) {
				if ($objCount ++ > 0) {
					$c->delete ();
				} else {
					$messages = $c->getAnnotations ( 'messages' );
					foreach ( $messages as $msg ) {
						$user = get_entity ( $msg ["owner_guid"] );
						$inactive = array (
								"guid" => $user->guid,
								"name" => $user->name,
								"message" => stripslashes ( $msg ['value'] ),
								"user_url" => $user->getURL () 
						);
						array_push ( $response, $inactive );
						
						$msg->delete ();
					}
				}
				
				// $c->delete();
			}
			echo json_encode ( $response );
		} else {
			echo "No object";
			$test = new ElggObject ();
			// $test->owner_guid = $_REQUEST['to'];
			// $test->container_guid = $_REQUEST['to'];
			$test->subtype = "bb_chat";
			$test->access_id = 2;
			$test->save ();
		}
	} else if ($_REQUEST ['action'] == "tx") {
		$message = addslashes ( html_entity_decode ( $_REQUEST ['message'] ) );
		$target = get_entity ( $_REQUEST ['to'] );
		$test = $target->getObjects ( "bb_chat" );
		
		$from = get_entity ( $_REQUEST ['from'] );
		$response = array (
				"url" => $from,
				"message" => $message 
		);
		
		if ($test) {
			$count = 0;
			foreach ( $test as $t ) {
				if ($count ++ == 0) {
					$t->annotate ( 'messages', $message, 2 );
				} else {
					$t->delete ();
				}
			}
		} else {
			$test = new ElggObject ();
			$test->owner_guid = $_REQUEST['to'];
			$test->container_guid = $_REQUEST['to'];
			$test->subtype = "bb_chat";
			$test->access_id = 2;
			$test->save ();
			
			$test = $target->getObjects ( "bb_chat" );
			$count = 0;
			foreach ( $test as $t ) {
				if ($count ++ == 0) {
					$t->annotate ( 'messages', $message, 2 );
				} else {
					$t->delete ();
				}
			}
		}
		echo json_encode ( $response );
	} else if ($_REQUEST ['action'] == "cf") {
		$user = get_entity ( $_REQUEST ['from'] );
		$friends = $user->getFriends ( "", 1000 );
		$friends_online = 0;
		$response = array ();
		if (count ( $friends ) > 0) {
			foreach ( $friends as $friend ) {
				$icon = @$friend->getIconUrl ( 'topbar' );
				// Consider them offline if no action for 10 mins ..
				if ($friend->last_action < time () - 120) {
					$inactive = array (
							"guid" => $friend->guid,
							"name" => $friend->name,
							"icon" => @$icon,
							"icon_onoff" => $CONFIG->wwwroot . "mod/group_chat/graphics/icons/inactive.png",
							"online" => 0 
					);
					array_push ( $response, $inactive );
				} else {
					$inactive = array (
							"guid" => $friend->guid,
							"name" => $friend->name,
							"icon" => @$icon,
							"icon_onoff" => $CONFIG->wwwroot . "mod/group_chat/graphics/icons/online_s.png",
							"online" => 1 
					);
					array_push ( $response, $inactive );
				}
			}
			
			echo json_encode ( $response );
		}
	}
}

?>
