<?php
require_once("inc/init.inc.php");
if(isset($G_SESSION['userid'])) {
	if($G_SESSION['access_subjects'] > 0) { 
 $g_vars['page']['title'] = $lngstr['page_title_subjects'];
switch(readGetVar('action')) {
 case 'create': 
 if($G_SESSION['access_subjects'] > 1) { 
 include_once($DOCUMENT_PAGES."subjects-4.inc.php");
} else {
 gotoLocation('subjects.php'.getURLAddon('', array('action')));
}
break;
case 'delete': 
 if($G_SESSION['access_subjects'] > 1) {
 $f_confirmed = readGetVar('confirmed'); 
 if($f_confirmed==1) {
 if(isset($_GET['subjectid']) || isset($_POST["box_subjects"])) { 
 include_once($DOCUMENT_PAGES."subjects-5.inc.php");
} else {
 gotoLocation('subjects.php');
}
} else if($f_confirmed=='0') {
 gotoLocation('subjects.php');
} else { 
 $i_confirm_header = $lngstr['page_subjects_delete_subject'];
$i_confirm_request = $lngstr['qst_delete_subject'];
$i_confirm_url = 'subjects.php?subjectid='.(int)$_GET['subjectid'].'&action=delete';
include_once($DOCUMENT_PAGES."confirm.inc.php");
}
} else {
 gotoLocation('subjects.php'.getURLAddon('', array('action', 'confirmed')));
}
break;
case 'edit': 
 $g_vars['page']['title'] = $lngstr['page_title_subjects_settings'].$lngstr['item_separator'].$g_vars['page']['title'];
if(isset($_GET['subjectid'])) {
 if(isset($_POST['bsubmit'])) {
 if($G_SESSION['access_subjects'] > 1) {
 include_once($DOCUMENT_PAGES."subjects-3.inc.php");
} else {
 gotoLocation('subjects.php'.getURLAddon('', array('action')));
}
} else if(isset($_POST['bcancel'])) {
 gotoLocation('subjects.php');
} else {
 include_once($DOCUMENT_PAGES."subjects-2.inc.php");
}
}
break;
default:
 include_once($DOCUMENT_PAGES."subjects-1.inc.php");
}
} else { 
 $g_vars['page']['notifications'] = $lngstr['inf_cant_access_subjects'];
include_once($DOCUMENT_PAGES."home.inc.php");
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES."signin-1.inc.php");
}
?>
