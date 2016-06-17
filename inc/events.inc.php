<?php
 
function eventOnBeforePageGeneration($i_parameters = array()) {
global $g_db, $G_SESSION, $lngstr, $srv_settings, $g_vars, $g_events;
$i_page_name = $i_parameters['page_name'];
 
	$i_event_name = 'OnBeforePageGeneration_'.$i_page_name;
if(isset($g_events) && !empty($g_events[$i_event_name]))
 $i_event_function_name = $g_events[$i_event_name];
else $i_event_function_name = '';
if((strlen($i_event_function_name) > 0) && (function_exists($i_event_function_name)))
 eval($i_event_function_name.'($i_parameters);');
switch($i_page_name) {
  
  
  
	}
}
function eventOnBeforeFunction($i_parameters = array()) {
global $g_db, $G_SESSION, $lngstr, $srv_settings, $g_vars;
$i_function_name = $i_parameters['function_name'];
switch($i_function_name) {
	}
}
function eventOnAfterFunction($i_parameters = array()) {
global $g_db, $G_SESSION, $lngstr, $srv_settings, $g_vars;
$i_function_name = $i_parameters['function_name'];
switch($i_function_name) {
  
	}
}
  
function eventOnQueryTestStatus($i_parameters = array()) {
global $g_db, $G_SESSION, $lngstr, $srv_settings, $g_vars, $i_rSet1;
$i_testno = $i_parameters['testno'];
$i_testid = $i_parameters['testid'];
$i_result = $i_parameters['status'];
  
	if(($i_rSet1->fields['test_prevtestid'] > 0) && (getRecordCount($srv_settings['table_prefix'].'results', 'testid='.$i_rSet1->fields['test_prevtestid'].' AND userid='.$G_SESSION['userid'].' AND gscale_gradeid > 0') <= 0)) {
 $g_vars['page']['test'][$i_testno]['visible'] = false;
$i_result = IGT_TEST_STATUS_UNAVAILABLE;
} 
  
  
  
  
  
  
	return $i_result;
}
  
function eventOnBeforeTestStart($i_parameters = array()) {
global $g_db, $G_SESSION, $srv_settings;
  
  
}
function eventOnBeforeTestSubmit($i_parameters = array()) {
  
}
function eventOnAfterTestSubmit($i_parameters = array()) {
}
function eventOnAfterTestShowResults($i_parameters = array()) {
}
  
function eventOnQueryCustomReportPDF($i_parameters = array()) {
global $i_pdf, $i_rSet1, $i_rSet2, $i_rSet3, $i_rSet4, $i_rSet5, $i_rSet6;
$i_result = false;
 
  
  
return $i_result;
}
  
?>