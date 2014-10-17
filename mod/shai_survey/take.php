<?php
    // Load Elgg engine
    require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
    global $CONFIG;
    require_once $CONFIG->pluginspath . 'shai_survey/lib/shai_survey.php';
 
    // make sure only logged in users can see this page	
    gatekeeper();
 
    $survey_guid = get_input('survey_id');
    $survey = get_entity($survey_guid);

    // set the title and description
    $title = ($survey && !empty($survey->title)) ? $survey->title : elgg_echo('shai_survey:take');
    $description = ($survey && !empty($survey->description)) ? "<b>{$survey->description}</b>":'';
    $side_description .= "<div class=\"contentWrapper\"><b>" . elgg_echo('shai_survey:instructions') . "</b></div>";
 
    // start building the main column of the page
    $area2 = elgg_view_title($title);
    $area2 .= "<div class=\"contentWrapper\">$description</div>";

    // Add the form to this section
    $area2 .= elgg_view("form/take");
 
    // layout the page
    $body = elgg_view_layout('two_column_left_sidebar', $side_description, $area2);
 
    // draw the page
    page_draw($title, $body);

?>