<?php
    require_once "lib/shai_survey.php";

    function shai_survey_init() {        
        elgg_extend_view('css', 'shai_survey/css');

	global $CONFIG;
        if (get_context() == 'admin' && isadminloggedin()) {
            add_submenu_item(elgg_echo('shai_survey:index'),$CONFIG->wwwroot.'pg/shai_survey/index');
        } else {
             // Set up menu for logged in users
            if (isloggedin()) 
            {
                add_menu(elgg_echo('shai_surveys'), $CONFIG->wwwroot.'pg/shai_survey/index'); // for student to take a survey
            }
        }         

	register_elgg_event_handler('pagesetup','system','shai_survey_submenus');
        register_page_handler('shai_survey', 'shai_survey_page_handler');

	register_action("shai_survey/add", false, $CONFIG->pluginspath . 'shai_survey/actions/add.php');
	register_action("shai_survey/delete", false, $CONFIG->pluginspath . 'shai_survey/actions/delete.php');
	register_action("shai_survey/take", false, $CONFIG->pluginspath . 'shai_survey/actions/take.php');
    }
  
  
// http://yoururl/elgg/pg/blog/username/friends/  would result in the call: blog_page_handler(array('username','friends'), blog);

    function shai_survey_page_handler($page)
    {
	// The first component of a URL is command
	$command = isset($page[0]) ? $page[0] : 'index';
	switch($command)
	{
	    case 'add':
	        include('add.php');
		return true;
	    case 'edit':
	        include('edit.php');
	        return true;
	    case 'index':
	        include('index.php');
	        return true;
	    case 'take':
	        include('take.php');
	        return true;
	    case 'view':
	        if (isset($page[1])) {
	    	    set_input('survey_id', $page[1]);
	    	    include("histogram.php");
		    return true;
		}
	        else
		    return false;
	    default:
	        return false;
	}
	return false;
    }

    function shai_survey_submenus()
    {
        global $CONFIG;
                
        if (get_context() == 'shai_survey')
        {
            $prefix = $CONFIG->url . "mod/shai_survey/";
            add_submenu_item(elgg_echo('shai_survey:index'), $prefix . 'index.php');
            if (isadminloggedin()) {
                 add_submenu_item(elgg_echo('shai_survey:addsurvey'), $prefix . 'add.php');
            }
            add_submenu_item(elgg_echo('shai_filledsurvey:viewsurvey'), $prefix . 'student_index.php');
            if (isadminloggedin()) {
                add_submenu_item(elgg_echo('shai_filledsurvey:clearsurveys'), $prefix . 'clear.php');
            }
        }
    }


    register_elgg_event_handler('init','system','shai_survey_init');
  
?>