<?php
if(isset($_POST["box_users"])) {
	foreach($_POST["box_users"] as $f_userid) {
 deleteUser((int)$f_userid);
}
} else {
	$f_userid = (int)readGetVar('userid');
deleteUser($f_userid);
}
 
gotoLocation('users.php'.getURLAddon('', array('action', 'confirmed')));
function deleteUser($i_userid) {
global $g_db, $srv_settings;
if ($i_userid > SYSTEM_USER_MAX_INDEX) {  
 $g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."tests_attempts WHERE userid=".$i_userid); 
 $i_rSet1 = $g_db->Execute("SELECT resultid FROM ".$srv_settings['table_prefix']."results WHERE userid=".$i_userid);
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 while(!$i_rSet1->EOF) {
 deleteResultRecord($i_rSet1->fields["resultid"]);
$i_rSet1->MoveNext();
}
$i_rSet1->Close();
}
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."results WHERE userid=".$i_userid)===false)
 showDBError(__FILE__, 2); 
 if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."groups_users WHERE userid=".$i_userid)===false)
 showDBError(__FILE__, 3); 
 if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."users WHERE userid=".$i_userid)===false)
 showDBError(__FILE__, 4);
}
}
?>
