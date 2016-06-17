<?php
if(isset($_POST["box_etemplates"])) {
	foreach($_POST["box_etemplates"] as $f_etemplateid) {
 deleteETemplate((int)$f_etemplateid);
}
} else {
	$f_etemplateid = (int)readGetVar('etemplateid');
deleteETemplate($f_etemplateid);
}
gotoLocation('email-templates.php'.getURLAddon('', array('action','confirmed','etemplateid')));
function deleteETemplate($i_etemplateid) {
global $g_db, $srv_settings; 
	if($i_etemplateid > SYSTEM_ETEMPLATES_MAX_INDEX) { 
 if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."tests SET result_etemplateid=0 WHERE result_etemplateid=$i_etemplateid")===false)
 showDBError(__FILE__, 1);
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."etemplates WHERE etemplateid=$i_etemplateid")===false)
 showDBError(__FILE__, 2);
}
}
?>
