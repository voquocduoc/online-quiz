<?php
$g_vars['page']['title'] = $lngstr['page_getfile_template_html']['title'];
$f_resultid = (int)readGetVar('resultid');
if($f_resultid > 0) {
	$g_vars['page']['content'] = getAdvancedReport($f_resultid);
if($g_vars['page']['content']) {
 $g_smarty->assign('g_vars', $g_vars);
displayTemplate('getfile-template-html');
}
}
function getTestResultSubjectsData($resultid) {
global $g_db, $G_SESSION, $srv_settings;
$arrResult = array();
$i_rSet1 = $g_db->Execute("SELECT questionid, result_answer_points, result_answer_iscorrect FROM ".$srv_settings['table_prefix']."results_answers WHERE resultid=".$resultid);
if(!$i_rSet1) {
 showDBError('getTestResultSubjectsData', 1);
} else {
 while(!$i_rSet1->EOF) {
 $arrQuestion = getRecordItems($srv_settings['table_prefix'].'questions', array('subjectid', 'question_points'), 'questionid='.$i_rSet1->fields['questionid']);
if(!isset($arrResult[$arrQuestion['subjectid']])) {
 $arrResult[$arrQuestion['subjectid']]['got_answers'] = 0;
$arrResult[$arrQuestion['subjectid']]['total_answers'] = 0;
$arrResult[$arrQuestion['subjectid']]['got_points'] = 0;
$arrResult[$arrQuestion['subjectid']]['total_points'] = 0;
}
$arrResult[$arrQuestion['subjectid']]['got_answers'] += ($i_rSet1->fields['result_answer_iscorrect'] == IGT_ANSWER_IS_CORRECT) ? 1 : 0;
$arrResult[$arrQuestion['subjectid']]['total_answers'] += 1;
$arrResult[$arrQuestion['subjectid']]['got_points'] += $i_rSet1->fields['result_answer_points'];
$arrResult[$arrQuestion['subjectid']]['total_points'] += $arrQuestion['question_points'];
$i_rSet1->MoveNext();
}
$i_rSet1->Close();
}
return $arrResult;
}
function getAdvancedReport($resultid) {
global $g_db, $G_SESSION, $lngstr, $srv_settings, $i_rSet2, $i_rSet3, $i_rSet4, $i_rSet5, $i_rSet6;
$i_result = false; 
	$i_isok = true;  
	if($i_isok)
 $i_isok = ($i_rSet2 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."results WHERE resultid=".$resultid, 1));
if($i_isok)
 $i_isok = (!$i_rSet2->EOF); 
	if($i_isok)
 $i_isok = ($i_rSet3 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."tests WHERE testid=".$i_rSet2->fields['testid'], 1));
if($i_isok)
 $i_isok = (!$i_rSet3->EOF);
if($i_isok)
 $i_isok = ($i_rSet3->fields['rtemplateid'] > 0) && (($i_rSet3->fields['test_reportgradecondition'] == 0) || ($i_rSet3->fields['test_reportgradecondition'] >= $i_rSet2->fields['gscale_gradeid'])); 
	if($i_isok)
 $i_isok = ($i_rSet6 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."users WHERE userid=".$i_rSet2->fields['userid'], 1));
if($i_isok)
 $i_isok = (!$i_rSet6->EOF); 
	$i_result_detailed_1_items = array();
$i_result_detailed_2_items = array();
$i_result_detailed_3_items = array();
$i_result_detailed_4_items = array();
if($i_isok)
 $i_isok = ($i_rSet7 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."results_answers, ".$srv_settings['table_prefix']."questions WHERE resultid=".$resultid." AND ".$srv_settings['table_prefix']."results_answers.questionid=".$srv_settings['table_prefix']."questions.questionid ORDER BY result_answerid"));
