<?php

require_once("../inc/init.inc.php");

$i_url = '/guide.php'.getURLAddon();
if(!empty($_GET['language']))
 $i_language = readGetVar('language');
 else $i_language = $srv_settings['language'];
if(($i_language != 'en') && ($i_language != 'de') && ($i_language != 'es'))
 $i_language = 'en';
$i_url = $i_language.''.$i_url;

gotoLocation($i_url);

?>