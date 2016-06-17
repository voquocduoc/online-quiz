<?php
$g_vars['page']['location'] = array('administration', 'groups', 'edit_group');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_groupid = (int)readGetVar('groupid');
$g_vars['page']['selected_section'] = 'administration';
$g_vars['page']['selected_tab'] = 'groups-2';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_groups_settings'].'</h2>';
writeErrorsWarningsBar();
 
$i_rSet1 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."groups WHERE groupid=$f_groupid");
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) {
 echo '<p><form method=post action="groups.php?groupid='.$f_groupid.'&action=edit">';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
$i_rowno = 0;
writeTR2($lngstr['page_managegroups_groupid'], $i_rSet1->fields["groupid"]);
writeTR2($lngstr['page_managegroups_groupname'], getInputElement('group_name', $i_rSet1->fields["group_name"]));
writeTR2($lngstr['page_managegroups_groupdescription'], getTextArea('group_description', $i_rSet1->fields["group_description"]));
echo '<tr valign=top><td class=rowhdr2 colspan=2>'.$lngstr['page_groups_access_rights'].'</td></tr>';
writeTR2($lngstr['page_groups_access_tests'], getSelectElement('access_tests', $i_rSet1->fields["access_tests"], $lngstr['page_groups_access_tests_select']));
writeTR2($lngstr['page_groups_access_questionbank'], getSelectElement('access_questionbank', $i_rSet1->fields["access_questionbank"], $lngstr['page_groups_access_questionbank_select']));
writeTR2($lngstr['page_groups_access_subjects'], getSelectElement('access_subjects', $i_rSet1->fields["access_subjects"], $lngstr['page_groups_access_subjects_select']));
writeTR2($lngstr['page_groups_access_testmanager'], getSelectElement('access_testmanager', $i_rSet1->fields["access_testmanager"], $lngstr['page_groups_access_testmanager_select']));
writeTR2($lngstr['page_groups_access_gradingsystems'], getSelectElement('access_gradingsystems', $i_rSet1->fields["access_gradingsystems"], $lngstr['page_groups_access_gradingsystems_select']));
writeTR2($lngstr['page_groups_access_emailtemplates'], getSelectElement('access_emailtemplates', $i_rSet1->fields["access_emailtemplates"], $lngstr['page_groups_access_emailtemplates_select']));
writeTR2($lngstr['page_groups_access_reporttemplates'], getSelectElement('access_reporttemplates', $i_rSet1->fields["access_reporttemplates"], $lngstr['page_groups_access_reporttemplates_select']));
writeTR2($lngstr['page_groups_access_reportsmanager'], getSelectElement('access_reportsmanager', $i_rSet1->fields["access_reportsmanager"], $lngstr['page_groups_access_reportsmanager_select']));
writeTR2($lngstr['page_groups_access_users'], getSelectElement('access_users', $i_rSet1->fields["access_users"], $lngstr['page_groups_access_users_select']));
writeTR2($lngstr['page_groups_access_groups'], getSelectElement('access_groups', $i_rSet1->fields["access_groups"], $lngstr['page_groups_access_groups_select']));
writeTR2($lngstr['page_groups_access_config'], getSelectElement('access_config', $i_rSet1->fields["access_config"], $lngstr['page_groups_access_config_select']));
writeTR2($lngstr['page_groups_access_visitors'], getSelectElement('access_visitors', $i_rSet1->fields["access_visitors"], $lngstr['page_groups_access_visitors_select']));
echo '</table>'; 
 echo '<p class=center><input class=btn type=submit name=bsubmit value=" '.$lngstr['button_update'].' "> <input class=btn type=submit name=bcancel value=" '.$lngstr['button_cancel'].' "></form>';
}
$i_rSet1->Close();
}
displayTemplate('_footer');
?>
