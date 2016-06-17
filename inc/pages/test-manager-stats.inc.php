<?php
$g_vars['page']['location'] = array('test_manager', 'test_manager', 'test_statistics'); 
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$g_vars['page']['selected_section'] = 'testmanager';
$g_vars['page']['selected_tab'] = 'teststats';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_testmanager_stats']['header'].'</h2>';
writeErrorsWarningsBar();
function getGauge($i_percentage, $i_color='blue') {
global $srv_settings, $srv_settings;
return '<img src="images/gauge-'.$i_color.'-left.gif" width=3 height=12><img src="images/gauge-'.$i_color.'.gif" width='.round($i_percentage * 300 / 100).' height=12><img src="images/gauge-'.$i_color.'-right.gif" width=3 height=12>';
}
function writeTestStats($i_testid) {
global $g_db, $lngstr, $srv_settings;
$i_testid = (int)$i_testid; 
	$i_test_name = '';
$i_gscaleid = 0;
$i_rSet1 = $g_db->SelectLimit("SELECT * FROM ".$srv_settings['table_prefix']."tests WHERE testid=".$i_testid, 1);
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 if(!$i_rSet1->EOF) {
 $i_test_name = $i_rSet1->fields['test_name'];
$i_gscaleid = $i_rSet1->fields['gscaleid'];
}
$i_rSet1->Close();
} 
	$i_gradecount = 0;
$i_grades_times_total = 0;
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."gscales_grades WHERE gscaleid=".$i_gscaleid." ORDER BY gscale_gradeid");
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 while(!$i_rSet2->EOF) {
 $i_gradecount++;
$i_gradeid = $i_rSet2->fields['gscale_gradeid'];
$i_grades_names[$i_gradeid] = $i_rSet2->fields['grade_name']; 
 $i_grades_times[$i_gradeid] = getRecordCount($srv_settings['table_prefix'].'results', 'testid='.$i_testid.' AND gscaleid='.$i_gscaleid.' AND gscale_gradeid='.$i_gradeid);
$i_grades_times_total += $i_grades_times[$i_gradeid];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
} 
	$i_resultcount = 0;
$i_points_max = 0;
$i_points_low = IGT_MAX_FLOAT;
$i_points_high = 0;
$i_points_total = 0;
$i_points_total_max = 0;
$i_rSet3 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."results WHERE testid=".$i_testid." AND gscale_gradeid > 0");
if(!$i_rSet3) {
 showDBError(__FILE__, 3);
} else {
 while(!$i_rSet3->EOF) {
 $i_resultcount++;
$i_points = $i_rSet3->fields['result_points'];
$i_points_max = $i_rSet3->fields['result_pointsmax'];
if($i_points > $i_points_high)
 $i_points_high = $i_points;
if($i_points < $i_points_low)
 $i_points_low = $i_points;
$i_points_total += $i_points;
$i_points_total_max += $i_points_max;
$i_rSet3->MoveNext();
}
$i_rSet3->Close();
}
 
	echo '<tr class=rowone>';
echo '<td rowspan='.($i_gradecount+8).' align=right>'.$i_testid.'</td>';
echo '<td colspan=4><b>'.$i_test_name.'</b></td>';
echo '</tr>';
echo '<tr class=rowone><td colspan=4><img src="images/1x1.gif" width=1 height=5></td></tr>'; 
	echo '<tr class=rowone>';
echo '<td>'.$lngstr['page_testmanager_stats']['test_average_score'].'</td>';
if(($i_points_total_max > 0) && ($i_resultcount > 0)) {
 $i_points_average = ($i_points_total / $i_resultcount);
$i_points_average_percentage = ($i_points_total * 100) / $i_points_total_max;
echo '<td>'.getGauge($i_points_average_percentage, 'yellow').'</td>';
echo '<td align=right>'.sprintf("%.0f", $i_points_average).'</td>';
echo '<td align=right>'.sprintf("%.2f", $i_points_average_percentage).'%</td>';
} else {
 echo '<td colspan=3 align=center class=gray>'.$lngstr['label_notapplicable'].'</td>';
}
echo '</tr>'; 
	echo '<tr class=rowone>';
