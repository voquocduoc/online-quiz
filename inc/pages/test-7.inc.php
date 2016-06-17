<?php
if($G_SESSION['yt_state'] != TEST_STATE_QFEEDBACK) { 
	$i_areAllAnswered = true; 
	if($G_SESSION['yt_test_qsperpage'] == 0) {
 $i_questionfrom = 1;
$i_questionto = $G_SESSION['yt_questioncount'];
} else {
 $i_questionfrom = (($G_SESSION['yt_pageno'] - 1) * $G_SESSION['yt_test_qsperpage']) + 1;
$i_questionto = min($i_questionfrom + $G_SESSION['yt_test_qsperpage'] - 1, $G_SESSION['yt_questioncount']);
} 
	if(!empty($_POST['answer']) && is_array($_POST['answer'])) {
 for($i_questionno = $i_questionfrom; $i_questionno <= $i_questionto; $i_questionno++) {
 if(empty($_POST['answer'][$i_questionno])) {
 $i_areAllAnswered = false;
break;
}
}
} else {
 $i_areAllAnswered = false;
}
if(!$i_areAllAnswered) {
 $g_vars['page']['errors'] = $lngstr['err_answer_every_question'];
include_once($DOCUMENT_PAGES.'test-6.inc.php');
exit;
}
 
	$i_now = time();
if(!$G_SESSION['yt_timeforceout'] || !($G_SESSION['yt_teststop'] > 0) || !($G_SESSION['yt_teststop'] < $i_now)) {
 for($i_questionno = $i_questionfrom; $i_questionno <= $i_questionto; $i_questionno++) { 
 $i_questionno_real = $G_SESSION['yt_questions'][$i_questionno - 1];
$i_questionid = $G_SESSION['yt_questionids'][$i_questionno_real]; 
 checkTestAnswer($i_questionno, $i_questionid, $_POST['answer'][$i_questionno]);
}
}
 
	if($G_SESSION['yt_test_showqfeedback'] && $G_SESSION['yt_page_hasfeedback']) { 
 $G_SESSION['yt_state'] = TEST_STATE_QFEEDBACK;
include_once($DOCUMENT_PAGES.'test-6.inc.php');
} else { 
 if(($G_SESSION['yt_test_qsperpage'] != 0) && ($G_SESSION['yt_pageno'] * $G_SESSION['yt_test_qsperpage'] < $G_SESSION['yt_questioncount'])) {  
 unset($G_SESSION['yt_questionstart']); 
 $G_SESSION['yt_pageno']++; 
 $G_SESSION['yt_state'] = TEST_STATE_QSHOW;
gotoLocation('test.php');
} else {  
 include_once($DOCUMENT_PAGES.'test-saveresults.inc.php'); 
 gotoLocation('test.php?action=results');
}
}
} else { 
	if(($G_SESSION['yt_test_qsperpage'] != 0) && ($G_SESSION['yt_pageno'] * $G_SESSION['yt_test_qsperpage'] < $G_SESSION['yt_questioncount'])) { 
 $G_SESSION['yt_pageno']++; 
 $G_SESSION['yt_state'] = TEST_STATE_QSHOW;
gotoLocation('test.php');
} else { 
 include_once($DOCUMENT_PAGES.'test-saveresults.inc.php'); 
 gotoLocation('test.php?action=results');
}
}
?>