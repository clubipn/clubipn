<?php

	$english = array(
	
		/**
		 * Menu items and titles
		 */
	
			'shai_survey' => "My Survey",
			'shai_surveys' => "My Surveys",
			'shai_survey:add' => "Add",
			'shai_survey:edit' => "Edit",
			'shai_survey:take' => "Take survey",
			'shai_survey:retake' => "Take survey again",
			'shai_survey:delete' => "Delete",
			'shai_survey:histogram' => "View results",
			'shai_survey:index' => "Survey index",
			'shai_survey:save' => "Submit",
			'shai_survey:instructions' => "For each question select an answer.  When you are done press the Submit button.",

			'shai_survey:name' => "Survey name",
    			'shai_survey:explanation' => "Description for the survey taker",
    			'shai_survey:fillanswers' => "Fill in survey answers (minimum 2)",
    			'shai_survey:fillquestions' => "Fill in survey questions (minimum 2)",
			'shai_survey:question' => "Question",
			'shai_survey:questions' => "Questions",
			'shai_survey:answer' => "Answer",
			'shai_survey:answers' => "Answers",
			'shai_survey:description' => "Description",
			'shai_survey:editsurvey' => "Edit survey",
			'shai_survey:addsurvey' => "Add a new survey",
			'shai_survey:allsurveys' => "All Surveys",
			'shai_survey:available' => "Available Surveys",
			'shai_survey:results' => "Survey Results for ",
			'shai_survey:number' => "Number of surveys: ",
			'shai_filledsurvey:completedsurvey' => "Your completed surveys",
			'shai_filledsurvey:viewsurvey' => "View your completed surveys",
			'shai_filledsurvey:clearsurveys' => "Clear all your completed surveys",
			'shai_filledsurvey:surveydelete' => "YOUR ANSWERS WERE DELETED",

			'shai_survey:user' => "%s's survey",
			'shai_survey:user:friends' => "%s's friends' survey",
			'shai_survey:your' => "Your survey",
			'shai_survey:posttitle' => "%s's survey: %s",
			'shai_survey:friends' => "Friends' surveys",
			'shai_survey:everyone' => "All site surveys",
			'shai_survey:new' => "New survey",

			'item:object:shai_survey' => "Surveys",
			'item:object:shai_filledsurvey' => "Surveys",

		/**
	     	 * Survey river
	     	 **/
	        
	        //generic terms to use
		        'shai_survey:river:created' => "%s created",
		        'shai_survey:river:updated' => "%s updated",
	        
	        //these get inserted into the river links to take the user to the entity
		        'shai_survey:river:create' => "a new survey",
		        'shai_survey:river:update' => "a survey",
	
		/**
		 * Status messages
		 */
			'shai_survey:posted' => "Your survey was successfully created.",
	
		/**
		 * Error messages
		 */
	
			'shai_survey:error' => 'Something went wrong. Please try again.',
			'shai_survey:save:failure' => "Your survey could not be saved. Please try again."

		/**
		 * Form data for metadata
		 */

	
	);
					
	add_translation("en",$english);

?>