if($i_isok) { 
 $i_questionno = 0;
while(!$i_rSet7->EOF) {
 $i_questionno++; 
 $i_answers = array();
$i_rSet5 = $g_db->Execute("SELECT answer_text, answer_correct FROM ".$srv_settings['table_prefix']."answers WHERE questionid=".$i_rSet7->fields['questionid']." ORDER BY answerid");
if(!$i_rSet5) {
 showDBError(__FILE__, 5);
} else {
 $i_answerno = 1;
while(!$i_rSet5->EOF) {
 $i_answers[$i_answerno] = $i_rSet5->fields['answer_text'];
$i_answers_correct[$i_answerno] = $i_rSet5->fields['answer_correct'];
$i_answerno++;
$i_rSet5->MoveNext();
}
$i_rSet5->Close();
} 
 $i_detailed_correct = ($i_rSet7->fields['result_answer_iscorrect'] == IGT_ANSWER_IS_CORRECT); 
 $i_result_detailed_3_items[$i_questionno] = $i_questionno.'. '.getTruncatedHTML($i_rSet7->fields['question_text'], 0); 
 $i_result_detailed_1_items[$i_questionno] = $i_result_detailed_3_items[$i_questionno].'<br />';
$i_result_detailed_1_items[$i_questionno] .= $lngstr['email_answer_iscorrect'].($i_rSet7->fields['result_answer_iscorrect']==IGT_ANSWER_IS_UNDEFINED ? $lngstr['label_undefined'] : ($i_rSet7->fields['result_answer_iscorrect']==IGT_ANSWER_IS_CORRECT ? $lngstr['label_yes'] : ($i_rSet7->fields['result_answer_iscorrect']==IGT_ANSWER_IS_PARTIALLYCORRECT ? $lngstr['label_partially'] : $lngstr['label_no']))).'<br />';
$i_result_detailed_1_items[$i_questionno] .= $lngstr['email_answer_points'].$i_rSet7->fields['result_answer_points'].'<br />'; 
 if(!$i_detailed_correct)
 $i_result_detailed_2_items[$i_questionno] = $i_result_detailed_1_items[$i_questionno]; 
 $i_result_detailed_3_items[$i_questionno] = '<tr><td>'.$i_result_detailed_3_items[$i_questionno].'</td></tr>'; 
 for($i=1;$i<$i_answerno;$i++) {
 switch($i_rSet7->fields['question_type']) {
 case QUESTION_TYPE_MULTIPLECHOICE: 
 case QUESTION_TYPE_TRUEFALSE:
 $i_answers_given = (int)$i_rSet7->fields['result_answer_text'];
$i_result_detailed_3_items[$i_questionno] .= '<tr><td><img src="images/button-checkbox-'.($i_answers_correct[$i] ? '2' : ($i==$i_answers_given ? '4' : '0')).'.gif" width=13 height=13> &nbsp; '.$i_answers[$i].'</tr>';
break;
case QUESTION_TYPE_MULTIPLEANSWER: 
 $i_answers_given = explode(QUESTION_TYPE_MULTIPLEANSWER_BREAK, $i_rSet7->fields['result_answer_text']);
$i_result_detailed_3_items[$i_questionno] .= '<tr><td><img src="images/button-checkbox-'.($i_answers_correct[$i] ? '2' : (in_array($i, $i_answers_given) ? '4' : '0')).'.gif" width=13 height=13> &nbsp; '.$i_answers[$i].'</tr>';
break;
case QUESTION_TYPE_FILLINTHEBLANK:
 $i_result_detailed_3_items[$i_questionno] .= '<tr><td>'.nl2br($i_answers[$i]).'</td></tr>';
break;
}
} 
 $i_result_detailed_3_items[$i_questionno] .= '<tr><td>'.$lngstr['email_answer_points'].$i_rSet7->fields['result_answer_points'].'</td></tr>'; 
 if(!$i_detailed_correct)
 $i_result_detailed_4_items[$i_questionno] = $i_result_detailed_3_items[$i_questionno]; 
 $i_rSet7->MoveNext();
}
$i_rSet7->Close();
$i_result_detailed_1_text = implode('<br />', $i_result_detailed_1_items);
$i_result_detailed_2_text = implode('<br />', $i_result_detailed_2_items);
$i_result_detailed_3_text = '<table cellpadding=0 cellspacing=0 border=0 width="100%">'.implode("\n", $i_result_detailed_3_items).'</table>';
$i_result_detailed_4_text = '<table cellpadding=0 cellspacing=0 border=0 width="100%">'.implode("\n", $i_result_detailed_4_items).'</table>';
$i_result_detailed_5_text = '';
$i_result_detailed_6_text = ''; 
 $g_vars['page']['grade'] = getGradeData($i_rSet2->fields['gscaleid'], $i_rSet2->fields['gscale_gradeid']); 
 $g_vars['page']['subjects'] = getTestResultSubjectsData($resultid);
$i_result = getReportTemplate(array(
 'rtemplateid' => $i_rSet3->fields['rtemplateid'],
 'username' => $i_rSet6->fields['user_name'],
 'email' => $i_rSet6->fields['user_email'],
 'title' => $i_rSet6->fields['user_title'],
 'firstname' => $i_rSet6->fields['user_firstname'],
 'lastname' => $i_rSet6->fields['user_lastname'],
 'middlename' => $i_rSet6->fields['user_middlename'],
 'address' => $i_rSet6->fields['user_address'],
 'city' => $i_rSet6->fields['user_city'],
 'state' => $i_rSet6->fields['user_state'],
 'zip' => $i_rSet6->fields['user_zip'],
 'country' => $i_rSet6->fields['user_country'],
 'phone' => $i_rSet6->fields['user_phone'],
 'fax' => $i_rSet6->fields['user_fax'],
 'mobile' => $i_rSet6->fields['user_mobile'],
 'pager' => $i_rSet6->fields['user_pager'],
 'ipphone' => $i_rSet6->fields['user_ipphone'],
 'webpage' => $i_rSet6->fields['user_webpage'],
 'icq' => $i_rSet6->fields['user_icq'],
 'msn' => $i_rSet6->fields['user_msn'],
 'aol' => $i_rSet6->fields['user_aol'],
 'gender' => $i_rSet6->fields['user_gender'],
 'birthday' => $i_rSet6->fields['user_birthday'],
 'husbandwife' => $i_rSet6->fields['user_husbandwife'],
 'children' => $i_rSet6->fields['user_children'],
 'trainer' => $i_rSet6->fields['user_trainer'],
 'photo' => $i_rSet6->fields['user_photo'],
 'company' => $i_rSet6->fields['user_company'],
 'cposition' => $i_rSet6->fields['user_cposition'],
 'department' => $i_rSet6->fields['user_department'],
 'coffice' => $i_rSet6->fields['user_coffice'],
 'caddress' => $i_rSet6->fields['user_caddress'],
 'ccity' => $i_rSet6->fields['user_ccity'],
 'cstate' => $i_rSet6->fields['user_cstate'],
 'czip' => $i_rSet6->fields['user_czip'],
 'ccountry' => $i_rSet6->fields['user_ccountry'],
 'cphone' => $i_rSet6->fields['user_cphone'],
 'cfax' => $i_rSet6->fields['user_cfax'],
 'cmobile' => $i_rSet6->fields['user_cmobile'],
 'cpager' => $i_rSet6->fields['user_cpager'],
 'cipphone' => $i_rSet6->fields['user_cipphone'],
 'cwebpage' => $i_rSet6->fields['user_cwebpage'],
 'cphoto' => $i_rSet6->fields['user_cphoto'],
 'ufield1' => $i_rSet6->fields['user_ufield1'],
 'ufield2' => $i_rSet6->fields['user_ufield2'],
 'ufield3' => $i_rSet6->fields['user_ufield3'],
 'ufield4' => $i_rSet6->fields['user_ufield4'],
 'ufield5' => $i_rSet6->fields['user_ufield5'],
 'ufield6' => $i_rSet6->fields['user_ufield6'],
 'ufield7' => $i_rSet6->fields['user_ufield7'],
 'ufield8' => $i_rSet6->fields['user_ufield8'],
 'ufield9' => $i_rSet6->fields['user_ufield9'],
 'ufield10' => $i_rSet6->fields['user_ufield10'],
 'test_name' => $i_rSet3->fields['test_name'],
 'result_id' => $resultid,
 'result_date' => getDateLocal($lngstr['language']['date_format_full'], $i_rSet2->fields['result_datestart']),
 'result_time_spent' => getTimeFormatted($i_rSet2->fields['result_timespent']),
 'result_time_exceeded' => ($i_rSet2->fields['result_timeexceeded'] > 0) ? $lngstr['label_yes'] : $lngstr['label_no'],
 'result_points_scored' => $i_rSet2->fields['result_points'],
 'result_points_possible' => $i_rSet2->fields['result_pointsmax'],
 'result_percents' => (($i_rSet2->fields['result_pointsmax'] > 0) ? round(($i_rSet2->fields['result_points'] * 100) / $i_rSet2->fields['result_pointsmax']) : 0),
 'result_grade' => $g_vars['page']['grade']['name'],
 'result_grade_feedback' => $g_vars['page']['grade']['feedback'],
 'result_subjects' => $g_vars['page']['subjects'],
 'result_detailed_1' => $i_result_detailed_1_text,
 'result_detailed_2' => $i_result_detailed_2_text,
 'result_detailed_3' => $i_result_detailed_3_text,
 'result_detailed_4' => $i_result_detailed_4_text,
 'result_detailed_5' => $i_result_detailed_5_text,
 'result_detailed_6' => $i_result_detailed_6_text,
 ));
}
return $i_result;
}
?>