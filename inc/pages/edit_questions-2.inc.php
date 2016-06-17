<?php
$g_vars['page']['location'] = array('question_bank', 'question_bank', 'edit_question');
$i_answers_editor = IGT_USE_EDITOR_FOR_ANSWERS ? $G_SESSION['config_editortype'] : 0;
$i_feedback_editor = IGT_USE_EDITOR_FOR_FEEDBACK ? $G_SESSION['config_editortype'] : 0;
$i_editor_boxes = array('question_text');
 initTextEditor($G_SESSION['config_editortype'], $i_editor_boxes);
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_testid = (int)readGetVar('testid');
$f_questionid = (int)readGetVar('questionid');
$f_answercount = (int)readGetVar('answercount');
$f_question_type = readGetVar('question_type');
if($f_testid) {
	$g_vars['page']['selected_section'] = 'testmanager';
$g_vars['page']['selected_tab'] = 'editquestions-2';
} else {
	$g_vars['page']['selected_section'] = 'questionbank';
$g_vars['page']['selected_tab'] = 'editquestions-2';
}
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_edit_question'].'</h2>';
writeErrorsWarningsBar(); 
$i_rSet1 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."questions WHERE questionid=".$f_questionid);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) { 
 if(!is_numeric($f_question_type) || $f_question_type < 0 || $f_question_type > QUESTION_TYPE_COUNT)
 $f_question_type = $i_rSet1->fields['question_type'];
echo '<p><form method=post action="question-bank.php'.getURLAddon().'" onsubmit="return submitForm();">';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
$i_rowno = 0;
writeTR2($lngstr['page_editquestion_type'], getSelectElement('question_type', $f_question_type, $m_question_types, ' onchange="updateQuestion();"'));
   
 $f_subjectid = isset($_GET['subjectid']) ? (int)readGetVar('subjectid') : $i_rSet1->fields['subjectid'];
   
 $i_subjects = array();
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."subjects");
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 while(!$i_rSet2->EOF) {
 $i_subjects[$i_rSet2->fields['subjectid']] = $i_rSet2->fields['subject_name'];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
writeTR2($lngstr['page_editquestion_subjectid'], getSelectElement('subjectid', $f_subjectid, $i_subjects)); 
 $i = 0;
$i_rSet3 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."answers WHERE questionid=$f_questionid ORDER BY answerid");
if(!$i_rSet1) {
 showDBError(__FILE__, 3);
} else {
 $i_answercount = (int)$i_rSet3->RecordCount();
$i_answercount_nonempty = 0;
if($f_answercount > 0)
 $i_answercount_nonempty = min($i_answercount, $f_answercount);
else $i_answercount_nonempty = $i_answercount;
switch ($f_question_type) {
 case QUESTION_TYPE_MULTIPLECHOICE:
 case QUESTION_TYPE_MULTIPLEANSWER: 
 if($f_answercount <= 0 && $i_answercount > 0)
 $f_answercount = $i_answercount; 
 $m_answercount_items = array(0 => '');
for($i=2; $i <= MAX_ANSWER_COUNT; $i++)
 $m_answercount_items[$i] = $i;
writeTR2($lngstr['page_editquestion_answer_count'], getSelectElement('answercount', $f_answercount, $m_answercount_items, ' onchange="updateQuestion();"')); 
 if($f_answercount <= 0 && $i_answercount <= 0)
 $f_answercount = DEFAULT_ANSWER_COUNT; 
 writeTR2($lngstr['page_editquestion_question_text'], getTextEditor($G_SESSION['config_editortype'], 'question_text', !empty($i_rSet1->fields['question_text']) ? $i_rSet1->fields['question_text'] : $lngstr['page_editquestion_emptyquestion'])); 
 $i = 1;
while(!$i_rSet3->EOF && $i <= $i_answercount_nonempty) {
 writeTR2(sprintf($lngstr['label_choice_no'], $i), '<table cellpadding=0 cellspacing=1 border=0 width="100%"><tr vAlign=top><td width="100%">'.getTextEditor($i_answers_editor, 'answer_text['.$i.']', $i_rSet3->fields['answer_text'], 3).'</td><td vAlign=middle width=150><nobr>'.getCheckbox('answer_correct['.$i.']', $i_rSet3->fields['answer_correct'], $lngstr['label_accept_as_correct'], ' onclick="changeChoicePercents(this, '.$i.')"').'</nobr><br><nobr>'.getInputElement('answer_percents['.$i.']', $i_rSet3->fields['answer_percents'], 3).' '.$lngstr['label_answer_percents'].'</nobr></td></tr></table>');
$i_rowno++;
writeTR2(sprintf($lngstr['label_answer_feedback_no'], $i), getTextEditor($i_feedback_editor, 'answer_feedback_'.$i, $i_rSet3->fields['answer_feedback'], 3));
$i_rSet3->MoveNext();
$i++;
}
for($i = $i_answercount_nonempty + 1; $i <= $f_answercount; $i++) {
 writeTR2(sprintf($lngstr['label_choice_no'], $i), '<table cellpadding=0 cellspacing=1 border=0 width="100%"><tr vAlign=top><td width="100%">'.getTextEditor($i_answers_editor, 'answer_text['.$i.']', '', 3).'</td><td vAlign=middle width=150><nobr>'.getCheckbox('answer_correct['.$i.']', 0, $lngstr['label_accept_as_correct'], ' onclick="changeChoicePercents(this, '.$i.')"').'</nobr><br><nobr>'.getInputElement('answer_percents['.$i.']', '0', 3).' '.$lngstr['label_answer_percents'].'</nobr></td></tr></table>');
$i_rowno++;
writeTR2(sprintf($lngstr['label_answer_feedback_no'], $i), getTextEditor($i_feedback_editor, 'answer_feedback_'.$i, '', 3));
}
writeTR2($lngstr['page_editquestion']['shuffle_answers'], getSelectElement('question_shufflea', $i_rSet1->fields['question_shufflea'], $lngstr['page_editquestion']['shuffle_answers_items']));
if($f_question_type == QUESTION_TYPE_MULTIPLEANSWER)
 writeTR2($lngstr['page_editquestion']['advanced_settings'], getCheckbox('question_type2', $i_rSet1->fields['question_type2'], $lngstr['page_editquestion']['allow_partial_answers']));
break;
case QUESTION_TYPE_TRUEFALSE: 
 writeTR2($lngstr['page_editquestion_answer_count'], '2'); 
 writeTR2($lngstr['page_editquestion_question_text'], getTextEditor($G_SESSION['config_editortype'], 'question_text', !empty($i_rSet1->fields['question_text']) ? $i_rSet1->fields['question_text'] : $lngstr['page_editquestion_emptyquestion'])); 
 $i = 1;
$i_answer_text = $lngstr['label_atype_truefalse_true'];
$i_answer_feedback = '';
$i_answer_correct = false;
$i_answer_percents = 0;
if(!$i_rSet3->EOF) {
 $i_answer_text = $i_rSet3->fields['answer_text'];
$i_answer_feedback = $i_rSet3->fields['answer_feedback'];
$i_answer_correct = $i_rSet3->fields['answer_correct'];
$i_answer_percents = $i_rSet3->fields['answer_percents'];
$i_rSet3->MoveNext();
}
writeTR2(sprintf($lngstr['label_choice_no'], $i), '<table cellpadding=0 cellspacing=1 border=0 width="100%"><tr vAlign=top><td width="100%">'.getTextEditor($i_answers_editor, 'answer_text['.$i.']', $i_answer_text, 3).'</td><td vAlign=middle width=150><nobr>'.getCheckbox('answer_correct['.$i.']', $i_answer_correct, $lngstr['label_accept_as_correct'], ' onclick="changeChoicePercents(this, '.$i.')"').'</nobr><br><nobr>'.getInputElement('answer_percents['.$i.']', $i_answer_percents, 3).' '.$lngstr['label_answer_percents'].'</nobr></td></tr></table>');
$i_rowno++;
writeTR2(sprintf($lngstr['label_answer_feedback_no'], $i), getTextEditor($i_feedback_editor, 'answer_feedback_'.$i, $i_answer_feedback, 3));
$i = 2;
$i_answer_text = $lngstr['label_atype_truefalse_false'];
$i_answer_feedback = '';
$i_answer_correct = false;
$i_answer_percents = 0;
if(!$i_rSet3->EOF) {
 $i_answer_text = $i_rSet3->fields['answer_text'];
$i_answer_feedback = $i_rSet3->fields['answer_feedback'];
$i_answer_correct = $i_rSet3->fields['answer_correct'];
$i_answer_percents = $i_rSet3->fields['answer_percents'];
}
writeTR2(sprintf($lngstr['label_choice_no'], $i), '<table cellpadding=0 cellspacing=1 border=0 width="100%"><tr vAlign=top><td width="100%">'.getTextEditor($i_answers_editor, 'answer_text['.$i.']', $i_answer_text, 3).'</td><td vAlign=middle width=150><nobr>'.getCheckbox('answer_correct['.$i.']', $i_answer_correct, $lngstr['label_accept_as_correct'], ' onclick="changeChoicePercents(this, '.$i.')"').'</nobr><br><nobr>'.getInputElement('answer_percents['.$i.']', $i_answer_percents, 3).' '.$lngstr['label_answer_percents'].'</nobr></td></tr></table>');
$i_rowno++;
writeTR2(sprintf($lngstr['label_answer_feedback_no'], $i), getTextEditor($i_feedback_editor, 'answer_feedback_'.$i, $i_answer_feedback, 3));
break;
case QUESTION_TYPE_FILLINTHEBLANK: 
 writeTR2($lngstr['page_editquestion_answer_count'], '1'); 
 writeTR2($lngstr['page_editquestion_question_text'], getTextEditor($G_SESSION['config_editortype'], 'question_text', !empty($i_rSet1->fields['question_text']) ? $i_rSet1->fields['question_text'] : $lngstr['page_editquestion_emptyquestion'])); 
 $i = 1;
$i_answer_text = '';
if(!$i_rSet3->EOF)
 $i_answer_text = $i_rSet3->fields['answer_text'];
writeTR2(sprintf($lngstr['label_answer_text'], $i), getTextEditor(0, 'answer_text['.$i.']', $i_answer_text, 3));
break;
case QUESTION_TYPE_ESSAY: 
 writeTR2($lngstr['page_editquestion_answer_count'], $lngstr['label_notapplicable']); 
 writeTR2($lngstr['page_editquestion_question_text'], getTextEditor($G_SESSION['config_editortype'], 'question_text', !empty($i_rSet1->fields['question_text']) ? $i_rSet1->fields['question_text'] : $lngstr['page_editquestion_emptyquestion'])); 
 break;
case QUESTION_TYPE_RANDOM:  
 writeTR2($lngstr['page_editquestion_question_name'], getInputElement('question_text', !empty($i_rSet1->fields['question_text']) ? $i_rSet1->fields['question_text'] : $lngstr['label_atype_random'].' ('.$i_subjects[$f_subjectid].')'));
break;
}
$i_rSet3->Close();
}
if($f_question_type<>QUESTION_TYPE_RANDOM) {
 writeTR2($lngstr['page_editquestion_points'], getInputElement('question_points', $i_rSet1->fields['question_points'], 3));
} 
 echo '</table>'; 
 echo '<p class=center><input class=btn type=submit name=bsubmit value=" '.$lngstr['button_update'].' "> <input class=btn type=submit name=bsubmit2 value=" '.$lngstr['button_update_and_create_new_question'].' "> <input class=btn type=submit name=bcancel value=" '.$lngstr['button_cancel'].' "></form>';
echo '<script language=JavaScript type="text/javascript">
function updateQuestion() {
ctlQuestionType = document.getElementById("question_type");
nQuestionType = ctlQuestionType ? document.getElementById("question_type").options[document.getElementById("question_type").selectedIndex].value : "";
ctlSubjectID = document.getElementById("subjectid");
nSubjectID = ctlSubjectID ? ctlSubjectID.options[ctlSubjectID.selectedIndex].value : "";
ctlAnswerCount = document.getElementById("answercount");
nAnswerCount = ctlAnswerCount ? ctlAnswerCount.options[ctlAnswerCount.selectedIndex].value : "";
window.open("question-bank.php'.getURLAddon('', array('question_type', 'subjectid', 'answercount')).'&question_type="+nQuestionType+"&subjectid="+nSubjectID+"&answercount="+nAnswerCount,"_top");
}
</script>';
}
$i_rSet1->Close();
}
displayTemplate('_footer');
?>
