<?php
require_once('inc/init.inc.php');
include_once('install-db-'.$srv_settings['db_driver'].'.inc.php');
function doQuery($i_title, $i_sql_str) {
global $g_db, $lngstr;
echo '<h2>'.$i_title.'</h2>';
if($g_db->Execute($i_sql_str)===false) {
 echo '<p align=center><font color="#800000"><b>'.$lngstr['label_warning'].'</b></font>';
} else {
 echo '<p align=center><font color="#008000"><b>'.$lngstr['label_okay'].'</b></font>';
}
}
function doQueryQueue($i_queries) {
global $g_db, $lngstr;
$g_db->debug = true;
if($i_queries) {
 foreach($i_queries as $i_table=>$i_tablequeries) {
 foreach($i_tablequeries as $i_queryid=>$i_query) {
 doQuery(($i_queryid > 0 ? '' : sprintf($lngstr['install_db']['create_or_modify_tablex'], $i_table)), $i_query);
}
}
}
$g_db->debug = false;
}
$g_vars['page']['title'] = $lngstr['install_db_title'];
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="'.$lngstr['text_direction'].'"><head><title>'.$g_vars['page']['title'].'</title>
<meta http-equiv="Content-Language" content="'.$lngstr['meta_contentlanguage'].'">
<meta content="text/html; charset='.$lngstr['meta_charset'].'" http-equiv=Content-Type>
<link rel="SHORTCUT ICON" href="favicon.ico">
<link href="shared/style.css" rel=stylesheet type=text/css>
<script language=javascript src="shared/shared.js" type="text/javascript"></script>
</head>
<body bgcolor="#ffffff"><form name="installForm" method="post" action="">
<table style="height: 98%; border: 1px solid #CFD6E3;" cellpadding=0 cellspacing=25 border=0 width="780" height="100%" align=center>
<tr height="100%" vAlign=top><td><img src="images/logo.gif" width=200 height=40><br>';
echo '<h1>'.$lngstr['install_db_page1'].'</h1>';
switch(getConfigItem(CONFIG_igttimestamp)) {
	case NULL:
 $i_rSet1 = $g_db->SelectLimit("SELECT ".$srv_settings['table_prefix']."etemplateid FROM etemplates", 1);
if($i_rSet1 && !$i_rSet1->EOF) { 
 doQueryQueue($i_queries_010009);
$i_rSet1->Close();
} else { 
 doQueryQueue($i_queries_new);
doQueryQueue($arrInstallQueriesSpecial['after_any']);
echo '<p align=center>'.$lngstr['initdb_instructions'].'</p>';
break;
}
case 1117883274:
	case 1118316098:
 doQueryQueue($i_queries_010202);
case 1120392865:
 doQueryQueue($i_queries_010301);
case 1120868144:
	case 1121008002: 
 doQueryQueue($i_queries_010307);
case 1122210316: 
	case 1122210319: 
 doQueryQueue($i_queries_010405);
case 1129960095: 
	case 1133089809: 
	case 1134898211: 
 doQueryQueue($i_queries_010905);
case 1141556629: 
 doQueryQueue($i_queries_010907);
case 1147328255: 
 doQueryQueue($i_queries_010909);
case 1154931557: 
 doQueryQueue($i_queries_010910);
case 1160377957: 
 doQueryQueue($i_queries_010927);
case 1165465355: 
 doQueryQueue($i_queries_011007);
case 1168332559: 
 doQueryQueue($i_queries_011009);
case 1172110573: 
 doQueryQueue($i_queries_011105);
case 1172236935: 
 doQueryQueue($i_queries_011107);
case 1176717579: 
 doQueryQueue($arrInstallQueries[1176717579]);
doQueryQueue($arrInstallQueriesSpecial['after_any']);
break;
case 1185953317: 
	default: 
 echo '<p>'.$lngstr['install_db']['no_init_needed'].'</p>';
break;
}
echo '<p align=center><strong><a href="index.php">'.$lngstr['initdb_gotohomepage'].'</a></strong></p>';
echo '</td></tr></table>';
echo '</form>';
echo '</body></html>';
?>