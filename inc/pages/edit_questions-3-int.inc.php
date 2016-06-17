<?php
  
if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."questions SET subjectid=".(int)$f_subjectid.", question_text=".$f_question_text.", question_points=".$f_question_points.", question_time=".$f_question_time.", question_type=".$f_question_type.", question_type2=".$f_question_type2.", question_shufflea=".$f_question_shufflea." WHERE questionid=".$f_questionid)===false)
 showDBError(__FILE__, 1);
   
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."answers WHERE questionid=".$f_questionid)===false)
 showDBError(__FILE__, 2);
switch($f_question_type) {
	case QUESTION_TYPE_MULTIPLECHOICE:
	case QUESTION_TYPE_MULTIPLEANSWER: 
 for($i = count($f_answer_text); $i>=1; $i--) { 
 if(empty($f_answer_text[$i]) || trim($f_answer_text[$i])=="") {
 unset($f_answer_text[$i]);
} else {
 break;
}
}
break;
}
 
for($i = 1; $i <= count($f_answer_text); $i++) {
	if(!empty($f_answer_text[$i])) {
 if(empty($f_answer_feedback[$i]))
 $f_answer_feedback[$i] = $g_db->qstr('', 0);
$str_qry = "INSERT INTO ".$srv_settings['table_prefix']."answers (answerid, questionid, answer_text, answer_feedback, answer_correct, answer_percents) VALUES($i, $f_questionid, ".$f_answer_text[$i].", ".$f_answer_feedback[$i].", ";
$str_qry .= (!empty($f_answer_correct[$i]) ? "1" : "0");
$str_qry .= ",".(float)$f_answer_percents[$i].")";
if($g_db->Execute($str_qry)===false)
 showDBError(__FILE__, 3);
}
}
?>
