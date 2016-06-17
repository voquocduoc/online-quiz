<?php
$g_vars['page']['location'] = array('reports_manager', 'test_statistics'); 
$g_vars['page']['header'] = $lngstr['page_statistics_resultid']['header'];
$g_vars['page']['selected_section'] = 'reportsmanager';
$g_vars['page']['selected_tab'] = 'statistics-resultid';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
function writeResultStats($i_resultid) {
global $g_db, $lngstr, $srv_settings, $g_vars;
$g_vars['page']['resultid'] = $i_resultid; 
	$i_testid = 0;
$i_rSet6 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."results WHERE resultid=".$i_resultid, 1);
if(!$i_rSet6) {
 showDBError(__FILE__, 6);
} else {
 if(!$i_rSet6->EOF) {
 $i_testid = $i_rSet6->fields['testid'];
$g_vars['page']['result_date'] = getDateLocal($lngstr['language']['date_format_full'], $i_rSet6->fields['result_datestart']);
$g_vars['page']['time_spent'] = getTimeFormatted($i_rSet6->fields['result_timespent']);
$g_vars['page']['got_points'] = $i_rSet6->fields['result_points'];
$g_vars['page']['points_max'] = $i_rSet6->fields['result_pointsmax'];
$g_vars['page']['score'] = ($g_vars['page']['points_max'] != 0 ? round(($g_vars['page']['got_points'] * 100) / $g_vars['page']['points_max']) : 100); 
 $g_vars['page']['grade'] = getGradeData($i_rSet6->fields['gscaleid'], $i_rSet6->fields['gscale_gradeid']); 
 $i_userid = $i_rSet6->fields['userid'];
$i_rSet7 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."users WHERE userid=".$i_userid, 1);
if(!$i_rSet7) {
 showDBError(__FILE__, 7);
} else {
 if(!$i_rSet7->EOF) {
 $g_vars['page']['user_name'] = $i_rSet7->fields['user_firstname'].' '.$i_rSet7->fields['user_lastname'];
}
$i_rSet7->Close();
}
}
$i_rSet6->Close();
} 
	$g_vars['page']['test_name'] = '';
$i_gscaleid = 0;
$i_rSet1 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."tests WHERE testid=".$i_testid, 1);
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 if(!$i_rSet1->EOF) {
 $g_vars['page']['test_name'] = $i_rSet1->fields['test_name'];
$i_gscaleid = $i_rSet1->fields['gscaleid'];
}
$i_rSet1->Close();
} 
	$g_vars['page']['grades_times_total'] = 0;
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."gscales_grades WHERE gscaleid=".$i_gscaleid." ORDER BY gscale_gradeid");
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 while(!$i_rSet2->EOF) {
 $i_gradeid = $i_rSet2->fields['gscale_gradeid'];
$g_vars['page']['grades'][$i_gradeid]['name'] = $i_rSet2->fields['grade_name']; 
 $g_vars['page']['grades'][$i_gradeid]['times'] = getRecordCount($srv_settings['table_prefix'].'results', 'testid='.$i_testid.' AND gscaleid='.$i_gscaleid.' AND gscale_gradeid='.$i_gradeid);
$g_vars['page']['grades_times_total'] += $g_vars['page']['grades'][$i_gradeid]['times'];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
foreach($g_vars['page']['grades'] as $i_gradeid=>$i_grade) {
 $g_vars['page']['grades'][$i_gradeid]['times_percents'] = $g_vars['page']['grades_times_total'] !=0 ? ($g_vars['page']['grades'][$i_gradeid]['times'] * 100) / $g_vars['page']['grades_times_total'] : 0;
} 
	$g_vars['page']['test']['participant_count'] = 0;
$i_points_all = array();
$g_vars['page']['test']['points_max'] = 0;
$g_vars['page']['test']['points_low'] = IGT_MAX_FLOAT;
$g_vars['page']['test']['points_high'] = 0;
$i_points_total = 0;
$g_vars['page']['test']['points_total_max'] = 0;
$i_rSet3 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."results WHERE testid=".$i_testid." AND gscale_gradeid > 0");
if(!$i_rSet3) {
 showDBError(__FILE__, 3);
} else {
 while(!$i_rSet3->EOF) {
 $g_vars['page']['test']['participant_count']++;
$i_points = $i_rSet3->fields['result_points'];
array_push($i_points_all, $i_points);
$g_vars['page']['test']['points_max'] = $i_rSet3->fields['result_pointsmax'];
if($i_points > $g_vars['page']['test']['points_high'])
 $g_vars['page']['test']['points_high'] = $i_points;
if($i_points < $g_vars['page']['test']['points_low'])
 $g_vars['page']['test']['points_low'] = $i_points;
$i_points_total += $i_points;
$g_vars['page']['test']['points_total_max'] += $g_vars['page']['test']['points_max'];
$i_rSet3->MoveNext();
}
$i_rSet3->Close();
}
$g_vars['page']['test']['points_average'] = ($i_points_total / $g_vars['page']['test']['participant_count']);
$g_vars['page']['test']['points_average_percents'] = ($i_points_total * 100) / $g_vars['page']['test']['points_total_max'];
$g_vars['page']['test']['points_high_percents'] = ($g_vars['page']['test']['points_high'] * 100) / $g_vars['page']['test']['points_max'];
$g_vars['page']['test']['points_low_percents'] = ($g_vars['page']['test']['points_low'] * 100) / $g_vars['page']['test']['points_max']; 
	$g_vars['page']['test']['variance'] = 0;
