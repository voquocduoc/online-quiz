<?php
require_once("inc/init.inc.php");
if(isset($G_SESSION['userid'])) { 
	$i_can_access = false;
if(isset($_GET['resultid'])) {
 $f_resultid = (int)readGetVar('resultid');
if($G_SESSION['access_reportsmanager'] > 1) {
 $i_can_access = true;
} else { 
 $i_can_access = getRecordCount($srv_settings['table_prefix'].'results', 'userid='.$G_SESSION['userid'].' AND resultid='.$f_resultid) > 0;
}
}
switch(readGetVar('action')) {
 case 'tpdf':
 if($i_can_access) {
 if(isset($_GET['resultid'])) {
 include_once($DOCUMENT_PAGES."getfile-1.inc.php");
}
}
break;
case 'thtml':
 if($i_can_access) {
 if(isset($_GET['resultid'])) {
 include_once($DOCUMENT_PAGES."getfile-template-html.inc.php");
}
}
break;
case 'cpdf':
 include_once($DOCUMENT_PAGES."getfile-custompdf.inc.php");
break;
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES."signin-1.inc.php");
}
?>