<?php
if (elgg_is_logged_in()) {
    gatekeeper();

    $num_messages = count_unread_notifications(25);

    echo $num_messages;
}else{
   return;
}