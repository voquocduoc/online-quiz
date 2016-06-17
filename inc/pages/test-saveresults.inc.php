<?php
  
 
eventOnBeforeTestSubmit();
$G_SESSION['yt_state'] = TEST_STATE_TRESULTS; 
setCookieVar('pending_test_ids', '');
setCookieVar('pending_test_result_ids', '');
$i_now = time();
$i_timespent_total = $i_now - $G_SESSION['yt_teststart'];
$i_timeexceeded = ($G_SESSION['yt_teststop'] > 0) && ($G_SESSION['yt_teststop'] < $i_now) ? 1 : 0; 
$i_percents = ($G_SESSION['yt_pointsmax'] != 0 ? round(($G_SESSION['yt_got_points'] / $G_SESSION['yt_pointsmax']) * 100) : 100);
$i_grade = calcResultGrade($G_SESSION['yt_gscaleid'], $i_percents);
$G_SESSION['yt_gradeid'] = $i_grade['gradeid']; 
if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."results SET result_timespent=$i_timespent_total, result_timeexceeded=".$i_timeexceeded.", result_points=".$G_SESSION['yt_got_points'].", result_pointsmax=".$G_SESSION['yt_pointsmax'].", gscaleid=".$i_grade['gscaleid'].", gscale_gradeid=".$i_grade['gradeid']." WHERE resultid=".$G_SESSION['resultid'])===false)
 showDBError(__FILE__, 2); 
if($G_SESSION['yt_attempts'] > 0) {
	$g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."tests_attempts (testid, userid, test_attempt_count) VALUES (".$G_SESSION['testid'].", ".$G_SESSION['userid'].", 0);");
$g_db->Execute("UPDATE ".$srv_settings['table_prefix']."tests_attempts SET test_attempt_count=test_attempt_count+1 WHERE testid=".$G_SESSION['testid']." AND userid=".$G_SESSION['userid']);
}
  
 
if($G_SESSION['yt_result_etemplateid'] > 0) {
	if((strlen($G_SESSION['yt_result_email']) > 0) || $G_SESSION['yt_result_emailtouser']) {
 $i_isok = true; 
 $i_isok = $i_isok && ($i_rSet1 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."tests WHERE testid=".$G_SESSION['testid'], 1));
if($i_isok)
 $i_isok = $i_isok && (!$i_rSet1->EOF); 
 $i_isok = $i_isok && ($i_rSet2 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."users WHERE userid=".$G_SESSION['userid'], 1));
if($i_isok)
 $i_isok = $i_isok && (!$i_rSet2->EOF); 
 $i_email_tos_text = $G_SESSION['yt_result_email'];
if($G_SESSION['yt_result_emailtouser'])
 $i_email_tos_text .= SYSTEM_ARRAY_ITEM_SEPARATOR.$i_rSet2->fields['user_email'];
$i_email_tos = explode(SYSTEM_ARRAY_ITEM_SEPARATOR, $i_email_tos_text); 
 $i_result_detailed_1_items = array();
