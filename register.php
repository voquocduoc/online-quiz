<?php
require_once("inc/init.inc.php");
$g_vars['page']['title'] = $lngstr['page_title_register'];
if(getConfigItem(CONFIG_can_register)) {
	switch(readGetVar('action')) {
 case 'step2':
 if(isset($_POST['bsubmit'])) {
 include_once($DOCUMENT_PAGES."register-step-2-submit.inc.php");
} else {
 include_once($DOCUMENT_PAGES."register-step-2.inc.php");
}
break;
default: 
 if(isset($_POST['bsubmit'])) {
 include_once($DOCUMENT_PAGES."register-2.inc.php");
} else {
 include_once($DOCUMENT_PAGES."register-1.inc.php");
}
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
$g_vars['page']['errors'] = $lngstr['err_no_permissions_to_register'];
include_once($DOCUMENT_PAGES."signin-1.inc.php");
}
?>
