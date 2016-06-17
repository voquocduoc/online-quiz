<?php
$g_vars['page']['location'] = array('test_manager', 'test_manager', 'test_settings');
initTextEditor($G_SESSION['config_editortype'], array('test_instructions'));
$g_vars['page']['meta'] .= '<style type="text/css">@import url('.$srv_settings['url_root'].'shared/calendar/skins/aqua/theme.css);</style>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/calendar.js"></script>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/lang/calendar-en.js"></script>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/calendar-setup.js"></script>
<script type="text/javascript" src="'.$srv_settings['url_root'].'shared/calendar/calendar-helper.js"></script>';
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_testid = (int)readGetVar('testid');
$g_vars['page']['selected_section'] = 'testmanager';
$g_vars['page']['selected_tab'] = 'testmanager-2';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_test_settings'].'</h2>';
writeErrorsWarningsBar();
 
$i_rSet1 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."tests WHERE testid=$f_testid", 1);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) { 
 $i_subjects = array();
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."subjects");
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 while(!$i_rSet2->EOF) {
 $i_subjects[$i_rSet2->fields['subjectid']] = $i_rSet2->fields['subject_name'];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
echo '<p><form method=post action="test-manager.php?testid='.$f_testid.'&action=settings" onsubmit="return submitForm();">';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
echo '<tr class=rowtwo valign=top><td colspan=2>'.getCheckbox('test_enabled', $i_rSet1->fields['test_enabled'], $lngstr['page_edittests_testenabled']).'</td></tr>';
$i_rowno = 1;
  
 writeTR2Fixed($lngstr['page_edittests_subjectid'], getSelectElement('subjectid', $i_rSet1->fields['subjectid'], $i_subjects).' <a href="subjects.php?testid='.$f_testid.'">'.$lngstr['label_subjects_edit'].'</a>');
writeTR2Fixed($lngstr['page_edittests_testname'], getInputElement('test_name', $i_rSet1->fields['test_name']));
writeTR2Fixed($lngstr['page_testmanager']['test_code'], getInputElement('test_code', $i_rSet1->fields['test_code']));
writeTR2Fixed($lngstr['page_edittests_testdescription'], getInputElement('test_description', $i_rSet1->fields['test_description']));
writeTR2Fixed($lngstr['page_edittests_testinstructions'], getTextEditor($G_SESSION['config_editortype'], 'test_instructions', $i_rSet1->fields['test_instructions']));
$strTestDateStartFormatted = ($i_rSet1->fields['test_datestart'] > 0) ? getDateLocal($lngstr['language']['calendar']['date_format'], $i_rSet1->fields['test_datestart']) : '';
$strTestDateStart = '<input name="test_datestart" id="test_datestart" value="'.$strTestDateStartFormatted.'" class=inp type=text size=20><a href="javascript:void(0);" title="'.$lngstr['calendar']['hint'].'"><img src="images/button-calendar.gif" alt="'.$lngstr['calendar']['hint'].'" class="calendar-icon" onclick="return showCalendar(\'test_datestart\', \''.$lngstr['language']['calendar']['date_format'].'\', \'24\', true);" onmouseover="this.className+=\' calendar-icon-hover\';" onmouseout="this.className = this.className.replace(/\s*calendar-icon-hover/ig, \'\');"></a>';
writeTR2Fixed($lngstr['page_edittests_teststart'], $strTestDateStart);
$strTestDateEndFormatted = ($i_rSet1->fields['test_dateend'] > 0) ? getDateLocal($lngstr['language']['calendar']['date_format'], $i_rSet1->fields['test_dateend']) : '';
$strTestDateEnd = '<input name="test_dateend" id="test_dateend" value="'.$strTestDateEndFormatted.'" class=inp type=text size=20><a href="javascript:void(0);" title="'.$lngstr['calendar']['hint'].'"><img src="images/button-calendar.gif" alt="'.$lngstr['calendar']['hint'].'" class="calendar-icon" onclick="return showCalendar(\'test_dateend\', \''.$lngstr['language']['calendar']['date_format'].'\', \'24\', true);" onmouseover="this.className+=\' calendar-icon-hover\';" onmouseout="this.className = this.className.replace(/\s*calendar-icon-hover/ig, \'\');"></a>';
writeTR2Fixed($lngstr['page_edittests_testend'], $strTestDateEnd);
writeTR2Fixed($lngstr['page_edittests_testtime'], getTimeElement('test_time', $i_rSet1->fields['test_time']).'<br>'.getCheckbox('test_timeforceout', $i_rSet1->fields['test_timeforceout'], $lngstr['page_edittests_testtimeforceout']));
writeTR2Fixed($lngstr['page-testmanager']['attempts_allowed'], getSelectElement('test_attempts', $i_rSet1->fields['test_attempts'], $lngstr['page-testmanager']['attempts_allowed_list']));
   
 $i_gradingsystems = array();
$i_rSet5 = $g_db->Execute("SELECT gscaleid, gscale_name FROM ".$srv_settings['table_prefix']."gscales ORDER BY gscaleid");
if(!$i_rSet5) {
 showDBError(__FILE__, 5);
} else {
 while(!$i_rSet5->EOF) {
 $i_gradingsystems[$i_rSet5->fields['gscaleid']] = $i_rSet5->fields['gscale_name'];
$i_rSet5->MoveNext();
}
$i_rSet5->Close();
}
writeTR2Fixed($lngstr['page_edittests_gradingsystem'], getSelectElement('gscaleid', $i_rSet1->fields['gscaleid'], $i_gradingsystems));
writeTR2Fixed($lngstr['page_edittests_showquestions'], getSelectElement('test_qsperpage', $i_rSet1->fields['test_qsperpage'], $lngstr['page_testmanager']['showquestions_items']));
writeTR2Fixed($lngstr['page_testmanager']['review_options'], getSelectElement('test_canreview', $i_rSet1->fields['test_canreview'], $lngstr['page_testmanager']['review_list']));
writeTR2Fixed($lngstr['page_edittests_shuffle'], getCheckbox('test_shuffleq', $i_rSet1->fields['test_shuffleq'], $lngstr['page_edittests_shuffleq']).'<br>'.getCheckbox('test_shufflea', $i_rSet1->fields['test_shufflea'], $lngstr['page_edittests_shufflea'])); 
 $i_rtemplates_text = array(0 => $lngstr['label_none']);
$i_rSet6 = $g_db->Execute("SELECT rtemplateid, rtemplate_name FROM ".$srv_settings['table_prefix']."rtemplates ORDER BY rtemplateid");
if(!$i_rSet6) {
 showDBError(__FILE__, 6);
} else {
 while(!$i_rSet6->EOF) {
 $i_rtemplates_text[$i_rSet6->fields['rtemplateid']] = $i_rSet6->fields['rtemplate_name'];
$i_rSet6->MoveNext();
}
$i_rSet6->Close();
}
writeTR2Fixed($lngstr['page_edittests_resultsettings'], getCheckbox('test_showqfeedback', $i_rSet1->fields['test_showqfeedback'], $lngstr['page_edittests_result_showqfeedback']).'<br>'.getCheckbox('test_result_showgrade', $i_rSet1->fields['test_result_showgrade'], $lngstr['page_edittests_result_showgrade']).'<br>'.getCheckbox('test_result_showgradefeedback', $i_rSet1->fields['test_result_showgradefeedback'], $lngstr['page_testmanager']['result_showgradefeedback']).'<br>'.getCheckbox('test_result_showanswers', $i_rSet1->fields['test_result_showanswers'], $lngstr['page_edittests_result_showanswers']).'<br>'.getCheckbox('test_result_showpoints', $i_rSet1->fields['test_result_showpoints'], $lngstr['page_edittests_result_showpoints']).'<br>'.$lngstr['page_testsettings']['custom_report'].' '.getSelectElement('test_result_rtemplateid', $i_rSet1->fields['test_result_rtemplateid'], $i_rtemplates_text)); 
 $i_gradeconditions = array(0 => $lngstr['page-testsettings']['no_condition']);
$i_rSet7 = $g_db->Execute("SELECT gscale_gradeid, grade_name FROM ".$srv_settings['table_prefix']."gscales_grades WHERE gscaleid=".$i_rSet1->fields['gscaleid']);
if(!$i_rSet7) {
 showDBError(__FILE__, 7);
} else {
 while(!$i_rSet7->EOF) {
 $i_gradeconditions[$i_rSet7->fields['gscale_gradeid']] = $i_rSet7->fields['grade_name'];
$i_rSet7->MoveNext();
}
$i_rSet7->Close();
} 
 writeTR2Fixed($lngstr['page_edittests_advancedreport'], $lngstr['page-testsettings']['report_template'].' '.getSelectElement('rtemplateid', $i_rSet1->fields['rtemplateid'], $i_rtemplates_text).'<br>'.$lngstr['page-testsettings']['report_grade_condition'].' '.getSelectElement('test_reportgradecondition', $i_rSet1->fields['test_reportgradecondition'], $i_gradeconditions).'<br>'.getCheckbox('test_result_showpdf', $i_rSet1->fields['test_result_showpdf'], $lngstr['page_edittests_advancedreport_showpdf']).'<br>'.getCheckbox('test_result_showhtml', $i_rSet1->fields['test_result_showhtml'], $lngstr['page_edittests_advancedreport_showhtml'])); 
  
 
 $i_etemplates_text = array(0 => $lngstr['label_do_not_send_email']);
$i_rSet4 = $g_db->Execute("SELECT etemplateid, etemplate_name FROM ".$srv_settings['table_prefix']."etemplates ORDER BY etemplateid");
if(!$i_rSet4) {
 showDBError(__FILE__, 4);
} else {
 while(!$i_rSet4->EOF) {
 $i_etemplates_text[$i_rSet4->fields['etemplateid']] = $i_rSet4->fields['etemplate_name'];
$i_rSet4->MoveNext();
}
$i_rSet4->Close();
}
writeTR2Fixed($lngstr['page_edittests_sendresultsbyemail'], $lngstr['page_edittests_sendresultsbyemail_template'].' '.getSelectElement('result_etemplateid', $i_rSet1->fields['result_etemplateid'], $i_etemplates_text).'<br>'.$lngstr['page_edittests_sendresultsbyemail_to'].' '.getInputElement('test_result_email', $i_rSet1->fields['test_result_email']).', '.getCheckbox('test_result_emailtouser', $i_rSet1->fields['test_result_emailtouser'], $lngstr['page_edittests_result_emailtouser'])); 
 $i_groups_text = '';
$i_rSet3 = $g_db->Execute("SELECT ".$srv_settings['table_prefix']."groups.groupid, ".$srv_settings['table_prefix']."groups.group_name, ".$srv_settings['table_prefix']."groups_tests.groupid as isingroup FROM ".$srv_settings['table_prefix']."groups LEFT JOIN ".$srv_settings['table_prefix']."groups_tests ON testid=".$f_testid." AND ".$srv_settings['table_prefix']."groups.groupid=".$srv_settings['table_prefix']."groups_tests.groupid");
if(!$i_rSet3) {
 showDBError(__FILE__, 3);
} else {
 while(!$i_rSet3->EOF) {
 if($i_groups_text)
 $i_groups_text .= '<br>';
$i_groups_text .= getCheckbox('group['.$i_rSet3->fields['groupid'].']', ($i_rSet3->fields['isingroup'] <> NULL), $i_rSet3->fields['group_name']);
$i_rSet3->MoveNext();
}
$i_rSet3->Close();
}
  
 writeTR2Fixed($lngstr['page_testmanager']['testprice'], getInputElement('test_price', sprintf("%.2f", ($i_rSet1->fields['test_price'] / 100)), 5));
echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_testmanager_settings_groups\')">'.$lngstr['page_testmanager']['settings']['section_groups'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_testmanager_settings_groups style="display:'.(isset($_COOKIE['div_testmanager_settings_groups']) && $_COOKIE['div_testmanager_settings_groups']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
writeTR2Fixed($lngstr['page_edittests_assignedto'], '<p>'.$i_groups_text.'<p>'.getCheckbox('test_forall', $i_rSet1->fields['test_forall'], $lngstr['page_edittests_assignto_everybody'])); 
 $i_tests_items = array(0 => $lngstr['label_none']);
$i_rSet3 = $g_db->Execute("SELECT ".$srv_settings['table_prefix']."tests.testid, ".$srv_settings['table_prefix']."tests.test_name FROM ".$srv_settings['table_prefix']."tests ORDER BY testid");
if(!$i_rSet3) {
 showDBError(__FILE__, 3);
} else {
 while(!$i_rSet3->EOF) {
 $i_tests_items[$i_rSet3->fields['testid']] = $i_rSet3->fields['test_name'];
$i_rSet3->MoveNext();
}
$i_rSet3->Close();
}
echo '</table></div></td></tr>';
echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_testmanager_settings_advanced\')">'.$lngstr['page_testmanager']['settings']['section_advanced'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_testmanager_settings_advanced style="display:'.(!isset($_COOKIE['div_testmanager_settings_advanced']) || $_COOKIE['div_testmanager_settings_advanced']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
writeTR2Fixed($lngstr['page_testmanager']['content_protection'], getSelectElement('test_contentprotection', $i_rSet1->fields['test_contentprotection'], $lngstr['page_testmanager']['content_protection_list']));
writeTR2Fixed($lngstr['page-testmanager']['prevtest'], getSelectElement('test_prevtestid', $i_rSet1->fields['test_prevtestid'], $i_tests_items));
writeTR2Fixed($lngstr['page-testmanager']['nexttest'], getSelectElement('test_nexttestid', $i_rSet1->fields['test_nexttestid'], $i_tests_items));
writeTR2Fixed($lngstr['page_testmanager']['other_options'], getCheckbox('test_other_repeatuntilcorrect', $i_rSet1->fields['test_other_repeatuntilcorrect'], $lngstr['page_testmanager']['repeat_until_answered_correctly']));
echo '</table></div></td></tr>';
echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_testmanager_settings_notes\')">'.$lngstr['page_testmanager']['settings']['section_notes'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_testmanager_settings_notes style="display:'.(isset($_COOKIE['div_testmanager_settings_notes']) && $_COOKIE['div_testmanager_settings_notes']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
writeTR2Fixed($lngstr['page_edittests_testnotes'], getTextArea('test_notes', $i_rSet1->fields['test_notes']));
echo '</table></div></td></tr>';
echo '</table>'; 
 echo '<p class=center><input class=btn type=submit name=bsubmit value=" '.$lngstr['button_update'].' "> <input class=btn type=submit name=bsubmit2 value=" '.$lngstr['button_update_and_edit_questions'].' "> <input class=btn type=submit name=bcancel value=" '.$lngstr['button_cancel'].' "></form>';
}
$i_rSet1->Close();
}
displayTemplate('_footer');
?>