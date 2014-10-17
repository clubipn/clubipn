<?php
    include_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
 
    gatekeeper();
    admin_gatekeeper();
 
    // set the title
    $title = "Add Survey";
 
    // start building the main column of the page
    $area2 = elgg_view_title($title);
 
    // Add the form to this section
    $area2 .= elgg_view("form/add");
 
    // layout the page
    $body = elgg_view_layout('two_column_left_sidebar', '', $area2);
 
    // draw the page
    page_draw($title, $body);
?>