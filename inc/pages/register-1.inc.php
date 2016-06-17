<?php
$g_vars['page']['hide_cpanel'] = true;
$f_username = readPostVar('username');
$f_password = '';
$f_confirmpassword = '';
$f_groupid = (int)readGetVar('groupid', readPostVar('groupid'));
if($f_groupid <= SYSTEM_GROUP_MAX_INDEX)
 $f_groupid = DEFAULT_GROUP;
$f_testid = (int)readGetVar('testid', readPostVar('testid'));
if(getConfigItem(CONFIG_reg_username) == CONFIG_CONST_show_autogenerate) { 
	$i_max_userid = 0;
$i_rSet1 = $g_db->SelectLimit("SELECT userid FROM ".$srv_settings['table_prefix']."users ORDER BY userid DESC");
if($i_rSet1) {
 if(!$i_rSet1->EOF)
 $i_max_userid = (int)$i_rSet1->fields['userid'];
$i_rSet1->Close();
} 
	$f_username = getAutoUsername($i_max_userid);
}
if(getConfigItem(CONFIG_reg_password) == CONFIG_CONST_show_autogenerate) {
	$f_password = getAutoPassword(IGT_PASSWORD_LENGTH);
$f_confirmpassword = $f_password;
}
$g_vars['page']['intro'] = getConfigItem(CONFIG_reg_intro);
$i_rowno = 0;
$g_vars['page']['items']['username'] = @getInputField(getConfigItem(CONFIG_reg_username), $lngstr['label_username'], getInputElement('username', $f_username));
$g_vars['page']['items']['password'] = @getInputField(getConfigItem(CONFIG_reg_password), $lngstr['label_password'], getPasswordBox('password', $f_password));
$g_vars['page']['items']['confirmpassword'] = @getInputField(getConfigItem(CONFIG_reg_password), $lngstr['label_confirmpassword'], getPasswordBox('confirmpassword', $f_confirmpassword));
$g_vars['page']['items']['email'] = @getInputField(getConfigItem(CONFIG_reg_email), $lngstr['label_email'], getInputElement('email', $f_email));
$g_vars['page']['items']['title'] = @getInputField(getConfigItem(CONFIG_reg_title), $lngstr['label_title'], getSelectElement('title', $f_title, $lngstr['page-register']['title_items']));
$g_vars['page']['items']['firstname'] = @getInputField(getConfigItem(CONFIG_reg_firstname), $lngstr['label_firstname'], getInputElement('firstname', $f_firstname));
$g_vars['page']['items']['lastname'] = @getInputField(getConfigItem(CONFIG_reg_lastname), $lngstr['label_lastname'], getInputElement('lastname', $f_lastname));
$g_vars['page']['items']['middlename'] = @getInputField(getConfigItem(CONFIG_reg_middlename), $lngstr['label_middlename'], getInputElement('middlename', $f_middlename));
$g_vars['page']['items']['address'] = @getInputField(getConfigItem(CONFIG_reg_address), $lngstr['label_address'], getInputElement('address', $f_address));
$g_vars['page']['items']['city'] = @getInputField(getConfigItem(CONFIG_reg_city), $lngstr['label_city'], getInputElement('city', $f_city));
$g_vars['page']['items']['state'] = @getInputField(getConfigItem(CONFIG_reg_state), $lngstr['label_state'], isset($lngstr['custom']['user_state_items']) ? getSelectElement('state', $f_state, $lngstr['custom']['user_state_items']) : getInputElement('state', $f_state));
$g_vars['page']['items']['zip'] = @getInputField(getConfigItem(CONFIG_reg_zip), $lngstr['label_zip'], getInputElement('zip', $f_zip));
$g_vars['page']['items']['country'] = @getInputField(getConfigItem(CONFIG_reg_country), $lngstr['label_country'], getSelectElement('country', $f_country, $lngstr['label_country_items']));
$g_vars['page']['items']['phone'] = @getInputField(getConfigItem(CONFIG_reg_phone), $lngstr['label_phone'], getInputElement('phone', $f_phone));
$g_vars['page']['items']['fax'] = @getInputField(getConfigItem(CONFIG_reg_fax), $lngstr['label_fax'], getInputElement('fax', $f_fax));
$g_vars['page']['items']['mobile'] = @getInputField(getConfigItem(CONFIG_reg_mobile), $lngstr['label_mobile'], getInputElement('mobile', $f_mobile));
$g_vars['page']['items']['pager'] = @getInputField(getConfigItem(CONFIG_reg_pager), $lngstr['label_pager'], getInputElement('pager', $f_pager));
$g_vars['page']['items']['ipphone'] = @getInputField(getConfigItem(CONFIG_reg_ipphone), $lngstr['label_ipphone'], getInputElement('ipphone', $f_ipphone));
$g_vars['page']['items']['webpage'] = @getInputField(getConfigItem(CONFIG_reg_webpage), $lngstr['label_webpage'], getInputElement('webpage', $f_webpage));
$g_vars['page']['items']['icq'] = @getInputField(getConfigItem(CONFIG_reg_icq), $lngstr['label_icq'], getInputElement('icq', $f_icq));
$g_vars['page']['items']['msn'] = @getInputField(getConfigItem(CONFIG_reg_msn), $lngstr['label_msn'], getInputElement('msn', $f_msn));
$g_vars['page']['items']['aol'] = @getInputField(getConfigItem(CONFIG_reg_aol), $lngstr['label_aol'], getInputElement('aol', $f_aol));
$g_vars['page']['items']['gender'] = @getInputField(getConfigItem(CONFIG_reg_gender), $lngstr['label_gender'], getSelectElement('gender', $f_gender, $lngstr['label_gender_items']));
$g_vars['page']['items']['birthday'] = @getInputField(getConfigItem(CONFIG_reg_birthday), $lngstr['label_birthday'], getCalendarEx('birthday', $f_birthday));
$g_vars['page']['items']['husbandwife'] = @getInputField(getConfigItem(CONFIG_reg_husbandwife), $lngstr['label_husbandwife'], getInputElement('husbandwife', $f_husbandwife));
$g_vars['page']['items']['children'] = @getInputField(getConfigItem(CONFIG_reg_children), $lngstr['label_children'], getInputElement('children', $f_children));
$g_vars['page']['items']['trainer'] = @getInputField(getConfigItem(CONFIG_reg_trainer), $lngstr['label_trainer'], getInputElement('trainer', $f_trainer));
$g_vars['page']['items']['photo'] = @getInputField(getConfigItem(CONFIG_reg_photo), $lngstr['label_photo'], getInputElement('photo', $f_photo));
$g_vars['page']['items']['company'] = @getInputField(getConfigItem(CONFIG_reg_company), $lngstr['label_company'], getInputElement('company', $f_company));
$g_vars['page']['items']['cposition'] = @getInputField(getConfigItem(CONFIG_reg_cposition), $lngstr['label_cposition'], getInputElement('cposition', $f_cposition));
$g_vars['page']['items']['department'] = @getInputField(getConfigItem(CONFIG_reg_department), $lngstr['label_department'], getInputElement('department', $f_department));
$g_vars['page']['items']['coffice'] = @getInputField(getConfigItem(CONFIG_reg_coffice), $lngstr['label_coffice'], getInputElement('coffice', $f_coffice));
$g_vars['page']['items']['caddress'] = @getInputField(getConfigItem(CONFIG_reg_caddress), $lngstr['label_caddress'], getInputElement('caddress', $f_caddress));
$g_vars['page']['items']['ccity'] = @getInputField(getConfigItem(CONFIG_reg_ccity), $lngstr['label_ccity'], getInputElement('ccity', $f_ccity));
$g_vars['page']['items']['cstate'] = @getInputField(getConfigItem(CONFIG_reg_cstate), $lngstr['label_cstate'], isset($lngstr['custom']['user_cstate_items']) ? getSelectElement('cstate', $f_cstate, $lngstr['custom']['user_cstate_items']) : getInputElement('cstate', $f_cstate));
$g_vars['page']['items']['czip'] = @getInputField(getConfigItem(CONFIG_reg_czip), $lngstr['label_czip'], getInputElement('czip', $f_czip));
$g_vars['page']['items']['ccountry'] = @getInputField(getConfigItem(CONFIG_reg_ccountry), $lngstr['label_ccountry'], getSelectElement('ccountry', $f_ccountry, $lngstr['label_country_items']));
$g_vars['page']['items']['cphone'] = @getInputField(getConfigItem(CONFIG_reg_cphone), $lngstr['label_cphone'], getInputElement('cphone', $f_cphone));
$g_vars['page']['items']['cfax'] = @getInputField(getConfigItem(CONFIG_reg_cfax), $lngstr['label_cfax'], getInputElement('cfax', $f_cfax));
$g_vars['page']['items']['cmobile'] = @getInputField(getConfigItem(CONFIG_reg_cmobile), $lngstr['label_cmobile'], getInputElement('cmobile', $f_cmobile));
$g_vars['page']['items']['cpager'] = @getInputField(getConfigItem(CONFIG_reg_cpager), $lngstr['label_cpager'], getInputElement('cpager', $f_cpager));
$g_vars['page']['items']['cipphone'] = @getInputField(getConfigItem(CONFIG_reg_cipphone), $lngstr['label_cipphone'], getInputElement('cipphone', $f_cipphone));
$g_vars['page']['items']['cwebpage'] = @getInputField(getConfigItem(CONFIG_reg_cwebpage), $lngstr['label_cwebpage'], getInputElement('cwebpage', $f_cwebpage));
$g_vars['page']['items']['cphoto'] = @getInputField(getConfigItem(CONFIG_reg_cphoto), $lngstr['label_cphoto'], getInputElement('cphoto', $f_cphoto));
if(isset($lngstr['custom']['user_userfield1_items'])) {
	$i_userfield1_items = $lngstr['custom']['user_userfield1_items'];
} else {
	$i_userfield1_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield1));
