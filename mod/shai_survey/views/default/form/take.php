<div class="contentWrapper">

<form action="<?php echo $vars['url']; ?>action/shai_survey/take" method="post">
 
<?php
    global $CONFIG;
    require_once $CONFIG->pluginspath . 'shai_survey/lib/shai_survey.php';

    $guid = get_input('survey_id');
    $entity = get_entity($guid);
    if (!($entity instanceof SHAI_Survey)) {
        register_error(__FILE__);
	return;
    }

    echo elgg_view("input/hidden", array('internalname' => 'survey_id', 'value' => $guid));


    echo '<table class="shai_survey" align="left" width="100%">';
    echo '<tr><th width="5%" class="shai_survey"><b>#</b></th><th class="shai_survey"><b>' . elgg_echo('shai_survey:questions') . '</b></th><th width="30%" class="shai_survey"><b>' . elgg_echo('shai_survey:answers') . '</b></th><tr>';

    $options = array();
    $i=0;
    foreach($entity->shai_survey_answers as $a) {
        $options[$a] = $i++;
    }

    $qnum=1;
    $i=0;
    foreach ($entity->shai_survey_questions as $question) {
         echo "<tr><td class=\"shai_survey\">$qnum</td><td class=\"shai_survey\">$question</td><td class=\"dinky\">";
         echo elgg_view('input/radio', array('internalname' => 'question' . $i, 'options' => $options));
         echo "</td></tr>";
	 $qnum++;
	 $i++;
    }
    echo "</table>";

    echo elgg_view('input/securitytoken');
    echo elgg_view('input/submit', array('value' => elgg_echo('shai_survey:save')));

?>

</form>
</div>