$i_result_detailed_2_items = array();
$i_result_detailed_3_items = array();
$i_result_detailed_4_items = array();
$i_isok = $i_isok && ($i_rSet3 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."results_answers, ".$srv_settings['table_prefix']."questions WHERE resultid=".$G_SESSION['resultid']." AND ".$srv_settings['table_prefix']."results_answers.questionid=".$srv_settings['table_prefix']."questions.questionid ORDER BY result_answerid"));
if($i_isok) {
 $i_questionno = 0;
while(!$i_rSet3->EOF) {
 $i_questionno++; 
 $i_answers = array();
$i_rSet4 = $g_db->Execute("SELECT answer_text, answer_correct FROM ".$srv_settings['table_prefix']."answers WHERE questionid=".$i_rSet3->fields['questionid']." ORDER BY answerid");
if(!$i_rSet4) {
 showDBError(__FILE__, 4);
} else {
 $i_answerno = 1;
while(!$i_rSet4->EOF) {
 $i_answers[$i_answerno] = $i_rSet4->fields['answer_text'];
$i_answers_correct[$i_answerno] = $i_rSet4->fields['answer_correct'];
$i_answerno++;
$i_rSet4->MoveNext();
}
$i_rSet4->Close();
} 
 $i_detailed_correct = ($i_rSet3->fields['result_answer_iscorrect'] == IGT_ANSWER_IS_CORRECT); 
 $i_result_detailed_3_items[$i_questionno] = $i_questionno.'. '.trim(getTruncatedHTML($i_rSet3->fields['question_text'], 0))."\n"; 
 $i_result_detailed_1_items[$i_questionno] = $i_result_detailed_3_items[$i_questionno];
$i_result_detailed_1_items[$i_questionno] .= $lngstr['email_answer_iscorrect'].($i_rSet3->fields['result_answer_iscorrect']==IGT_ANSWER_IS_UNDEFINED ? $lngstr['label_undefined'] : ($i_rSet3->fields['result_answer_iscorrect']==IGT_ANSWER_IS_CORRECT ? $lngstr['label_yes'] : ($i_rSet3->fields['result_answer_iscorrect']==IGT_ANSWER_IS_PARTIALLYCORRECT ? $lngstr['label_partially'] : $lngstr['label_no'])))."\n";
$i_result_detailed_1_items[$i_questionno] .= $lngstr['email_answer_points'].$i_rSet3->fields['result_answer_points']."\n"; 
 if(!$i_detailed_correct)
 $i_result_detailed_2_items[$i_questionno] = $i_result_detailed_1_items[$i_questionno];
  
 for($i = 1; $i < $i_answerno; $i++) {
 switch($i_rSet3->fields['question_type']) {
 case QUESTION_TYPE_MULTIPLECHOICE: 
 case QUESTION_TYPE_TRUEFALSE:
 $i_answers_given = (int)$i_rSet3->fields['result_answer_text'];
$i_result_detailed_3_items[$i_questionno] .= '['.($i_answers_correct[$i] ? 'v' : ($i==$i_answers_given ? 'x' : ' ')).'] '.getTruncatedHTML($i_answers[$i], 0)."\n";
break;
case QUESTION_TYPE_MULTIPLEANSWER: 
 $i_answers_given = explode(QUESTION_TYPE_MULTIPLEANSWER_BREAK, $i_rSet3->fields['result_answer_text']);
$i_result_detailed_3_items[$i_questionno] .= '['.($i_answers_correct[$i] ? 'v' : (in_array($i, $i_answers_given) ? 'x' : ' ')).'] '.getTruncatedHTML($i_answers[$i], 0)."\n";
break;
case QUESTION_TYPE_FILLINTHEBLANK:
 $i_result_detailed_3_items[$i_questionno] .= '"'.nl2br($i_answers[$i]).'"'."\n";
break;
}
}
$i_result_detailed_3_items[$i_questionno] .= $lngstr['email_answer_points'].$i_rSet3->fields['result_answer_points']."\n"; 
 if(!$i_detailed_correct)
 $i_result_detailed_4_items[$i_questionno] = $i_result_detailed_3_items[$i_questionno]; 
 $i_rSet3->MoveNext();
}
$i_rSet3->Close();
}
$i_result_detailed_1_text = implode("\n", $i_result_detailed_1_items);
$i_result_detailed_2_text = implode("\n", $i_result_detailed_2_items);
$i_result_detailed_3_text = implode("\n", $i_result_detailed_3_items);
$i_result_detailed_4_text = implode("\n", $i_result_detailed_4_items);
$i_result_detailed_5_text = '';
$i_result_detailed_6_text = ''; 
 if($i_isok) {
 sendEmailTemplate(array(
 'etemplateid' => $G_SESSION['yt_result_etemplateid'],
 'emailto' => $i_email_tos,
 'username' => $i_rSet2->fields['user_name'],
 'email' => $i_rSet2->fields['user_email'],
 'title' => $i_rSet2->fields['user_title'],
 'firstname' => $i_rSet2->fields['user_firstname'],
 'lastname' => $i_rSet2->fields['user_lastname'],
 'middlename' => $i_rSet2->fields['user_middlename'],
 'address' => $i_rSet2->fields['user_address'],
 'city' => $i_rSet2->fields['user_city'],
 'state' => $i_rSet2->fields['user_state'],
 'zip' => $i_rSet2->fields['user_zip'],
 'country' => $i_rSet2->fields['user_country'],
 'phone' => $i_rSet2->fields['user_phone'],
 'fax' => $i_rSet2->fields['user_fax'],
 'mobile' => $i_rSet2->fields['user_mobile'],
 'pager' => $i_rSet2->fields['user_pager'],
 'ipphone' => $i_rSet2->fields['user_ipphone'],
 'webpage' => $i_rSet2->fields['user_webpage'],
 'icq' => $i_rSet2->fields['user_icq'],
 'msn' => $i_rSet2->fields['user_msn'],
 'aol' => $i_rSet2->fields['user_aol'],
 'gender' => $i_rSet2->fields['user_gender'],
 'birthday' => $i_rSet2->fields['user_birthday'],
 'husbandwife' => $i_rSet2->fields['user_husbandwife'],
 'children' => $i_rSet2->fields['user_children'],
 'trainer' => $i_rSet2->fields['user_trainer'],
 'photo' => $i_rSet2->fields['user_photo'],
 'company' => $i_rSet2->fields['user_company'],
 'cposition' => $i_rSet2->fields['user_cposition'],
 'department' => $i_rSet2->fields['user_department'],
 'coffice' => $i_rSet2->fields['user_coffice'],
 'caddress' => $i_rSet2->fields['user_caddress'],
 'ccity' => $i_rSet2->fields['user_ccity'],
 'cstate' => $i_rSet2->fields['user_cstate'],
 'czip' => $i_rSet2->fields['user_czip'],
 'ccountry' => $i_rSet2->fields['user_ccountry'],
 'cphone' => $i_rSet2->fields['user_cphone'],
 'cfax' => $i_rSet2->fields['user_cfax'],
 'cmobile' => $i_rSet2->fields['user_cmobile'],
 'cpager' => $i_rSet2->fields['user_cpager'],
 'cipphone' => $i_rSet2->fields['user_cipphone'],
 'cwebpage' => $i_rSet2->fields['user_cwebpage'],
 'cphoto' => $i_rSet2->fields['user_cphoto'],
 'ufield1' => $i_rSet2->fields['user_ufield1'],
 'ufield2' => $i_rSet2->fields['user_ufield2'],
 'ufield3' => $i_rSet2->fields['user_ufield3'],
 'ufield4' => $i_rSet2->fields['user_ufield4'],
 'ufield5' => $i_rSet2->fields['user_ufield5'],
 'ufield6' => $i_rSet2->fields['user_ufield6'],
 'ufield7' => $i_rSet2->fields['user_ufield7'],
 'ufield8' => $i_rSet2->fields['user_ufield8'],
 'ufield9' => $i_rSet2->fields['user_ufield9'],
 'ufield10' => $i_rSet2->fields['user_ufield10'],
 'test_name' => $G_SESSION['yt_name'],
 'result_id' => $G_SESSION['resultid'],
 'result_date' => getDateLocal($lngstr['language']['date_format_full'], $G_SESSION['yt_teststart']),
 'result_time_spent' => getTimeFormatted($i_timespent_total),
 'result_time_exceeded' => $i_timeexceeded ? $lngstr['label_yes'] : $lngstr['label_no'],
 'result_points_scored' => $G_SESSION['yt_got_points'],
 'result_points_possible' => $G_SESSION['yt_pointsmax'],
 'result_percents' => ($G_SESSION['yt_pointsmax']<>0 ? round(($G_SESSION['yt_got_points'] * 100) / $G_SESSION['yt_pointsmax']) : 0),
 'result_grade' => $i_grade['name'],
 'result_grade_feedback' => $i_grade['feedback'],
 'result_subjects' => $G_SESSION['yt_subjects'],
 'result_detailed_1' => $i_result_detailed_1_text,
 'result_detailed_2' => $i_result_detailed_2_text,
 'result_detailed_3' => $i_result_detailed_3_text,
 'result_detailed_4' => $i_result_detailed_4_text,
 'result_detailed_5' => $i_result_detailed_5_text,
 'result_detailed_6' => $i_result_detailed_6_text,
  
  
  
 ));
}
}
}
$G_SESSION['yt_teststoppedat'] = $i_now;
 
eventOnAfterTestSubmit();
?>