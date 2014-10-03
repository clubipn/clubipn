<?php
    //gatekeeper(); //temporal fix

    $num_messages = count_unread_notifications(25);

    echo $num_messages;