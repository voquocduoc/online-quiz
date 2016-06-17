<?php
 
$f_userid = (int)readGetVar('userid');
$f_checkword = readGetVar('checkword');
$f_checkword = $g_db->qstr($f_checkword, get_magic_quotes_gpc());
 
$i_isok = getRecordCount($srv_settings['table_prefix'].'users', 'userid='.$f_userid.' AND user_checkword='.$f_checkword) > 0;
if($i_isok) {  
	activateUserByID($f_userid, true);  
	$i_isok = $i_isok && ($i_rSet1 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."users WHERE userid=".$f_userid, 1));
if($i_isok)
 $i_isok = $i_isok && (!$i_rSet1->EOF);
if($i_isok) {
 sendEmailTemplate(array(
 'etemplateid' => SYSTEM_ETEMPLATES_ACTIVATED_INDEX,
 'emailto' => array($i_rSet1->fields['user_email']),
 'userid' => $f_userid, 'username' => $i_rSet1->fields['user_name'],
 'email' => $i_rSet1->fields['user_email'], 'title' => $i_rSet1->fields['user_title'], 'firstname' => $i_rSet1->fields['user_firstname'], 'lastname' => $i_rSet1->fields['user_lastname'], 'middlename' => $i_rSet1->fields['user_middlename'],
 'address' => $i_rSet1->fields['user_address'], 'city' => $i_rSet1->fields['user_city'], 'state' => $i_rSet1->fields['user_state'], 'zip' => $i_rSet1->fields['user_zip'], 'country' => $i_rSet1->fields['user_country'], 'phone' => $i_rSet1->fields['user_phone'], 'fax' => $i_rSet1->fields['user_fax'], 'mobile' => $i_rSet1->fields['user_mobile'], 'pager' => $i_rSet1->fields['user_pager'], 'ipphone' => $i_rSet1->fields['user_ipphone'], 'webpage' => $i_rSet1->fields['user_webpage'], 'icq' => $i_rSet1->fields['user_icq'], 'msn' => $i_rSet1->fields['user_msn'], 'aol' => $i_rSet1->fields['user_aol'], 'gender' => $i_rSet1->fields['user_gender'], 'birthday' => $i_rSet1->fields['user_birthday'], 'husbandwife' => $i_rSet1->fields['user_husbandwife'], 'children' => $i_rSet1->fields['user_children'], 'trainer' => $i_rSet1->fields['user_trainer'], 'photo' => $i_rSet1->fields['user_photo'],
 'company' => $i_rSet1->fields['user_company'], 'cposition' => $i_rSet1->fields['user_cposition'], 'department' => $i_rSet1->fields['user_department'], 'coffice' => $i_rSet1->fields['user_coffice'], 'caddress' => $i_rSet1->fields['user_caddress'], 'ccity' => $i_rSet1->fields['user_ccity'], 'cstate' => $i_rSet1->fields['user_cstate'], 'czip' => $i_rSet1->fields['user_czip'], 'ccountry' => $i_rSet1->fields['user_ccountry'], 'cphone' => $i_rSet1->fields['user_cphone'], 'cfax' => $i_rSet1->fields['user_cfax'], 'cmobile' => $i_rSet1->fields['user_cmobile'], 'cpager' => $i_rSet1->fields['user_cpager'], 'cipphone' => $i_rSet1->fields['user_cipphone'], 'cwebpage' => $i_rSet1->fields['user_cwebpage'], 'cphoto' => $i_rSet1->fields['user_cphoto'],
 'ufield1' => $i_rSet1->fields['user_ufield1'], 'ufield2' => $i_rSet1->fields['user_ufield2'], 'ufield3' => $i_rSet1->fields['user_ufield3'], 'ufield4' => $i_rSet1->fields['user_ufield4'], 'ufield5' => $i_rSet1->fields['user_ufield5'], 'ufield6' => $i_rSet1->fields['user_ufield6'], 'ufield7' => $i_rSet1->fields['user_ufield7'], 'ufield8' => $i_rSet1->fields['user_ufield8'], 'ufield9' => $i_rSet1->fields['user_ufield9'], 'ufield10' => $i_rSet1->fields['user_ufield10'],
 'checkword' => $f_checkword
 ));
  
	}
if($i_rSet1)
 $i_rSet1->Close();
$g_vars['page']['title'] = $lngstr['page_title_register'];
$g_vars['page']['notifications'] = $lngstr['page-register']['account_activated'];
include_once($DOCUMENT_PAGES."signin-1.inc.php");
} else {
}
?>
