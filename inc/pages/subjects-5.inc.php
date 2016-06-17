<?php
if(isset($_POST["box_subjects"])) {
	foreach($_POST["box_subjects"] as $f_subjectid) {
 deletesubject((int)$f_subjectid);
}
} else {
	$f_subjectid = (int)readGetVar('subjectid');
deletesubject($f_subjectid);
}
 
gotoLocation('subjects.php'.getURLAddon('', array('action', 'confirmed')));
function deletesubject($i_subjectid) {
global $g_db, $srv_settings; 
	if($i_subjectid > SYSTEM_SUBJECTS_MAX_INDEX) { 
 if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."tests SET subjectid=1 WHERE subjectid=".$i_subjectid)===false)
 showDBError(__FILE__, 1);
if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."questions SET subjectid=1 WHERE subjectid=".$i_subjectid)===false)
 showDBError(__FILE__, 2);
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."subjects WHERE subjectid=$i_subjectid")===false)
 showDBError(__FILE__, 3);
}
}
?>
