<?php 
function initATest ($testid, $existing_resultid = 0, $existing_answered_questionids = array()) {
global $g_db, $G_SESSION, $lngstr, $srv_settings, $g_vars;
$i_now = time();
  
 $i_rSet1 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."tests WHERE testid=".$testid." AND test_enabled=1 AND test_datestart<=".$i_now." AND test_dateend>".$i_now, 1);
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 if(!$i_rSet1->EOF) { 
 $i_isallowed = $i_rSet1->fields['test_forall'];
if(!$i_isallowed)
 $i_isallowed = getRecordCount($srv_settings['table_prefix'].'groups_users, '.$srv_settings['table_prefix'].'groups_tests', "(".$srv_settings['table_prefix']."groups_tests.testid=".$i_rSet1->fields['testid']." AND ".$srv_settings['table_prefix']."groups_tests.groupid=".$srv_settings['table_prefix']."groups_users.groupid AND ".$srv_settings['table_prefix']."groups_users.userid=".$G_SESSION['userid'].")") > 0;  
 if($i_isallowed)
 $i_isallowed = ($i_rSet1->fields['test_price'] <= 0) || (getRecordCount($srv_settings['table_prefix'].'tests_own', 'testid='.$testid.' AND userid='.$G_SESSION['userid']) > 0); 
  
 if($i_isallowed) {  
 $yt_questionids = array();
$i_rSet2 = $g_db->Execute("SELECT ".$srv_settings['table_prefix']."tests_questions.questionid, ".$srv_settings['table_prefix']."tests_questions.test_sectionid, ".$srv_settings['table_prefix']."questions.subjectid, ".$srv_settings['table_prefix']."questions.question_points, ".$srv_settings['table_prefix']."questions.question_type FROM ".$srv_settings['table_prefix']."tests_questions, ".$srv_settings['table_prefix']."questions WHERE testid=".$testid." AND ".$srv_settings['table_prefix']."tests_questions.questionid=".$srv_settings['table_prefix']."questions.questionid ORDER BY ".$srv_settings['table_prefix']."tests_questions.test_questionid");
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 $i_questioncounter = 0; 
 $yt_pointsmax = 0; 
  
 while(!$i_rSet2->EOF) {
  
 if($i_rSet2->fields['question_type'] != QUESTION_TYPE_RANDOM) {
  
  
 $yt_questionids[$i_questioncounter + 1] = $i_rSet2->fields['questionid'];
$yt_pointsmax += $i_rSet2->fields['question_points'];
$i_questioncounter++;
  
  
  
 } else {  
 $i_questioncount_by_subjectid = getRecordCount($srv_settings['table_prefix'].'questions', "subjectid=".$i_rSet2->fields['subjectid']." AND question_type NOT IN (".QUESTION_TYPE_RANDOM.")".($yt_questionids ? " AND questionid NOT IN (".implode(',', $yt_questionids).")" : ""));
if($i_questioncount_by_subjectid > 0) { 
 srand((double) microtime() * 10000000);
$i_rSet3 = $g_db->SelectLimit("SELECT questionid, question_points FROM ".$srv_settings['table_prefix']."questions WHERE subjectid=".$i_rSet2->fields['subjectid']." AND question_type NOT IN (".QUESTION_TYPE_RANDOM.")".($yt_questionids ? " AND questionid NOT IN (".implode(',', $yt_questionids).")" : ""), 1, rand(0, $i_questioncount_by_subjectid - 1));
if(!$i_rSet3) {
 showDBError(__FILE__, 3);
} else {
 if(!$i_rSet3->EOF) {
 $yt_questionids[$i_questioncounter + 1] = $i_rSet3->fields['questionid'];
$yt_pointsmax += $i_rSet3->fields['question_points'];
$i_questioncounter++;
}
$i_rSet3->Close();
}
} else {
 showError(__FILE__, $lngstr['err_no_questions_left_in_bank']);
} 
  
 }
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
$yt_questioncount = $i_questioncounter; 
 if($yt_questioncount>0) {  
 for($i=0;$i<$yt_questioncount;$i++)
 $yt_questions[$i] = $i + 1; 
 if($i_rSet1->fields['test_shuffleq']) { 
 $yt_questions_2 = array();
if(!empty($existing_answered_questionids)) {
 foreach($existing_answered_questionids as $key=>$val) {
 foreach($yt_questionids as $key2=>$val2) {
 if($val2 == $val) {
 $i_questionno = $key2;
break;
}
}
$yt_questions_2[$key] = $i_questionno;
unset($yt_questions[$i_questionno - 1]);
}
}
  
 $yt_questions = array_merge($yt_questions_2, getShuffledArray($yt_questions));
  
 }
$yt_shufflea = (boolean)$i_rSet1->fields['test_shufflea']; 
 $i_testtime = (int)$i_rSet1->fields['test_time'];
$yt_test_timeforceout = (boolean)$i_rSet1->fields['test_timeforceout'];
if($i_testtime<0) $i_testtime = 0;
$G_SESSION['testid'] = $testid;
if($existing_resultid > 0) {
 $G_SESSION['resultid'] = $existing_resultid;
} else { 
 if($g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."results (testid,userid,result_datestart) VALUES (".$testid.",".$G_SESSION['userid'].",".$i_now.")")===false)
 showDBError(__FILE__, 5);
$G_SESSION['resultid'] = $g_db->Insert_ID($srv_settings['table_prefix'].'results', 'resultid');
}
$G_SESSION['yt_name'] = $i_rSet1->fields['test_name'];
$G_SESSION['yt_result_etemplateid'] = $i_rSet1->fields['result_etemplateid'];
if($i_rSet1->fields['result_etemplateid'] > 0) {
 $G_SESSION['yt_result_email'] = trim($i_rSet1->fields['test_result_email']);
$G_SESSION['yt_result_emailtouser'] = $i_rSet1->fields['test_result_emailtouser'];
}
$G_SESSION['yt_teststart'] = $i_now;
$G_SESSION['yt_testtime'] = $i_testtime;
$G_SESSION['yt_timeforceout'] = $yt_test_timeforceout;
$G_SESSION['yt_attempts'] = $i_rSet1->fields['test_attempts'];
$G_SESSION['yt_pointsmax'] = $yt_pointsmax;
$G_SESSION['yt_questioncount'] = $yt_questioncount;
$G_SESSION['yt_questions'] = $yt_questions;
$G_SESSION['yt_questionids'] = $yt_questionids;
$G_SESSION['yt_answers'] = array();
$G_SESSION['yt_shufflea'] = $yt_shufflea;
$G_SESSION['yt_test_qsperpage'] = $i_rSet1->fields['test_qsperpage'];
$G_SESSION['yt_test_showqfeedback'] = (boolean)$i_rSet1->fields['test_showqfeedback'];
$G_SESSION['yt_result_showanswers'] = (boolean)$i_rSet1->fields['test_result_showanswers'];
$G_SESSION['yt_result_showpoints'] = (boolean)$i_rSet1->fields['test_result_showpoints'];
$G_SESSION['yt_result_showgrade'] = (boolean)$i_rSet1->fields['test_result_showgrade'];
$G_SESSION['yt_result_showgradefeedback'] = (boolean)$i_rSet1->fields['test_result_showgradefeedback'];
$G_SESSION['yt_result_showhtml'] = (boolean)$i_rSet1->fields['test_result_showhtml'] && ($i_rSet1->fields['rtemplateid'] > 0);
$G_SESSION['yt_result_showpdf'] = (boolean)$i_rSet1->fields['test_result_showpdf'] && ($i_rSet1->fields['rtemplateid'] > 0);
$G_SESSION['yt_result_rtemplateid'] = $i_rSet1->fields['test_result_rtemplateid'];
$G_SESSION['yt_reportgradecondition'] = $i_rSet1->fields['test_reportgradecondition'];
$G_SESSION['yt_gscaleid'] = (int)$i_rSet1->fields['gscaleid'];
$G_SESSION['yt_prevtestid'] = (int)$i_rSet1->fields['test_prevtestid'];
$G_SESSION['yt_nexttestid'] = (int)$i_rSet1->fields['test_nexttestid'];
$G_SESSION['yt_other_repeatuntilcorrect'] = (boolean)$i_rSet1->fields['test_other_repeatuntilcorrect'];
$G_SESSION['yt_contentprotection'] = (int)$i_rSet1->fields['test_contentprotection'];
$G_SESSION['yt_canreview'] = (int)$i_rSet1->fields['test_canreview'];
$G_SESSION['yt_subjects'] = array(); 
 $G_SESSION['yt_questionno'] = 1;
$G_SESSION['yt_got_answers'] = 0;
$G_SESSION['yt_got_points'] = 0;
$G_SESSION['yt_points_pending'] = 0;
  
   
 if(!empty($i_rSet1->fields['test_instructions'])) {
 $G_SESSION['yt_state'] = TEST_STATE_TESTINTRO;
} else {
 $G_SESSION['yt_state'] = TEST_STATE_QSHOW;
} 
 eventOnBeforeTestStart();
return true;
} else { 
 $g_vars['page']['errors'] = $lngstr['err_no_questions'];
return false;
}
} else {
 $g_vars['page']['notifications'] = $lngstr['inf_cant_passtest'];
return false;
}
} else {
 $g_vars['page']['errors'] = $lngstr['err_no_tests'];
return false;
}
$i_rSet1->Close();
}
}
$f_testid = (int)readGetVar('testid');
$f_pending_test_result_ids = readCookieVar('pending_test_result_ids');
$f_pending_test_ids = readCookieVar('pending_test_ids');
if($f_pending_test_result_ids > 0 && (($f_pending_test_ids == $f_testid) || ($f_testid == 0))) {  
 $i_rSet1 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."results WHERE resultid=".$f_pending_test_result_ids." AND userid=".$G_SESSION['userid']." AND gscale_gradeid=0", 1);
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 if(!$i_rSet1->EOF) {
 $i_answered_questionids = array();
$i_teststart = $i_rSet1->fields['result_datestart'];
$i_got_answers = 0;
$i_got_points = 0;
$i_points_pending = 0;
$i_rSet2 = $g_db->Execute("SELECT questionid, result_answer_points, result_answer_iscorrect FROM ".$srv_settings['table_prefix']."results_answers WHERE resultid=".$f_pending_test_result_ids);
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 while(!$i_rSet2->EOF) {
 array_push($i_answered_questionids, $i_rSet2->fields['questionid']);
$i_got_points += $i_rSet2->fields['result_answer_points'];
if($i_rSet2->fields['result_answer_iscorrect'] == IGT_ANSWER_IS_CORRECT) { 
 $i_got_answers++;
} else if($i_rSet2->fields['result_answer_iscorrect'] == IGT_ANSWER_IS_UNDEFINED) { 
 $i_rSet3 = $g_db->SelectLimit("SELECT question_points FROM ".$srv_settings['table_prefix']."questions WHERE questionid=".$i_rSet2->fields['questionid'], 1);
if(!$i_rSet3) {
 showDBError(__FILE__, 3);
} else {
 if(!$i_rSet3->EOF) {
 $i_points_pending += $i_rSet2->fields['question_points'];
}
$i_rSet3->Close();
}
}
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
}
$i_rSet1->Close();
} 
 if(isset($i_answered_questionids)) {
 if(initATest($f_pending_test_ids, $f_pending_test_result_ids, $i_answered_questionids)) { 
 $G_SESSION['yt_teststart'] = $i_teststart;
if($G_SESSION['yt_testtime'] > 0) { 
 $G_SESSION['yt_teststop'] = $G_SESSION['yt_teststart'] + $G_SESSION['yt_testtime'];
}
$G_SESSION['yt_questionno'] = count($i_answered_questionids) + 1;
$G_SESSION['yt_got_answers'] = $i_got_answers;
$G_SESSION['yt_got_points'] = $i_got_points;
$G_SESSION['yt_points_pending'] = $i_points_pending; 
 $G_SESSION['yt_state'] = TEST_STATE_QSHOW;
gotoLocation('test.php');
} else {
 setCookieVar('pending_test_ids', '');
setCookieVar('pending_test_result_ids', '');
include_once($DOCUMENT_PAGES.'home.inc.php');
}
exit;
}
}
 
unregisterTestData(); 
if($f_testid) {
 if(initATest($f_testid)) { 
 setCookieVar('pending_test_ids', (string)$G_SESSION['testid']);
setCookieVar('pending_test_result_ids', (string)$G_SESSION['resultid']); 
 if($G_SESSION['yt_state'] == TEST_STATE_TESTINTRO) {
 gotoLocation('test.php?action=instructions&testid='.$f_testid);
} else {
 gotoLocation('test.php');
}
} else {
 include_once($DOCUMENT_PAGES.'home.inc.php');
}
} else {
 $g_vars['page']['errors'] = $lngstr['err_no_test_selected'];
include_once($DOCUMENT_PAGES.'home.inc.php');
}
?>
