<?php
    // Lists all surveys
    require_once dirname(dirname(dirname(__FILE__))) . "/engine/start.php";
    require_once "lib/shai_survey.php";
 
    gatekeeper();
 
    global $CONFIG;
 
//   (get_context() == 'admin'
 
    $entities = shai_survey_get_entities(array('types' => 'object', 'subtypes' => 'shai_survey', 'owner_guid' => 0, 'limit' => 1000));
 
    $body = elgg_view_title(elgg_echo('shai_survey:allsurveys'));
 
    foreach ($entities as $entity) {
        $guid = $entity->getGUID();
	
        // Show the survey
        $body .= elgg_view_entity($entity);

        // Options
	$edit = elgg_echo('shai_survey:edit');
	$delete = elgg_echo('shai_survey:delete');
	$take = elgg_echo('shai_survey:take');
	$histogram = elgg_echo('shai_survey:histogram');

        if (isadminloggedin()) {
            $body .= '<div class="contentWrapper">';

            // Edit
            $body .= "<a href=\"{$CONFIG->wwwroot}mod/shai_survey/edit.php?survey_id=$guid\">$edit</a>";

            // Delete
            $body .= ' | ';
            $body .= "<a href=\"{$CONFIG->wwwroot}mod/shai_survey/delete.php?survey_id=$guid\">$delete</a>";

            // Take
            $body .= ' | ';
            $body .= "<a href=\"{$CONFIG->wwwroot}mod/shai_survey/take.php?survey_id=$guid\">$take</a>";

            // Histogram
            $body .= ' | ';
            $body .= "<a href=\"{$CONFIG->wwwroot}mod/shai_survey/histogram.php?survey_id=$guid\">$histogram</a>";

            $body .= '</div>';
        }
        else {
            $body .= '<div class="contentWrapper">';

            // Take
            $body .= ' | ';
            $body .= "<a href=\"{$CONFIG->wwwroot}mod/shai_survey/take.php?survey_id=$guid\">$take</a>";

            // Histogram
            $body .= ' | ';
            $body .= "<a href=\"{$CONFIG->wwwroot}mod/shai_survey/histogram.php?survey_id=$guid\">$histogram</a>";

            $body .= '</div>';
        }
    }
 
    $body = elgg_view_layout('two_column_left_sidebar', '', $body);
    page_draw(elgg_echo('shai_survey:available'), $body);
 
?>
 