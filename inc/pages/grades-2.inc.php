<?php
$g_vars['page']['location'] = array('test_manager', 'grading_systems', 'edit_grading_system');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_gscaleid = (int)readGetVar('gscaleid');
$g_vars['page']['selected_section'] = 'testmanager';
$g_vars['page']['selected_tab'] = 'grades-2';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_grades_edit'].'</h2>';
writeErrorsWarningsBar();
 
$i_rSet1 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."gscales WHERE gscaleid=$f_gscaleid");
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) {
 echo '<p><form method=post action="grades.php?gscaleid='.$f_gscaleid.'&action=settings">';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
$i_rowno = 0;
writeTR2($lngstr['page_grades_gscaleid'], $i_rSet1->fields["gscaleid"]);
writeTR2($lngstr['page_grades_gradename'], getInputElement('gscale_name', $i_rSet1->fields["gscale_name"]));
writeTR2($lngstr['page_grades_gradedescription'], getTextArea('gscale_description', $i_rSet1->fields["gscale_description"]));
$i_scale_text = "";
$i_rSet3 = $g_db->Execute("SELECT gscale_gradeid, grade_name, grade_from, grade_to FROM ".$srv_settings['table_prefix']."gscales_grades WHERE gscaleid=".$f_gscaleid);
if(!$i_rSet3) {
 showDBError(__FILE__, 3);
} else {
 while(!$i_rSet3->EOF) {
 $i_scale_text .= sprintf("%.1f", $i_rSet3->fields['grade_from']).'% - '.sprintf("%.1f", $i_rSet3->fields['grade_to']).'% <b>'.$i_rSet3->fields['grade_name'].'</b> [<a href="grades.php?action=edits&gscaleid='.$f_gscaleid.'&gscale_gradeid='.$i_rSet3->fields['gscale_gradeid'].'">'.$lngstr['page_grades']['edit_grade'].'</a>]<br>';
$i_rSet3->MoveNext();
}
$i_rSet3->Close();
}
if($i_scale_text)
 $i_scale_text .= '<br>';
writeTR2($lngstr['page_grades_gradescale'], $i_scale_text.'<a href="grades.php?action=edit&gscaleid='.$i_rSet1->fields["gscaleid"].'">'.$lngstr['page_grades_gradescale_text'].'</a>');
echo '</table>'; 
 echo '<p class=center><input class=btn type=submit name=bsubmit value=" '.$lngstr['button_update'].' "> <input class=btn type=submit name=bcancel value=" '.$lngstr['button_cancel'].' "></form>';
}
$i_rSet1->Close();
}
displayTemplate('_footer');
?>
