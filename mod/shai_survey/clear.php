<?php
    require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
    require_once "lib/shai_survey.php";

    // make sure only logged in users can see this page	
    gatekeeper();
 
    $user_guid = get_input('user_guid');
    if (!$user_guid)
        $user_guid = get_loggedin_userid();

    // set the title
    $title = "Clear Your Surveys";
 
    // start building the main column of the page
    $area2 = elgg_view_title($title);
 
    $user_guid = $rel->guid_two;
    $entities = shai_survey_get_entities(array('types' => 'object', 'subtypes' => 'shai_filledsurvey', 'owner_guid' => $user_guid, 'limit' => 1000));

    foreach ($entities as $entity) {
        $area2 .= elgg_view_entity($entity);
	$entity->delete();
	$area2 .= "<div class=\"contentWrapper\"><h4>" . elgg_echo('shai_filledsurvey:surveydelete') . "</h4></div>";
    }
 
    // layout the page
    $body = elgg_view_layout('two_column_left_sidebar', '', $area2);
 
    // draw the page
    page_draw($title, $body);
?>