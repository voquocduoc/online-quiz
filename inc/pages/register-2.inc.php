<?php
 
$f_username = readPostVar('username');
$f_password = readPostVar('password');
if(get_magic_quotes_gpc())
 $f_password = stripslashes($f_password);
$f_confirmpassword = readPostVar('confirmpassword');
if(get_magic_quotes_gpc())
 $f_confirmpassword = stripslashes($f_confirmpassword);
$f_email = readPostVar('email');
$f_title = readPostVar('title');
$f_firstname = readPostVar('firstname');
$f_lastname = readPostVar('lastname');
$f_middlename = readPostVar('middlename');
$f_address = readPostVar('address');
$f_city = readPostVar('city');
$f_state = readPostVar('state');
$f_zip = readPostVar('zip');
$f_country = readPostVar('country');
$f_phone = readPostVar('phone');
$f_fax = readPostVar('fax');
$f_mobile = readPostVar('mobile');
$f_pager = readPostVar('pager');
$f_ipphone = readPostVar('ipphone');
$f_webpage = readPostVar('webpage');
$f_icq = readPostVar('icq');
$f_msn = readPostVar('msn');
$f_aol = readPostVar('aol');
$f_gender = (int)readPostVar('gender');
if(($f_gender < 0) || ($f_gender > 2))
 $f_gender = 0;
$f_birthday = readPostVar('birthday', '19000101');
$f_husbandwife = readPostVar('husbandwife');
$f_children = readPostVar('children');
$f_trainer = readPostVar('trainer');
$f_photo = readPostVar('photo');
$f_company = readPostVar('company');
$f_cposition = readPostVar('cposition');
$f_department = readPostVar('department');
$f_coffice = readPostVar('coffice');
$f_caddress = readPostVar('caddress');
$f_ccity = readPostVar('ccity');
$f_cstate = readPostVar('cstate');
$f_czip = readPostVar('czip');
$f_ccountry = readPostVar('ccountry');
$f_cphone = readPostVar('cphone');
$f_cfax = readPostVar('cfax');
$f_cmobile = readPostVar('cmobile');
$f_cpager = readPostVar('cpager');
$f_cipphone = readPostVar('cipphone');
$f_cwebpage = readPostVar('cwebpage');
$f_cphoto = readPostVar('cphoto');
$f_userfield1 = readPostVar('userfield1');
$f_userfield2 = readPostVar('userfield2');
$f_userfield3 = readPostVar('userfield3');
$f_userfield4 = readPostVar('userfield4');
$f_userfield5 = readPostVar('userfield5');
$f_userfield6 = readPostVar('userfield6');
$f_userfield7 = readPostVar('userfield7');
$f_userfield8 = readPostVar('userfield8');
$f_userfield9 = readPostVar('userfield9');
$f_userfield10 = readPostVar('userfield10');
$f_groupid = (int)readPostVar('groupid');
if(!IGT_REGISTRATION_CAN_SPECIFY_GROUP || ($f_groupid <= SYSTEM_GROUP_MAX_INDEX))
 $f_groupid = DEFAULT_GROUP;
$f_testid = (int)readPostVar('testid');
 
$i_CONFIG_reg_username = getConfigItem(CONFIG_reg_username);
if($i_CONFIG_reg_username == CONFIG_CONST_show_require)
 if(!$f_username || strlen($f_username)>255)
 $g_vars['page']['errors'] .= $lngstr['page_register']['no_username'];
if(getConfigItem(CONFIG_reg_password) == CONFIG_CONST_show_require)
 if($f_password != $f_confirmpassword)
 $g_vars['page']['errors'] .= $lngstr['page_register']['no_password'];
if(getConfigItem(CONFIG_reg_password) == CONFIG_CONST_donotshow_autogenerate)
 $f_password = getAutoPassword(IGT_PASSWORD_LENGTH);
$i_checkword = getAutoPassword(IGT_CHECKWORD_LENGTH);
if(getConfigItem(CONFIG_reg_email) == CONFIG_CONST_show_require)
 if(!$f_email || !strpos($f_email, "@") || !strpos($f_email, "."))
 $g_vars['page']['errors'] .= $lngstr['page_register']['no_email'];
