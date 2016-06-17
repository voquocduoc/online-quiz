<?php
require_once('inc/init.inc.php');
if(isset($_POST['username']) || isset($_GET['username']) || isset($_POST['bguest']) || isset($_GET['bguest'])) { 
	include_once($DOCUMENT_PAGES.'signin-2.inc.php');
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
?>