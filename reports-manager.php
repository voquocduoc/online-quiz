<?php
require_once('inc/init.inc.php');
if(isset($G_SESSION['userid'])) {
	if($G_SESSION['access_reportsmanager'] > 0) { 
 $g_vars['page']['title'] = $lngstr['page_title_results'];
switch(readGetVar('action')) {
 case 'viewq': 
 $g_vars['page']['title'] = $lngstr['page_title_results_questions'].$lngstr['item_separator'].$g_vars['page']['title'];
if(isset($_GET['resultid'])) {
 include_once($DOCUMENT_PAGES.'reports-manager-2.inc.php');
}
break;
case 'viewa': 
 $g_vars['page']['title'] = $lngstr['page_title_results_answers'].$lngstr['item_separator'].$g_vars['page']['title'];
if(isset($_GET['resultid']) && isset($_GET['answerid'])) {
 include_once($DOCUMENT_PAGES.'reports-manager-3.inc.php');
}
break;
case 'delete': 
 if($G_SESSION['access_reportsmanager'] > 2) { 
 $f_confirmed = readGetVar('confirmed');
if($f_confirmed==1) {
 if(isset($_GET['resultid']) || isset($_POST['box_results'])) { 
 include_once($DOCUMENT_PAGES.'reports-manager-4.inc.php');
} else {
 gotoLocation('reports-manager.php');
}
} else if($f_confirmed=='0') {
 gotoLocation('reports-manager.php');
} else { 
 $i_confirm_header = $lngstr['page_results_delete_record'];
$i_confirm_request = $lngstr['qst_delete_record'];
$i_confirm_url = 'reports-manager.php'.getURLAddon();
include_once($DOCUMENT_PAGES.'confirm.inc.php');
}
} else {
 gotoLocation('reports-manager.php'.getURLAddon('', array('action', 'resultid')));
}
break;
case 'setpoints': 
 if($G_SESSION['access_reportsmanager'] > 2) {
 if(isset($_GET['resultid']) && isset($_GET['answerid'])) {
 include_once($DOCUMENT_PAGES.'reports-manager-5.inc.php');
}
} else {
 gotoLocation('reports-manager.php'.getURLAddon('?action=viewa', array('action', 'resultid', 'answerid', 'set')));
}
break;
case 'attempts': 
 if($G_SESSION['access_reportsmanager'] > 2) {
 if(isset($_GET['testid']) && isset($_GET['userid'])) {
 include_once($DOCUMENT_PAGES.'reports-manager-6.inc.php');
}
} else {
 gotoLocation('reports-manager.php'.getURLAddon('?action=', array('action', 'testid', 'userid', 'set')));
}
break;
case 'filter': 
 if(!empty($_POST['bsetfilter'])) {
 setCookieVar('filter_reportsmanager_result_date', readPostVar('result_date', readGetVar('result_date')));
$f_result_datestart = readPostVar('result_datestart', readGetVar('result_datestart'));
if(!empty($f_result_datestart))
 $f_result_datestart = strtotime($f_result_datestart);
setCookieVar('filter_reportsmanager_result_datestart', $f_result_datestart);
$f_result_dateend = readPostVar('result_dateend', readGetVar('result_dateend'));
if(!empty($f_result_dateend))
 $f_result_dateend = strtotime($f_result_dateend);
setCookieVar('filter_reportsmanager_result_dateend', $f_result_dateend);
setCookieVar('filter_reportsmanager_userid', readPostVar('userid', readGetVar('userid')));
setCookieVar('filter_reportsmanager_testid', readPostVar('testid', readGetVar('testid')));
setCookieVar('filter_reportsmanager_user_lastname', readPostVar('user_lastname', readGetVar('user_lastname')));
setCookieVar('filter_reportsmanager_user_department', readPostVar('user_department', readGetVar('user_department')));
setCookieVar('filter_reportsmanager_subjectid', readPostVar('subjectid', readGetVar('subjectid')));
gotoLocation('reports-manager.php'.getURLAddon('?action=', array('action')));
} else {
 setCookieVar('filter_reportsmanager_result_date', 0);
setCookieVar('filter_reportsmanager_result_datestart', 0);
setCookieVar('filter_reportsmanager_result_dateend', 0);
setCookieVar('filter_reportsmanager_userid', '');
setCookieVar('filter_reportsmanager_testid', '');
setCookieVar('filter_reportsmanager_user_lastname', '');
setCookieVar('filter_reportsmanager_user_department', '');
setCookieVar('filter_reportsmanager_subjectid', '');
gotoLocation('reports-manager.php'.getURLAddon('?action=', array('action', 'userid', 'user_lastname', 'user_department', 'testid')));
}
break;
case 'exportcsv': 
 if($G_SESSION['access_reportsmanager'] > 1) {
 include_once($DOCUMENT_PAGES.'reports-manager-exportcsv.inc.php');
} else {
 gotoLocation('reports-manager.php'.getURLAddon('?action=', array('action')));
}
break;
case 'preview': 
 case 'print': 
 include_once($DOCUMENT_PAGES.'reports-manager-report-1.inc.php');
break;
default:
 include_once($DOCUMENT_PAGES.'reports-manager-1.inc.php');
}
} else { 
 $g_vars['page']['notifications'] = $lngstr['inf_cant_view_results'];
include_once($DOCUMENT_PAGES.'home.inc.php');
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
?>