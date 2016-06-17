<?php
$g_vars['page']['location'] = array('administration', 'users');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$g_vars['page']['selected_section'] = 'administration';
$g_vars['page']['selected_tab'] = 'users';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_manageusers'].'</h2>';
writeErrorsWarningsBar();
writeInfoBar($lngstr['tooltip_users']);
$i_pagewide_id = 0; 
$i_sql_where_addon = ''; 
$f_user_lastname = readCookieVar('filter_administration_users_user_lastname', readGetVar('user_lastname'));
if(!empty($f_user_lastname)) {
	$i_user_lastname = $g_db->qstr($f_user_lastname, get_magic_quotes_gpc());
$i_sql_where_addon .= $srv_settings['table_prefix'].'users.user_lastname LIKE '.$i_user_lastname.' AND ';
} 
$f_user_department = readCookieVar('filter_administration_users_user_department', readGetVar('user_department'));
if(!empty($f_user_department)) {
	$i_user_department = $g_db->qstr($f_user_department, get_magic_quotes_gpc());
$i_sql_where_addon .= $srv_settings['table_prefix'].'users.user_department LIKE '.$i_user_department.' AND ';
} 
if(!empty($i_sql_where_addon))
 $i_sql_where_addon = substr($i_sql_where_addon, 0, strlen($i_sql_where_addon) - 5); 
$i_direction = '';
$i_order_addon = '';
$i_sql_order_addon = '';
$i_tablefields = array(
	array($lngstr['label_manageusers_hdr_userid'], $lngstr['label_manageusers_hdr_userid_hint'], $srv_settings['table_prefix'].'users.userid'),
	array($lngstr['label_manageusers_hdr_user_notes'], $lngstr['label_manageusers_hdr_user_notes_hint'], ''),
	array($lngstr['label_manageusers_hdr_user_name'], $lngstr['label_manageusers_hdr_user_name_hint'], $srv_settings['table_prefix'].'users.user_name'),
	array($lngstr['label_manageusers_hdr_user_email'], $lngstr['label_manageusers_hdr_user_email_hint'], $srv_settings['table_prefix'].'users.user_email'),
	array($lngstr['label_manageusers_hdr_user_firstname'], $lngstr['label_manageusers_hdr_user_firstname_hint'], $srv_settings['table_prefix'].'users.user_firstname'),
	array($lngstr['label_manageusers_hdr_user_lastname'], $lngstr['label_manageusers_hdr_user_lastname_hint'], $srv_settings['table_prefix'].'users.user_lastname'),
	array($lngstr['label_manageusers_hdr_user_enabled'], $lngstr['label_manageusers_hdr_user_enabled_hint'], $srv_settings['table_prefix'].'users.user_enabled'),
);
$i_order_no = isset($_GET['order']) ? (int)$_GET['order'] : 0;
if($i_order_no>=count($i_tablefields))
 $i_order_no = -1;
if($i_order_no>=0) {
	$i_direction = (isset($_GET['direction']) && $_GET['direction']) ? 'DESC' : '';
$i_order_addon = '&order='.$i_order_no.'&direction='.$i_direction;
$i_sql_order_addon = ' ORDER BY '.$i_tablefields[$i_order_no][2].' '.$i_direction;
} 
$i_url_limitto_addon = '';
$i_url_pageno_addon = '';
$i_url_limit_addon = '';
$i_pageno = 0;
$i_limitcount = isset($_GET['limitto']) ? (int)$_GET['limitto'] : $G_SESSION['config_itemsperpage'];
if($i_limitcount>0) {
	$i_recordcount = getRecordCount($srv_settings['table_prefix'].'users', $i_sql_where_addon);
$i_pageno = isset($_GET['pageno']) ? (int)$_GET['pageno'] : 1;
if($i_pageno < 1)
 $i_pageno = 1;
$i_limitfrom = ($i_pageno-1)*$i_limitcount;
$i_pageno_count = floor(($i_recordcount - 1) / $i_limitcount) + 1;
if($i_limitfrom > $i_recordcount) {
 $i_pageno = $i_pageno_count;
$i_limitfrom = ($i_pageno-1)*$i_limitcount;
}
$i_url_limitto_addon .= '&limitto='.$i_limitcount;
$i_url_pageno_addon .= '&pageno='.$i_pageno;
$i_url_limit_addon .= $i_url_limitto_addon.$i_url_pageno_addon;
} else {
	$i_url_limitto_addon = '&limitto=';
$i_url_limit_addon .= $i_url_limitto_addon;
$i_limitfrom = -1;
$i_limitcount = -1;
} 
$nPageWindow = IGT_CONFIG_NAVIGATION_WINDOW;
if (!IGT_CONFIG_NAVIGATION_SHOW_ALWAYS) {
	if ($i_recordcount == 0 || ($i_pageno_count == 1 && $this->NavShowAll == false))
 return;
} 
if($i_pageno > floor($nPageWindow/2) + 1 && $i_pageno_count > $nPageWindow)
	$nStartPage = $i_pageno - floor($nPageWindow/2);
