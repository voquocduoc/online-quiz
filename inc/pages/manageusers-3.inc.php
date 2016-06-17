<?php
$f_userid = (int)readGetVar('userid');
$bIsNewUser = ($f_userid <= 0);
if(!$bIsNewUser) {
	$arrValuesToUpdate = array();
$arrValuesToUpdate['userid'] = $f_userid;
}
 
if(isset($_POST['user_enabled']))
 $arrValuesToUpdate['user_enabled'] = (int)(boolean)readPostVar('user_enabled');
if(isset($_POST['user_expiredate'])) {
	$f_user_expiredate = readPostVar('user_expiredate');
if(empty($f_user_expiredate))
 $f_user_expiredate = 0;
else $f_user_expiredate = (int)strtotime($f_user_expiredate);
$arrValuesToUpdate['user_expiredate'] = $f_user_expiredate;
}
if(isset($_POST['user_name']))
 $arrValuesToUpdate['user_name'] = readPostVar('user_name');
if(isset($_POST['user_password']) && (strlen($_POST['user_password']) > 0)) {
	$f_user_password = readPostVar('user_password');
$f_user_password_confirm = readPostVar('user_password_confirm'); 
	if($f_user_password == $f_user_password_confirm) {
 if(get_magic_quotes_gpc())
 $f_user_password = stripslashes($f_user_password);
$i_pass_hash = md5($f_user_password);
$arrValuesToUpdate['user_passhash'] = $i_pass_hash;
} else {
 $g_vars['page']['errors'] .= $lngstr['page_register']['no_password'];
}
}
if(isset($_POST['user_email']))
 $arrValuesToUpdate['user_email'] = readPostVar('user_email');
if(isset($_POST['user_firstname']))
 $arrValuesToUpdate['user_firstname'] = readPostVar('user_firstname');
if(isset($_POST['user_lastname']))
 $arrValuesToUpdate['user_lastname'] = readPostVar('user_lastname');
if(isset($_POST['user_middlename']))
 $arrValuesToUpdate['user_middlename'] = readPostVar('user_middlename');
if(isset($_POST['user_address']))
 $arrValuesToUpdate['user_address'] = readPostVar('user_address');
if(isset($_POST['user_city']))
 $arrValuesToUpdate['user_city'] = readPostVar('user_city');
if(isset($_POST['user_state']))
 $arrValuesToUpdate['user_state'] = readPostVar('user_state');
if(isset($_POST['user_zip']))
 $arrValuesToUpdate['user_zip'] = readPostVar('user_zip');
if(isset($_POST['user_country']))
 $arrValuesToUpdate['user_country'] = readPostVar('user_country');
if(isset($_POST['user_phone']))
 $arrValuesToUpdate['user_phone'] = readPostVar('user_phone');
if(isset($_POST['user_fax']))
 $arrValuesToUpdate['user_fax'] = readPostVar('user_fax');
if(isset($_POST['user_mobile']))
 $arrValuesToUpdate['user_mobile'] = readPostVar('user_mobile');
if(isset($_POST['user_pager']))
 $arrValuesToUpdate['user_pager'] = readPostVar('user_pager');
if(isset($_POST['user_ipphone']))
 $arrValuesToUpdate['user_ipphone'] = readPostVar('user_ipphone');
if(isset($_POST['user_webpage']))
 $arrValuesToUpdate['user_webpage'] = readPostVar('user_webpage');
if(isset($_POST['user_icq']))
 $arrValuesToUpdate['user_icq'] = readPostVar('user_icq');
if(isset($_POST['user_msn']))
 $arrValuesToUpdate['user_msn'] = readPostVar('user_msn');
if(isset($_POST['user_aol']))
 $arrValuesToUpdate['user_aol'] = readPostVar('user_aol');
if(isset($_POST['user_gender']))
 $arrValuesToUpdate['user_gender'] = readPostVar('user_gender');
 
if(isset($_POST['user_husbandwife']))
 $arrValuesToUpdate['user_husbandwife'] = readPostVar('user_husbandwife');
if(isset($_POST['user_children']))
 $arrValuesToUpdate['user_children'] = readPostVar('user_children');
if(isset($_POST['user_trainer']))
 $arrValuesToUpdate['user_trainer'] = readPostVar('user_trainer');
if(isset($_POST['user_photo']))
 $arrValuesToUpdate['user_photo'] = readPostVar('user_photo');
if(isset($_POST['user_company']))
 $arrValuesToUpdate['user_company'] = readPostVar('user_company');
if(isset($_POST['user_cposition']))
 $arrValuesToUpdate['user_cposition'] = readPostVar('user_cposition');
if(isset($_POST['user_department']))
 $arrValuesToUpdate['user_department'] = readPostVar('user_department');
if(isset($_POST['user_coffice']))
 $arrValuesToUpdate['user_coffice'] = readPostVar('user_coffice');
if(isset($_POST['user_caddress']))
 $arrValuesToUpdate['user_caddress'] = readPostVar('user_caddress');
if(isset($_POST['user_ccity']))
 $arrValuesToUpdate['user_ccity'] = readPostVar('user_ccity');
