<?php
 
$f_username = readPostVar('username', readGetVar('username'));
$f_password = readPostVar('password', readGetVar('password'));
$f_bguest = isset($_POST['bguest']) || isset($_GET['bguest']);
$G_SESSION['test_code'] = readPostVar('test_code');
 
if(signinUser($f_username, $f_password, $f_bguest)) {  
	$i_gotourl = (isset($_POST['gotourl']) && (strpos($_POST['gotourl'], '/register.php') === false) && (strpos($_POST['gotourl'], '/lostpassword.php') === false) && (strpos($_POST['gotourl'], '/account.php') === false) && (strpos($_POST['gotourl'], '/signin.php') === false)) ? $_POST['gotourl'] : 'index.php';
gotoLocation($i_gotourl);   
} else {
	if(empty($f_username) && empty($f_password) && getConfigItem(CONFIG_can_register)) { 
 gotoLocation('register.php');
} else { 
 $g_vars['page']['title'] = $lngstr['page_title_signin'];
$g_vars['page']['errors'] = $lngstr['err_signin_incorrect'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
}
?>
