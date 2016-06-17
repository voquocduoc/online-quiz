<?php
$g_vars['page']['location'] = array('test_manager', 'grading_systems', 'grading_scale', 'edit_grade');
initTextEditor($G_SESSION['config_editortype'], array('grade_feedback'));
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_gscaleid = (int)readGetVar('gscaleid');
$f_gscale_gradeid = (int)readGetVar('gscale_gradeid');
$g_vars['page']['selected_section'] = 'testmanager';
$g_vars['page']['selected_tab'] = 'grades-7';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_grade_settings'].'</h2>';
writeErrorsWarningsBar();
 
$i_rSet1 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."gscales_grades WHERE gscaleid=".$f_gscaleid." AND gscale_gradeid=".$f_gscale_gradeid);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) {
 echo '<p><form method=post action="grades.php?action=edits&gscaleid='.$f_gscaleid.'&gscale_gradeid='.$f_gscale_gradeid.'">';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
$i_rowno = 0;
writeTR2Fixed($lngstr['page_grade_gscaleid'], $i_rSet1->fields['gscale_gradeid']);
writeTR2Fixed($lngstr['page_grade_gradename'], getInputElement('grade_name', $i_rSet1->fields['grade_name']));
writeTR2Fixed($lngstr['page_grade_gradefrom'], getInputElement('grade_from', $i_rSet1->fields['grade_from']));
writeTR2Fixed($lngstr['page_grade_gradeto'], getInputElement('grade_to', $i_rSet1->fields['grade_to']));
writeTR2Fixed($lngstr['page_grade_gradedescription'], getTextArea('grade_description', $i_rSet1->fields['grade_description']));
echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_grades_advanced\')">'.$lngstr['page_grade']['section_advanced'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_grades_advanced style="display:'.(!isset($_COOKIE['div_grades_advanced']) || $_COOKIE['div_grades_advanced']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
writeTR2Fixed($lngstr['page_grade']['feedback'], getTextEditor($G_SESSION['config_editortype'], 'grade_feedback', $i_rSet1->fields['grade_feedback']));
echo '</table></div></td></tr>';
echo '</table>'; 
 echo '<p class=center><input class=btn type=submit name=bsubmit value=" '.$lngstr['button_update'].' "> <input class=btn type=submit name=bcancel value=" '.$lngstr['button_cancel'].' "></form>';
}
$i_rSet1->Close();
}
displayTemplate('_footer');
?>