if(isset($_POST['user_cstate']))
 $arrValuesToUpdate['user_cstate'] = readPostVar('user_cstate');
if(isset($_POST['user_czip']))
 $arrValuesToUpdate['user_czip'] = readPostVar('user_czip');
if(isset($_POST['user_ccountry']))
 $arrValuesToUpdate['user_ccountry'] = readPostVar('user_ccountry');
if(isset($_POST['user_cphone']))
 $arrValuesToUpdate['user_cphone'] = readPostVar('user_cphone');
if(isset($_POST['user_cfax']))
 $arrValuesToUpdate['user_cfax'] = readPostVar('user_cfax');
if(isset($_POST['user_cmobile']))
 $arrValuesToUpdate['user_cmobile'] = readPostVar('user_cmobile');
if(isset($_POST['user_cpager']))
 $arrValuesToUpdate['user_cpager'] = readPostVar('user_cpager');
if(isset($_POST['user_cipphone']))
 $arrValuesToUpdate['user_cipphone'] = readPostVar('user_cipphone');
if(isset($_POST['user_cwebpage']))
 $arrValuesToUpdate['user_cwebpage'] = readPostVar('user_cwebpage');
if(isset($_POST['user_cphoto']))
 $arrValuesToUpdate['user_cphoto'] = readPostVar('user_cphoto');
if(getConfigItem(CONFIG_reg_userfield1) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield1']))
 $arrValuesToUpdate['user_ufield1'] = readPostVar('user_ufield1');
}
if(getConfigItem(CONFIG_reg_userfield2) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield2']))
 $arrValuesToUpdate['user_ufield2'] = readPostVar('user_ufield2');
}
if(getConfigItem(CONFIG_reg_userfield3) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield3']))
 $arrValuesToUpdate['user_ufield3'] = readPostVar('user_ufield3');
}
if(getConfigItem(CONFIG_reg_userfield4) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield4']))
 $arrValuesToUpdate['user_ufield4'] = readPostVar('user_ufield4');
}
if(getConfigItem(CONFIG_reg_userfield5) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield5']))
 $arrValuesToUpdate['user_ufield5'] = readPostVar('user_ufield5');
}
if(getConfigItem(CONFIG_reg_userfield6) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield6']))
 $arrValuesToUpdate['user_ufield6'] = readPostVar('user_ufield6');
}
if(getConfigItem(CONFIG_reg_userfield7) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield7']))
 $arrValuesToUpdate['user_ufield7'] = readPostVar('user_ufield7');
}
if(getConfigItem(CONFIG_reg_userfield8) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield8']))
 $arrValuesToUpdate['user_ufield8'] = readPostVar('user_ufield8');
}
if(getConfigItem(CONFIG_reg_userfield9) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield9']))
 $arrValuesToUpdate['user_ufield9'] = readPostVar('user_ufield9');
}
if(getConfigItem(CONFIG_reg_userfield10) > CONFIG_CONST_donotshow) {
	if(isset($_POST['user_ufield10']))
 $arrValuesToUpdate['user_ufield10'] = readPostVar('user_ufield10');
}
if(isset($_POST['user_notes']))
 $arrValuesToUpdate['user_notes'] = readPostVar('user_notes');
 
$bIsUserNameDuplicated = getRecordCount($srv_settings['table_prefix'].'users', 'user_name='.$arrValuesToUpdate['user_name'].(!$bIsNewUser ? ' AND userid<>'.$arrValuesToUpdate['userid'] : '')) > 0;
if($bIsUserNameDuplicated)
 $g_vars['page']['errors'] .= $lngstr['err_username_duplicate'];
 
if($g_vars['page']['errors']) {
	include_once($DOCUMENT_PAGES."manageusers-2.inc.php");
} else { 
	if($bIsNewUser) {
 $f_userid = addNewUser($arrValuesToUpdate, array(), true);
} else {
 updateUser($arrValuesToUpdate);
} 
	if(isset($_POST['group']) && !empty($_POST['group'][0])) { 
 $arrGroupIDsNew = readPostVar('group');
unset($arrGroupIDsNew[0]); 
 $arrGroupIDsToAdd = array();
$arrGroupIDsToDelete = array(); 
 $i_rSet1 = $g_db->Execute("SELECT ".$srv_settings['table_prefix']."groups_users.groupid FROM ".$srv_settings['table_prefix']."groups_users WHERE userid=".$f_userid);
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 while(!$i_rSet1->EOF) { 
 if(!empty($arrGroupIDsNew[$i_rSet1->fields['groupid']]))
 unset($arrGroupIDsNew[$i_rSet1->fields['groupid']]);
else array_push($arrGroupIDsToDelete, $i_rSet1->fields['groupid']);
$i_rSet1->MoveNext();
}
$i_rSet1->Close();
}
foreach($arrGroupIDsNew as $key=>$val)
 array_push($arrGroupIDsToAdd, $key);
manageUserGroups(array($f_userid), $arrGroupIDsToAdd, true);
manageUserGroups(array($f_userid), $arrGroupIDsToDelete, false);
}
gotoLocation('users.php');
}
?>
