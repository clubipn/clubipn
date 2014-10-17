<?php
    // Lists all surveys
    require_once dirname(dirname(dirname(__FILE__))) . "/engine/start.php";
    require_once "lib/shai_survey.php";
 
    gatekeeper();
 
    global $CONFIG;
 
    $user_guid = get_loggedin_userid();
 
    $entities = shai_survey_get_entities(array('types' => 'object', 'subtypes' => 'shai_filledsurvey', 'owner_guid' => $user_guid, 'limit' => 1000));
 
    $body = elgg_view_title(elgg_echo('shai_filledsurvey:completedsurvey'));
 
    foreach ($entities as $entity) {
        // Show the survey
        $body .= elgg_view_entity($entity);
        // Options to edit or delete (if admin)
        $body .= '<div class="contentWrapper">';

        // Take
	$take = elgg_echo('shai_survey:retake');
        $body .= "<a href=\"{$CONFIG->wwwroot}mod/shai_survey/take.php?survey_id={$entity->shai_survey_guid}\">$take</a>";

        // Histogram
	$histogram = elgg_echo('shai_survey:histogram');
        $body .= ' | ';
        $body .= "<a href=\"{$CONFIG->wwwroot}mod/shai_survey/histogram.php?survey_id={$entity->shai_survey_guid}\">$histogram</a>";

        $body .= '</div>';

    }

    $body = elgg_view_layout('two_column_left_sidebar', '', $body);
    page_draw(elgg_echo('shai_filledsurvey:completedsurvey'), $body);
 
?>
 