<?php
$g_vars['page']['location'] = array('administration', 'web_statistics');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$g_vars['page']['selected_section'] = 'administration';
$g_vars['page']['selected_tab'] = 'visitors';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_visitors'].'</h2>';
writeErrorsWarningsBar();
writeInfoBar($lngstr['tooltip_visitors']);
$i_pagewide_id = 0; 
$i_direction = "";
$i_order_addon = "";
$i_sql_order_addon = "";
$i_tablefields = array(
	array($lngstr['label_visitors_hdr_visitorid'], $lngstr['label_visitors_hdr_visitorid_hint'], $srv_settings['table_prefix']."visitors.visitorid"),
	array($lngstr['label_visitors_hdr_startdate'], $lngstr['label_visitors_hdr_startdate_hint'], $srv_settings['table_prefix']."visitors.startdate"),
	array($lngstr['label_visitors_hdr_username'], $lngstr['label_visitors_hdr_username_hint'], $srv_settings['table_prefix']."visitors.userid"),
	array($lngstr['label_visitors_hdr_hits'], $lngstr['label_visitors_hdr_hits_hint'], $srv_settings['table_prefix']."visitors.hits"),
	array($lngstr['label_visitors_hdr_ip'], $lngstr['label_visitors_hdr_ip_hint'], ""),
	array($lngstr['label_visitors_hdr_host'], $lngstr['label_visitors_hdr_host_hint'], $srv_settings['table_prefix']."visitors.host"),
	array($lngstr['label_visitors_hdr_referer'], $lngstr['label_visitors_hdr_referer_hint'], $srv_settings['table_prefix']."visitors.referer"),
);
$i_order_no = isset($_GET["order"]) ? (int)$_GET["order"] : 0;
if($i_order_no>=count($i_tablefields))
 $i_order_no = -1;
