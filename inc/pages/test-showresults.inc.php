<?php 
$g_vars['page']['header'] = $lngstr['page_test_results'];
$g_vars['page']['hide_cpanel'] = true;
$i_now = $G_SESSION['yt_teststoppedat'];
$i_timespent_total = $i_now - $G_SESSION['yt_teststart'];
$i_timeexceeded = ($G_SESSION['yt_teststop'] > 0) && ($G_SESSION['yt_teststop'] < $i_now) ? 1 : 0;
 
$g_vars['page']['grade'] = getGradeData($G_SESSION['yt_gscaleid'], $G_SESSION['yt_gradeid']); 
$g_vars['page']['test_name'] = convertTextValue($G_SESSION['yt_name']);
$g_vars['page']['test_name_label'] = sprintf($lngstr['label_result_testname'], $g_vars['page']['test_name']);
$g_vars['page']['test_date'] = getDateLocal($lngstr['language']['date_format_full'], $G_SESSION['yt_teststart']);
$g_vars['page']['test_date_label'] = sprintf($lngstr['label_result_testdate'], $g_vars['page']['test_date']);
$g_vars['page']['time_spent'] = getTimeFormatted($i_timespent_total);
$g_vars['page']['time_spent_label'] = sprintf($lngstr['label_result_timespent'], $g_vars['page']['time_spent']);
$g_vars['page']['grade_label'] = sprintf($lngstr['label_result_got_grade'], $g_vars['page']['grade']['name']);
$g_vars['page']['gradefeedback_label'] = sprintf($lngstr['label_result_got_gradefeedback'], $g_vars['page']['grade']['feedback']);
$g_vars['page']['correct_answers_label'] = sprintf($lngstr['label_result_got_answers'],$G_SESSION['yt_got_answers'],$G_SESSION['yt_questioncount']);
$g_vars['page']['score'] = ($G_SESSION['yt_pointsmax']<>0 ? round(($G_SESSION['yt_got_points'] * 100) / $G_SESSION['yt_pointsmax']) : 0);
$g_vars['page']['points_label'] = sprintf($lngstr['label_result_got_points'], $G_SESSION['yt_got_points'], $G_SESSION['yt_pointsmax'], $g_vars['page']['score']);
$g_vars['page']['points_pending_label'] = sprintf($lngstr['label_result_points_pending'], $G_SESSION['yt_points_pending']);
 
$i_showresultspage = $G_SESSION['access_reportsmanager'] > 0; 
$i_attempts_allowed = 0;
$i_rSet3 = $g_db->Execute("SELECT test_attempts, test_contentprotection FROM ".$srv_settings['table_prefix']."tests WHERE testid=".$G_SESSION['testid']);
if($i_rSet3) {
	if(!$i_rSet3->EOF) {
 $i_attempts_allowed = $i_rSet3->fields['test_attempts'];
$g_vars['page']['content_protection'] = $i_rSet3->fields['test_contentprotection'];
}
$i_rSet3->Close();
}
if($i_showresultspage && $G_SESSION['yt_attempts'] > 0) {
	$i_attempt_count = 0;
$i_rSet4 = $g_db->Execute("SELECT test_attempt_count FROM ".$srv_settings['table_prefix']."tests_attempts WHERE testid=".$G_SESSION['testid']." AND userid=".$G_SESSION['userid']);
if($i_rSet4) {
 if(!$i_rSet4->EOF)
 $i_attempt_count = $i_rSet4->fields['test_attempt_count'];
$i_rSet4->Close();
}
$i_showresultspage = ($i_attempt_count >= $i_attempts_allowed);
}
$g_vars['page']['show_takeatest'] = true;
$g_vars['page']['show_nexttest'] = $G_SESSION['yt_nexttestid'] > 0;
$g_vars['page']['show_reportsmanager'] = $i_showresultspage;
$g_vars['page']['show_advancedreport_pdf'] = $G_SESSION['yt_result_showpdf'] && (($G_SESSION['yt_reportgradecondition'] == 0) or ($G_SESSION['yt_reportgradecondition'] >= $g_vars['page']['grade']['gradeid']));
$g_vars['page']['show_advancedreport_html'] = $G_SESSION['yt_result_showhtml'] && (($G_SESSION['yt_reportgradecondition'] == 0) or ($G_SESSION['yt_reportgradecondition'] >= $g_vars['page']['grade']['gradeid']));
  
 
if($G_SESSION['yt_result_rtemplateid'] > 0) {
	$i_isok = true; 
	$i_isok = $i_isok && ($i_rSet2 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."users WHERE userid=".$G_SESSION['userid'], 1));
if($i_isok)
 $i_isok = $i_isok && (!$i_rSet2->EOF);
 
	if($i_isok) {
 $i_arrTestAnswerDetails = getTestAnswerDetails($G_SESSION['resultid'], 'html');
$g_vars['page']['custom_report'] = getReportTemplate(array(
 'rtemplateid' => $G_SESSION['yt_result_rtemplateid'],
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
 'result_percents' => $g_vars['page']['score'],
 'result_grade' => $g_vars['page']['grade']['name'],
 'result_grade_feedback' => $g_vars['page']['grade']['feedback'],
 'result_subjects' => $G_SESSION['yt_subjects'],
 'result_detailed_1' => $i_arrTestAnswerDetails['result_detailed_1'],
 'result_detailed_2' => $i_arrTestAnswerDetails['result_detailed_2'],
 'result_detailed_3' => $i_arrTestAnswerDetails['result_detailed_3'],
 'result_detailed_4' => $i_arrTestAnswerDetails['result_detailed_4'],
 'result_detailed_5' => $i_arrTestAnswerDetails['result_detailed_5'],
 'result_detailed_6' => $i_arrTestAnswerDetails['result_detailed_6'],
 ));
}
}
eventOnBeforePageGeneration(array('page_name' => 'test-showresults'));
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('test-results');
?>