<?php
$f_groupid = (int)readGetVar('groupid');
$f_userids = explode(SYSTEM_ARRAY_ITEM_SEPARATOR, readGetVar('userids'));
 
if($_GET["set"]) {
	foreach($f_userids as $i_userid) {
 $g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."groups_users (groupid, userid) VALUES ($f_groupid, $i_userid)");
}
} else {
	$i_sql_where_addon = '';
reset($f_userids);
if(list(,$val) = each($f_userids))
 $i_sql_where_addon .= "userid=".(int)$val;
while(list(,$val) = each($f_userids)) {
 $i_sql_where_addon .= " OR userid=".(int)$val;
}
if($i_sql_where_addon)
 $i_sql_where_addon = ' AND ('.$i_sql_where_addon.')';
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."groups_users WHERE groupid=$f_groupid".$i_sql_where_addon)===false)
 showDBError(__FILE__, 2);
}
 
gotoLocation('users.php'.getURLAddon('?action=groups', array('action')));
?>
