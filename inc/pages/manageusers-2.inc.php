<?php
$g_vars['page']['location'] = array('administration', 'users', 'edit_user');
$g_vars['page']['meta'] .= '<style type="text/css">@import url('.$srv_settings['url_root'].'shared/calendar/skins/aqua/theme.css);</style>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/calendar.js"></script>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/lang/calendar-en.js"></script>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/calendar-setup.js"></script>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/calendar-helper.js"></script>';
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_userid = (int)readGetVar('userid');
$g_vars['page']['selected_section'] = 'administration';
$g_vars['page']['selected_tab'] = 'users-2';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_users_settings'].'</h2>';
writeErrorsWarningsBar();
 
$arrUserData = array();
if($f_userid > 0) {
	$i_rSet1 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."users WHERE userid=".$f_userid, 1);
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 if(!$i_rSet1->EOF) {
 $arrUserData = $i_rSet1->fields;
}
$i_rSet1->Close();
unset($i_rSet1);
}
}
$g_vars['page']['is_new_record'] = empty($arrUserData);
echo '<p><form method=post action="users.php?userid='.(($f_userid > 0) ? $f_userid : '').'&action=edit">';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
$i_rowno = 0;
if(($G_SESSION['access_users'] != 1) && ($G_SESSION['access_users'] != 3)) {
	echo '<tr class=rowtwo valign=top><td colspan=2>'.getCheckbox('user_enabled', isset($arrUserData['user_enabled']) ? $arrUserData['user_enabled'] : true, $lngstr['page_users']['userenabled']).'</td></tr>';
$i_rowno = 1;
writeTR2Fixed($lngstr['page_users']['joindate'], isset($arrUserData['user_joindate']) && ($arrUserData['user_joindate'] > 0) ? getDateLocal($lngstr['language']['date_format_full'], $arrUserData['user_joindate']) : '');
writeTR2Fixed($lngstr['page_users']['logindate'], isset($arrUserData['user_logindate']) && ($arrUserData['user_logindate'] > 0) ? getDateLocal($lngstr['language']['date_format_full'], $arrUserData['user_logindate']) : '');
$strExpireDateFormatted = (!empty($arrUserData['user_expiredate']) && ($arrUserData['user_expiredate'] > 0)) ? getDateLocal($lngstr['language']['calendar']['date_format'], $arrUserData['user_expiredate']) : '';
$strExpireDate = '<input name="user_expiredate" id="user_expiredate" value="'.$strExpireDateFormatted.'" class=inp type=text size=20><a href="javascript:void(0);" title="'.$lngstr['calendar']['hint'].'"><img src="images/button-calendar.gif" alt="'.$lngstr['calendar']['hint'].'" class="calendar-icon" onclick="return showCalendar(\'user_expiredate\', \''.$lngstr['language']['calendar']['date_format'].'\', \'24\', true);" onmouseover="this.className+=\' calendar-icon-hover\';" onmouseout="this.className = this.className.replace(/\s*calendar-icon-hover/ig, \'\');"></a>';
writeTR2Fixed($lngstr['page_users']['expiredate'], $strExpireDate);
}
writeTR2Fixed($lngstr['page_users']['username'], getInputElement('user_name', @$arrUserData['user_name']));
writeTR2Fixed($lngstr['page_users']['password_new'], getPasswordBox('user_password', ''));
writeTR2Fixed($lngstr['page_users']['password_confirm'], getPasswordBox('user_password_confirm', ''));
writeTR2Fixed($lngstr['page_users']['email'], getInputElement('user_email', @$arrUserData['user_email']));
writeTR2Fixed($lngstr['page_users']['firstname'], getInputElement('user_firstname', @$arrUserData['user_firstname']));
writeTR2Fixed($lngstr['page_users']['lastname'], getInputElement('user_lastname', @$arrUserData['user_lastname']));
writeTR2Fixed($lngstr['page_users']['middlename'], getInputElement('user_middlename', @$arrUserData['user_middlename']));
if(($G_SESSION['access_users'] != 1) && ($G_SESSION['access_users'] != 3)) {
	echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_users_groups\')">'.$lngstr['page_users']['section_groups'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_users_groups style="display:'.(isset($_COOKIE['div_users_groups']) && $_COOKIE['div_users_groups']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">'; 
	$i_groups_text = '';
$arrUserGroups = array();
if($g_vars['page']['is_new_record']) {
 $arrUserGroups = array(DEFAULT_GROUP);
} else {
 $i_rSet2 = $g_db->Execute("SELECT groupid FROM ".$srv_settings['table_prefix']."groups_users WHERE userid=".$f_userid);
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 while(!$i_rSet2->EOF) {
 array_push($arrUserGroups, $i_rSet2->fields['groupid']);
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
}
$i_rSet3 = $g_db->Execute("SELECT groupid, group_name FROM ".$srv_settings['table_prefix']."groups");
if(!$i_rSet3) {
 showDBError(__FILE__, 3);
} else {
 while(!$i_rSet3->EOF) {
 if($i_groups_text)
 $i_groups_text .= '<br>';
$i_groups_text .= getCheckbox('group['.$i_rSet3->fields['groupid'].']', in_array($i_rSet3->fields['groupid'], $arrUserGroups), $i_rSet3->fields['group_name']);
$i_rSet3->MoveNext();
}
$i_rSet3->Close();
$i_groups_text .= '<input name=group[0] type=hidden value=on>';
}
writeTR2Fixed($lngstr['page_users']['member_of'], $i_groups_text);
echo '</table></div></td></tr>';
}
echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_users_personal\')">'.$lngstr['page_users']['section_personal'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_users_personal style="display:'.(isset($_COOKIE['div_users_personal']) && $_COOKIE['div_users_personal']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
writeTR2Fixed($lngstr['page_users']['address'], getTextArea('user_address', @$arrUserData['user_address']));
writeTR2Fixed($lngstr['page_users']['city'], getInputElement('user_city', @$arrUserData['user_city']));
writeTR2Fixed($lngstr['page_users']['state'], getInputElement('user_state', @$arrUserData['user_state']));
writeTR2Fixed($lngstr['page_users']['zip'], getInputElement('user_zip', @$arrUserData['user_zip']));
writeTR2Fixed($lngstr['page_users']['country'], getInputElement('user_country', @$arrUserData['user_country']));
writeTR2Fixed($lngstr['page_users']['phone'], getInputElement('user_phone', @$arrUserData['user_phone']));
writeTR2Fixed($lngstr['page_users']['fax'], getInputElement('user_fax', @$arrUserData['user_fax']));
writeTR2Fixed($lngstr['page_users']['mobile'], getInputElement('user_mobile', @$arrUserData['user_mobile']));
writeTR2Fixed($lngstr['page_users']['pager'], getInputElement('user_pager', @$arrUserData['user_pager']));
writeTR2Fixed($lngstr['page_users']['ipphone'], getInputElement('user_ipphone', @$arrUserData['user_ipphone']));
writeTR2Fixed($lngstr['page_users']['webpage'], getInputElement('user_webpage', @$arrUserData['user_webpage']));
writeTR2Fixed($lngstr['page_users']['icq'], getInputElement('user_icq', @$arrUserData['user_icq']));
writeTR2Fixed($lngstr['page_users']['msn'], getInputElement('user_msn', @$arrUserData['user_msn']));
writeTR2Fixed($lngstr['page_users']['aol'], getInputElement('user_aol', @$arrUserData['user_aol']));
writeTR2Fixed($lngstr['page_users']['gender'], getSelectElement('user_gender', @$arrUserData['user_gender'], $lngstr['label_gender_items'])); 
writeTR2Fixed($lngstr['page_users']['husbandwife'], getInputElement('user_husbandwife', @$arrUserData['user_husbandwife']));
writeTR2Fixed($lngstr['page_users']['children'], getInputElement('user_children', @$arrUserData['user_children']));
writeTR2Fixed($lngstr['page_users']['trainer'], getInputElement('user_trainer', @$arrUserData['user_trainer'])); 
echo '</table></div></td></tr>';
echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_users_work\')">'.$lngstr['page_users']['section_work'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_users_work style="display:'.(isset($_COOKIE['div_users_work']) && $_COOKIE['div_users_work']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
writeTR2Fixed($lngstr['page_users']['company'], getInputElement('user_company', @$arrUserData['user_company']));
writeTR2Fixed($lngstr['page_users']['cposition'], getInputElement('user_cposition', @$arrUserData['user_cposition']));
writeTR2Fixed($lngstr['page_users']['department'], getInputElement('user_department', @$arrUserData['user_department']));
writeTR2Fixed($lngstr['page_users']['coffice'], getInputElement('user_coffice', @$arrUserData['user_coffice']));
writeTR2Fixed($lngstr['page_users']['caddress'], getTextArea('user_caddress', @$arrUserData['user_caddress']));
writeTR2Fixed($lngstr['page_users']['ccity'], getInputElement('user_ccity', @$arrUserData['user_ccity']));
writeTR2Fixed($lngstr['page_users']['cstate'], getInputElement('user_cstate', @$arrUserData['user_cstate']));
writeTR2Fixed($lngstr['page_users']['czip'], getInputElement('user_czip', @$arrUserData['user_czip']));
writeTR2Fixed($lngstr['page_users']['ccountry'], getInputElement('user_ccountry', @$arrUserData['user_ccountry']));
writeTR2Fixed($lngstr['page_users']['cphone'], getInputElement('user_cphone', @$arrUserData['user_cphone']));
writeTR2Fixed($lngstr['page_users']['cfax'], getInputElement('user_cfax', @$arrUserData['user_cfax']));
writeTR2Fixed($lngstr['page_users']['cmobile'], getInputElement('user_cmobile', @$arrUserData['user_cmobile']));
writeTR2Fixed($lngstr['page_users']['cpager'], getInputElement('user_cpager', @$arrUserData['user_cpager']));
writeTR2Fixed($lngstr['page_users']['cipphone'], getInputElement('user_cipphone', @$arrUserData['user_cipphone']));
writeTR2Fixed($lngstr['page_users']['cwebpage'], getInputElement('user_cwebpage', @$arrUserData['user_cwebpage'])); 
echo '</table></div></td></tr>';
echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_users_additional\')">'.$lngstr['page_users']['section_additional'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_users_additional style="display:'.(isset($_COOKIE['div_users_additional']) && $_COOKIE['div_users_additional']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
if(isset($lngstr['custom']['user_userfield1_items'])) {
	$i_userfield1_items = $lngstr['custom']['user_userfield1_items'];
} else {
	$i_userfield1_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield1));
foreach($i_items as $val)
 $i_userfield1_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield1) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield1).':', (getConfigItem(CONFIG_reg_type_userfield1)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield1', @$arrUserData['user_ufield1']) : (getConfigItem(CONFIG_reg_type_userfield1)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield1', @$arrUserData['user_ufield1']) : getSelectElement('user_ufield1', @$arrUserData['user_ufield1'], $i_userfield1_items))));
