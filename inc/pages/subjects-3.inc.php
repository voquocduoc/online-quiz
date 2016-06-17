<?php
$f_subjectid = (int)readGetVar('subjectid');
 
$f_subject_parent_subjectid = (int)readPostVar('subject_parent_subjectid');
$f_subject_name = readPostVar('subject_name');
$f_subject_name = $g_db->qstr($f_subject_name, get_magic_quotes_gpc());
$f_subject_description = readPostVar('subject_description');
$f_subject_description = $g_db->qstr($f_subject_description, get_magic_quotes_gpc());
      
 
if($g_vars['page']['errors']) {
	include_once($DOCUMENT_PAGES."subjects-2.inc.php");
} else { 
	if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."subjects SET subject_parent_subjectid=$f_subject_parent_subjectid, subject_name=$f_subject_name, subject_description=$f_subject_description WHERE subjectid=$f_subjectid")===false)
 showDBError(__FILE__, 2);
gotoLocation('subjects.php');
}
?>
