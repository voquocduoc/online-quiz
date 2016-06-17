<?php
require_once("inc/init.inc.php");
if(isset($G_SESSION['userid'])) {
	if($G_SESSION['access_groups'] > 0) { 
 $g_vars['page']['title'] = $lngstr['page_title_managegroups'];
switch(readGetVar('action')) {
 case 'create':
 if($G_SESSION['access_groups'] > 1) { 
 include_once($DOCUMENT_PAGES."groups-4.inc.php");
} else {
 gotoLocation('groups.php'.getURLAddon('', array('action')));
}
break;
case 'delete':
 if($G_SESSION['access_groups'] > 1) {
 $f_confirmed = readGetVar('confirmed'); 
 if($f_confirmed==1) {
 if(isset($_GET['groupid']) || isset($_POST["box_groups"])) { 
 include_once($DOCUMENT_PAGES."groups-5.inc.php");
} else {
 gotoLocation('groups.php');
}
} else if($f_confirmed=='0') {
 gotoLocation('groups.php');
} else { 
 $i_confirm_header = $lngstr['page_managegroups_delete_group'];
$i_confirm_request = $lngstr['qst_delete_group'];
$i_confirm_url = 'groups.php?groupid='.(int)$_GET['groupid'].'&action=delete';
include_once($DOCUMENT_PAGES."confirm.inc.php");
}
} else {
 gotoLocation('groups.php'.getURLAddon('', array('action')));
}
break;
case 'edit':
 $g_vars['page']['title'] = $lngstr['page_title_groups_settings'].$lngstr['item_separator'].$g_vars['page']['title'];
if(isset($_GET['groupid'])) {
 if(isset($_POST['bsubmit'])) {
 if($G_SESSION['access_groups'] > 1) {
 include_once($DOCUMENT_PAGES."groups-3.inc.php");
} else {
 gotoLocation('groups.php'.getURLAddon('', array('action')));
}
} else if(isset($_POST['bcancel'])) {
 gotoLocation('groups.php');
} else {
 include_once($DOCUMENT_PAGES."groups-2.inc.php");
}
}
break;
default:
 include_once($DOCUMENT_PAGES."groups-1.inc.php");
}
} else { 
 $g_vars['page']['notifications'] = $lngstr['inf_cant_access_groups'];
include_once($DOCUMENT_PAGES."home.inc.php");
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES."signin-1.inc.php");
}
?>
