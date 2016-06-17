<?php
require_once("inc/init.inc.php");
if(isset($G_SESSION['userid'])) {
	if($G_SESSION['access_config'] > 0) { 
 $g_vars['page']['title'] = $lngstr['page_title_config'];
switch(readGetVar('action')) {
 case 'section':
 switch(readGetVar('id')) {
 case 'ldap':
 include_once($DOCUMENT_ADDONS.'authorization/ldap/install.inc.php');
break;
}
break;
default:
 if(isset($_POST['bsubmit'])) {
 if($G_SESSION['access_config'] > 1) {
 include_once($DOCUMENT_PAGES."config-3.inc.php");
} else {
 gotoLocation('config.php'.getURLAddon('', array('action')));
}
} else {
 include_once($DOCUMENT_PAGES."config-1.inc.php");
}
}
} else { 
 $g_vars['page']['notifications'] = $lngstr['inf_cant_access_config'];
include_once($DOCUMENT_PAGES."home.inc.php");
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES."signin-1.inc.php");
}
?>
