<?php
$f_userid = (int)readGetVar('userid');
$f_set = isset($_GET["set"]) ? (int)$_GET["set"] : 0; 
if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."users SET user_enabled=".$f_set." WHERE userid=".$f_userid)===false)
 showDBError(__FILE__, 1);
gotoLocation('users.php'.getURLAddon('', array('action', 'set')));
?>