echo '<td>'.$lngstr['page_testmanager_stats']['test_high_score'].'</td>';
if($i_points_max > 0) {
 $i_points_high_percentage = ($i_points_high * 100) / $i_points_max;
echo '<td>'.getGauge($i_points_high_percentage, 'green').'</td>';
echo '<td align=right>'.$i_points_high.'</td>';
echo '<td align=right>'.sprintf("%.2f", $i_points_high_percentage).'%</td>';
} else {
 echo '<td colspan=3 align=center class=gray>'.$lngstr['label_notapplicable'].'</td>';
}
echo '</tr>'; 
	echo '<tr class=rowone>';
echo '<td>'.$lngstr['page_testmanager_stats']['test_low_score'].'</td>';
if($i_points_max > 0) {
 $i_points_low_percentage = ($i_points_low * 100) / $i_points_max;
echo '<td>'.getGauge($i_points_low_percentage, 'red').'</td>';
echo '<td align=right>'.$i_points_low.'</td>';
echo '<td align=right>'.sprintf("%.2f", $i_points_low_percentage).'%</td>';
} else {
 echo '<td colspan=3 align=center class=gray>'.$lngstr['label_notapplicable'].'</td>';
}
echo '</tr>'; 
	echo '<tr class=rowone><td colspan=4><img src="images/1x1.gif" width=1 height=5></td></tr>';
echo '<tr class=rowone><td colspan=2 class=rowhdr1 title="'.$lngstr['page_testmanager_stats']['hdr_grade_data_hint'].'">'.$lngstr['page_testmanager_stats']['hdr_grade_data'].'</td><td class=rowhdr1 title="'.$lngstr['page_testmanager_stats']['hdr_grade_responses_hint'].'">'.$lngstr['page_testmanager_stats']['hdr_grade_responses_hint'].'</td><td class=rowhdr1 title="'.$lngstr['page_testmanager_stats']['hdr_percents_hint'].'">'.$lngstr['page_testmanager_stats']['hdr_percents'].'</td></tr>';
foreach($i_grades_names as $i_gradeid=>$i_grade_name) {
 echo '<tr class=rowone>';
echo '<td>'.$i_grade_name.'</td>';
if($i_grades_times_total > 0) {
 $i_grade_times_percentage = ($i_grades_times[$i_gradeid] * 100) / $i_grades_times_total;
echo '<td>'.getGauge($i_grade_times_percentage).'</td>';
echo '<td align=right>'.$i_grades_times[$i_gradeid].'</td>';
echo '<td align=right>'.sprintf("%.2f", $i_grade_times_percentage).'%</td>';
} else {
 echo '<td colspan=3 align=center class=gray>'.$lngstr['label_notapplicable'].'</td>';
}
echo '</tr>';
} 
	echo '<tr class=rowone>';
echo '<td>'.$lngstr['page_testmanager_stats']['total_responses'].'</td>';
echo '<td></td>';
echo '<td align=right>'.$i_resultcount.'</td>';
echo '<td align=right></td>';
echo '</tr>';
}
 
echo '<p><form name=tstatsForm class=iactive method=post><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
echo '<tr>';
echo '<td class=rowhdr1 title="'.$lngstr['page_testmanager_stats']['hdr_testid_hint'].'">'.$lngstr['page_testmanager_stats']['hdr_testid'].'</td>';
echo '<td class=rowhdr1 title="'.$lngstr['page_testmanager_stats']['hdr_test_data_hint'].'" colspan=2>'.$lngstr['page_testmanager_stats']['hdr_test_data'].'</td>';
echo '<td class=rowhdr1 title="'.$lngstr['page_testmanager_stats']['hdr_points'].'">'.$lngstr['page_testmanager_stats']['hdr_points_hint'].'</td>';
echo '<td class=rowhdr1 title="'.$lngstr['page_testmanager_stats']['hdr_percents_hint'].'">'.$lngstr['page_testmanager_stats']['hdr_percents'].'</td>';
echo '</tr>';
$i_tests = isset($_POST['box_tests']) ? readPostVar('box_tests') : explode(SYSTEM_ARRAY_ITEM_SEPARATOR, readGetVar('testids')); 
foreach($i_tests as $i_testid)
 writeTestStats($i_testid);
echo '</table>';
echo '</td></tr></table></form>';
displayTemplate('_footer');
?>