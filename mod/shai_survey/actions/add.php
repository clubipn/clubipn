<?php
    // callable for add or edit forms

    global $CONFIG;
    require_once $CONFIG->pluginspath . "shai_survey/lib/shai_survey.php";
  
    action_gatekeeper();

    $title = get_input('title');
    $description = get_input('description');

    $answers = array();
    for ($i=0; $i<5; $i++) {
	$answer = get_input('shai_survey_answers' . $i, null);
        if (is_null($answer) || empty($answer))
	    break;
        $answers[] = $answer;
    }
    if (count($answers) < 2) {
        system_message("Minimum 2 answers.");
        forward($_SERVER["HTTP_REFERER"]);
        return;
    }

    $questions = array();
    for ($i=0; $i<10; $i++) {
	$question = get_input('shai_survey_questions' . $i, null);
        if (is_null($question) || empty($question))
	    break;
        $questions[] = $question;
    }
    if (count($questions) < 2) {
        system_message("Minimum 2 questions.");
        forward($_SERVER["HTTP_REFERER"]);
        return;
    }

    $guid = get_input('survey_id', null);
    $entity = $guid ? get_entity($guid) : new SHAI_Survey();
    clear_metadata($entity->getGUID());
    if (!$entity->save())
        register_error(__FILE__);
    $entity->owner_guid = 0;
    $entity->access_id = ACCESS_PUBLIC;
    $entity->title = $title;
    $entity->description = $description;
    if (is_plugin_enabled('shai_activity'))
        $entity->shai_exercise_id = get_input('shai_exercise_id', 'NO EXERCISE ID SUPPLIED');

    $i = 0;
    foreach ($answers as $a) {
      $i++;
      $multiple = $i == 1 ? false : true;
      create_metadata($entity->getGUID(), 'shai_survey_answers', $a, '', 0, ACCESS_PUBLIC, $multiple);
    }
    $i = 0;
    foreach ($questions as $a) {
      $i++;
      $multiple = $i == 1 ? false : true;
      create_metadata($entity->getGUID(), 'shai_survey_questions', $a, '', 0, ACCESS_PUBLIC, $multiple);
    }

    if (!$entity->save())
        register_error(__FILE__);

    if (get_context() == 'main')
        forward($entity->getURL());

?>
