<?php
 
if($g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplate_name, etemplate_body) VALUES ('', '')")===false)
 showDBError(__FILE__, 1);
$i_etemplateid = (int)$g_db->Insert_ID($srv_settings['table_prefix'].'etemplates', 'etemplateid');
gotoLocation('email-templates.php?etemplateid='.$i_etemplateid.'&action=edit');
?>
