<?php
 
if($g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."groups (group_name) VALUES ('')")===false)
 showDBError(__FILE__, 1);
$i_groupid = (int)$g_db->Insert_ID($srv_settings['table_prefix'].'groups', 'groupid');
gotoLocation('groups.php?groupid='.$i_groupid.'&action=edit');
?>
