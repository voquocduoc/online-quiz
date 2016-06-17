<?php
$f_review_questionno = (int)readGetVar('questionno');
if($f_review_questionno > $G_SESSION['yt_questionno'])
 $f_review_questionno = $G_SESSION['yt_questionno'];
if(($G_SESSION['yt_canreview'] == IGT_TEST_REVIEW_ALLOWED) && ($f_review_questionno > 0)) { 
	unset($G_SESSION['questionid']);
unset($G_SESSION['yt_questionstart']); 
	$G_SESSION['yt_questionno_current'] = $f_review_questionno; 
	if($f_review_questionno >= $G_SESSION['yt_questionno']) {
 if($G_SESSION['yt_questionno'] >= $G_SESSION['yt_questioncount']) {
 $G_SESSION['yt_state'] = TEST_STATE_QREVIEW;
} else {
 $G_SESSION['yt_state'] = TEST_STATE_QSHOW;
}
} else {
 $G_SESSION['yt_state'] = TEST_STATE_QREVIEW;
}
include_once($DOCUMENT_PAGES.'test-1.inc.php');
}
?>