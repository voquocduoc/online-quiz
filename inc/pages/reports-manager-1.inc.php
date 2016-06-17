<?php
$g_vars['page']['location'] = array('reports_manager', 'test_results');
$g_vars['page']['header'] = $lngstr['page_header_results'];
$g_vars['page']['selected_section'] = 'reportsmanager';
$g_vars['page']['selected_tab'] = 'reportsmanager';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
$g_vars['page']['infobar'] = $lngstr['tooltip_reportsmanager'];
$g_vars['page']['meta'] .= '<style type="text/css">@import url('.$srv_settings['url_root'].'shared/calendar/skins/aqua/theme.css);</style>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/calendar.js"></script>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/lang/calendar-en.js"></script>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/calendar-setup.js"></script>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/calendar-helper.js"></script>';
$i_pagewide_id = 0; 
$i_sql_where_addon = '1=0 AND '; 
if($G_SESSION['access_reportsmanager'] > 1) {
	$f_userid = readCookieVar('filter_reportsmanager_userid', readGetVar('userid'));
if(!empty($f_userid)) {
 $f_userid = (int)$f_userid;
$i_sql_where_addon = $srv_settings['table_prefix'].'results.userid='.$f_userid.' AND ';
} else {
 $i_sql_where_addon = '';
}
} else {
	$i_sql_where_addon = $srv_settings['table_prefix'].'results.userid='.$G_SESSION['userid'].' AND ';
} 
$f_user_lastname = readCookieVar('filter_reportsmanager_user_lastname', readGetVar('user_lastname'));
if(!empty($f_user_lastname)) {
	$i_user_lastname = $g_db->qstr($f_user_lastname, get_magic_quotes_gpc());
$i_sql_where_addon .= $srv_settings['table_prefix'].'users.user_lastname LIKE '.$i_user_lastname.' AND ';
} 
$f_user_department = readCookieVar('filter_reportsmanager_user_department', readGetVar('user_department'));
if(!empty($f_user_department)) {
	$i_user_department = $g_db->qstr($f_user_department, get_magic_quotes_gpc());
$i_sql_where_addon .= $srv_settings['table_prefix'].'users.user_department LIKE '.$i_user_department.' AND ';
} 
$f_subjectid = readCookieVar('filter_reportsmanager_subjectid', readGetVar('subjectid'));
if(!empty($f_subjectid)) {
	$f_subjectid = (int)$f_subjectid;
$i_sql_where_addon .= $srv_settings['table_prefix'].'tests.subjectid='.$f_subjectid.' AND ';
} 
$f_testid = readCookieVar('filter_reportsmanager_testid', readGetVar('testid'));
if(!empty($f_testid)) {
	$f_testid = (int)$f_testid;
$i_sql_where_addon .= $srv_settings['table_prefix'].'results.testid='.$f_testid.' AND ';
} 
$f_result_date = readCookieVar('filter_reportsmanager_result_date', readGetVar('result_date', 0));
$f_result_datestart = readCookieVar('filter_reportsmanager_result_datestart', readGetVar('result_datestart', ''));
$f_result_dateend = readCookieVar('filter_reportsmanager_result_dateend', readGetVar('result_dateend', ''));
if(!empty($f_result_datestart)) { 
	$f_result_datestart = (int)$f_result_datestart;
$i_sql_where_addon .= $srv_settings['table_prefix'].'results.result_datestart>='.$f_result_datestart.' AND ';
} else if(!empty($f_result_date)) { 
	$i_date_current = array('hours' => date("H"), 'minutes' => date("i"), 'seconds' => date("s"), 'days' => date("d"), 'months' => date("m"), 'years' => date("Y"));
$i_date_back = array('hours' => 0, 'minutes' => 0, 'seconds' => 0, 'days' => 0, 'months' => 0, 'years' => 0);
$i_date_back_type = substr($f_result_date, 0, 1); 
	$i_date_back_value = substr($f_result_date, 1);
switch($i_date_back_type) {
 case 'd':
 if($i_date_back_value == '0') { 
 $i_date_back['hours'] = $i_date_current['hours'];
$i_date_back['minutes'] = $i_date_current['minutes'];
$i_date_back['seconds'] = $i_date_current['seconds'];
} else {
 $i_date_back['days'] = $i_date_back_value;
}
break;
case 'm':
 $i_date_back['months'] = $i_date_back_value;
break;
case 'y':
 $i_date_back['years'] = $i_date_back_value;
break;
}
$i_result_date = mktime($i_date_current['hours'] - $i_date_back['hours'], $i_date_current['minutes'] - $i_date_back['minutes'], $i_date_current['seconds'] - $i_date_back['seconds'], $i_date_current['months'] - $i_date_back['months'], $i_date_current['days'] - $i_date_back['days'], $i_date_current['years'] - $i_date_back['years']);
$i_sql_where_addon .= $srv_settings['table_prefix'].'results.result_datestart>='.$i_result_date.' AND ';
}
if(!empty($f_result_dateend)) { 
	$f_result_dateend = (int)$f_result_dateend;
$i_sql_where_addon .= $srv_settings['table_prefix'].'results.result_datestart<='.$f_result_dateend.' AND ';
} 
$i_sql_where_addon .= $srv_settings['table_prefix'].'results.userid='.$srv_settings['table_prefix'].'users.userid AND '.$srv_settings['table_prefix'].'results.testid='.$srv_settings['table_prefix'].'tests.testid AND '.$srv_settings['table_prefix'].'results.gscaleid='.$srv_settings['table_prefix'].'gscales_grades.gscaleid AND '.$srv_settings['table_prefix'].'results.gscale_gradeid='.$srv_settings['table_prefix'].'gscales_grades.gscale_gradeid AND '; 
if(!empty($i_sql_where_addon))
 $i_sql_where_addon = substr($i_sql_where_addon, 0, strlen($i_sql_where_addon) - 5); 