else
	$nStartPage = 1; 
if($i_pageno <= $i_pageno_count - floor($nPageWindow/2) && $nStartPage + $nPageWindow-1 <= $i_pageno_count)
	$nEndPage = $nStartPage + $nPageWindow - 1;
else
{
	$nEndPage = $i_pageno_count;
if($nEndPage - $nPageWindow + 1 >= 1)
 $nStartPage = $nEndPage - $nPageWindow + 1;
}
$nRecordFrom = ($i_pageno - 1) * $i_limitcount + 1;
if($i_pageno != $i_pageno_count)
 $nRecordTo = $i_pageno * $i_limitcount;
else $nRecordTo = $i_recordcount;
 
$g_vars['page']['filter_url_addon'] = getURLAddon('?action=filter', array('action'));
echo '<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="">';
echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_filter_administration_users\')">'.$lngstr['label_filter_header'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_filter_administration_users style="display:'.(isset($_COOKIE['div_filter_administration_users']) && $_COOKIE['div_filter_administration_users']=='Y' ? 'block' : 'none').'"><form name=filterForm method=post action="users.php'.$g_vars['page']['filter_url_addon'].'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">'; 
$g_vars['page']['user_lastname_content'] = getInputElement('user_lastname', $f_user_lastname);
writeTR2($lngstr['label_lastname'], $g_vars['page']['user_lastname_content']); 
$g_vars['page']['user_department_content'] = getInputElement('user_department', $f_user_department);
writeTR2($lngstr['label_department'], $g_vars['page']['user_department_content']);
echo '</table>';
echo '<br><input class=btn type=submit name=bsetfilter value=" '.$lngstr['button_set_filter'].' "> <input class=btn type=submit name=bremovefilter value=" '.$lngstr['button_remove_filter'].' "></form>';
echo '</div></td></tr>';
echo '</table></p>';
 
echo '<p><form name=usersForm class=iactive method=post><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>';
echo '<table cellpadding=0 cellspacing=0 border=0 width="100%" style="background: url(images/toolbar-background.gif) repeat-x"><tr vAlign=center><td width=2><img src="images/toolbar-left.gif" width=2 height=32></td><td width=32><a href="users.php?action=create"><img src="images/button-new-big.gif" border=0 title="'.$lngstr['label_action_create_user'].'"></a></td><td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td><td width=32><img src="images/button-groups-big.gif" border=0 title="'.$lngstr['label_action_groups'].'" style="cursor: hand;" onclick="f=document.usersForm;f.action=\'users.php?action=groups\';f.submit();"></td><td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td><td width=32><img src="images/button-cross-big.gif" border=0 title="'.$lngstr['label_action_users_delete'].'" style="cursor: hand;" onclick="f=document.usersForm;if (confirm(\''.$lngstr['qst_delete_users'].'\')) { f.action=\'users.php?action=delete&confirmed=1\';f.submit();}"></td><td width="100%">&nbsp;</td>';
if($i_limitcount > 0) {
	$i_url_pages_addon = $i_url_limitto_addon.$i_order_addon;
echo '<td vAlign=middle width=32><nobr>&nbsp;'.sprintf($lngstr['label']['KtoLofN'], $nRecordFrom, $nRecordTo, $i_recordcount).'&nbsp;</nobr></td>';
echo '<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>';
echo '<td vAlign=middle width=32><nobr>&nbsp;';
for($i = $nStartPage; $i <= $nEndPage; $i++) {
 if($i != $i_pageno)
 echo '&nbsp;<a href="users.php?pageno='.$i.$i_url_pages_addon.'">'.$i.'</a>&nbsp;';
else echo '<span class=currentitem>&nbsp;'.$i.'&nbsp;</span> ';
}
echo '</nobr></td>';
echo '<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>';
if($i_pageno > 1) {
 echo '<td width=32><a href="users.php?pageno=1'.$i_url_pages_addon.'"><img src="images/button-first-big.gif" border=0 title="'.$lngstr['button_first_page'].'"></a></td>';
echo '<td width=32><a href="users.php?pageno='.max(($i_pageno-1), 1).$i_url_pages_addon.'"><img src="images/button-prev-big.gif" border=0 title="'.$lngstr['button_prev_page'].'"></a></td>';
} else {
 echo '<td width=32><img src="images/button-first-big-inactive.gif" border=0 title="'.$lngstr['button_first_page'].'"></td>';
echo '<td width=32><img src="images/button-prev-big-inactive.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td>';
}
if($i_pageno < $i_pageno_count) {
 echo '<td width=32><a href="users.php?pageno='.min(($i_pageno+1), $i_pageno_count).$i_url_pages_addon.'"><img src="images/button-next-big.gif" border=0 title="'.$lngstr['button_next_page'].'"></a></td>';
echo '<td width=32><a href="users.php?pageno='.$i_pageno_count.$i_url_pages_addon.'"><img src="images/button-last-big.gif" border=0 title="'.$lngstr['button_last_page'].'"></a></td>';
} else {
 echo '<td width=32><img src="images/button-next-big-inactive.gif" border=0 title="'.$lngstr['button_next_page'].'"></td>';
echo '<td width=32><img src="images/button-last-big-inactive.gif" border=0 title="'.$lngstr['button_last_page'].'"></td>';
}
}
echo '<td width=2><img src="images/toolbar-right.gif" width=2 height=32></td></tr></table>';
echo '</td></tr><tr><td>';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
echo '<tr vAlign=top><td class=rowhdr1 title="'.$lngstr['label_hdr_select_hint'].'" width=22><input type=checkbox name=toggleAll onclick="toggleCBs(this);"></td>';
writeQryTableHeaders('users.php?action='.$i_url_limit_addon, $i_tablefields, $i_order_no, $i_direction);
echo '<td class=rowhdr1 colspan=3>'.$lngstr['label_hdr_action'].'</td></tr>';
$i_rSet1 = $g_db->SelectLimit("SELECT userid, user_name, user_email, user_firstname, user_lastname, user_department, user_notes, user_enabled FROM ".$srv_settings['table_prefix']."users".(!empty($i_sql_where_addon) ? ' WHERE '.$i_sql_where_addon : '').$i_sql_order_addon, $i_limitcount, $i_limitfrom);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	$i_counter = 0;
while(!$i_rSet1->EOF) {
 $rowname = ($i_counter % 2) ? 'rowone' : 'rowtwo';
echo '<tr id=tr_'.$i_pagewide_id.' class='.$rowname.' onmouseover="rollTR('.$i_pagewide_id.',1);" onmouseout="rollTR('.$i_pagewide_id.',0);"><td align=center width=22'.($i_rSet1->fields['userid'] > SYSTEM_USER_MAX_INDEX ? '' : ' class=system').'><input id=cb_'.$i_pagewide_id.' type=checkbox name=box_users[] value="'.$i_rSet1->fields['userid'].'" onclick="toggleCB(this);"></td><td align=right>'.$i_rSet1->fields['userid'].'</td><td align=center width=16 style="padding: 1px;"><a href="javascript:void(0)" onClick="showDialog(\'users.php?userid='.$i_rSet1->fields['userid'].'&action=notes\', 300, 200)"><img src="images/button-notes.gif" width=16 height=20 title="'.convertTextValue($i_rSet1->fields['user_notes']).'" border=0></a></td><td>'.$i_rSet1->fields['user_name'].'</td><td>'.$i_rSet1->fields['user_email'].'</td><td>'.$i_rSet1->fields['user_firstname'].'</td><td>'.$i_rSet1->fields['user_lastname'].'</td><td align=center><a href="users.php?userid='.$i_rSet1->fields['userid'].$i_order_addon.$i_url_limit_addon.'&action=enable&set='.($i_rSet1->fields['user_enabled'] ? '0"><img src="images/button-checkbox-2.gif" width=13 height=13 border=0 title="'.$lngstr['label_yes'].'">' : '1"><img src="images/button-checkbox-0.gif" width=13 height=13 border=0 title="'.$lngstr['label_no'].'">').'</a></td>';
echo '<td align=center width=22><a href="users.php?userid='.$i_rSet1->fields['userid'].'&action=groups"><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_manageusers_groups'].'"></a></td><td align=center width=22><a href="users.php?userid='.$i_rSet1->fields['userid'].'&action=edit"><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_manageusers_edit'].'"></a></td><td align=center width=22>'.($i_rSet1->fields['userid'] > SYSTEM_USER_MAX_INDEX ? '<a href="users.php?userid='.$i_rSet1->fields['userid'].'&action=delete" onclick="return confirmMessage(this, \''.$lngstr['qst_delete_user'].'\')"><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_manageusers_delete'].'"></a>' : '<img width=20 height=20 border=0 src="images/button-cross-inactive.gif">').'</td></tr>';
$i_counter++;
$i_pagewide_id++;
$i_rSet1->MoveNext();
}
$i_rSet1->Close();
}
echo '</table>';
echo '</td></tr></table></form>';
displayTemplate('_footer');
?>