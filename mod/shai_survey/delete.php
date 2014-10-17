<?php
    // Load Elgg engine
    include_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
 
    // make sure only logged in users can see this page	
    gatekeeper();
    admin_gatekeeper();
 
    $guid = get_input('survey_id');
    if (!$guid || !is_numeric($guid)) {
        register_error(__FILE__);
    }
    $entity = get_entity($guid);
    if ($entity instanceof SHAI_Survey)
        $entity->delete();
    else
        register_error(__FILE__);

    $entity = get_entity($guid);
    if ($entity)
        register_error(__FILE__);

    forward($_SERVER['HTTP_REFERER']);
?>