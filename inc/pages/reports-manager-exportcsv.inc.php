<?php
$i_filename = 'test-results.csv';
$i_delimiter = $lngstr['language']['list_separator'];
$i_filecontent = '';
function csvQuote($text) {
	return '"'.str_replace('"', '""', $text).'"';
}
 
$f_rtemplateid = (int)readGetVar('rtemplateid');
if($f_rtemplateid > 0)
 $i_columns_text = trim(getRecordItem($srv_settings['table_prefix'].'rtemplates', 'rtemplate_body', 'rtemplateid='.$f_rtemplateid));
else $i_columns_text = 'resultid,result_datestart,result_datestart_formatted,userid,user_name,user_firstname,user_lastname,testid,test_name,result_timeexceeded,result_points,result_pointsmax,result_score,grade_name';
$i_columns = explode(',', $i_columns_text);
 
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
$f_testid = readCookieVar('filter_reportsmanager_testid', readGetVar('testid'));
if(!empty($f_testid)) {
	$f_testid = (int)$f_testid;
$i_sql_where_addon .= $srv_settings['table_prefix'].'results.testid='.$f_testid.' AND ';
} 
$f_result_date = readCookieVar('filter_reportsmanager_result_date', readGetVar('result_date', 1));
if($f_result_date > 0) {
	$i_result_date = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y") - $f_result_date);
$i_sql_where_addon .= $srv_settings['table_prefix'].'results.result_datestart>='.$i_result_date.' AND ';
} 
$i_direction = '';
$i_order_addon = '';
$i_sql_order_addon = '';
$i_tablefields = array(
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
if($i_order_no>=count($i_tablefields))
 $i_order_no = -1;
if($i_order_no>=0) {
	$i_direction = (isset($_GET['direction']) && $_GET['direction']) ? 'DESC' : '';
$i_order_addon = '&order='.$i_order_no.'&direction='.$i_direction;
$i_sql_order_addon = ' ORDER BY '.$i_tablefields[$i_order_no][2].' '.$i_direction;
}  
$i_column_names = array();
foreach($i_columns as $val)
 array_push($i_column_names, csvQuote($lngstr['page_reportsmanager']['fields']['name'][$val]));
$i_filecontent .= implode($i_delimiter, $i_column_names)."\n"; 
$i_rSet1 = $g_db->Execute("SELECT ".$srv_settings['table_prefix']."results.resultid, ".$srv_settings['table_prefix']."results.result_datestart, ".$srv_settings['table_prefix']."results.userid, ".$srv_settings['table_prefix']."users.user_name, ".$srv_settings['table_prefix']."users.user_firstname, ".$srv_settings['table_prefix']."users.user_lastname, ".$srv_settings['table_prefix']."results.testid, ".$srv_settings['table_prefix']."tests.test_name, ".$srv_settings['table_prefix']."tests.test_attempts, ".$srv_settings['table_prefix']."tests.test_result_showpdf, ".$srv_settings['table_prefix']."tests.rtemplateid, ".$srv_settings['table_prefix']."tests.test_reportgradecondition, ".$srv_settings['table_prefix']."tests.test_nexttestid, ".$srv_settings['table_prefix']."results.gscale_gradeid, ".$srv_settings['table_prefix']."results.result_timeexceeded, ".$srv_settings['table_prefix']."results.result_points, ".$srv_settings['table_prefix']."results.result_pointsmax, ((".$srv_settings['table_prefix']."results.result_points * 100) / ".$srv_settings['table_prefix']."results.result_pointsmax) as result_score, ".$srv_settings['table_prefix']."results.gscaleid, ".$srv_settings['table_prefix']."gscales_grades.grade_name, ".$srv_settings['table_prefix']."gscales_grades.grade_description FROM ".$srv_settings['table_prefix']."results, ".$srv_settings['table_prefix']."users, ".$srv_settings['table_prefix']."tests, ".$srv_settings['table_prefix']."gscales_grades WHERE ".$i_sql_where_addon."".$srv_settings['table_prefix']."results.userid=".$srv_settings['table_prefix']."users.userid AND ".$srv_settings['table_prefix']."results.testid=".$srv_settings['table_prefix']."tests.testid AND ".$srv_settings['table_prefix']."results.gscaleid=".$srv_settings['table_prefix']."gscales_grades.gscaleid AND ".$srv_settings['table_prefix']."results.gscale_gradeid=".$srv_settings['table_prefix']."gscales_grades.gscale_gradeid".$i_sql_order_addon);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	while(!$i_rSet1->EOF) {
 $i_rSet1->fields['result_datestart_formatted'] = getDateLocal($lngstr['language']['date_format'], $i_rSet1->fields['result_datestart']);
foreach($i_columns as $i_column)
 $i_filecontent .= csvQuote($i_rSet1->fields[$i_column]).$i_delimiter;
$i_filecontent = substr($i_filecontent, 0, strlen($i_filecontent) - 1)."\n"; 
 $i_rSet1->MoveNext();
}
$i_rSet1->Close();
}
header('Pragma: private');
header('Cache-control: private, must-revalidate');
header('Content-Length: '.strlen($i_filecontent));
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="'.$i_filename.'"');
echo $i_filecontent;
?>