foreach($i_items as $val)
 $i_userfield1_items[$val] = $val;
}
$g_vars['page']['items']['userfield1'] = @getInputField(getConfigItem(CONFIG_reg_userfield1), getConfigItem(CONFIG_reg_caption_userfield1).':', (getConfigItem(CONFIG_reg_type_userfield1)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield1', $f_userfield1) : (getConfigItem(CONFIG_reg_type_userfield1)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield1', $f_userfield1) : getSelectElement('userfield1', $f_userfield1, $i_userfield1_items))));
if(isset($lngstr['custom']['user_userfield2_items'])) {
	$i_userfield2_items = $lngstr['custom']['user_userfield2_items'];
} else {
	$i_userfield2_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield2));
foreach($i_items as $val)
 $i_userfield2_items[$val] = $val;
}
$g_vars['page']['items']['userfield2'] = @getInputField(getConfigItem(CONFIG_reg_userfield2), getConfigItem(CONFIG_reg_caption_userfield2).':', (getConfigItem(CONFIG_reg_type_userfield2)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield2', $f_userfield2) : (getConfigItem(CONFIG_reg_type_userfield2)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield2', $f_userfield2) : getSelectElement('userfield2', $f_userfield2, $i_userfield2_items))));
if(isset($lngstr['custom']['user_userfield3_items'])) {
	$i_userfield3_items = $lngstr['custom']['user_userfield3_items'];
} else {
	$i_userfield3_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield3));
