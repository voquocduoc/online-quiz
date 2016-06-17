<?php
require_once('inc/init.inc.php');
$f_strLanguage = readGetVar('language');
if(!isset($lngstr['languages'][$f_strLanguage]))
 $f_strLanguage = $srv_settings['language'];
setCookieVar('current_language', $f_strLanguage);
$f_strGoTo = readGetVar('goto');
gotoLocationLocal($f_strGoTo);
?>