$i_direction = '';
$i_order_addon = '';
$i_sql_order_addon = '';
$g_vars['page']['tables'][1]['columns'] = array(
	array($lngstr['label_report_hdr_resultid'], $lngstr['label_report_hdr_resultid_hint'], $srv_settings['table_prefix'].'results.resultid'),
	array($lngstr['label_report_hdr_result_datestart'], $lngstr['label_report_hdr_result_datestart_hint'], $srv_settings['table_prefix'].'results.result_datestart'),
	array($lngstr['label_report_hdr_user_name'], $lngstr['label_report_hdr_user_name_hint'], $srv_settings['table_prefix'].'users.user_name'),
	array($lngstr['label_report_hdr_test_name'], $lngstr['label_report_hdr_test_name_hint'], $srv_settings['table_prefix'].'tests.test_name'),
	array($lngstr['page_reportsmanager']['hdr_test_attempts'], $lngstr['page_reportsmanager']['hdr_test_attempts_hint'], ''),
	array($lngstr['label_report_hdr_result_timeexceeded'], $lngstr['label_report_hdr_result_timeexceeded_hint'], $srv_settings['table_prefix'].'results.result_timeexceeded'),
	array($lngstr['label_report_hdr_result_points'], $lngstr['label_report_hdr_result_points_hint'], $srv_settings['table_prefix'].'results.result_points'),
	array($lngstr['label_report_hdr_result_pointsmax'], $lngstr['label_report_hdr_result_pointsmax_hint'], $srv_settings['table_prefix'].'results.result_pointsmax'),
	array($lngstr['label_report_hdr_result_score'], $lngstr['label_report_hdr_result_score_hint'], 'result_score'),
	array($lngstr['label_report_hdr_gscale_gradeid'], $lngstr['label_report_hdr_gscale_gradeid_hint'], $srv_settings['table_prefix'].'gscales_grades.gscale_gradeid'),
);
$i_order_no = isset($_GET['order']) ? (int)$_GET['order'] : 0;
if($i_order_no>=count($g_vars['page']['tables'][1]['columns']))
 $i_order_no = -1;
