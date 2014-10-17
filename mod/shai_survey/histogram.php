<?php
    // Lists all surveys
    require_once dirname(dirname(dirname(__FILE__))) . "/engine/start.php";
    require_once "lib/shai_survey.php";
 
    gatekeeper();
 
    global $CONFIG;
 
    $survey_guid = get_input('survey_id');
    $survey = get_entity($survey_guid);

    $body = elgg_view_title(elgg_echo('shai_survey:results'). "\"{$survey->title}\"");

    $user_guids = array();	    // people who filled out the essay
    $entity_rels = get_entity_relationships($survey_guid);
    $hist = array();
    $completed_surveys = 0;
    foreach ($entity_rels as $rel) {
        if ($rel->relationship != SHAI_Survey::relationship_survey_user())
	    continue;
	($rel->guid_one == $survey_guid) || die('');
	$user_guid = $rel->guid_two;  // find this guy's filled out survey
	$entities = shai_survey_get_entities(array('types' => 'object', 'subtypes' => 'shai_filledsurvey', 'owner_guid' => $user_guid, 'limit' => 1));
	foreach ($entities as $filled_survey) {
	    if ($filled_survey->shai_survey_guid == $survey_guid) {
	        $numq = count($survey->shai_survey_questions);
		$numa = count($filled_survey->shai_filledsurvey_answers);
		($numq == $numa) || die("invalid counts: $numq $numa");

		$user_guids[] = $user_guid;
		$completed_surveys++;
	        $i=0;
	        foreach($survey->shai_survey_questions as $question) {
	            $answer = $filled_survey->shai_filledsurvey_answers[$i];
		    is_numeric($answer) || die('corrupted survey');			
		    if (!isset($hist[$question]))
		        $hist[$question] = array();
		    if (!isset($hist[$question][$answer]))
			$hist[$question][$answer] = 0;
		    $hist[$question][$answer] += 1;
		    $i++;
		}
	    }
	}
    }
    // debug $body .= print_r($hist,true);

    $body .= '<table class="shai_survey" align="left" width="95%">';
    $body .= '<tr><th class="shai_survey"><b>#</b></th><th class="shai_survey"><b>Question</b></th>';

    foreach($survey->shai_survey_answers as $a)
        $body .= "<th class=\"shai_survey\"><b>$a</b></th>";
    $body .= '</tr>';

    $qnum=1;
    foreach($survey->shai_survey_questions as $question) {
        $body .= "<tr><td class=\"shai_survey\"><b>$qnum</b></td><td class=\"shai_survey\"><b>$question</b></td>";
        $anum=0;
	foreach($survey->shai_survey_answers as $answer) {
            $body .= "<td class=\"shai_survey\"><b>{$hist[$question][$anum]}</b></td>";
	    $anum++;
	}
	$body .= '</tr>';
	$qnum++;
    }

    $body .= "</table>";

    $body .= "<div id=\"content_area_generic\"><h4>" . elgg_echo('shai_survey:number') . "$completed_surveys</h4></div>";
    $body .= "<div class=\"contentWrapper\">";
    foreach ($user_guids as $user_guid) {
        $user = get_user($user_guid);
        $body .= $user->username . ' ';
    }
    $body .= "</div>";

    $body = elgg_view_layout('two_column_left_sidebar', '', $body);
    page_draw(elgg_echo('shai_survey:available'), $body);
 
?>
 