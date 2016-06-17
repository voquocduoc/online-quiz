<?php
$g_vars['page']['location'] = array('question_bank', 'subjects', 'edit_subject');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_subjectid = (int)readGetVar('subjectid');
$g_vars['page']['selected_section'] = 'questionbank';
$g_vars['page']['selected_tab'] = 'subjects-2';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_subjects_settings'].'</h2>';
writeErrorsWarningsBar();
 
$i_rSet1 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."subjects WHERE subjectid=$f_subjectid");
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) { 
 $i_subjects = array('' => $lngstr['label_none']);
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."subjects");
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 while(!$i_rSet2->EOF) {
 if($i_rSet2->fields['subjectid'] != $f_subjectid)
 $i_subjects[$i_rSet2->fields['subjectid']] = $i_rSet2->fields['subject_name'];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
echo '<p><form method=post action="subjects.php?subjectid='.$f_subjectid.'&action=edit">';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
$i_rowno = 0;
writeTR2($lngstr['page_subjects_subjectid'], $i_rSet1->fields['subjectid']);
  
 writeTR2($lngstr['page_subjects_subjectname'], getInputElement('subject_name', $i_rSet1->fields['subject_name']));
writeTR2($lngstr['page_subjects_subjectdescription'], getTextArea('subject_description', $i_rSet1->fields['subject_description']));
echo '</table>'; 
 echo '<p class=center><input class=btn type=submit name=bsubmit value=" '.$lngstr['button_update'].' "> <input class=btn type=submit name=bcancel value=" '.$lngstr['button_cancel'].' "></form>';
}
$i_rSet1->Close();
}
displayTemplate('_footer');
?>