checkInputField('title', $f_title, getConfigItem(CONFIG_reg_title) == CONFIG_CONST_show_require);
checkInputField('firstname', $f_firstname, getConfigItem(CONFIG_reg_firstname) == CONFIG_CONST_show_require);
checkInputField('lastname', $f_lastname, getConfigItem(CONFIG_reg_lastname) == CONFIG_CONST_show_require);
checkInputField('middlename', $f_middlename, getConfigItem(CONFIG_reg_middlename) == CONFIG_CONST_show_require);
checkInputField('address', $f_address, getConfigItem(CONFIG_reg_address) == CONFIG_CONST_show_require);
checkInputField('city', $f_city, getConfigItem(CONFIG_reg_city) == CONFIG_CONST_show_require);
checkInputField('state', $f_state, getConfigItem(CONFIG_reg_state) == CONFIG_CONST_show_require);
checkInputField('zip', $f_zip, getConfigItem(CONFIG_reg_zip) == CONFIG_CONST_show_require);
checkInputField('country', $f_country, getConfigItem(CONFIG_reg_country) == CONFIG_CONST_show_require);
checkInputField('phone', $f_phone, getConfigItem(CONFIG_reg_phone) == CONFIG_CONST_show_require);
checkInputField('fax', $f_fax, getConfigItem(CONFIG_reg_fax) == CONFIG_CONST_show_require);
checkInputField('mobile', $f_mobile, getConfigItem(CONFIG_reg_mobile) == CONFIG_CONST_show_require);
checkInputField('pager', $f_pager, getConfigItem(CONFIG_reg_pager) == CONFIG_CONST_show_require);
checkInputField('ipphone', $f_ipphone, getConfigItem(CONFIG_reg_ipphone) == CONFIG_CONST_show_require);
checkInputField('webpage', $f_webpage, getConfigItem(CONFIG_reg_webpage) == CONFIG_CONST_show_require);
checkInputField('icq', $f_icq, getConfigItem(CONFIG_reg_icq) == CONFIG_CONST_show_require);
checkInputField('msn', $f_msn, getConfigItem(CONFIG_reg_msn) == CONFIG_CONST_show_require);
checkInputField('aol', $f_aol, getConfigItem(CONFIG_reg_aol) == CONFIG_CONST_show_require);
checkInputField('gender', $f_gender, getConfigItem(CONFIG_reg_gender) == CONFIG_CONST_show_require);
checkInputField('birthday', $f_birthday, getConfigItem(CONFIG_reg_birthday) == CONFIG_CONST_show_require);
checkInputField('husbandwife', $f_husbandwife, getConfigItem(CONFIG_reg_husbandwife) == CONFIG_CONST_show_require);
checkInputField('children', $f_children, getConfigItem(CONFIG_reg_children) == CONFIG_CONST_show_require);
checkInputField('trainer', $f_trainer, getConfigItem(CONFIG_reg_trainer) == CONFIG_CONST_show_require);
checkInputField('photo', $f_photo, getConfigItem(CONFIG_reg_photo) == CONFIG_CONST_show_require);
checkInputField('company', $f_company, getConfigItem(CONFIG_reg_company) == CONFIG_CONST_show_require);
checkInputField('cposition', $f_cposition, getConfigItem(CONFIG_reg_cposition) == CONFIG_CONST_show_require);
checkInputField('department', $f_department, getConfigItem(CONFIG_reg_department) == CONFIG_CONST_show_require);
checkInputField('coffice', $f_coffice, getConfigItem(CONFIG_reg_coffice) == CONFIG_CONST_show_require);
checkInputField('caddress', $f_caddress, getConfigItem(CONFIG_reg_caddress) == CONFIG_CONST_show_require);
checkInputField('ccity', $f_ccity, getConfigItem(CONFIG_reg_ccity) == CONFIG_CONST_show_require);
checkInputField('cstate', $f_cstate, getConfigItem(CONFIG_reg_cstate) == CONFIG_CONST_show_require);
checkInputField('czip', $f_czip, getConfigItem(CONFIG_reg_czip) == CONFIG_CONST_show_require);
checkInputField('ccountry', $f_ccountry, getConfigItem(CONFIG_reg_ccountry) == CONFIG_CONST_show_require);
checkInputField('cphone', $f_cphone, getConfigItem(CONFIG_reg_cphone) == CONFIG_CONST_show_require);
checkInputField('cfax', $f_cfax, getConfigItem(CONFIG_reg_cfax) == CONFIG_CONST_show_require);
checkInputField('cmobile', $f_cmobile, getConfigItem(CONFIG_reg_cmobile) == CONFIG_CONST_show_require);
checkInputField('cpager', $f_cpager, getConfigItem(CONFIG_reg_cpager) == CONFIG_CONST_show_require);
checkInputField('cipphone', $f_cipphone, getConfigItem(CONFIG_reg_cipphone) == CONFIG_CONST_show_require);
checkInputField('cwebpage', $f_cwebpage, getConfigItem(CONFIG_reg_cwebpage) == CONFIG_CONST_show_require);
checkInputField('cphoto', $f_cphoto, getConfigItem(CONFIG_reg_cphoto) == CONFIG_CONST_show_require);
checkInputField('userfield1', $f_userfield1, getConfigItem(CONFIG_reg_userfield1) == CONFIG_CONST_show_require);
checkInputField('userfield2', $f_userfield2, getConfigItem(CONFIG_reg_userfield2) == CONFIG_CONST_show_require);
checkInputField('userfield3', $f_userfield3, getConfigItem(CONFIG_reg_userfield3) == CONFIG_CONST_show_require);
checkInputField('userfield4', $f_userfield4, getConfigItem(CONFIG_reg_userfield4) == CONFIG_CONST_show_require);
checkInputField('userfield5', $f_userfield5, getConfigItem(CONFIG_reg_userfield5) == CONFIG_CONST_show_require);
checkInputField('userfield6', $f_userfield6, getConfigItem(CONFIG_reg_userfield6) == CONFIG_CONST_show_require);
checkInputField('userfield7', $f_userfield7, getConfigItem(CONFIG_reg_userfield7) == CONFIG_CONST_show_require);
checkInputField('userfield8', $f_userfield8, getConfigItem(CONFIG_reg_userfield8) == CONFIG_CONST_show_require);
checkInputField('userfield9', $f_userfield9, getConfigItem(CONFIG_reg_userfield9) == CONFIG_CONST_show_require);
checkInputField('userfield10', $f_userfield10, getConfigItem(CONFIG_reg_userfield10) == CONFIG_CONST_show_require);
function checkInputField($i_name, $i_value, $i_required) {
global $g_vars, $srv_settings, $lngstr;
if($i_required && !$i_value)
 $g_vars['page']['errors'] .= $lngstr['page_register']['no_'.$i_name];
}
 
