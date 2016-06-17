<?php
$g_vars['page']['hide_cpanel'] = true;
if(!isset($G_SESSION['yt_teststop'])) {
	if($G_SESSION['yt_testtime'] > 0) { 
 $G_SESSION['yt_teststop'] = time() + $G_SESSION['yt_testtime'];
} else { 
 $G_SESSION['yt_teststop'] = 0;
}
}
 
if($G_SESSION['yt_state'] != TEST_STATE_QREVIEW) {
 $G_SESSION['yt_questionno_current'] = min($G_SESSION['yt_questionno'], $G_SESSION['yt_questioncount']);
}
 
if($G_SESSION['yt_teststop'] > 0) {
	$g_vars['page']['test_time']['use'] = true;
$i_testtime = readDiffTime(time(),$G_SESSION['yt_teststop']);
$g_vars['page']['test_time']['hours'] = $i_testtime['hours'] > 0 ? $i_testtime['hours'] : 0;
$g_vars['page']['test_time']['minutes'] = $i_testtime['minutes'] > 0 ? $i_testtime['minutes'] : 0;
$g_vars['page']['test_time']['seconds'] = $i_testtime['seconds'] > 0 ? $i_testtime['seconds'] : 0;
} else {
	$g_vars['page']['test_time']['use'] = false;
}
$g_vars['page']['questionindicator_hint'] = sprintf($lngstr['page_test']['questionindicator_hint'], $G_SESSION['yt_questionno_current'], $G_SESSION['yt_questioncount']);
$g_vars['page']['questionindicator'] = sprintf($lngstr['page_test']['questionindicator'], $G_SESSION['yt_questionno_current'], $G_SESSION['yt_questioncount']);
$g_vars['page']['testid'] = $G_SESSION['testid'];
$g_vars['page']['test_name'] = convertTextValue($G_SESSION['yt_name']);
$g_vars['page']['content_protection'] = $G_SESSION['yt_contentprotection'];
 
if(!isset($G_SESSION['questionid'])) { 
	$nQuestionNoReal = $G_SESSION['yt_questions'][$G_SESSION['yt_questionno_current']-1];
$G_SESSION['questionid'] = $G_SESSION['yt_questionids'][$nQuestionNoReal];  
	$G_SESSION['yt_questionstart'] = time();
} 
$g_vars['page']['has_feedback'] = ($G_SESSION['yt_state'] == TEST_STATE_QFEEDBACK);
readTestQuestion($G_SESSION['yt_questionno_current'], $G_SESSION['questionid']);
$G_SESSION['yt_page_hasfeedback'] = $g_vars['page']['has_feedback'];
if($g_vars['page']['errors_fatal'] && ($G_SESSION['yt_state'] != TEST_STATE_QFEEDBACK))
 unregisterTestData(); 
 
$g_vars['page']['variables']['yt_questionno'] = $G_SESSION['yt_questionno'];
$g_vars['page']['variables']['yt_questionno_current'] = $G_SESSION['yt_questionno_current'];
$g_vars['page']['variables']['yt_questioncount'] = $G_SESSION['yt_questioncount'];
$g_vars['page']['variables']['yt_state'] = $G_SESSION['yt_state']; 
$g_vars['page']['review']['mode'] = $G_SESSION['yt_canreview'];
if($G_SESSION['yt_canreview'] == IGT_TEST_REVIEW_ALLOWED) {
	for($nQuestionNo = 1; $nQuestionNo <= min($G_SESSION['yt_questionno'], $G_SESSION['yt_questioncount']); $nQuestionNo++) {
 $nQuestionNoReal = $G_SESSION['yt_questions'][$nQuestionNo - 1];
$nQuestionID = $G_SESSION['yt_questionids'][$nQuestionNoReal]; 
 $g_vars['page']['review']['question'][$nQuestionNo]['text_truncated'] = getTruncatedHTML(getRecordItem($srv_settings['table_prefix'].'questions', 'question_text', 'questionid='.$nQuestionID));
}
}
$g_smarty->assign('g_questionno', $G_SESSION['yt_questionno_current']);
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('test-question');
?>