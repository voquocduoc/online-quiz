<?php
 
$f_username = readPostVar('username');
$f_username = $g_db->qstr($f_username, get_magic_quotes_gpc());
 
$i_useremail = '';
$i_userlastname = '';
$i_userfirstname = '';
$i_isok = false;
$i_rSet1 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."users WHERE user_name=".$f_username." AND user_enabled=1", 1);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) {
 $i_isok = true;
$i_useremail = $i_rSet1->fields['user_email'];
$i_userfirstname = $i_rSet1->fields['user_firstname'];
$i_userlastname = $i_rSet1->fields['user_lastname'];
}
}
 
if($i_isok) {
	$i_password = getAutoPassword(IGT_PASSWORD_LENGTH);
$i_password_hash = md5($i_password);
$i_password_hash = $g_db->qstr($i_password_hash, 0);
if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."users SET user_passhash=".$i_password_hash." WHERE user_name=$f_username AND user_enabled=1")===false)
 showDBError(__FILE__, 2);
 
	$i_isok = $i_isok && ($i_rSet3 = $g_db->SelectLimit("SELECT etemplate_from, etemplate_subject, etemplate_body FROM ".$srv_settings['table_prefix']."etemplates WHERE etemplateid=".SYSTEM_ETEMPLATES_LOSTPASSWORD_INDEX, 1));
if($i_isok)
 $i_isok = $i_isok && (!$i_rSet3->EOF); 
	if($i_isok) {
 $i_email_subject = $i_rSet3->fields['etemplate_subject'];
$i_email_body = $i_rSet3->fields['etemplate_body'];
if($i_email_body) {
 $i_email_body = str_replace(ETEMPLATE_TAG_USERNAME, $i_rSet1->fields['user_name'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_PASSWORD, $i_password, $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_TITLE, $i_rSet1->fields['user_title'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_FIRST_NAME, $i_rSet1->fields['user_firstname'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_LAST_NAME, $i_rSet1->fields['user_lastname'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_MIDDLE_NAME, $i_rSet1->fields['user_middlename'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_EMAIL, $i_rSet1->fields['user_email'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_ADDRESS, $i_rSet1->fields['user_address'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CITY, $i_rSet1->fields['user_city'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_STATE, $i_rSet1->fields['user_state'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_ZIP, $i_rSet1->fields['user_zip'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_COUNTRY, $i_rSet1->fields['user_country'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_PHONE, $i_rSet1->fields['user_phone'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_FAX, $i_rSet1->fields['user_fax'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_MOBILE, $i_rSet1->fields['user_mobile'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_PAGER, $i_rSet1->fields['user_pager'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_IPPHONE, $i_rSet1->fields['user_ipphone'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_WEBPAGE, $i_rSet1->fields['user_webpage'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_ICQ, $i_rSet1->fields['user_icq'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_MSN, $i_rSet1->fields['user_msn'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_AOL, $i_rSet1->fields['user_aol'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_GENDER, $i_rSet1->fields['user_gender'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_BIRTHDAY, $i_rSet1->fields['user_birthday'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_HUSBANDWIFE, $i_rSet1->fields['user_husbandwife'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CHILDREN, $i_rSet1->fields['user_children'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_TRAINER, $i_rSet1->fields['user_trainer'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_PHOTO, $i_rSet1->fields['user_photo'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_COMPANY, $i_rSet1->fields['user_company'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CPOSITION, $i_rSet1->fields['user_cposition'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_DEPARTMENT, $i_rSet1->fields['user_department'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_COFFICE, $i_rSet1->fields['user_coffice'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CADDRESS, $i_rSet1->fields['user_caddress'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CCITY, $i_rSet1->fields['user_ccity'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CSTATE, $i_rSet1->fields['user_cstate'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CZIP, $i_rSet1->fields['user_czip'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CCOUNTRY, $i_rSet1->fields['user_ccountry'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CPHONE, $i_rSet1->fields['user_cphone'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CFAX, $i_rSet1->fields['user_cfax'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CMOBILE, $i_rSet1->fields['user_cmobile'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CPAGER, $i_rSet1->fields['user_cpager'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CIPPHONE, $i_rSet1->fields['user_cipphone'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CWEBPAGE, $i_rSet1->fields['user_cwebpage'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_CPHOTO, $i_rSet1->fields['user_cphoto'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD1, $i_rSet1->fields['user_ufield1'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD2, $i_rSet1->fields['user_ufield2'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD3, $i_rSet1->fields['user_ufield3'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD4, $i_rSet1->fields['user_ufield4'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD5, $i_rSet1->fields['user_ufield5'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD6, $i_rSet1->fields['user_ufield6'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD7, $i_rSet1->fields['user_ufield7'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD8, $i_rSet1->fields['user_ufield8'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD9, $i_rSet1->fields['user_ufield9'], $i_email_body);
$i_email_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD10, $i_rSet1->fields['user_ufield10'], $i_email_body);
sendEmail(array('from' => $i_rSet3->fields['etemplate_from'], 'to' => $i_rSet1->fields['user_email'], 'subject' => $i_email_subject, 'body' => $i_email_body));
}
}
if($i_rSet3)
 $i_rSet3->Close();
if($i_rSet1)
 $i_rSet1->Close();
$g_vars['page']['title'] = $lngstr['page_title_signin'];
$g_vars['page']['notifications'] = $lngstr['inf_password_reset'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
} else {
	if($i_rSet1)
 $i_rSet1->Close();
$g_vars['page']['title'] = $lngstr['page_title_signin'];
$g_vars['page']['errors'] = $lngstr['err_username_not_found'];
include_once($DOCUMENT_PAGES.'lostpassword-1.inc.php');
}
?>