if(isset($lngstr['custom']['user_userfield2_items'])) {
	$i_userfield2_items = $lngstr['custom']['user_userfield2_items'];
} else {
	$i_userfield2_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield2));
foreach($i_items as $val)
 $i_userfield2_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield2) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield2).':', (getConfigItem(CONFIG_reg_type_userfield2)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield2', @$arrUserData['user_ufield2']) : (getConfigItem(CONFIG_reg_type_userfield2)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield2', @$arrUserData['user_ufield2']) : getSelectElement('user_ufield2', @$arrUserData['user_ufield2'], $i_userfield2_items))));
if(isset($lngstr['custom']['user_userfield3_items'])) {
	$i_userfield3_items = $lngstr['custom']['user_userfield3_items'];
} else {
	$i_userfield3_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield3));
foreach($i_items as $val)
 $i_userfield3_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield3) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield3).':', (getConfigItem(CONFIG_reg_type_userfield3)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield3', @$arrUserData['user_ufield3']) : (getConfigItem(CONFIG_reg_type_userfield3)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield3', @$arrUserData['user_ufield3']) : getSelectElement('user_ufield3', @$arrUserData['user_ufield3'], $i_userfield3_items))));
if(isset($lngstr['custom']['user_userfield4_items'])) {
	$i_userfield4_items = $lngstr['custom']['user_userfield4_items'];
} else {
	$i_userfield4_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield4));