if($g_vars['page']['test']['participant_count'] > 1) {
 foreach($i_points_all as $i_points)
 $g_vars['page']['test']['variance'] += ($i_points - $g_vars['page']['test']['points_average']) * ($i_points - $g_vars['page']['test']['points_average']);
$g_vars['page']['test']['variance'] = $g_vars['page']['test']['variance'] / ($g_vars['page']['test']['participant_count'] - 1);
}	
	$g_vars['page']['test']['std_deviation'] = sqrt($g_vars['page']['test']['variance']); 
 $g_vars['page']['questions'] = array();
$i_rSet4 = $g_db->Execute("SELECT questionid, result_answer_iscorrect FROM ".$srv_settings['table_prefix']."results_answers WHERE resultid=".$i_resultid);
if(!$i_rSet4) {
 showDBError(__FILE__, 4);
} else {
 while(!$i_rSet4->EOF) {
 $i_questionid = $i_rSet4->fields['questionid'];
$g_vars['page']['questions'][$i_questionid]['iscorrect'] = $i_rSet4->fields['result_answer_iscorrect'];
$i_rSet4->MoveNext();
}
$i_rSet4->Close();
}
$g_vars['page']['subjects'] = array();
foreach($g_vars['page']['questions'] as $i_questionid => $i_question) {
 $i_rSet5 = $g_db->SelectLimit("SELECT ".$srv_settings['table_prefix']."subjects.subjectid, ".$srv_settings['table_prefix']."subjects.subject_name FROM ".$srv_settings['table_prefix']."questions, ".$srv_settings['table_prefix']."subjects WHERE questionid=".$i_questionid." AND ".$srv_settings['table_prefix']."questions.subjectid=".$srv_settings['table_prefix']."subjects.subjectid", 1);
if(!$i_rSet5) {
 showDBError(__FILE__, 5);
} else {
 if(!$i_rSet5->EOF) {
 $i_subjectid = $i_rSet5->fields['subjectid'];
$g_vars['page']['subjects'][$i_subjectid]['question_count'] = getRecordCount($srv_settings['table_prefix'].'questions', 'subjectid='.$i_subjectid);
if(!isset($g_vars['page']['subjects'][$i_subjectid]['question_got'])) {
 $g_vars['page']['subjects'][$i_subjectid]['name'] = $i_rSet5->fields['subject_name'];
$g_vars['page']['subjects'][$i_subjectid]['question_got'] = 0;
$g_vars['page']['subjects'][$i_subjectid]['question_correct'] = 0;
}
$g_vars['page']['subjects'][$i_subjectid]['question_got']++;
if($i_question['iscorrect'] == IGT_ANSWER_IS_CORRECT)
 $g_vars['page']['subjects'][$i_subjectid]['question_correct']++;
}
$i_rSet5->Close();
}
}
foreach($g_vars['page']['subjects'] as $i_subjectid=>$i_grade) {
 $g_vars['page']['subjects'][$i_subjectid]['question_correct_percents'] = ($g_vars['page']['subjects'][$i_subjectid]['question_correct'] * 100) / $g_vars['page']['subjects'][$i_subjectid]['question_got'];
}
}
 
$i_resultid = (int)readGetVar('resultid');
writeResultStats((int)$i_resultid); 
$g_smarty->assign('g_vars', $g_vars);
if(!empty($_GET['print'])) {
	displayTemplate('statistics-resultid-print');
} else {
	displayTemplate('statistics-resultid');
}
?>