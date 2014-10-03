<?php

elgg_register_event_handler('init', 'system', 'addthis_share_init');
 
    function addthis_share_init()
    {
       		elgg_extend_view('object/elements/summary', 'addthis_share/addthis');
          elgg_extend_view('object/summary/extend','addthis_share/follow');
         
         
    }


?>