if($g_vars['page']['errors']) {
	include_once($DOCUMENT_PAGES."register-1.inc.php");
} else { 
	$i_userid = api_addNewUser($f_username, $f_password, array(
 'email' => $f_email, 'title' => $f_title, 'firstname' => $f_firstname, 'lastname' => $f_lastname, 'middlename' => $f_middlename,
 'address' => $f_address, 'city' => $f_city, 'state' => $f_state, 'zip' => $f_zip, 'country' => $f_country, 'phone' => $f_phone, 'fax' => $f_fax, 'mobile' => $f_mobile, 'pager' => $f_pager, 'ipphone' => $f_ipphone, 'webpage' => $f_webpage, 'icq' => $f_icq, 'msn' => $f_msn, 'aol' => $f_aol, 'gender' => $f_gender, 'birthday' => $f_birthday, 'husbandwife' => $f_husbandwife, 'children' => $f_children, 'trainer' => $f_trainer, 'photo' => $f_photo,
 'company' => $f_company, 'cposition' => $f_cposition, 'department' => $f_department, 'coffice' => $f_coffice, 'caddress' => $f_caddress, 'ccity' => $f_ccity, 'cstate' => $f_cstate, 'czip' => $f_czip, 'ccountry' => $f_ccountry, 'cphone' => $f_cphone, 'cfax' => $f_cfax, 'cmobile' => $f_cmobile, 'cpager' => $f_cpager, 'cipphone' => $f_cipphone, 'cwebpage' => $f_cwebpage, 'cphoto' => $f_cphoto,
 'ufield1' => $f_userfield1, 'ufield2' => $f_userfield2, 'ufield3' => $f_userfield3, 'ufield4' => $f_userfield4, 'ufield5' => $f_userfield5, 'ufield6' => $f_userfield6, 'ufield7' => $f_userfield7, 'ufield8' => $f_userfield8, 'ufield9' => $f_userfield9, 'ufield10' => $f_userfield10,
 'checkword' => $i_checkword, 'active' => false
 ), array($f_groupid));
if($i_userid == false) { 
 $g_vars['page']['errors'] .= $lngstr['err_username_duplicate'];
unset($f_username);
include_once($DOCUMENT_PAGES."register-1.inc.php");
} else {  
 if (($i_CONFIG_reg_username == CONFIG_CONST_donotshow_autogenerate) || (($i_CONFIG_reg_username == CONFIG_CONST_show_autogenerate) && (getRecordCount($srv_settings['table_prefix'].'users', "user_name=".$g_db->qstr($f_username, get_magic_quotes_gpc())) > 1))) {
 $f_username = getAutoUsername($i_userid - 1);
$g_db->Execute("UPDATE ".$srv_settings['table_prefix']."users SET user_name=".$g_db->qstr($f_username, get_magic_quotes_gpc())." WHERE userid=".$i_userid);
$_POST['username'] = $f_username;
} 
 sendEmailTemplate(array(
 'etemplateid' => SYSTEM_ETEMPLATES_REGISTRATION_INDEX,
 'emailto' => array($f_email),
 'userid' => $i_userid, 'username' => $f_username, 'password' => $f_password,
 'email' => $f_email, 'title' => $f_title, 'firstname' => $f_firstname, 'lastname' => $f_lastname, 'middlename' => $f_middlename,
 'address' => $f_address, 'city' => $f_city, 'state' => $f_state, 'zip' => $f_zip, 'country' => $f_country, 'phone' => $f_phone, 'fax' => $f_fax, 'mobile' => $f_mobile, 'pager' => $f_pager, 'ipphone' => $f_ipphone, 'webpage' => $f_webpage, 'icq' => $f_icq, 'msn' => $f_msn, 'aol' => $f_aol, 'gender' => $f_gender, 'birthday' => $f_birthday, 'husbandwife' => $f_husbandwife, 'children' => $f_children, 'trainer' => $f_trainer, 'photo' => $f_photo,
 'company' => $f_company, 'cposition' => $f_cposition, 'department' => $f_department, 'coffice' => $f_coffice, 'caddress' => $f_caddress, 'ccity' => $f_ccity, 'cstate' => $f_cstate, 'czip' => $f_czip, 'ccountry' => $f_ccountry, 'cphone' => $f_cphone, 'cfax' => $f_cfax, 'cmobile' => $f_cmobile, 'cpager' => $f_cpager, 'cipphone' => $f_cipphone, 'cwebpage' => $f_cwebpage, 'cphoto' => $f_cphoto,
 'ufield1' => $f_userfield1, 'ufield2' => $f_userfield2, 'ufield3' => $f_userfield3, 'ufield4' => $f_userfield4, 'ufield5' => $f_userfield5, 'ufield6' => $f_userfield6, 'ufield7' => $f_userfield7, 'ufield8' => $f_userfield8, 'ufield9' => $f_userfield9, 'ufield10' => $f_userfield10,
 'checkword' => $i_checkword
 )); 
 $i_admin_emails = getRecordItem($srv_settings['table_prefix'].'etemplates', 'etemplate_from', 'etemplateid='.SYSTEM_ETEMPLATES_ACTIVATE_INDEX);
$i_admin_emails = explode(SYSTEM_ARRAY_ITEM_SEPARATOR, $i_admin_emails);
sendEmailTemplate(array(
 'etemplateid' => SYSTEM_ETEMPLATES_REGISTRATION_INDEX_FOR_ADMIN,
 'emailto' => $i_admin_emails,
 'userid' => $i_userid, 'username' => $f_username, 'password' => $f_password,
 'email' => $f_email, 'title' => $f_title, 'firstname' => $f_firstname, 'lastname' => $f_lastname, 'middlename' => $f_middlename,
 'address' => $f_address, 'city' => $f_city, 'state' => $f_state, 'zip' => $f_zip, 'country' => $f_country, 'phone' => $f_phone, 'fax' => $f_fax, 'mobile' => $f_mobile, 'pager' => $f_pager, 'ipphone' => $f_ipphone, 'webpage' => $f_webpage, 'icq' => $f_icq, 'msn' => $f_msn, 'aol' => $f_aol, 'gender' => $f_gender, 'birthday' => $f_birthday, 'husbandwife' => $f_husbandwife, 'children' => $f_children, 'trainer' => $f_trainer, 'photo' => $f_photo,
 'company' => $f_company, 'cposition' => $f_cposition, 'department' => $f_department, 'coffice' => $f_coffice, 'caddress' => $f_caddress, 'ccity' => $f_ccity, 'cstate' => $f_cstate, 'czip' => $f_czip, 'ccountry' => $f_ccountry, 'cphone' => $f_cphone, 'cfax' => $f_cfax, 'cmobile' => $f_cmobile, 'cpager' => $f_cpager, 'cipphone' => $f_cipphone, 'cwebpage' => $f_cwebpage, 'cphoto' => $f_cphoto,
 'ufield1' => $f_userfield1, 'ufield2' => $f_userfield2, 'ufield3' => $f_userfield3, 'ufield4' => $f_userfield4, 'ufield5' => $f_userfield5, 'ufield6' => $f_userfield6, 'ufield7' => $f_userfield7, 'ufield8' => $f_userfield8, 'ufield9' => $f_userfield9, 'ufield10' => $f_userfield10,
 'checkword' => $i_checkword
 ));
switch(getConfigItem(CONFIG_upon_registration)) {
 case CONFIG_CONST_upon_registration_signinautomatically:
 activateUserByID($i_userid, true);
signinUser($f_username, $f_password, false);
if($f_testid > 0)
 gotoLocation('test.php?testid='.$f_testid);
else gotoLocation('index.php');
break;
case CONFIG_CONST_upon_registration_sendactivationemailtouser:
 sendEmailTemplate(array(
 'etemplateid' => SYSTEM_ETEMPLATES_ACTIVATE_INDEX,
 'emailto' => array($f_email),
 'userid' => $i_userid, 'username' => $f_username, 'password' => $f_password,
 'email' => $f_email, 'title' => $f_title, 'firstname' => $f_firstname, 'lastname' => $f_lastname, 'middlename' => $f_middlename,
 'address' => $f_address, 'city' => $f_city, 'state' => $f_state, 'zip' => $f_zip, 'country' => $f_country, 'phone' => $f_phone, 'fax' => $f_fax, 'mobile' => $f_mobile, 'pager' => $f_pager, 'ipphone' => $f_ipphone, 'webpage' => $f_webpage, 'icq' => $f_icq, 'msn' => $f_msn, 'aol' => $f_aol, 'gender' => $f_gender, 'birthday' => $f_birthday, 'husbandwife' => $f_husbandwife, 'children' => $f_children, 'trainer' => $f_trainer, 'photo' => $f_photo,
 'company' => $f_company, 'cposition' => $f_cposition, 'department' => $f_department, 'coffice' => $f_coffice, 'caddress' => $f_caddress, 'ccity' => $f_ccity, 'cstate' => $f_cstate, 'czip' => $f_czip, 'ccountry' => $f_ccountry, 'cphone' => $f_cphone, 'cfax' => $f_cfax, 'cmobile' => $f_cmobile, 'cpager' => $f_cpager, 'cipphone' => $f_cipphone, 'cwebpage' => $f_cwebpage, 'cphoto' => $f_cphoto,
 'ufield1' => $f_userfield1, 'ufield2' => $f_userfield2, 'ufield3' => $f_userfield3, 'ufield4' => $f_userfield4, 'ufield5' => $f_userfield5, 'ufield6' => $f_userfield6, 'ufield7' => $f_userfield7, 'ufield8' => $f_userfield8, 'ufield9' => $f_userfield9, 'ufield10' => $f_userfield10,
 'checkword' => $i_checkword
 ));
$g_vars['page']['notifications'] = $lngstr['page-register']['check_activation_email'];
include_once($DOCUMENT_PAGES."signin-1.inc.php");
break;
case CONFIG_CONST_upon_registration_sendactivationemailtoadmin:
 $i_admin_emails = getRecordItem($srv_settings['table_prefix'].'etemplates', 'etemplate_from', 'etemplateid='.SYSTEM_ETEMPLATES_ACTIVATE_INDEX);
$i_admin_emails = explode(SYSTEM_ARRAY_ITEM_SEPARATOR, $i_admin_emails);
sendEmailTemplate(array(
 'etemplateid' => SYSTEM_ETEMPLATES_ACTIVATE_INDEX,
 'emailto' => $i_admin_emails,
 'userid' => $i_userid, 'username' => $f_username, 'password' => $f_password,
 'email' => $f_email, 'title' => $f_title, 'firstname' => $f_firstname, 'lastname' => $f_lastname, 'middlename' => $f_middlename,
 'address' => $f_address, 'city' => $f_city, 'state' => $f_state, 'zip' => $f_zip, 'country' => $f_country, 'phone' => $f_phone, 'fax' => $f_fax, 'mobile' => $f_mobile, 'pager' => $f_pager, 'ipphone' => $f_ipphone, 'webpage' => $f_webpage, 'icq' => $f_icq, 'msn' => $f_msn, 'aol' => $f_aol, 'gender' => $f_gender, 'birthday' => $f_birthday, 'husbandwife' => $f_husbandwife, 'children' => $f_children, 'trainer' => $f_trainer, 'photo' => $f_photo,
 'company' => $f_company, 'cposition' => $f_cposition, 'department' => $f_department, 'coffice' => $f_coffice, 'caddress' => $f_caddress, 'ccity' => $f_ccity, 'cstate' => $f_cstate, 'czip' => $f_czip, 'ccountry' => $f_ccountry, 'cphone' => $f_cphone, 'cfax' => $f_cfax, 'cmobile' => $f_cmobile, 'cpager' => $f_cpager, 'cipphone' => $f_cipphone, 'cwebpage' => $f_cwebpage, 'cphoto' => $f_cphoto,
 'ufield1' => $f_userfield1, 'ufield2' => $f_userfield2, 'ufield3' => $f_userfield3, 'ufield4' => $f_userfield4, 'ufield5' => $f_userfield5, 'ufield6' => $f_userfield6, 'ufield7' => $f_userfield7, 'ufield8' => $f_userfield8, 'ufield9' => $f_userfield9, 'ufield10' => $f_userfield10,
 'checkword' => $i_checkword
 ));
$g_vars['page']['notifications'] = $lngstr['page-register']['wait_for_approval'];
include_once($DOCUMENT_PAGES."signin-1.inc.php");
break;
case CONFIG_CONST_upon_registration_custom:
 gotoLocation('register.php?action=step2&userid='.$i_userid);
break;
default: 
 activateUserByID($i_userid, true);
$g_vars['page']['notifications'] = sprintf($lngstr['page-register']['successful'], $f_username);
include_once($DOCUMENT_PAGES."signin-1.inc.php");
}
}
}
?>