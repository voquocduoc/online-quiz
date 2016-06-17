<?php 
  
$f_pageno = (int)readGetVar('pageno');
if($f_pageno < 1)
 $f_pageno = 1;
$g_vars['page']['hide_cpanel'] = true;
$i_testtime = readDiffTime(0, $G_SESSION['yt_testtime']);
$g_vars['page']['test_timer'] = ($G_SESSION['yt_testtime'] > 0 ? sprintf("<b>%02d:%02d:%02d</b>", $i_testtime['hours'], $i_testtime['minutes'], $i_testtime['seconds']) : $lngstr['page_test']['no_time_limit']);
$g_vars['page']['questionindicator_hint'] = sprintf($lngstr['page_test']['questionindicator_hint'], $G_SESSION['yt_questionno'], $G_SESSION['yt_questioncount']);
$g_vars['page']['questionindicator'] = sprintf($lngstr['page_test']['questionindicator'], $G_SESSION['yt_questionno'], $G_SESSION['yt_questioncount']);
$g_vars['page']['testid'] = $G_SESSION['testid'];
$g_vars['page']['test_name'] = convertTextValue($G_SESSION['yt_name']);
$g_vars['page']['submit_button']['visible'] = true;
$g_vars['page']['content_protection'] = $G_SESSION['yt_contentprotection'];
$g_vars['page']['test_instructions'] = '';
$i_rSet1 = $g_db->SelectLimit("SELECT test_instructions FROM ".$srv_settings['table_prefix']."tests WHERE testid=".$G_SESSION['testid'], 1);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF)
 $g_vars['page']['test_instructions'] = $i_rSet1->fields['test_instructions'];
$i_rSet1->Close();
}
for($i = 2; $i <= $f_pageno; $i++) {
	if(($i_pos = strpos($g_vars['page']['test_instructions'], IGT_TAG_PAGE_BREAK)) !== false) {
 $g_vars['page']['test_instructions'] = substr($g_vars['page']['test_instructions'], $i_pos + strlen(IGT_TAG_PAGE_BREAK));
} else { 
 $g_vars['page']['test_instructions'] = '';
}
}
  
if(strlen($g_vars['page']['test_instructions']) > 0) { 
	if(($i_pos = strpos($g_vars['page']['test_instructions'], IGT_TAG_PAGE_BREAK)) !== false) {
 $g_vars['page']['test_instructions'] = substr($g_vars['page']['test_instructions'], 0, $i_pos);
$g_vars['page']['next_page_exists'] = true;
} else { 
 $g_vars['page']['next_page_exists'] = false;
}
$g_vars['page']['form_action_url'] = 'test.php?action=instructions&testid='.$G_SESSION['testid'].'&pageno='.($f_pageno + 1);
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('test-instructions');
} else { 
	if($G_SESSION['yt_state'] == TEST_STATE_TESTINTRO)
 $G_SESSION['yt_state'] = TEST_STATE_QSHOW;
gotoLocation('test.php?action=&testid='.$G_SESSION['testid']);
}
?>