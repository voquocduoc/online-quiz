<?php
$g_vars['page']['header'] = $lngstr['page_header_panel'];
$g_vars['page']['tables'][1]['columns'] = array(
	array($lngstr['page_takeatest']['hdr_testid'], $lngstr['page_takeatest']['hdr_testid_hint'], $srv_settings['table_prefix'].'tests.testid'),
	array($lngstr['page_panel_hdr_test'], $lngstr['page_panel_hdr_test_hint'], $srv_settings['table_prefix'].'tests.test_name'),
	array($lngstr['page_panel_hdr_teststatus'], $lngstr['page_panel_hdr_teststatus_hint'], ''),
  
	array($lngstr['page_panel_hdr_gettest'], $lngstr['page_panel_hdr_gettest_hint'], ''),
);
$i_order_addon = '';
$i_sql_order_addon = '';
$i_order_no = isset($_GET['order']) ? (int)$_GET['order'] : 0;
if($i_order_no>=count($g_vars['page']['tables'][1]['columns']))
 $i_order_no = -1;
if($i_order_no>=0) {
	$i_direction = (isset($_GET['direction']) && $_GET['direction']) ? 'DESC' : '';
$i_order_addon = '&order='.$i_order_no.'&direction='.$i_direction;
$i_sql_order_addon = ' ORDER BY '.$g_vars['page']['tables'][1]['columns'][$i_order_no][2].' '.$i_direction;
}
$g_vars['page']['addon_order'] = $i_order_addon;
$g_vars['page']['orderno'] = $i_order_no;
$g_vars['page']['direction'] = $i_direction;
$g_vars['page']['url'] = 'index.php?action=';
 
$g_vars['page']['user_points_max'] = 0;
$g_vars['page']['user_points'] = 0;
$now = time();
$i_test_count = 0;
if($G_SESSION['access_tests'] > 0) { 
	$i_rSet1 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."tests WHERE test_enabled=1 AND test_dateend>".$now.$i_sql_order_addon); 
	if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 while(!$i_rSet1->EOF) { 
 $i_isallowed = $i_rSet1->fields['test_forall'];
if(!$i_isallowed)
 $i_isallowed = getRecordCount($srv_settings['table_prefix'].'groups_users, '.$srv_settings['table_prefix'].'groups_tests', "(".$srv_settings['table_prefix']."groups_tests.testid=".$i_rSet1->fields['testid']." AND ".$srv_settings['table_prefix']."groups_tests.groupid=".$srv_settings['table_prefix']."groups_users.groupid AND ".$srv_settings['table_prefix']."groups_users.userid=".$G_SESSION['userid'].")") > 0;
  
 
 if($i_isallowed) {
 $i_test_count++;
$g_vars['page']['test'][$i_test_count]['testid'] = $i_rSet1->fields['testid'];
$g_vars['page']['test'][$i_test_count]['name'] = $i_rSet1->fields['test_name'] ? convertTextValue($i_rSet1->fields['test_name']) : $lngstr['label_noname'];
$g_vars['page']['test'][$i_test_count]['code'] = $i_rSet1->fields['test_code'];
$g_vars['page']['test'][$i_test_count]['description'] = convertTextValue($i_rSet1->fields['test_description']);
$g_vars['page']['test'][$i_test_count]['startdate'] = $i_rSet1->fields['test_datestart'];
$g_vars['page']['test'][$i_test_count]['attempts'] = getTestAttemptsUsed($i_rSet1->fields['testid'], $G_SESSION['userid']);
$g_vars['page']['test'][$i_test_count]['attempts_total'] = $i_rSet1->fields['test_attempts'];
$g_vars['page']['test'][$i_test_count]['test_price'] = $i_rSet1->fields['test_price'] / 100;
$g_vars['page']['test'][$i_test_count]['test_purchased'] = ($i_rSet1->fields['test_price'] <= 0) || (getRecordCount($srv_settings['table_prefix'].'tests_own', 'testid='.$i_rSet1->fields['testid'].' AND userid='.$G_SESSION['userid']) > 0);
$g_vars['page']['test'][$i_test_count]['content_protection'] = $i_rSet1->fields['test_contentprotection'];
  
 $g_vars['page']['test'][$i_test_count]['status'] = IGT_TEST_STATUS_UNAVAILABLE;
$g_vars['page']['test'][$i_test_count]['visible'] = true;
if($i_rSet1->fields['test_datestart'] > $now) { 
 $g_vars['page']['test'][$i_test_count]['status_label'] = sprintf($lngstr['page_panel_status_will_be_available_on'], getDateLocal($lngstr['language']['date_format'], $i_rSet1->fields['test_datestart']));
} else if ($g_vars['page']['test'][$i_test_count]['attempts_total'] > 0) {  
 if($g_vars['page']['test'][$i_test_count]['attempts'] >= $g_vars['page']['test'][$i_test_count]['attempts_total']) {
 $g_vars['page']['test'][$i_test_count]['status_label'] = $lngstr['page-takeatest']['attempts_limit_reached'];
} else {
 $g_vars['page']['test'][$i_test_count]['status_label'] = sprintf($lngstr['page-takeatest']['attempts_left'], $g_vars['page']['test'][$i_test_count]['attempts_total'] - $g_vars['page']['test'][$i_test_count]['attempts']);
$g_vars['page']['test'][$i_test_count]['status'] = IGT_TEST_STATUS_AVAILABLE;
}
} else { 
 $g_vars['page']['test'][$i_test_count]['status_label'] = $lngstr['page_panel_status_available'];
$g_vars['page']['test'][$i_test_count]['status'] = IGT_TEST_STATUS_AVAILABLE;
} 
 if(($g_vars['page']['test'][$i_test_count]['testid'] == readCookieVar('pending_test_ids')) && ($g_vars['page']['test'][$i_test_count]['status'] == IGT_TEST_STATUS_AVAILABLE)) {
 $g_vars['page']['test'][$i_test_count]['status'] = IGT_TEST_STATUS_INPROGRESS;
}
$g_vars['page']['test'][$i_test_count]['status'] = eventOnQueryTestStatus(array('testno' => $i_test_count, 'testid' => $g_vars['page']['test'][$i_test_count]['testid'], 'status' => $g_vars['page']['test'][$i_test_count]['status']));
  
 }
$i_rSet1->MoveNext();
}
$i_rSet1->Close();
}
}
if($g_vars['page']['user_points_max'] != 0)
 $g_vars['page']['user_score'] = ($g_vars['page']['user_points'] * 100) / $g_vars['page']['user_points_max'];
else $g_vars['page']['user_score'] = 0;
 
$g_vars['page']['test_count'] = $i_test_count;
eventOnBeforePageGeneration(array('page_name' => 'test-select'));
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('test-select');
?>