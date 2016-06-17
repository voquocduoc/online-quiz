<?php
 
$i_now = time();
$i_dateend = $i_now + 60 * 60 * 24 * 365 * 10 + 60 * 60 * 24 * 3;
if($g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."tests (test_createdate, test_datestart, test_dateend, test_instructions, test_notes) VALUES(".$i_now.", ".$i_now.", ".$i_dateend.", '', '')")===false)
 showDBError(__FILE__, 1);
$i_testid = (int)$g_db->Insert_ID($srv_settings['table_prefix'].'tests', 'testid');
gotoLocation('test-manager.php?testid='.$i_testid.'&action=settings');
?>
