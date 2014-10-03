<div>
	<?php
	echo'<p>Enter AddThis profile ID:<br><em>You can get this from http://www.addthis.com (login to AddThis and find under Settings > Profiles)</em></p>';
	
	echo elgg_view('input/text', array(
	'name' => 'params[profileID]',
	'value' => $vars['entity']->profileID,
));

	?>
</div>


<div>
    <?php
    echo '<p>How do you like to display the set of share buttons?</p>';

    echo elgg_view('input/dropdown', array(
        'name' => 'params[alignposition]',
		'options_values' => array(
						'left' => elgg_echo('Align Left'),
						'right' => elgg_echo('Align Right')),
        'value' => $vars['entity']->alignposition,
    ));

    ?>
</div>

<div>
    <?php
    echo '<p>Which style of share buttons do you want to use?</p>';

    echo elgg_view('input/dropdown', array(
        'name' => 'params[buttonstyle]',
		'options_values' => array(
						'standard' => elgg_echo('Standard Buttons Style'),
						'small' => elgg_echo('Small Share Buttons Style'),
						'big' => elgg_echo('Big Share Buttons Style')),
        'value' => $vars['entity']->buttonstyle,
    ));
	
		$styleimg_url = elgg_get_site_url() . "/mod/addthis_share/_graphics/style.jpg";
		echo '<br /><br /><p><img src="'.$styleimg_url .'" alt="Button Styles" width="202" height="115" /></p>';

    ?>
</div>

<div>
    <?php
    echo '<h3>Smart Layers</h3>';
    echo '<p>Would you like to enable the follow option?</p>';

    echo elgg_view('input/dropdown', array(
        'name' => 'params[follow]',
		'options_values' => array(
						'yes' => elgg_echo('Yes'),
						'no' => elgg_echo('No')),
        'value' => $vars['entity']->follow,
    ));

    echo '<p>Would you like to enable the share option?</p>';

    echo elgg_view('input/dropdown', array(
        'name' => 'params[share]',
		'options_values' => array(
						'yes' => elgg_echo('Yes'),
						'no' => elgg_echo('No')),
        'value' => $vars['entity']->share,
    ));
     echo elgg_view('input/dropdown', array(
        'name' => 'params[shareposition]',
        'options_values' => array(
                        'left' => elgg_echo('Left'),
                        'right' => elgg_echo('Right')),
        'value' => $vars['entity']->shareposition,
    ));


     echo '<p>Would you like to enable the Whats next option?</p>';

    echo elgg_view('input/dropdown', array(
        'name' => 'params[next]',
		'options_values' => array(
						'yes' => elgg_echo('Yes'),
						'no' => elgg_echo('No')),
        'value' => $vars['entity']->next,
    ));

    echo '<p>Select a theme</p>';

    echo elgg_view('input/dropdown', array(
        'name' => 'params[theme]',
		'options_values' => array(
						'transparent' => elgg_echo('Transparent'),
						'light' => elgg_echo('Light'),
						'gray' => elgg_echo('Gray'),
						'dark' => elgg_echo('Dark')),
        'value' => $vars['entity']->theme,
    ));
    ?>


</div>

<div>
	<?php
	echo '<p>This plugin is a modified version of colourscript plugin</p>';
	?>
</div>	