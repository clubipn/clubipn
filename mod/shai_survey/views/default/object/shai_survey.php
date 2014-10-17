<?php echo elgg_view_title($vars['entity']->title); ?>
 
<div class="contentWrapper">

<?php
    if (is_plugin_enabled('shai_activity')) {
        echo "<b>Activity Code:</b> {$vars['entity']->shai_exercise_id}<br />";
    }
    $description = $vars['entity']->description;
    foreach ($vars['entity']->shai_survey_questions as $i)
        $questions .= $i . ', ';
    $questions = rtrim($questions, ', ');
    foreach ($vars['entity']->shai_survey_answers as $i)
        $answers .= $i . ', ';
    $answers = rtrim($answers, ', ');

    $tquestions = elgg_echo('shai_survey:questions');
    $tanswers = elgg_echo('shai_survey:answers');
    $tdescription = elgg_echo('shai_survey:description');
    
    echo "<b>$tdescription:</b> $description<br /><b>$tquestions:</b> $questions<br /><b>$tanswers</b>: $answers";
?>

</div>
