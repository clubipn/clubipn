<?php
    /**
     * SHAI_Survey
     * 
     */

    class SHAI_Survey extends ElggObject
    {
        protected function initialise_attributes()
        {
            parent::initialise_attributes();
            
            $this->attributes['subtype'] = 'shai_survey';
        }
        
        public function __construct($guid = null) 
        {
            parent::__construct($guid);
	    $this->access_id = ACCESS_PUBLIC;
        }

	// entity relationship for figuring out who took a given survey
	static function relationship_survey_user() { return 'rel_shai_survey_user'; }

        /* metadata:
	title			// name of survey
	description 		// description of survey
	shai_survey_questions 	// text questions
	shai_survey_answers 	// radiobutton answers
	shai_exercise_id	// for shai_activity plugin
        */
    }

    register_entity_type('object', 'shai_survey');
    add_subtype('object', 'shai_survey', 'SHAI_Survey');

    class SHAI_FilledSurvey extends ElggObject
    {
        protected function initialise_attributes()
        {
            parent::initialise_attributes();
            
            $this->attributes['subtype'] = 'shai_filledsurvey';
        }
        
        public function __construct($guid = null) 
        {
            parent::__construct($guid);
	    $this->access_id = ACCESS_PUBLIC;
        }

        /* metadata:
	shai_survey_guid
	shai_filledsurvey_answers
        */
    }

    register_entity_type('object', 'shai_filledsurvey');
    add_subtype('object', 'shai_filledsurvey', 'SHAI_FilledSurvey');

    function shai_survey_get_entities($arr) {
        !isset($arr['count']) || ($arr['count'] == false) || die('');
        $entities = elgg_get_entities($arr);
        if ($entities == false)
           $entities = array();
        if ($entities instanceof ElggObject)
           $entities = array($entities);
        return $entities;
    }

?>