foreach($i_items as $val)
 $i_userfield4_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield4) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield4).':', (getConfigItem(CONFIG_reg_type_userfield4)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield4', @$arrUserData['user_ufield4']) : (getConfigItem(CONFIG_reg_type_userfield4)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield4', @$arrUserData['user_ufield4']) : getSelectElement('user_ufield4', @$arrUserData['user_ufield4'], $i_userfield4_items))));
if(isset($lngstr['custom']['user_userfield5_items'])) {
	$i_userfield5_items = $lngstr['custom']['user_userfield5_items'];
} else {
	$i_userfield5_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield5));
foreach($i_items as $val)
 $i_userfield5_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield5) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield5).':', (getConfigItem(CONFIG_reg_type_userfield5)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield5', @$arrUserData['user_ufield5']) : (getConfigItem(CONFIG_reg_type_userfield5)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield5', @$arrUserData['user_ufield5']) : getSelectElement('user_ufield5', @$arrUserData['user_ufield5'], $i_userfield5_items))));
if(isset($lngstr['custom']['user_userfield6_items'])) {
	$i_userfield6_items = $lngstr['custom']['user_userfield6_items'];
} else {
	$i_userfield6_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield6));
foreach($i_items as $val)
 $i_userfield6_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield6) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield6).':', (getConfigItem(CONFIG_reg_type_userfield6)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield6', @$arrUserData['user_ufield6']) : (getConfigItem(CONFIG_reg_type_userfield6)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield6', @$arrUserData['user_ufield6']) : getSelectElement('user_ufield6', @$arrUserData['user_ufield6'], $i_userfield6_items))));