if($i_order_no>=0) {
	$i_direction = (isset($_GET['direction']) && $_GET['direction']) ? 'DESC' : '';
$i_order_addon = '&order='.$i_order_no.'&direction='.$i_direction;
$i_sql_order_addon = ' ORDER BY '.$g_vars['page']['tables'][1]['columns'][$i_order_no][2].' '.$i_direction;
} 
$i_url_limitto_addon = '';
$i_url_pageno_addon = '';
$i_url_limit_addon = '';
$i_pageno = 0;
$i_limitcount = isset($_GET['limitto']) ? (int)$_GET['limitto'] : $G_SESSION['config_itemsperpage'];
if($i_limitcount>0) {
	$i_recordcount = getRecordCount($srv_settings['table_prefix'].'results, '.$srv_settings['table_prefix'].'users, '.$srv_settings['table_prefix'].'tests, '.$srv_settings['table_prefix'].'gscales_grades', $i_sql_where_addon);
$i_pageno = isset($_GET['pageno']) ? (int)$_GET['pageno'] : 1;
if($i_pageno < 1)
 $i_pageno = 1;
$i_limitfrom = ($i_pageno-1)*$i_limitcount;
$i_pageno_count = floor(($i_recordcount - 1) / $i_limitcount) + 1;
if($i_limitfrom > $i_recordcount) {
 $i_pageno = $i_pageno_count;
$i_limitfrom = ($i_pageno-1)*$i_limitcount;
}
$i_url_limitto_addon .= '&limitto='.$i_limitcount;
$i_url_pageno_addon .= '&pageno='.$i_pageno;
$i_url_limit_addon .= $i_url_limitto_addon.$i_url_pageno_addon;
} else {
	$i_url_limitto_addon = '&limitto=';
$i_url_limit_addon .= $i_url_limitto_addon;
$i_limitfrom = -1;
$i_limitcount = -1;
} 
$nPageWindow = IGT_CONFIG_NAVIGATION_WINDOW;
if (!IGT_CONFIG_NAVIGATION_SHOW_ALWAYS) {
	if ($i_recordcount == 0 || ($i_pageno_count == 1 && $this->NavShowAll == false))
 return;
} 
if($i_pageno > floor($nPageWindow/2) + 1 && $i_pageno_count > $nPageWindow)
	$nStartPage = $i_pageno - floor($nPageWindow/2);
else
	$nStartPage = 1; 
if($i_pageno <= $i_pageno_count - floor($nPageWindow/2) && $nStartPage + $nPageWindow-1 <= $i_pageno_count)
	$nEndPage = $nStartPage + $nPageWindow - 1;
else
{
	$nEndPage = $i_pageno_count;
if($nEndPage - $nPageWindow + 1 >= 1)
 $nStartPage = $nEndPage - $nPageWindow + 1;
}
$nRecordFrom = ($i_pageno - 1) * $i_limitcount + 1;
if($i_pageno != $i_pageno_count)
 $nRecordTo = $i_pageno * $i_limitcount;
else $nRecordTo = $i_recordcount;
$g_vars['page']['filter']['url_addon'] = getURLAddon('?action=filter', array('action')); 
$g_vars['page']['filter']['result_date'] = $f_result_date;
$g_vars['page']['filter']['result_datestart_formatted'] = ($f_result_datestart > 0) ? getDateLocal($lngstr['language']['calendar']['date_format'], $f_result_datestart) : '';
$g_vars['page']['filter']['result_dateend_formatted'] = ($f_result_dateend > 0) ? getDateLocal($lngstr['language']['calendar']['date_format'], $f_result_dateend) : ''; 
if($G_SESSION['access_reportsmanager'] > 1) {
	$i_users = array('' => $lngstr['label_none']);
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."users");
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 while(!$i_rSet2->EOF) {
 $i_users[$i_rSet2->fields['userid']] = $i_rSet2->fields['user_name'];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
$f_userid = (int)readGetVar('userid', readCookieVar('filter_reportsmanager_userid'));
$g_vars['page']['user_name_content'] = getSelectElement('userid', $f_userid, $i_users);
$g_vars['page']['user_lastname_content'] = getInputElement('user_lastname', $f_user_lastname);
$g_vars['page']['user_department_content'] = getInputElement('user_department', $f_user_department);
}
 
