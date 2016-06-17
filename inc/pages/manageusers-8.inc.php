<?php
$g_vars['page']['location'] = array('administration', 'users', 'member_of');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$g_vars['page']['selected_section'] = 'administration';
$g_vars['page']['selected_tab'] = 'users-8';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_title_users_memberof_users'].'</h2>';
writeErrorsWarningsBar();
writeInfoBar($lngstr['tooltip_users_groups']);
$i_pagewide_id = 0;  
$f_userids = array();
$i_userids_addon = "";
if(isset($_POST["box_users"]) && is_array($_POST["box_users"])) {
	foreach($_POST["box_users"] as $f_userid) {
 array_push($f_userids, $f_userid);
}
} else if(isset($_GET["userids"]) && $_GET["userids"] != "") {
	$f_userids = explode(SYSTEM_ARRAY_ITEM_SEPARATOR, readGetVar('userids'));
} else {
	array_push($f_userids, readGetVar('userid'));
}
$i_userids_addon .= "&userids=".implode(SYSTEM_ARRAY_ITEM_SEPARATOR, $f_userids);
reset($f_userids); 
$i_direction = "";
$i_order_addon = "";
$i_sql_order_addon = "";
$i_tablefields = array(
	array($lngstr["label_manageusers_hdr_userid"], $lngstr["label_manageusers_hdr_userid_hint"], $srv_settings['table_prefix']."users.userid"),
	array($lngstr["label_manageusers_hdr_user_notes"], $lngstr["label_manageusers_hdr_user_notes_hint"], ""),
	array($lngstr["label_manageusers_hdr_user_name"], $lngstr["label_manageusers_hdr_user_name_hint"], $srv_settings['table_prefix']."users.user_name"),
	array($lngstr["label_manageusers_hdr_user_email"], $lngstr["label_manageusers_hdr_user_email_hint"], $srv_settings['table_prefix']."users.user_email"),
	array($lngstr["label_manageusers_hdr_user_firstname"], $lngstr["label_manageusers_hdr_user_firstname_hint"], $srv_settings['table_prefix']."users.user_firstname"),
	array($lngstr["label_manageusers_hdr_user_lastname"], $lngstr["label_manageusers_hdr_user_lastname_hint"], $srv_settings['table_prefix']."users.user_lastname"),
	array($lngstr["label_manageusers_hdr_user_enabled"], $lngstr["label_manageusers_hdr_user_enabled_hint"], $srv_settings['table_prefix']."users.user_enabled"),
);
$i_order_no = isset($_GET["order"]) ? (int)$_GET["order"] : 0;
if($i_order_no>=count($i_tablefields))
 $i_order_no = -1;
if($i_order_no>=0) {
	$i_direction = (isset($_GET["direction"]) && $_GET["direction"]) ? "DESC" : "";
$i_order_addon = "&order=".$i_order_no."&direction=".$i_direction;
$i_sql_order_addon = " ORDER BY ".$i_tablefields[$i_order_no][2]." ".$i_direction;
}  
$i_2_direction = "";
$i_2_order_addon = "";
$i_2_sql_order_addon = "";
$i_2_tablefields = array(
	array($lngstr["label_managegroups_hdr_groupid"], $lngstr["label_managegroups_hdr_groupid_hint"], $srv_settings['table_prefix']."groups.groupid"),
	array($lngstr["label_managegroups_hdr_group_name"], $lngstr["label_managegroups_hdr_group_name_hint"], $srv_settings['table_prefix']."groups.group_name"),
	array($lngstr["label_managegroups_hdr_group_description"], $lngstr["label_managegroups_hdr_group_description_hint"], $srv_settings['table_prefix']."groups.group_description"),
);
$i_2_order_no = isset($_GET["order2"]) ? (int)$_GET["order2"] : 0;
if($i_2_order_no>=count($i_2_tablefields))
 $i_2_order_no = -1;
