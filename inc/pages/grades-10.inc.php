<?php
$f_gscaleid = (int)readGetVar('gscaleid');
if(isset($_POST["box_gradescales"])) { 
	$i_gradescales = $_POST["box_gradescales"];
rsort($i_gradescales, SORT_NUMERIC);
foreach($i_gradescales as $f_gscale_gradeid) { 
 deleteScaleGrade($f_gscaleid, (int)$f_gscale_gradeid);
}
} else {
	$f_gscale_gradeid = (int)readGetVar('gscale_gradeid'); 
	deleteScaleGrade($f_gscaleid, $f_gscale_gradeid);
}
 
gotoLocation('grades.php'.getURLAddon('?action=edit', array('action','confirmed','gscaleid')));
function deleteScaleGrade($gscaleid, $gscale_gradeid) {
global $g_db, $srv_settings; 
	if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."gscales_grades WHERE gscaleid=".$gscaleid." AND gscale_gradeid=".$gscale_gradeid)===false)
 showDBError(__FILE__, 1); 
	$i_rSet2 = $g_db->Execute("SELECT gscale_gradeid FROM ".$srv_settings['table_prefix']."gscales_grades WHERE gscaleid=".$gscaleid." AND gscale_gradeid>".$gscale_gradeid." ORDER BY gscale_gradeid");
if(!$i_rSet2) {
 showDBError(__FILE__, 2);
} else {
 $i_counter = $gscale_gradeid - 1;
while(!$i_rSet2->EOF) {
 $i_counter++;
if($i_rSet2->fields["gscale_gradeid"] != $i_counter)
 $g_db->Execute("UPDATE ".$srv_settings['table_prefix']."gscales_grades SET gscale_gradeid=".$i_counter." WHERE gscaleid=".$gscaleid." AND gscale_gradeid=".$i_rSet2->fields["gscale_gradeid"]);
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
}
?>
