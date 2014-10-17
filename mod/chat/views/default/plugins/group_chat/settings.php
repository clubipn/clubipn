<br>
<?php echo elgg_echo('group_chat:setting');

 echo elgg_view('input/text', array('name' => "params[group_chat_days]", 'value' => $vars['entity']->group_chat_days, 'class' => ' '));
 ?>