if($i_order_no>=0) {
	$i_direction = (isset($_GET["direction"]) && $_GET["direction"]) ? "DESC" : "";
$i_order_addon = "&order=".$i_order_no."&direction=".$i_direction;
$i_sql_order_addon = " ORDER BY ".$i_tablefields[$i_order_no][2]." ".$i_direction;
} 
$i_url_limitto_addon = "";
$i_url_pageno_addon = "";
$i_url_limit_addon = "";
$i_pageno = 0;
$i_limitcount = isset($_GET["limitto"]) ? (int)$_GET["limitto"] : $G_SESSION['config_itemsperpage'];
if($i_limitcount>0) {
	$i_recordcount = getRecordCount($srv_settings['table_prefix'].'visitors');
$i_pageno = isset($_GET["pageno"]) ? (int)$_GET["pageno"] : 1;
if($i_pageno < 1)
 $i_pageno = 1;
$i_limitfrom = ($i_pageno-1)*$i_limitcount;
$i_pageno_count = floor(($i_recordcount - 1) / $i_limitcount) + 1;
if($i_limitfrom > $i_recordcount) {
 $i_pageno = $i_pageno_count;
$i_limitfrom = ($i_pageno-1)*$i_limitcount;
}
$i_url_limitto_addon .= "&limitto=".$i_limitcount;
$i_url_pageno_addon .= "&pageno=".$i_pageno;
$i_url_limit_addon .= $i_url_limitto_addon.$i_url_pageno_addon;
} else {
	$i_url_limitto_addon = "&limitto=";
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
 
echo '<p><form name=visitorsForm class=iactive method=post><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>';
echo '<table cellpadding=0 cellspacing=0 border=0 width="100%" style="background: url(images/toolbar-background.gif) repeat-x"><tr vAlign=center><td width=2><img src="images/toolbar-left.gif" width=2 height=32></td><td width=32><img src="images/button-cross-big.gif" border=0 title="'.$lngstr['label_action_visitors_delete'].'" style="cursor: hand;" onclick="f=document.visitorsForm;if (confirm(\''.$lngstr['qst_delete_visitors'].'\')) { f.action=\'visitors.php?action=delete&confirmed=1\';f.submit();}"></td><td width="100%">&nbsp;</td>';
if($i_limitcount > 0) {
	$i_url_pages_addon = $i_url_limitto_addon.$i_order_addon;
echo '<td vAlign=middle width=32><nobr>&nbsp;'.sprintf($lngstr['label']['KtoLofN'], $nRecordFrom, $nRecordTo, $i_recordcount).'&nbsp;</nobr></td>';
echo '<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>';
echo '<td vAlign=middle width=32><nobr>&nbsp;';
for($i = $nStartPage; $i <= $nEndPage; $i++) {
 if($i != $i_pageno)
 echo '&nbsp;<a href="visitors.php?pageno='.$i.$i_url_pages_addon.'">'.$i.'</a>&nbsp;';
else echo '<span class=currentitem>&nbsp;'.$i.'&nbsp;</span> ';
}
echo '</nobr></td>';
echo '<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>';
if($i_pageno > 1) {
 echo '<td width=32><a href="visitors.php?pageno=1'.$i_url_pages_addon.'"><img src="images/button-first-big.gif" border=0 title="'.$lngstr['button_first_page'].'"></a></td>';
echo '<td width=32><a href="visitors.php?pageno='.max(($i_pageno-1), 1).$i_url_pages_addon.'"><img src="images/button-prev-big.gif" border=0 title="'.$lngstr['button_prev_page'].'"></a></td>';
} else {
 echo '<td width=32><img src="images/button-first-big-inactive.gif" border=0 title="'.$lngstr['button_first_page'].'"></td>';
echo '<td width=32><img src="images/button-prev-big-inactive.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td>';
}
if($i_pageno < $i_pageno_count) {
 echo '<td width=32><a href="visitors.php?pageno='.min(($i_pageno+1), $i_pageno_count).$i_url_pages_addon.'"><img src="images/button-next-big.gif" border=0 title="'.$lngstr['button_next_page'].'"></a></td>';
echo '<td width=32><a href="visitors.php?pageno='.$i_pageno_count.$i_url_pages_addon.'"><img src="images/button-last-big.gif" border=0 title="'.$lngstr['button_last_page'].'"></a></td>';
} else {
 echo '<td width=32><img src="images/button-next-big-inactive.gif" border=0 title="'.$lngstr['button_next_page'].'"></td>';
echo '<td width=32><img src="images/button-last-big-inactive.gif" border=0 title="'.$lngstr['button_last_page'].'"></td>';
}
}
echo '<td width=2><img src="images/toolbar-right.gif" width=2 height=32></td></tr></table>';
echo '</td></tr><tr><td>';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
echo '<tr vAlign=top><td class=rowhdr1 title="'.$lngstr['label_hdr_select_hint'].'" width=22><input type=checkbox name=toggleAll onclick="toggleCBs(this);"></td>';
writeQryTableHeaders('visitors.php?action='.$i_url_limit_addon, $i_tablefields, $i_order_no, $i_direction);
echo '<td class=rowhdr1 colspan=2>'.$lngstr['label_hdr_action'].'</td></tr>';
 
$i_rSet1 = $g_db->SelectLimit("SELECT *, ip1, ip2, ip3, ip4, ".$srv_settings['table_prefix']."users.user_name FROM ".$srv_settings['table_prefix']."visitors, ".$srv_settings['table_prefix']."users WHERE ((".$srv_settings['table_prefix']."visitors.userid=0 AND ".$srv_settings['table_prefix']."users.userid=2) OR ".$srv_settings['table_prefix']."visitors.userid=".$srv_settings['table_prefix']."users.userid)".$i_sql_order_addon, $i_limitcount, $i_limitfrom);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	$i_counter = 0;
while(!$i_rSet1->EOF) {
 $rowname = ($i_counter % 2) ? "rowone" : "rowtwo";
$i_ip = $i_rSet1->fields['ip1'].'.'.$i_rSet1->fields['ip2'].'.'.$i_rSet1->fields['ip3'].'.'.$i_rSet1->fields['ip4'];
echo '<tr id=tr_'.$i_pagewide_id.' class='.$rowname.' onmouseover="rollTR('.$i_pagewide_id.',1);" onmouseout="rollTR('.$i_pagewide_id.',0);"><td align=center width=22><input id=cb_'.$i_pagewide_id.' type=checkbox name=box_visitors[] value="'.$i_rSet1->fields['visitorid'].'" onclick="toggleCB(this);"></td><td align=right>'.$i_rSet1->fields['visitorid'].'</td><td>'.getDateLocal($lngstr['language']['date_format'], $i_rSet1->fields['startdate']).'</td><td><nobr>'.convertTextValue($i_rSet1->fields['user_name']).' [<a href="users.php?userid='.$i_rSet1->fields['userid'].'&action=edit" title="'.$lngstr['label']['view_edit_user'].'">'.$i_rSet1->fields['userid'].'</a>]</nobr></td><td>'.($i_rSet1->fields['hits']).'</td><td><a href="http://www.whois.sc/'.$i_ip.'" title="'.$lngstr['page_visitors']['ipwhois'].'" target=_blank>'.$i_ip.'</a></td><td>'.truncateString(convertTextValue($i_rSet1->fields['host'])).'</td><td>'.truncateString(convertTextValue($i_rSet1->fields['referer'])).'</td>';
echo '<td align=center width=22><a href="visitors.php?action=view&visitorid='.$i_rSet1->fields['visitorid'].$i_order_addon.$i_url_limit_addon.'"><img width=20 height=20 border=0 src="images/button-view.gif" title="'.$lngstr['label_action_visitors_view'].'"></a></td><td align=center width=22><a href="visitors.php?action=delete&visitorid='.$i_rSet1->fields['visitorid'].$i_order_addon.$i_url_limit_addon.'" onclick="return confirmMessage(this, \''.$lngstr['qst_delete_visitor'].'\')"><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_visitor_delete'].'"></a></td></tr>';
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
