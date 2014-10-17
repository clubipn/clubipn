<?php
    // callable for take

    global $CONFIG;
    require_once $CONFIG->pluginspath . "shai_survey/lib/shai_survey.php";
  
    action_gatekeeper();

    $survey_guid = get_input('survey_id');
    $survey = get_entity($survey_guid);

    $i=0;
    $answers = array();
    foreach ($survey->shai_survey_questions as $question) {
        $answer = get_input('question' . $i);
        if (!is_numeric($answer)) {  // must have left an answer blank
    	     register_error("Be sure to answer all questions before proceeding.");
    	     forward($_SERVER["HTTP_REFERER"]);
    	     return;
	}
        $answers[] = $answer;
	$i++;
    }

    $user_guid = get_loggedin_userid();

    $entity = null;
    $filled_surveys = shai_survey_get_entities(array('types' => 'object', 'subtypes' => 'shai_filledsurvey', 'owner_guid' => $user_guid, 'limit' => 1000));
    foreach ($filled_surveys as $f) {
       if ($f->shai_survey_guid == $survey_guid) {
          $entity = $f;
	  break;
       }
    }

    if (is_null($entity))
        $entity = new SHAI_FilledSurvey();
    clear_metadata($entity->getGUID());
    if (!$entity->save())
        register_error(__FILE__);
    $entity->owner_guid = $user_guid;
    $entity->access_id = ACCESS_PUBLIC;
    $entity->shai_survey_guid = $survey_guid;
    $i=0;
    foreach ($answers as $a) {
        $i++;
        $multiple = $i == 1 ? false : true;
        create_metadata($entity->getGUID(), 'shai_filledsurvey_answers', $a, '', $user_guid, ACCESS_PUBLIC, $multiple);
    }
    if (!$entity->save())
        register_error(__FILE__);

    add_entity_relationship($survey_guid, SHAI_Survey::relationship_survey_user(), $user_guid);	// for histogramming

    $trigger_result = false;
    if (is_plugin_enabled('shai_activity')) {
        $trigger_result = trigger_plugin_hook('shai_activity_pass','shai_survey/take', array('exercise_id' => $survey->shai_exercise_id), false);
    }

    if ($trigger_result) {
    }
    else {
        forward ("{$CONFIG->wwwroot}pg/shai_survey/view/$survey_guid");
    }
?>