if($i_2_order_no>=0) {
	$i_2_direction = (isset($_GET["direction2"]) && $_GET["direction2"]) ? "DESC" : "";
$i_2_order_addon = "&order2=".$i_2_order_no."&direction2=".$i_2_direction;
$i_2_sql_order_addon = " ORDER BY ".$i_2_tablefields[$i_2_order_no][2]." ".$i_2_direction;
} 
$i_2_url_limitto_addon = "";
$i_2_url_pageno_addon = "";
$i_2_url_limit_addon = "";
$i_2_pageno = 0;
$i_2_limitcount = isset($_GET["limitto2"]) ? (int)$_GET["limitto2"] : $G_SESSION['config_itemsperpage'];
if($i_2_limitcount>0) {
	$i_2_recordcount = getRecordCount($srv_settings['table_prefix'].'groups');
$i_2_pageno = isset($_GET["pageno2"]) ? (int)$_GET["pageno2"] : 1;
if($i_2_pageno < 1)
 $i_2_pageno = 1;
$i_2_limitfrom = ($i_2_pageno-1)*$i_2_limitcount;
$i_2_pageno_count = floor(($i_2_recordcount - 1) / $i_2_limitcount) + 1;
if($i_2_limitfrom > $i_2_recordcount) {
 $i_2_pageno = $i_2_pageno_count;
$i_2_limitfrom = ($i_2_pageno-1)*$i_2_limitcount;
}
$i_2_url_limitto_addon .= "&limitto2=".$i_2_limitcount;
$i_2_url_pageno_addon .= "&pageno2=".$i_2_pageno;
$i_2_url_limit_addon .= $i_2_url_limitto_addon.$i_2_url_pageno_addon;
} else {
	$i_2_url_limitto_addon = "&limitto2=";
$i_2_url_limit_addon .= $i_2_url_limitto_addon;
$i_2_limitfrom = -1;
$i_2_limitcount = -1;
} 
$n2PageWindow = IGT_CONFIG_NAVIGATION_WINDOW;
if (!IGT_CONFIG_NAVIGATION_SHOW_ALWAYS) {
	if ($i_2_recordcount == 0 || ($i_2_pageno_count == 1 && $this->NavShowAll == false))
 return;
} 
if($i_2_pageno > floor($n2PageWindow/2) + 1 && $i_2_pageno_count > $n2PageWindow)
	$n2StartPage = $i_2_pageno - floor($n2PageWindow/2);
else
	$n2StartPage = 1; 
if($i_2_pageno <= $i_2_pageno_count - floor($n2PageWindow/2) && $n2StartPage + $n2PageWindow-1 <= $i_2_pageno_count)
	$n2EndPage = $n2StartPage + $n2PageWindow - 1;
else
{
	$n2EndPage = $i_2_pageno_count;
if($n2EndPage - $n2PageWindow + 1 >= 1)
 $n2StartPage = $n2EndPage - $n2PageWindow + 1;
}
$n2RecordFrom = ($i_2_pageno - 1) * $i_2_limitcount + 1;
if($i_2_pageno != $i_2_pageno_count)
 $n2RecordTo = $i_2_pageno * $i_2_limitcount;
else $n2RecordTo = $i_2_recordcount;
 
