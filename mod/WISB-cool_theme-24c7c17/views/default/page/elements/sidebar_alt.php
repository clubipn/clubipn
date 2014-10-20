<?php


$homepage = "/dashboard";
$currentpage = $_SERVER['REQUEST_URI'];
if($homepage==$currentpage) {
echo "<strong><a href=\"../thanks\">Thanks</a></strong><br />
edit the sidebar for the dashboard in /mod/cool_theme/views/default/page/elements/sidebar_alt.php<br />
and enjoy";
}

?>