$i_tests = array('' => $lngstr['label_none']);
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."tests");
if(!$i_rSet2) {
	showDBError(__FILE__, 2);
} else {
	while(!$i_rSet2->EOF) {
 $i_tests[$i_rSet2->fields['testid']] = $i_rSet2->fields['test_name'];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
$f_testid = (int)readGetVar('testid', readCookieVar('filter_reportsmanager_testid'));
$g_vars['page']['testid_content'] = getSelectElement('testid', $f_testid, $i_tests);
 
$i_subjects = array('' => $lngstr['label_none']);
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
$f_subjectid = (int)readGetVar('subjectid', readCookieVar('filter_reportsmanager_subjectid'));
$g_vars['page']['subjectid_content'] = getSelectElement('subjectid', $f_subjectid, $i_subjects);
 
if($G_SESSION['access_reportsmanager'] > 1) {
	$i_rtemplates = array('' => $lngstr['label_none']);
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."rtemplates");
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 while(!$i_rSet2->EOF) {
 $i_rtemplates[$i_rSet2->fields['rtemplateid']] = $i_rSet2->fields['rtemplate_name'];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
$f_rtemplateid = (int)readGetVar('rtemplateid');
$g_vars['page']['rtemplateid_content'] = getSelectElement('rtemplateid', $f_rtemplateid, $i_rtemplates, ' onchange="document.location.href=\'reports-manager.php?rtemplateid=\'+this.value+\''.$i_order_addon.$i_url_limitto_addon.'\';"');
$g_vars['page']['addon_rtemplateid'] = '&rtemplateid='.$f_rtemplateid;
}
$g_vars['page']['addon_order'] = $i_order_addon;
$g_vars['page']['addon_limit'] = $i_url_limit_addon;
$g_vars['page']['addon_limitto'] = $i_url_limitto_addon;
 
$g_vars['page']['navbar']['record_from'] = $nRecordFrom;
$g_vars['page']['navbar']['record_to'] = $nRecordTo;
$g_vars['page']['navbar']['record_count'] = $i_recordcount;
$g_vars['page']['navbar']['page_window_numbers'] = array();
for($i = $nStartPage; $i <= $nEndPage; $i++)
 $g_vars['page']['navbar']['page_window_numbers'][$i] = $i;
$g_vars['page']['limitcount'] = $i_limitcount;
$g_vars['page']['pageno_current'] = $i_pageno;
$g_vars['page']['page_count'] = $i_pageno_count;
$g_vars['page']['pageno_previous'] = max(($g_vars['page']['pageno_current']-1), 1);
$g_vars['page']['pageno_next'] = min(($g_vars['page']['pageno_current']+1), $g_vars['page']['page_count']);
$g_vars['page']['url'] = 'reports-manager.php?action='.$i_url_limit_addon;
$g_vars['page']['orderno'] = $i_order_no;
$g_vars['page']['direction'] = $i_direction;
$g_vars['page']['show_stats'] = IGT_REPORTSMANAGER_SHOWSTATS;
$i_rSet1 = $g_db->SelectLimit("SELECT ".$srv_settings['table_prefix']."results.resultid, ".$srv_settings['table_prefix']."results.result_datestart, ".$srv_settings['table_prefix']."results.userid, ".$srv_settings['table_prefix']."users.user_name, ".$srv_settings['table_prefix']."users.user_firstname, ".$srv_settings['table_prefix']."users.user_middlename, ".$srv_settings['table_prefix']."users.user_lastname, ".$srv_settings['table_prefix']."users.user_department, ".$srv_settings['table_prefix']."results.testid, ".$srv_settings['table_prefix']."tests.test_name, ".$srv_settings['table_prefix']."tests.test_attempts, ".$srv_settings['table_prefix']."tests.test_result_showhtml, ".$srv_settings['table_prefix']."tests.test_result_showpdf, ".$srv_settings['table_prefix']."tests.rtemplateid, ".$srv_settings['table_prefix']."tests.test_reportgradecondition, ".$srv_settings['table_prefix']."tests.test_nexttestid, ".$srv_settings['table_prefix']."results.gscale_gradeid, ".$srv_settings['table_prefix']."results.result_timeexceeded, ".$srv_settings['table_prefix']."results.result_points, ".$srv_settings['table_prefix']."results.result_pointsmax, ((".$srv_settings['table_prefix']."results.result_points * 100) / ".$srv_settings['table_prefix']."results.result_pointsmax) as result_score, ".$srv_settings['table_prefix']."results.gscaleid, ".$srv_settings['table_prefix']."gscales_grades.grade_name, ".$srv_settings['table_prefix']."gscales_grades.grade_description FROM ".$srv_settings['table_prefix']."results, ".$srv_settings['table_prefix']."users, ".$srv_settings['table_prefix']."tests, ".$srv_settings['table_prefix']."gscales_grades WHERE ".$i_sql_where_addon.$i_sql_order_addon, $i_limitcount, $i_limitfrom);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	$i_counter = 0;
while(!$i_rSet1->EOF) { 
 $g_vars['page']['tables'][1]['rows'][$i_counter]['visible'] = true;
$i_attempt_count = 0;
if($i_rSet1->fields['test_attempts'] > 0) { 
 $i_rSet4 = $g_db->Execute("SELECT test_attempt_count FROM ".$srv_settings['table_prefix']."tests_attempts WHERE testid=".$i_rSet1->fields['testid']." AND userid=".$i_rSet1->fields['userid']);
if(!$i_rSet4) {
 showDBError(__FILE__, 3);
} else {
 if(!$i_rSet4->EOF)
 $i_attempt_count = $i_rSet4->fields['test_attempt_count'];
$i_rSet4->Close();
}  
 } 
 $g_vars['page']['tables'][1]['rows'][$i_counter] = $i_rSet1->fields;
$g_vars['page']['tables'][1]['rows'][$i_counter]['result_datestart_formatted'] = getDateLocal($lngstr['language']['date_format'], $i_rSet1->fields['result_datestart']);
$g_vars['page']['tables'][1]['rows'][$i_counter]['test_attempt_count'] = $i_attempt_count;
if(($i_rSet1->fields['rtemplateid'] > 0) && (($i_rSet1->fields['test_reportgradecondition'] == 0) || ($i_rSet1->fields['test_reportgradecondition'] >= $i_rSet1->fields['gscale_gradeid']))) {
 $g_vars['page']['tables'][1]['rows'][$i_counter]['show_html'] = $i_rSet1->fields['test_result_showhtml'];
$g_vars['page']['tables'][1]['rows'][$i_counter]['show_pdf'] = $i_rSet1->fields['test_result_showpdf'];
} else {
 $g_vars['page']['tables'][1]['rows'][$i_counter]['show_html'] = false;
$g_vars['page']['tables'][1]['rows'][$i_counter]['show_pdf'] = false;
}
  
 $i_counter++;
$i_rSet1->MoveNext();
}
$i_rSet1->Close();
}
eventOnBeforePageGeneration(array('page_name' => 'reports-manager'));
$g_smarty->assign('g_vars', $g_vars);
if(empty($i_donotshow))
 displayTemplate('reports-manager');
?>