foreach($i_items as $val)
 $i_userfield3_items[$val] = $val;
}
$g_vars['page']['items']['userfield3'] = @getInputField(getConfigItem(CONFIG_reg_userfield3), getConfigItem(CONFIG_reg_caption_userfield3).':', (getConfigItem(CONFIG_reg_type_userfield3)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield3', $f_userfield3) : (getConfigItem(CONFIG_reg_type_userfield3)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield3', $f_userfield3) : getSelectElement('userfield3', $f_userfield3, $i_userfield3_items))));
if(isset($lngstr['custom']['user_userfield4_items'])) {
	$i_userfield4_items = $lngstr['custom']['user_userfield4_items'];
} else {
	$i_userfield4_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield4));
foreach($i_items as $val)
 $i_userfield4_items[$val] = $val;
}
$g_vars['page']['items']['userfield4'] = @getInputField(getConfigItem(CONFIG_reg_userfield4), getConfigItem(CONFIG_reg_caption_userfield4).':', (getConfigItem(CONFIG_reg_type_userfield4)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield4', $f_userfield4) : (getConfigItem(CONFIG_reg_type_userfield4)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield4', $f_userfield4) : getSelectElement('userfield4', $f_userfield4, $i_userfield4_items))));
if(isset($lngstr['custom']['user_userfield5_items'])) {
	$i_userfield5_items = $lngstr['custom']['user_userfield5_items'];
} else {
	$i_userfield5_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield5));
foreach($i_items as $val)
 $i_userfield5_items[$val] = $val;
}
$g_vars['page']['items']['userfield5'] = @getInputField(getConfigItem(CONFIG_reg_userfield5), getConfigItem(CONFIG_reg_caption_userfield5).':', (getConfigItem(CONFIG_reg_type_userfield5)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield5', $f_userfield5) : (getConfigItem(CONFIG_reg_type_userfield5)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield5', $f_userfield5) : getSelectElement('userfield5', $f_userfield5, $i_userfield5_items))));
if(isset($lngstr['custom']['user_userfield6_items'])) {
	$i_userfield6_items = $lngstr['custom']['user_userfield6_items'];
} else {
	$i_userfield6_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield6));
