<?php
 
if(isset($G_SESSION['questionid'])) {
	if((isset($_POST['answer']) && isset($_POST['answer'][$G_SESSION['yt_questionno_current']])) || ($G_SESSION['yt_state'] == TEST_STATE_QFEEDBACK)) {
 $i_now = time();
if(!$G_SESSION['yt_timeforceout'] || !($G_SESSION['yt_teststop'] > 0) || !($G_SESSION['yt_teststop'] < $i_now)) {
 if($G_SESSION['yt_test_showqfeedback'] && $G_SESSION['yt_page_hasfeedback'] && ($G_SESSION['yt_state'] != TEST_STATE_QFEEDBACK)) { 
 checkTestAnswer($G_SESSION['yt_questionno_current'], $G_SESSION['questionid'], $_POST['answer'][$G_SESSION['yt_questionno_current']]); 
 $G_SESSION['yt_state'] = TEST_STATE_QFEEDBACK;
include_once($DOCUMENT_PAGES.'test-1.inc.php');
} else {
 if(!($G_SESSION['yt_test_showqfeedback'] && $G_SESSION['yt_page_hasfeedback'])) { 
 checkTestAnswer($G_SESSION['yt_questionno_current'], $G_SESSION['questionid'], $_POST['answer'][$G_SESSION['yt_questionno_current']]);
} 
 $G_SESSION['yt_state'] = TEST_STATE_QSHOW; 
 $bFinishThisTest = ($G_SESSION['yt_questionno'] > $G_SESSION['yt_questioncount']);  
 if($G_SESSION['yt_canreview'] == IGT_TEST_REVIEW_ALLOWED) {
 if(!$bFinishThisTest) {
 if($G_SESSION['yt_questionno_current'] >= $G_SESSION['yt_questionno']) {
 $G_SESSION['yt_questionno']++;
} else {
 $G_SESSION['yt_questionno_current']++;
if($G_SESSION['yt_questionno_current'] < $G_SESSION['yt_questionno'])
 $G_SESSION['yt_state'] = TEST_STATE_QREVIEW;
}
} 
 $bFinishThisTest = ($G_SESSION['yt_questionno'] > $G_SESSION['yt_questioncount']); 
 if($bFinishThisTest)
 $G_SESSION['yt_state'] = TEST_STATE_QREVIEW;  
 $bButtonSubmit = isset($_POST['bsubmit']);
$bFinishThisTest = $bFinishThisTest && $bButtonSubmit;
} else {
 if($G_SESSION['yt_other_repeatuntilcorrect'])
 $bIsAnswerCorrect = getRecordItem($srv_settings['table_prefix'].'results_answers', 'result_answer_iscorrect', 'result_answerid='.$G_SESSION['yt_questionno_current'].' AND resultid='.$G_SESSION['resultid'].' AND questionid='.$G_SESSION['questionid']);  
 if($G_SESSION['yt_other_repeatuntilcorrect'] && (($bIsAnswerCorrect == IGT_ANSWER_IS_INCORRECT) || ($bIsAnswerCorrect == IGT_ANSWER_IS_PARTIALLYCORRECT))) { 
 $G_SESSION['yt_questionno_current'] = $G_SESSION['yt_questionno'];
$G_SESSION['yt_state'] = TEST_STATE_QREVIEW;
} else { 
 $G_SESSION['yt_questionno']++; 
 $bFinishThisTest = ($G_SESSION['yt_questionno'] > $G_SESSION['yt_questioncount']);
}
} 
 unset($G_SESSION['questionid']);
unset($G_SESSION['yt_questionstart']); 
 if($bFinishThisTest) { 
 include_once($DOCUMENT_PAGES.'test-saveresults.inc.php'); 
 gotoLocation('test.php?action=results');
} else { 
 gotoLocation('test.php');
}
}
} else { 
 include_once($DOCUMENT_PAGES.'test-saveresults.inc.php'); 
 gotoLocation('test.php?action=results');
}
} else {
 $g_vars['page']['errors'] = $lngstr['err_no_answer_given'];
include_once($DOCUMENT_PAGES.'test-1.inc.php');
}
} else { 
	include_once($DOCUMENT_PAGES.'test-1.inc.php');
}
?>