if(isset($lngstr['custom']['user_userfield7_items'])) {
	$i_userfield7_items = $lngstr['custom']['user_userfield7_items'];
} else {
	$i_userfield7_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield7));
foreach($i_items as $val)
 $i_userfield7_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield7) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield7).':', (getConfigItem(CONFIG_reg_type_userfield7)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield7', @$arrUserData['user_ufield7']) : (getConfigItem(CONFIG_reg_type_userfield7)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield7', @$arrUserData['user_ufield7']) : getSelectElement('user_ufield7', @$arrUserData['user_ufield7'], $i_userfield7_items))));
if(isset($lngstr['custom']['user_userfield8_items'])) {
	$i_userfield8_items = $lngstr['custom']['user_userfield8_items'];
} else {
	$i_userfield8_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield8));
foreach($i_items as $val)
 $i_userfield8_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield8) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield8).':', (getConfigItem(CONFIG_reg_type_userfield8)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield8', @$arrUserData['user_ufield8']) : (getConfigItem(CONFIG_reg_type_userfield8)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield8', @$arrUserData['user_ufield8']) : getSelectElement('user_ufield8', @$arrUserData['user_ufield8'], $i_userfield8_items))));
if(isset($lngstr['custom']['user_userfield9_items'])) {
	$i_userfield9_items = $lngstr['custom']['user_userfield9_items'];
} else {
	$i_userfield9_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield9));
foreach($i_items as $val)
 $i_userfield9_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield9) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield9).':', (getConfigItem(CONFIG_reg_type_userfield9)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield9', @$arrUserData['user_ufield9']) : (getConfigItem(CONFIG_reg_type_userfield9)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield9', @$arrUserData['user_ufield9']) : getSelectElement('user_ufield9', @$arrUserData['user_ufield9'], $i_userfield9_items))));
if(isset($lngstr['custom']['user_userfield10_items'])) {
	$i_userfield10_items = $lngstr['custom']['user_userfield10_items'];
} else {
	$i_userfield10_items = array();
$i_items = explode(',', getConfigItem(CONFIG_reg_values_userfield10));
foreach($i_items as $val)
 $i_userfield10_items[$val] = $val;
}
if(getConfigItem(CONFIG_reg_userfield10) > CONFIG_CONST_donotshow)
 writeTR2Fixed(getConfigItem(CONFIG_reg_caption_userfield10).':', (getConfigItem(CONFIG_reg_type_userfield10)==CONFIG_CONST_type_singlelinetext ? getInputElement('user_ufield10', @$arrUserData['user_ufield10']) : (getConfigItem(CONFIG_reg_type_userfield10)==CONFIG_CONST_type_multilinetext ? getTextArea('user_ufield10', @$arrUserData['user_ufield10']) : getSelectElement('user_ufield10', @$arrUserData['user_ufield10'], $i_userfield10_items))));
echo '</table></div></td></tr>';
if(($G_SESSION['access_users'] != 1) && ($G_SESSION['access_users'] != 3)) {
	echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_users_notes\')">'.$lngstr['page_users']['section_notes'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_users_notes style="display:'.(isset($_COOKIE['div_users_notes']) && $_COOKIE['div_users_notes']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
writeTR2Fixed($lngstr['page_users']['notes'], getTextArea('user_notes', @$arrUserData['user_notes']));
echo '</table></div></td></tr>';
}	
echo '</table>'; 
echo '<p class=center><input class=btn type=submit name=bsubmit value=" '.$lngstr['button_update'].' "> <input class=btn type=submit name=bcancel value=" '.$lngstr['button_cancel'].' "></form>';
displayTemplate('_footer');
?>