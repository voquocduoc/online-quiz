<?php
$f_testid = (int)readGetVar('testid');
 
$f_test_enabled = (int)(boolean)readPostVar('test_enabled');
$f_test_type = (int)(boolean)readPostVar('test_type');
$f_subjectid = (int)readPostVar('subjectid');
$f_gscaleid = (int)readPostVar('gscaleid');
$f_test_name = readPostVar('test_name');
$f_test_name = $g_db->qstr($f_test_name, get_magic_quotes_gpc());
$f_test_code = readPostVar('test_code');
$f_test_code = $g_db->qstr($f_test_code, get_magic_quotes_gpc());
$f_test_datestart = readPostVar('test_datestart');
if(empty($f_test_datestart))
 $f_test_datestart = 0;
else $f_test_datestart = (int)strtotime($f_test_datestart);
$f_test_dateend = readPostVar('test_dateend');
if(empty($f_test_dateend))
 $f_test_dateend = 0;
else $f_test_dateend = (int)strtotime($f_test_dateend);
$f_test_time_donotuse = (boolean)readPostVar('test_time_donotuse');
if($f_test_time_donotuse) {
	$nTestTime = 0;
} else {
	$f_strTestTime = readPostVar('test_time');
$arrTestTime = explode(':', $f_strTestTime);
$nTestTime = 0;
if(!empty($arrTestTime))
 $nTestTime += (int)array_pop($arrTestTime); 
	if(!empty($arrTestTime))
 $nTestTime += (int)(array_pop($arrTestTime) * 60); 
	if(!empty($arrTestTime))
 $nTestTime += (int)(array_pop($arrTestTime) * 3600); 
	if($nTestTime < 0)
 $nTestTime = 0;
}
$f_test_timeforceout = (int)(boolean)readPostVar('test_timeforceout');
$f_test_attempts = (int)readPostVar('test_attempts');
$f_test_contentprotection = (int)readPostVar('test_contentprotection');
$f_test_qsperpage = (int)readPostVar('test_qsperpage');
if($f_test_qsperpage < 0)
 $f_test_qsperpage = 0;
$f_test_canreview = (int)readPostVar('test_canreview');
if($f_test_canreview < 0)
 $f_test_canreview = 0;
$f_test_shuffleq = (int)(boolean)readPostVar('test_shuffleq');
$f_test_shufflea = (int)(boolean)readPostVar('test_shufflea');
$f_test_showqfeedback = (int)(boolean)readPostVar('test_showqfeedback');
$f_test_result_showgrade = (int)(boolean)readPostVar('test_result_showgrade');
$f_test_result_showgradefeedback = (int)(boolean)readPostVar('test_result_showgradefeedback');
$f_test_result_showanswers = (int)(boolean)readPostVar('test_result_showanswers');
$f_test_result_showpoints = (int)(boolean)readPostVar('test_result_showpoints');
$f_test_result_rtemplateid = (int)readPostVar('test_result_rtemplateid');
$f_rtemplateid = (int)readPostVar('rtemplateid');
$f_test_reportgradecondition = (int)readPostVar('test_reportgradecondition');
$f_test_result_showhtml = (int)(boolean)readPostVar('test_result_showhtml');
$f_test_result_showpdf = (int)(boolean)readPostVar('test_result_showpdf');
$f_test_result_email = readPostVar('test_result_email');
$f_test_result_email = $g_db->qstr($f_test_result_email, get_magic_quotes_gpc());
$f_result_etemplateid = (int)readPostVar('result_etemplateid');
$f_test_result_emailtouser = (int)(boolean)readPostVar('test_result_emailtouser');
$f_test_description = readPostVar('test_description');
$f_test_description = $g_db->qstr($f_test_description, get_magic_quotes_gpc());
$f_test_instructions = readPostVar('test_instructions'); 
if(isHTMLAreaEmpty($f_test_instructions))
 $f_test_instructions = '';
$f_test_instructions = $g_db->qstr($f_test_instructions, get_magic_quotes_gpc());
$f_test_prevtestid = (int)readPostVar('test_prevtestid');
$f_test_nexttestid = (int)readPostVar('test_nexttestid');
$f_test_price = (float)readPostVar('test_price');
$f_test_price = (int)($f_test_price * 100); 
$f_test_other_repeatuntilcorrect = (int)(boolean)readPostVar('test_other_repeatuntilcorrect');
$f_test_notes = readPostVar('test_notes');
$f_test_notes = $g_db->qstr($f_test_notes, get_magic_quotes_gpc());
$f_test_forall = (int)(boolean)readPostVar('test_forall');
$f_group = isset($_POST['group']) ? $_POST['group'] : array();
 
if($i_rSet2 = $g_db->Execute("SELECT subjectid FROM ".$srv_settings['table_prefix']."subjects WHERE subjectid=$f_subjectid"))
 $sql_subject_exists = $i_rSet2->RecordCount() > 0;
else $sql_subject_exists = false;
if(!$sql_subject_exists)
 $g_vars['page']['errors'] .= $lngstr['err_subject_doesnotexist'];
  
 
$strQrySet = "test_type=".$f_test_type.", subjectid=".$f_subjectid.", gscaleid=".$f_gscaleid.", rtemplateid=".$f_rtemplateid.", test_reportgradecondition=".$f_test_reportgradecondition.", result_etemplateid=".$f_result_etemplateid.", test_name=".$f_test_name.", test_code=".$f_test_code.", test_description=".$f_test_description.", test_time=".$nTestTime.", test_timeforceout=$f_test_timeforceout, test_attempts=$f_test_attempts, test_contentprotection=$f_test_contentprotection, test_shuffleq=$f_test_shuffleq, test_shufflea=$f_test_shufflea, test_qsperpage=$f_test_qsperpage, test_canreview=$f_test_canreview, test_showqfeedback=$f_test_showqfeedback, test_result_showgrade=$f_test_result_showgrade, test_result_showgradefeedback=$f_test_result_showgradefeedback, test_result_showanswers=$f_test_result_showanswers, test_result_showpoints=$f_test_result_showpoints, test_result_rtemplateid=$f_test_result_rtemplateid, test_result_showhtml=$f_test_result_showhtml, test_result_showpdf=$f_test_result_showpdf, test_result_email=$f_test_result_email, test_result_emailtouser=$f_test_result_emailtouser, test_datestart=$f_test_datestart, test_dateend=$f_test_dateend, test_instructions=$f_test_instructions, test_prevtestid=$f_test_prevtestid, test_nexttestid=$f_test_nexttestid, test_price=$f_test_price, test_other_repeatuntilcorrect=$f_test_other_repeatuntilcorrect, test_notes=$f_test_notes, test_forall=$f_test_forall, test_enabled=$f_test_enabled";
  
if($g_vars['page']['errors']) {
	include_once($DOCUMENT_PAGES."test-manager-2.inc.php");
} else { 
	if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."tests SET ".$strQrySet." WHERE testid=$f_testid")===false)
 showDBError(__FILE__, 1);
   
	if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."groups_tests WHERE testid=".$f_testid)===false)
 showDBError(__FILE__, 2);
foreach($f_group as $i_groupid=>$i_ischecked) {
 if($i_ischecked)
 $g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."groups_tests (groupid, testid) VALUES (".$i_groupid.", ".$f_testid.")");
}
if(isset($_POST['bsubmit2']))
 gotoLocation('test-manager.php'.getURLAddon('?action=editt', array('action')));
else gotoLocation('test-manager.php'.getURLAddon('', array('action', 'testid')));
}
?>