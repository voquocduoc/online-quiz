<?php
$f_groupid = (int)readGetVar('groupid');
 
$f_group_name = readPostVar('group_name');
$f_group_name = $g_db->qstr($f_group_name, get_magic_quotes_gpc());
$f_group_description = readPostVar('group_description');
$f_group_description = $g_db->qstr($f_group_description, get_magic_quotes_gpc());
$f_access_tests = (int)readPostVar('access_tests');
$f_access_questionbank = (int)readPostVar('access_questionbank');
$f_access_subjects = (int)readPostVar('access_subjects');
$f_access_testmanager = (int)readPostVar('access_testmanager');
$f_access_gradingsystems = (int)readPostVar('access_gradingsystems');
$f_access_emailtemplates = (int)readPostVar('access_emailtemplates');
$f_access_reporttemplates = (int)readPostVar('access_reporttemplates');
$f_access_reportsmanager = (int)readPostVar('access_reportsmanager');
$f_access_users = (int)readPostVar('access_users');
$f_access_groups = (int)readPostVar('access_groups');
$f_access_config = (int)readPostVar('access_config');
$f_access_visitors = (int)readPostVar('access_visitors');
       
 
if($g_vars['page']['errors']) {
	include_once($DOCUMENT_PAGES."groups-2.inc.php");
} else { 
	if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."groups SET group_name=".$f_group_name.", group_description=".$f_group_description.", access_tests=".$f_access_tests.", access_testmanager=".$f_access_testmanager.", access_gradingsystems=".$f_access_gradingsystems.", access_emailtemplates=".$f_access_emailtemplates.", access_reporttemplates=".$f_access_reporttemplates.", access_reportsmanager=".$f_access_reportsmanager.", access_questionbank=".$f_access_questionbank.", access_subjects=".$f_access_subjects.", access_groups=".$f_access_groups.", access_users=".$f_access_users.", access_visitors=".$f_access_visitors.", access_config=".$f_access_config." WHERE groupid=".$f_groupid)===false)
 showDBError(__FILE__, 1);
gotoLocation('groups.php');
}
?>
