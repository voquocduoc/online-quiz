<?php
$g_vars['page']['header'] = $lngstr['page_buycheckout']['title'];
$f_state = readGetVar('state');
eventOnBeforePageGeneration(array('page_name' => 'buy-state'));
switch($f_state) {
	case 'success':
 $g_vars['page']['notifications'] = $lngstr['page_buystate']['success'];
if(isset($G_SESSION['userid'])) {
 $g_vars['page']['title'] = $lngstr['page_title_panel'];
include_once($DOCUMENT_PAGES.'home.inc.php');
} else {
 $g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
break;
case 'fail':
 $g_vars['page']['errors'] = $lngstr['page_buystate']['fail'];
if(isset($G_SESSION['userid'])) {
 $g_vars['page']['title'] = $lngstr['page_title_panel'];
include_once($DOCUMENT_PAGES.'home.inc.php');
} else {
 $g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
break;
}
?>