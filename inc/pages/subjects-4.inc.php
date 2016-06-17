<?php
 
if($g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."subjects (subject_name) VALUES ('')")===false)
 showDBError(__FILE__, 1);
$i_subjectid = (int)$g_db->Insert_ID($srv_settings['table_prefix'].'subjects', 'subjectid');
gotoLocation('subjects.php?subjectid='.$i_subjectid.'&action=edit');
?>
