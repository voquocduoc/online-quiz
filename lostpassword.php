<?php
require_once("inc/init.inc.php");
if(isset($G_SESSION['userid'])) { 
	$g_vars['page']['title'] = $lngstr['page_title_panel'];
include_once($DOCUMENT_PAGES."home.inc.php");
} else if(isset($_POST['bsubmit'])) { 
	include_once($DOCUMENT_PAGES."lostpassword-2.inc.php");
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_lostpassword'];
include_once($DOCUMENT_PAGES."lostpassword-1.inc.php");
}
?>