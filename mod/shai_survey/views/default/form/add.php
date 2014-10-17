<div class="contentWrapper">

<form action="<?php echo $vars['url']; ?>action/shai_survey/add" method="post">
 
<?php
    global $CONFIG;
    require_once $CONFIG->pluginspath . 'shai_survey/lib/shai_survey.php';

    if (is_plugin_enabled('shai_activity')) {
        $defaultparam = '-';
 	$options_value[$defaultparam] = $defaultparam;
    	$exercise_array = shai_survey_get_entities(array('types' => 'object', 'subtypes' => 'shai_exercise', 'owner_guid' => 0, 'limit' => 1000));
        foreach($exercise_array as $ex)
            $options_value[$ex->id] = $ex->id;

         echo '<p>Exercise';
         echo elgg_view('input/pulldown', array(
		'internalname' => 'shai_exercise_id',
		'options_values' => $options_value,
		'value' => $defaultparam
		));
         echo '</p>';

    }

    echo elgg_echo('shai_survey:name');
    echo elgg_view("input/text",array('internalname' => 'title'));

    echo elgg_echo('shai_survey:explanation');
    echo elgg_view("input/longtext",array('internalname' => 'description'));

    echo elgg_echo('shai_survey:fillanswers');
    for ($i=0; $i<5; $i++)
        echo elgg_view("input/text",array('internalname' => 'shai_survey_answers' . $i));

    echo elgg_echo('shai_survey:fillquestions');
    for ($i=0; $i<10; $i++)
        echo elgg_view("input/text",array('internalname' => 'shai_survey_questions' . $i));

    echo elgg_view('input/securitytoken');

    echo elgg_view('input/submit', array('value' => elgg_echo('shai_survey:save')));

?>

</form>
</div>