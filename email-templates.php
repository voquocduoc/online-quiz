<?php
require_once('inc/init.inc.php');
if(isset($G_SESSION['userid'])) {
	if($G_SESSION['access_emailtemplates'] > 0) { 
 $g_vars['page']['title'] = $lngstr['page_title_emailtemplates'];
switch(readGetVar('action')) {
 case 'create':
 if($G_SESSION['access_emailtemplates'] > 1) { 
 include_once($DOCUMENT_PAGES.'email-templates-4.inc.php');
} else {
 gotoLocation('email-templates.php');
}
break;
case 'delete':
 if($G_SESSION['access_emailtemplates'] > 1) {
 $f_confirmed = readGetVar('confirmed'); 
 if($f_confirmed==1) {
 if(isset($_GET['etemplateid']) || isset($_POST['box_etemplates'])) { 
 include_once($DOCUMENT_PAGES.'email-templates-5.inc.php');
} else {
 gotoLocation('email-templates.php');
}
} else if($f_confirmed=='0') {
 gotoLocation('email-templates.php');
} else { 
 $i_confirm_header = $lngstr['page_etemplates_delete_etemplate'];
$i_confirm_request = $lngstr['qst_delete_etemplate'];
$i_confirm_url = 'email-templates.php?etemplateid='.(int)$_GET['etemplateid'].'&action=delete';
include_once($DOCUMENT_PAGES.'confirm.inc.php');
}
} else {
 gotoLocation('email-templates.php');
}
break;
case 'edit':
 $g_vars['page']['title'] = $lngstr['page_title_etemplates_edit'].$lngstr['item_separator'].$g_vars['page']['title'];
if(isset($_GET['etemplateid'])) {
 if(isset($_POST['bsubmit'])) {
 if($G_SESSION['access_emailtemplates'] > 1) {
 include_once($DOCUMENT_PAGES.'email-templates-3.inc.php');
} else {
 gotoLocation('email-templates.php');
}
} else if(isset($_POST['bcancel'])) {
 gotoLocation('email-templates.php');
} else {
 include_once($DOCUMENT_PAGES.'email-templates-2.inc.php');
}
}
break;
default:
 include_once($DOCUMENT_PAGES.'email-templates-1.inc.php');
}
} else { 
 $g_vars['page']['notifications'] = $lngstr['inf_cant_access_emailtemplates'];
include_once($DOCUMENT_PAGES.'home.inc.php');
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
?>
