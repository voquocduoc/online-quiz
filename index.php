<?php
 
if(!file_exists('inc/config.inc.php')) {
	header('Location: install.php');
exit;
}
require_once('inc/init.inc.php');
if(isset($_POST['bsubmit']) || isset($_POST['bguest'])) { 
	include_once($DOCUMENT_PAGES.'signin-2.inc.php');
} else if(isset($G_SESSION['userid'])) { 
	$g_vars['page']['title'] = $lngstr['page_title_panel'];
include_once($DOCUMENT_PAGES.'home.inc.php');
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
?>