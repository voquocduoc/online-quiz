<?php
require_once('inc/init.inc.php');
if(isset($G_SESSION['userid'])) {
	if($G_SESSION['access_tests'] > 1) { 
 $g_vars['page']['title'] = $lngstr['page_title_test'];
switch(readGetVar('action')) {
 case 'instructions': 
 if(isset($G_SESSION['yt_state']) && ($G_SESSION['yt_state'] < TEST_STATE_TRESULTS)) {
 include_once($DOCUMENT_PAGES.'test-5.inc.php');
}
break;
case 'review': 
 if(isset($_GET['questionno']) && ($G_SESSION['yt_canreview'] > 0) && ($G_SESSION['yt_state'] < TEST_STATE_TRESULTS)) {
 include_once($DOCUMENT_PAGES.'test-review-question.inc.php');
}
break;
case 'finish': 
 if(isset($G_SESSION['testid']) && isset($G_SESSION['yt_state'])) {
 if($G_SESSION['yt_state'] < TEST_STATE_TRESULTS) {
 $f_confirmed = readGetVar('confirmed');
if($f_confirmed == 1) {
 include_once($DOCUMENT_PAGES.'test-finish.inc.php');
} else if($f_confirmed == '0') {
 gotoLocation('test.php'.getURLAddon('', array('action', 'confirmed')));
} else { 
 $i_confirm_header = $lngstr['page_test']['qst_finish_test_header'];
$i_confirm_request = $lngstr['page_test']['qst_finish_test'];
$i_confirm_url = 'test.php?action=finish'.getURLAddon('', array('action'));
include_once($DOCUMENT_PAGES.'confirm.inc.php');
}
} else {   
 }
}
break;
case 'results': 
 if(isset($G_SESSION['yt_state']) && ($G_SESSION['yt_state'] == TEST_STATE_TRESULTS)) {
 include_once($DOCUMENT_PAGES.'test-showresults.inc.php');
}
break;
default:
 if(!isset($G_SESSION['testid']) ||
 (isset($_GET['testid']) && ($_GET['testid'] != $G_SESSION['testid'])) ||
 (isset($G_SESSION['yt_state']) && (
 ($G_SESSION['yt_state']>=TEST_STATE_TRESULTS) ||
 ($G_SESSION['yt_state'] == TEST_STATE_TESTINTRO))
 )
 ) { 
 include_once($DOCUMENT_PAGES.'test-3.inc.php');
} else { 
 if(isset($_POST['breview']) && !empty($_POST['review_questionno'])) { 
 $i_questionno = (int)$_POST['review_questionno'];
gotoLocation('test.php'.getURLAddon('?action=review&questionno='.$i_questionno, array('action')));
} else if(isset($_POST['bsubmit']) || isset($_POST['bsubmit_prev']) || isset($_POST['bsubmit_next']) || isset($_POST['bsubmit_answer'])) {
 if($G_SESSION['yt_test_qsperpage'] != 1) { 
 include_once($DOCUMENT_PAGES.'test-7.inc.php');
} else { 
 include_once($DOCUMENT_PAGES.'test-2.inc.php');
}
} else {
 if($G_SESSION['yt_test_qsperpage'] != 1) { 
 include_once($DOCUMENT_PAGES.'test-6.inc.php');
} else { 
 include_once($DOCUMENT_PAGES.'test-1.inc.php');
}
}
}
break;
}
} else {
 $g_vars['page']['title'] = $lngstr['page_title_panel'];
$g_vars['page']['notifications'] = $lngstr['inf_cant_passtest'];
include_once($DOCUMENT_PAGES.'home.inc.php');
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
?>