<?php
if(isset($_POST["box_groups"])) {
	foreach($_POST["box_groups"] as $f_groupid) {
 deleteGroup((int)$f_groupid);
}
} else {
	$f_groupid = (int)readGetVar('groupid');
deleteGroup($f_groupid);
}
 
gotoLocation('groups.php'.getURLAddon('', array('action', 'confirmed')));
function deleteGroup($i_groupid) {
global $g_db, $srv_settings; 
	if($i_groupid > SYSTEM_GROUP_MAX_INDEX) { 
 if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."groups_users WHERE groupid=$i_groupid")===false)
 showDBError(__FILE__, 1);
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."groups_tests WHERE groupid=$i_groupid")===false)
 showDBError(__FILE__, 2);
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."groups WHERE groupid=$i_groupid")===false)
 showDBError(__FILE__, 3);
}
}
?>