echo '<p><form name=usersForm class=iactive method=post><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>';
echo '<table cellpadding=0 cellspacing=0 border=0 width="100%" style="background: url(images/toolbar-background.gif) repeat-x"><tr vAlign=center><td width=2><img src="images/toolbar-left.gif" width=2 height=32></td><td width=32><a href="users.php?action=create"><img src="images/button-new-big.gif" border=0 title="'.$lngstr['label_action_create_user'].'"></a></td><td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td><td width=32><img src="images/button-groups-big.gif" border=0 title="'.$lngstr['label_action_groups'].'" style="cursor: hand;" onclick="f=document.usersForm;f.action=\'users.php?action=groups\';f.submit();"></td><td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td><td width=32><img src="images/button-cross-big.gif" border=0 title="'.$lngstr['label_action_users_delete'].'" style="cursor: hand;" onclick="f=document.usersForm;if (confirm(\''.$lngstr['qst_delete_users'].'\')) { f.action=\'users.php?action=delete&confirmed=1\';f.submit();}"></td><td width="100%">&nbsp;</td><td width=2><img src="images/toolbar-right.gif" width=2 height=32></td></tr></table>';
echo '</td></tr><tr><td>';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
echo '<tr vAlign=top><td class=rowhdr1 title="'.$lngstr['label_hdr_select_hint'].'" width=22><input type=checkbox name=toggleAll onclick="toggleCBs(this);"></td>';
writeQryTableHeaders('users.php?action=groups'.$i_userids_addon.$i_2_order_addon.$i_2_url_limit_addon, $i_tablefields, $i_order_no, $i_direction);
echo '<td class=rowhdr1 colspan=3>'.$lngstr['label_hdr_action'].'</td></tr>';
$i_rSet1 = $g_db->Execute("SELECT userid, user_name, user_email, user_firstname, user_lastname, user_notes, user_enabled FROM ".$srv_settings['table_prefix']."users".($f_userids ? " WHERE userid IN (".implode(',', $f_userids).")" : "").$i_sql_order_addon);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	$i_counter = 0;
while(!$i_rSet1->EOF) {
 $rowname = ($i_counter % 2) ? "rowone" : "rowtwo";
echo '<tr id=tr_'.$i_pagewide_id.' class='.$rowname.' onmouseover="rollTR('.$i_pagewide_id.',1);" onmouseout="rollTR('.$i_pagewide_id.',0);"><td align=center width=22><input id=cb_'.$i_pagewide_id.' type=checkbox name=box_users[] value="'.$i_rSet1->fields["userid"].'" onclick="toggleCB(this);"></td><td align=right>'.$i_rSet1->fields["userid"].'</td><td align=center width=16 style="padding: 1px;"><a href="javascript:void(0)" onClick="showDialog(\'users.php?userid='.$i_rSet1->fields["userid"].'&action=notes\', 300, 200)"><img src="images/button-notes.gif" width=16 height=20 title="'.convertTextValue($i_rSet1->fields["user_notes"]).'" border=0></a></td><td>'.$i_rSet1->fields["user_name"].'</td><td>'.$i_rSet1->fields["user_email"].'</td><td>'.$i_rSet1->fields["user_firstname"].'</td><td>'.$i_rSet1->fields["user_lastname"].'</td><td align=center><a href="users.php?userid='.$i_rSet1->fields["userid"].$i_order_addon.$i_2_order_addon.'&action=enable&set='.($i_rSet1->fields["user_enabled"] ? '0"><img src="images/button-checkbox-2.gif" width=13 height=13 border=0 title="'.$lngstr['label_yes'].'">' : '1"><img src="images/button-checkbox-0.gif" width=13 height=13 border=0 title="'.$lngstr['label_no'].'">').'</a></td>';
echo '<td align=center width=22><a href="users.php?userid='.$i_rSet1->fields["userid"].'&action=groups"><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_manageusers_groups'].'"></a></td><td align=center width=22><a href="users.php?userid='.$i_rSet1->fields["userid"].'&action=edit"><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_manageusers_edit'].'"></a></td><td align=center width=22><a href="users.php?userid='.$i_rSet1->fields["userid"].'&action=delete" onclick="return confirmMessage(this, \''.$lngstr['qst_delete_user'].'\')"><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_manageusers_delete'].'"></a></td></tr>';
$i_counter++;
$i_pagewide_id++;
$i_rSet1->MoveNext();
}
$i_rSet1->Close();
}
echo '</table>';
echo '</td></tr></table></form>'; 
echo '<h2>'.$lngstr['page_title_users_memberof_groups'].'</h2>';
echo '<p><form name=groupsForm class=iactive method=post><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>';
echo '<table cellpadding=0 cellspacing=0 border=0 width="100%" style="background: url(images/toolbar-background.gif) repeat-x"><tr vAlign=center><td width=2><img src="images/toolbar-left.gif" width=2 height=32></td><td width=32><a href="groups.php?action=create"><img src="images/button-new-big.gif" border=0 title="'.$lngstr['label_action_create_group'].'"></a></td><td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td><td width=32><img src="images/button-cross-big.gif" border=0 title="'.$lngstr['label_action_groups_delete'].'" style="cursor: hand;" onclick="f=document.groupsForm;if (confirm(\''.$lngstr['qst_delete_groups'].'\')) { f.action=\'groups.php?action=delete&confirmed=1\';f.submit();}"></td><td width="100%">&nbsp;</td>';
if($i_2_limitcount > 0) {
	$i_2_url_pages_addon = $i_userids_addon.$i_order_addon.$i_2_order_addon.$i_2_url_limitto_addon;
echo '<td vAlign=middle width=32><nobr>&nbsp;'.sprintf($lngstr['label']['KtoLofN'], $n2RecordFrom, $n2RecordTo, $i_2_recordcount).'&nbsp;</nobr></td>';
echo '<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>';
echo '<td vAlign=middle width=32><nobr>&nbsp;';
for($i = $n2StartPage; $i <= $n2EndPage; $i++) {
 if($i != $i_2_pageno)
 echo '&nbsp;<a href="groups.php?pageno='.$i.$i_2_url_pages_addon.'">'.$i.'</a>&nbsp;';
else echo '<span class=currentitem>&nbsp;'.$i.'&nbsp;</span> ';
}
echo '</nobr></td>';
echo '<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>';
if($i_2_pageno > 1) {
 echo '<td width=32><a href="users.php?action=groups&pageno2=1'.$i_2_url_pages_addon.'"><img src="images/button-first-big.gif" border=0 title="'.$lngstr['button_first_page'].'"></a></td>';
echo '<td width=32><a href="users.php?action=groups&pageno2='.max(($i_2_pageno-1), 1).$i_2_url_pages_addon.'"><img src="images/button-prev-big.gif" border=0 title="'.$lngstr['button_prev_page'].'"></a></td>';
} else {
 echo '<td width=32><img src="images/button-first-big-inactive.gif" border=0 title="'.$lngstr['button_first_page'].'"></td>';
echo '<td width=32><img src="images/button-prev-big-inactive.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td>';
}
if($i_2_pageno < $i_2_pageno_count) {
 echo '<td width=32><a href="users.php?action=groups&pageno2='.min(($i_2_pageno+1), $i_2_pageno_count).$i_2_url_pages_addon.'"><img src="images/button-next-big.gif" border=0 title="'.$lngstr['button_next_page'].'"></a></td>';
echo '<td width=32><a href="users.php?action=groups&pageno2='.$i_2_pageno_count.$i_2_url_pages_addon.'"><img src="images/button-last-big.gif" border=0 title="'.$lngstr['button_last_page'].'"></a></td>';
} else {
 echo '<td width=32><img src="images/button-next-big-inactive.gif" border=0 title="'.$lngstr['button_next_page'].'"></td>';
echo '<td width=32><img src="images/button-last-big-inactive.gif" border=0 title="'.$lngstr['button_last_page'].'"></td>';
}
}
echo '<td width=2><img src="images/toolbar-right.gif" width=2 height=32></td></tr></table>';
echo '</td></tr><tr><td>';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
echo '<tr vAlign=top><td class=rowhdr1 title="'.$lngstr['label_hdr_select_hint'].'" width=22><input type=checkbox name=toggleAll onclick="toggleCBs(this);"></td>';
writeQryTableHeaders('users.php?action=groups'.$i_userids_addon.$i_order_addon.$i_2_url_limit_addon, $i_2_tablefields, $i_2_order_no, $i_2_direction, '2');
echo '<td class=rowhdr1 title="'.$lngstr['label_managegroups_hdr_member_of_hint'].'" vAlign=top>'.$lngstr['label_managegroups_hdr_member_of'].'</td>';
echo '<td class=rowhdr1 colspan=2>'.$lngstr['label_hdr_action'].'</td></tr>';
$i_rSet2 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."groups".$i_2_sql_order_addon, $i_2_limitcount, $i_2_limitfrom);
if(!$i_rSet2) {
	showDBError(__FILE__, 2);
} else {
	$i_counter = 0;
while(!$i_rSet2->EOF) { 
 $i_member_count = getRecordCount($srv_settings['table_prefix'].'groups_users', ($f_userids ? "userid IN (".implode(',', $f_userids).") AND " : "")."groupid=".$i_rSet2->fields["groupid"]);
$rowname = ($i_counter % 2) ? "rowone" : "rowtwo";
echo '<tr id=tr_'.$i_pagewide_id.' class='.$rowname.' onmouseover="rollTR('.$i_pagewide_id.',1);" onmouseout="rollTR('.$i_pagewide_id.',0);"><td align=center width=22'.($i_rSet2->fields["groupid"] > SYSTEM_GROUP_MAX_INDEX ? '' : ' class=system').'><input id=cb_'.$i_pagewide_id.' type=checkbox name=box_groups[] value="'.$i_rSet2->fields["groupid"].'" onclick="toggleCB(this);"></td><td align=right>'.$i_rSet2->fields["groupid"].'</td><td>'.getTruncatedHTML($i_rSet2->fields["group_name"]).'</td><td>'.$i_rSet2->fields["group_description"].'</td><td align=center><a href="users.php?action=memberof&groupid='.$i_rSet2->fields["groupid"].$i_order_addon.$i_userids_addon.$i_2_order_addon.$i_2_url_limit_addon.'&set='.($i_member_count>=sizeof($f_userids) ? '0"><img src="images/button-checkbox-2.gif" width=13 height=13 border=0 title="'.$lngstr['label_yes'].'">' : ($i_member_count>0 ? '1"><img src="images/button-checkbox-1.gif" width=13 height=13 border=0 title="'.$lngstr['label_partially'].'">' : '1"><img src="images/button-checkbox-0.gif" width=13 height=13 border=0 title="'.$lngstr['label_no'].'">')).'</a></td>';
echo '<td align=center width=22><a href="groups.php?groupid='.$i_rSet2->fields["groupid"].'&action=edit"><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_group_edit'].'"></a></td><td align=center width=22>'.($i_rSet2->fields["groupid"] > SYSTEM_GROUP_MAX_INDEX ? '<a href="groups.php?groupid='.$i_rSet2->fields["groupid"].'&action=delete" onclick="return confirmMessage(this, \''.$lngstr['qst_delete_group'].'\')"><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_group_delete'].'"></a>' : '<img width=20 height=20 border=0 src="images/button-cross-inactive.gif">').'</td></tr>';
$i_counter++;
$i_pagewide_id++;
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
echo '</table>';
echo '</td></tr></table></form>';
displayTemplate('_footer');
?>
