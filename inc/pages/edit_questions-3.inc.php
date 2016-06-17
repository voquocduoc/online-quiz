<?php
 
$f_subjectid = (int)readPostVar('subjectid');
$f_question_type = (int)readPostVar('question_type');
if($f_question_type < 0 || $f_question_type > QUESTION_TYPE_COUNT)
 $f_question_type = QUESTION_TYPE_MULTIPLECHOICE;
$f_question_text = readPostVar('question_text');
$f_question_text = $g_db->qstr($f_question_text, get_magic_quotes_gpc());
$f_answer_correct = readPostVar('answer_correct');
$f_answer_percents = readPostVar('answer_percents');
$f_answer_text = readPostVar('answer_text');
if(is_array($f_answer_text)) {
	foreach($f_answer_text as $key=>$val) {
 if($f_answer_text[$key] != '') {
 $f_answer_text[$key] = $g_db->qstr(IGT_USE_EDITOR_FOR_ANSWERS ? $f_answer_text[$key] : convertTextAreaHTML(true, $f_answer_text[$key]), get_magic_quotes_gpc());
}
}
}
$f_answer_feedback = array();
for($i = 1; $i <= count($f_answer_text); $i++)
 $f_answer_feedback[$i] = $g_db->qstr(IGT_USE_EDITOR_FOR_FEEDBACK ? readPostVar('answer_feedback_'.$i) : convertTextAreaHTML(true, readPostVar('answer_feedback_'.$i)), get_magic_quotes_gpc());
$f_question_points = (float)readPostVar('question_points');
$f_question_time_donotuse = (boolean)readPostVar('question_time_donotuse');
if($f_question_time_donotuse) {
	$f_question_time = 0;
} else {
	$f_question_time_hours = (int)readPostVar('question_time_hours');
$f_question_time_minutes = (int)readPostVar('question_time_minutes');
$f_question_time_seconds = (int)readPostVar('question_time_seconds');
$f_question_time = $f_question_time_seconds + $f_question_time_minutes * 60 + $f_question_time_hours * 3600;
if($f_question_time<0)
 $f_question_time = 0;
}
$f_question_shufflea = (int)readPostVar('question_shufflea');
$f_question_type2 = (int)(boolean)readPostVar('question_type2');
$f_questionid = (int)readGetVar('questionid');
switch($f_question_type) {
	case QUESTION_TYPE_FILLINTHEBLANK:
 $f_answer_feedback = array(1 => $g_db->qstr('', 0));
$f_answer_correct = array(1 => 1);
$f_answer_percents = array(1 => 100);
break;
}
  
 
include_once($DOCUMENT_PAGES.'edit_questions-3-int.inc.php');
 
$f_answercount = (int)readPostVar('answercount');
if(isset($_GET['resultid'])) {
	if(isset($_POST['bsubmit2'])) {
 gotoLocation('question-bank.php'.getURLAddon('?action=createq&question_type='.$f_question_type.'&subjectid='.$f_subjectid.'&answercount='.$f_answercount, array('action', 'questionid', 'question_type', 'subjectid', 'answercount')));
} else {
 gotoLocation('reports-manager.php'.getURLAddon('?action=viewq', array('action', 'questionid', 'question_type', 'subjectid', 'answercount')));
}
} else if(isset($_GET['testid'])) {
	$f_testid = (int)readGetVar('testid');
if(isset($_POST['bsubmit2'])) {
 gotoLocation('question-bank.php'.getURLAddon('?action=createq&question_type='.$f_question_type.'&subjectid='.$f_subjectid.'&answercount='.$f_answercount, array('action', 'questionid', 'question_type', 'subjectid', 'answercount')));
} else {
 gotoLocation('test-manager.php'.getURLAddon('?action=editt', array('action', 'questionid', 'question_type', 'subjectid', 'answercount')));
}
} else {
	if(isset($_POST['bsubmit2'])) {
 gotoLocation('question-bank.php'.getURLAddon('?action=createq&question_type='.$f_question_type.'&subjectid='.$f_subjectid.'&answercount='.$f_answercount, array('action', 'questionid', 'question_type', 'subjectid', 'answercount')));
} else {
 gotoLocation('question-bank.php'.getURLAddon('', array('action', 'questionid', 'question_type', 'subjectid', 'answercount')));
}
}
?>
