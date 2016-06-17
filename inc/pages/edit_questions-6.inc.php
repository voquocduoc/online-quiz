<?php
if(isset($_POST["box_questions"])) {
	foreach($_POST["box_questions"] as $f_questionid) {
 deleteQuestion((int)$f_questionid);
}
} else {
	$f_questionid = (int)readGetVar('questionid');
deleteQuestion($f_questionid);
}
 
if(isset($_GET["testid"])) { 
	gotoLocation('test-manager.php'.getURLAddon('?action=editt', array('action','confirmed','questionid')));
} else { 
	gotoLocation('question-bank.php'.getURLAddon('', array('action','confirmed','questionid')));
}
function deleteQuestion($i_questionid) {
global $g_db, $srv_settings;  
	$i_rSet1 = $g_db->Execute("SELECT test_questionid, testid FROM ".$srv_settings['table_prefix']."tests_questions WHERE questionid=$i_questionid ORDER BY test_questionid DESC");
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 while(!$i_rSet1->EOF) {
 deleteQuestionLink($i_rSet1->fields["testid"], $i_rSet1->fields["test_questionid"]);
$i_rSet1->MoveNext();
}
$i_rSet1->Close();
} 
	if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."answers WHERE questionid=$i_questionid")===false)
 showDBError(__FILE__, 2); 
	if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."questions WHERE questionid=$i_questionid")===false)
 showDBError(__FILE__, 3);
}
?>
