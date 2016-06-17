<?php 
$f_userid = (int)readGetVar('userid');
$i_rSet1 = $g_db->Execute("SELECT user_notes FROM ".$srv_settings['table_prefix']."users WHERE userid=".$f_userid);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	if(!$i_rSet1->EOF) {
 echo '<p><font face=Arial size=2>'.nl2br($i_rSet1->fields["user_notes"]).'</font></p>';
}
$i_rSet1->Close();
}
?>