foreach($i_items as $val)
 $i_userfield6_items[$val] = $val;
}
$g_vars['page']['items']['userfield6'] = @getInputField(getConfigItem(CONFIG_reg_userfield6), getConfigItem(CONFIG_reg_caption_userfield6).':', (getConfigItem(CONFIG_reg_type_userfield6)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield6', $f_userfield6) : (getConfigItem(CONFIG_reg_type_userfield6)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield6', $f_userfield6) : getSelectElement('userfield6', $f_userfield6, $i_userfield6_items))));
if(isset($lngstr['custom']['user_userfield7_items'])) {
	$i_userfield7_items = $lngstr['custom']['user_userfield7_items'];
} else {
	$i_userfield7_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield7));
foreach($i_items as $val)
 $i_userfield7_items[$val] = $val;
}
$g_vars['page']['items']['userfield7'] = @getInputField(getConfigItem(CONFIG_reg_userfield7), getConfigItem(CONFIG_reg_caption_userfield7).':', (getConfigItem(CONFIG_reg_type_userfield7)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield7', $f_userfield7) : (getConfigItem(CONFIG_reg_type_userfield7)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield7', $f_userfield7) : getSelectElement('userfield7', $f_userfield7, $i_userfield7_items))));
if(isset($lngstr['custom']['user_userfield8_items'])) {
	$i_userfield8_items = $lngstr['custom']['user_userfield8_items'];
} else {
	$i_userfield8_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield8));
foreach($i_items as $val)
 $i_userfield8_items[$val] = $val;
}
$g_vars['page']['items']['userfield8'] = @getInputField(getConfigItem(CONFIG_reg_userfield8), getConfigItem(CONFIG_reg_caption_userfield8).':', (getConfigItem(CONFIG_reg_type_userfield8)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield8', $f_userfield8) : (getConfigItem(CONFIG_reg_type_userfield8)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield8', $f_userfield8) : getSelectElement('userfield8', $f_userfield8, $i_userfield8_items))));
if(isset($lngstr['custom']['user_userfield9_items'])) {
	$i_userfield9_items = $lngstr['custom']['user_userfield9_items'];
} else {
	$i_userfield9_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield9));
foreach($i_items as $val)
 $i_userfield9_items[$val] = $val;
}
$g_vars['page']['items']['userfield9'] = @getInputField(getConfigItem(CONFIG_reg_userfield9), getConfigItem(CONFIG_reg_caption_userfield9).':', (getConfigItem(CONFIG_reg_type_userfield9)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield9', $f_userfield9) : (getConfigItem(CONFIG_reg_type_userfield9)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield9', $f_userfield9) : getSelectElement('userfield9', $f_userfield9, $i_userfield9_items))));
if(isset($lngstr['custom']['user_userfield10_items'])) {
	$i_userfield10_items = $lngstr['custom']['user_userfield10_items'];
} else {
	$i_userfield10_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield10));
foreach($i_items as $val)
 $i_userfield10_items[$val] = $val;
}
$g_vars['page']['items']['userfield10'] = @getInputField(getConfigItem(CONFIG_reg_userfield10), getConfigItem(CONFIG_reg_caption_userfield10).':', (getConfigItem(CONFIG_reg_type_userfield10)==CONFIG_CONST_type_singlelinetext ? getInputElement('userfield10', $f_userfield10) : (getConfigItem(CONFIG_reg_type_userfield10)==CONFIG_CONST_type_multilinetext ? getTextArea('userfield10', $f_userfield10) : getSelectElement('userfield10', $f_userfield10, $i_userfield10_items))));
function getInputField($i_showsettings, $i_caption, $i_value) {
	if($i_showsettings >= CONFIG_CONST_show_donotrequire)
 return getTR(array($i_caption.' '.($i_showsettings >= CONFIG_CONST_show_autogenerate ? REQUIRED_FIELD_MARK : ''), $i_value));
return '';
}
$g_vars['page']['items']['groupid_input'] = getInputElement('groupid', $f_groupid, 0, 0, '', $i_type = 'hidden');
$g_vars['page']['items']['testid_input'] = getInputElement('testid', $f_testid, 0, 0, '', $i_type = 'hidden');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('register');
?>