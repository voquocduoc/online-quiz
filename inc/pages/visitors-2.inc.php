<?php
$g_vars['page']['location'] = array('administration', 'web_statistics', 'visitor_details');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_visitorid = (int)readGetVar('visitorid');
$g_vars['page']['selected_section'] = 'administration';
$g_vars['page']['selected_tab'] = 'visitors-2';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_visitordetails'].'</h2>';
writeErrorsWarningsBar();
 
$i_rSet1 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."visitors WHERE visitorid=$f_visitorid");
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) {
 echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
$i_rowno = 0;
writeTR2($lngstr['page_visitordetails_visitorid'], $i_rSet1->fields["visitorid"]);
writeTR2($lngstr['page_visitordetails_timespent'], getTimeFormatted($i_rSet1->fields["enddate"] - $i_rSet1->fields["startdate"]));
$i_username = '';
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."users WHERE userid=".$i_rSet1->fields["userid"]);
if($i_rSet2) {
 if(!$i_rSet2->EOF) {
 $i_username = $i_rSet2->fields["user_name"];
}
}
writeTR2($lngstr['page_visitordetails_username'], $i_username);
writeTR2($lngstr['page_visitordetails_hits'], $i_rSet1->fields["hits"]);
writeTR2($lngstr['page_visitordetails_startdate'], getDateLocal($lngstr['language']['date_format_full'], $i_rSet1->fields["startdate"]));
writeTR2($lngstr['page_visitordetails_inurl'], '<a href="'.$i_rSet1->fields["inurl"].'" target=_blank>'.$i_rSet1->fields["inurl"].'</a>');
writeTR2($lngstr['page_visitordetails_enddate'], getDateLocal($lngstr['language']['date_format_full'], $i_rSet1->fields["enddate"]));
writeTR2($lngstr['page_visitordetails_outurl'], '<a href="'.$i_rSet1->fields["outurl"].'" target=_blank>'.$i_rSet1->fields["outurl"].'</a>');
writeTR2($lngstr['page_visitordetails_ipaddress'], $i_rSet1->fields["ip1"].'.'.$i_rSet1->fields["ip2"].'.'.$i_rSet1->fields["ip3"].'.'.$i_rSet1->fields["ip4"]);
writeTR2($lngstr['page_visitordetails_host'], $i_rSet1->fields["host"]);
writeTR2($lngstr['page_visitordetails_referer'], '<a href="'.$i_rSet1->fields["referer"].'" target=_blank>'.$i_rSet1->fields["referer"].'</a>');
writeTR2($lngstr['page_visitordetails_useragent'], $i_rSet1->fields["useragent"]);
echo '</table>';
}
$i_rSet1->Close();
}
displayTemplate('_footer');
?>
