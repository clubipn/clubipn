<?php 
    global $CONFIG;
    require_once $CONFIG->pluginspath . "shai_survey/lib/shai_survey.php";

    $survey_guid = $vars['entity']->shai_survey_guid;
    $survey = get_entity($survey_guid);

    $filledsurvey_answers = $vars['entity']->shai_filledsurvey_answers;

    echo elgg_view_title($survey->title);
    $description = $survey->description;
?>
 
<div class="contentWrapper">

<?php

    $i=0;
    foreach ($survey->shai_survey_questions as $q) {
        echo elgg_echo('shai_survey:question') . ": $q<br />";
	$answer_index = $vars['entity']->shai_filledsurvey_answers[$i];
	echo elgg_echo('shai_survey:answer') . ": {$survey->shai_survey_answers[$answer_index]}<br />";
	$i++;
    }

?>

</div>
