<?php
require_once(dirname(__FILE__)."/inc/const.inc.php");
require_once(dirname(__FILE__)."/inc/functions.inc.php");
if(file_exists('inc/config.inc.php') && !isset($_POST['stage']) && !isset($_GET['download'])) {
 gotoLocation('install-db.php');
exit;
}
session_name('IGTINSTALL');
session_start();
 
if(!isset($_SESSION['INSTALL'])) {
 $_SESSION['INSTALL'] = array();
if(ereg("(.*)ru(.*)", $_SERVER["HTTP_ACCEPT_LANGUAGE"], $regs)){
 $_SESSION['INSTALL']['language'] = 'ru';
} else if(ereg("(.*)es(.*)", $_SERVER["HTTP_ACCEPT_LANGUAGE"], $regs)){
 $_SESSION['INSTALL']['language'] = 'es';
} else if(ereg("(.*)de(.*)", $_SERVER["HTTP_ACCEPT_LANGUAGE"], $regs)){
 $_SESSION['INSTALL']['language'] = 'de';
} else if(ereg("(.*)fr(.*)", $_SERVER["HTTP_ACCEPT_LANGUAGE"], $regs)){
 $_SESSION['INSTALL']['language'] = 'fr';
} else if(ereg("(.*)nl(.*)", $_SERVER["HTTP_ACCEPT_LANGUAGE"], $regs)){
 $_SESSION['INSTALL']['language'] = 'nl';
} else if(ereg("(.*)hr(.*)", $_SERVER["HTTP_ACCEPT_LANGUAGE"], $regs)){
 $_SESSION['INSTALL']['language'] = 'hr';
} else {
 $_SESSION['INSTALL']['language'] = 'vn';
}
$_SESSION['INSTALL']['default_email'] = 'vuthanhlai@gmail.com';
$_SESSION['INSTALL']['version'] = '';
$_SESSION['INSTALL']['db_host'] = 'localhost';
$_SESSION['INSTALL']['db_user'] = 'MinhLa:VuThanhLai';
$_SESSION['INSTALL']['db_pass'] = 'MinhLa:VuThanhLai';
$_SESSION['INSTALL']['db_driver'] = 'mysql';
$_SESSION['INSTALL']['db_db'] = 'tanphu_tracnghiem';
$_SESSION['INSTALL']['table_prefix'] = 'tracnghiem_';
$_SESSION['INSTALL']['title_postfix'] = 'TanPhu.Net | Mạng giải trí, học tập trực tuyến tốc đô nhanh !';
 
 $i_url = getScriptURL();
$i_pos = strpos($i_url, '/install.php');
$i_url = substr($i_url, 0, $i_pos+1);
$_SESSION['INSTALL']['url_root'] = $i_url;
 
 if(!ereg('/$', dirname(__FILE__))) $i_fullpath = dirname(__FILE__)."/";
else $i_fullpath = dirname(__FILE__);
$i_fullpath = str_replace("//" , "/", str_replace("\\", "/", $i_fullpath)); 
 $_SESSION['INSTALL']['dir_root_full'] = $i_fullpath;
$_SESSION['INSTALL']['url_files'] = $i_url."files/";
$_SESSION['INSTALL']['dir_files_full'] = $i_fullpath."files/";
}
require_once(dirname(__FILE__)."/inc/languages/".$_SESSION['INSTALL']['language'].".lng.php");
 
if (isset($_POST['stage'])) {
 if($goforward = (!empty( $_POST['bnext']))) {
 $nextstage = $_POST['stage'] + 1;
} else {
 $nextstage = $_POST['stage'] - 1;
}
if($nextstage < 0)
 $nextstage = 0;
foreach($_POST as $key=>$val)
 $_SESSION['INSTALL'][$key] = $val;
} else {
 $goforward = true;
$nextstage = 1;
}
 
$i_result = "";
$g_vars['page']['errors'] = "";
if($nextstage==4) {
 if(($i_fh = @fopen($_SESSION['INSTALL']['dir_root_full'].'/install.php', 'r')) === false ) {
 if(!ereg('/$', dirname(__FILE__))) $i_fullpath = dirname(__FILE__)."/";
else $i_fullpath = dirname(__FILE__);
$_SESSION['INSTALL']['dir_root_full'] = $i_fullpath;
$g_vars['page']['errors'] .= $lngstr['install_dirrootfull_doesnotexists'];
$nextstage = 3;
}
}
if($nextstage==5) {
 error_reporting(0);
include_once(dirname(__FILE__)."/inc/adodb/adodb.inc.php");
$i_dns = sprintf($g_db_connectionsettings[$_SESSION['INSTALL']['db_driver']]['dns'], $_SESSION['INSTALL']['db_driver'], $_SESSION['INSTALL']['db_host'], $_SESSION['INSTALL']['db_user'], $_SESSION['INSTALL']['db_password'], $_SESSION['INSTALL']['db_db']);
$i_server = sprintf($g_db_connectionsettings[$_SESSION['INSTALL']['db_driver']]['server'], $_SESSION['INSTALL']['db_driver'], $_SESSION['INSTALL']['db_host'], $_SESSION['INSTALL']['db_user'], $_SESSION['INSTALL']['db_password'], $_SESSION['INSTALL']['db_db']);
$i_db = ADONewConnection($i_dns);
if($i_db->Connect($i_server, $_SESSION['INSTALL']['db_user'], $_SESSION['INSTALL']['db_password'], $_SESSION['INSTALL']['db_db'])===false) {
 $g_vars['page']['errors'] .= $lngstr['install_dbdriver_cannotconnect'];
$nextstage = 4;
}
error_reporting(7);
if($nextstage==5) {
 $i_data = '<?php 
$srv_settings[\'title_postfix\'] = \''.$_SESSION['INSTALL']['title_postfix'].'\';
$srv_settings[\'default_email\'] = \''.$_SESSION['INSTALL']['default_email'].'\';
$srv_settings[\'language\'] = \''.$_SESSION['INSTALL']['language'].'\';
$srv_settings[\'db_driver\'] = \''.$_SESSION['INSTALL']['db_driver'].'\';
$srv_settings[\'db_host\'] = \''.$_SESSION['INSTALL']['db_host'].'\';
$srv_settings[\'db_db\'] = \''.$_SESSION['INSTALL']['db_db'].'\';
$srv_settings[\'db_user\'] = \''.$_SESSION['INSTALL']['db_user'].'\';
$srv_settings[\'db_password\'] = \''.$_SESSION['INSTALL']['db_password'].'\';
$srv_settings[\'table_prefix\'] = \''.$_SESSION['INSTALL']['table_prefix'].'\';
$srv_settings[\'url_root\'] = \''.$_SESSION['INSTALL']['url_root'].'\';
$srv_settings[\'dir_root_full\'] = \''.$_SESSION['INSTALL']['dir_root_full'].'\';
$srv_settings[\'url_files\'] = \''.$_SESSION['INSTALL']['url_files'].'\';
$srv_settings[\'dir_files_full\'] = \''.$_SESSION['INSTALL']['dir_files_full'].'\';
$srv_settings[\'version\'] = \''.md5('IGT'.trim($_SESSION['INSTALL']['key']).'VERSION').'\';
?>';
$_SESSION['INSTALL']['configfile'] = $i_data;
if (($configsuccess = ($i_fh = @fopen('inc/config.inc.php', 'w'))) !== false) {
 fwrite($i_fh, $i_data);
fclose($i_fh);
} else {
 $g_vars['page']['errors'] .= $lngstr['install_cannotwritetoconfig'];
}
}
}
if(!empty($_GET['download'])) {
 header("Content-Type: application/download\n");
header("Content-Disposition: attachment; filename=\"config.inc.php\"");
echo $_SESSION['INSTALL']['configfile'];
exit;
}
if($nextstage==6) {
 gotoLocation('install-db.php');
exit;
}
 
$g_vars['page']['title'] = $lngstr['install_title'];
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="'.$lngstr['text_direction'].'"><head><title>'.$g_vars['page']['title'].'</title>
<meta http-equiv="Content-Language" content="'.$lngstr['meta_contentlanguage'].'">
<meta content="text/html; charset='.$lngstr['meta_charset'].'" http-equiv=Content-Type>
<link rel="SHORTCUT ICON" href="favicon.ico">
<link href="shared/style.css" rel=stylesheet type=text/css>
<script language=javascript src="shared/shared.js" type="text/javascript"></script>
</head>
<body bgcolor="#ffffff"><form name="installForm" method="post" action="install.php">
<table style="height: 98%; border: 1px solid #CFD6E3;" cellpadding=0 cellspacing=25 border=0 width="780" height="100%" align=center>
<input type="hidden" name="stage" value="'.$nextstage.'" />';
 
switch($nextstage) {
 case 1:
 echo '<h1>'.$lngstr['install_page1'].'</h1>';
echo $lngstr['install_page1_description'];
echo '<p><table cellpadding=5 cellspacing=1 border=0 width="100%">';
writeInstallDialogRow($lngstr['install_language'], getSelectElement('language', $_SESSION['INSTALL']['language'], $lngstr['languages']));
echo '</table>';
break;
case 2:
 echo '<p><table cellpadding=5 cellspacing=1 border=0 width="100%">';
echo '<td><iframe name="license_text" src="license.htm" width="700" height="300" border="0" frameBorder="1"></iframe></td>';
echo '</table>';
break;
case 3:
 echo '<h1>'.$lngstr['install_page2'].'</h1>';
echo $lngstr['install_page2_description'];
if(isset($g_vars['page']['errors']) && $g_vars['page']['errors'])
 echo '<p><b><font color="#cc0000">'.$g_vars['page']['errors'].'</font></b>';
if(isset($g_vars['page']['notifications']) && $g_vars['page']['notifications'])
 echo '<p><b><font color="#006000">'.$g_vars['page']['notifications'].'</font></b>';
echo '<p><table cellpadding=5 cellspacing=1 border=0 width="100%">';
writeInstallDialogRow($lngstr['install_titlepostfix'], getInputElement('title_postfix', @$_SESSION['INSTALL']['title_postfix']));
writeInstallDialogRow($lngstr['install_defaultemail'], getInputElement('default_email', @$_SESSION['INSTALL']['default_email']));
writeInstallDialogRow($lngstr['install_urlroot'], getInputElement('url_root', @$_SESSION['INSTALL']['url_root']));
writeInstallDialogRow($lngstr['install_dirrootfull'], getInputElement('dir_root_full', @$_SESSION['INSTALL']['dir_root_full']));
writeInstallDialogRow($lngstr['install_urlfiles'], getInputElement('url_files', @$_SESSION['INSTALL']['url_files']));
writeInstallDialogRow($lngstr['install_dirfilesfull'], getInputElement('dir_files_full', @$_SESSION['INSTALL']['dir_files_full']));
echo '</table>';
break;
case 4:
 echo '<h1>'.$lngstr['install_page3'].'</h1>';
echo $lngstr['install_page3_description'];
if(isset($g_vars['page']['errors']) && $g_vars['page']['errors'])
 echo '<p><b><font color="#cc0000">'.$g_vars['page']['errors'].'</font></b>';
if(isset($g_vars['page']['notifications']) && $g_vars['page']['notifications'])
 echo '<p><b><font color="#006000">'.$g_vars['page']['notifications'].'</font></b>';
echo '<p><table cellpadding=5 cellspacing=1 border=0 width="100%">';
writeInstallDialogRow($lngstr['install_dbdriver'], getSelectElement('db_driver', @$_SESSION['INSTALL']['db_driver'], $m_db_drivers));
writeInstallDialogRow($lngstr['install_dbhost'], getInputElement('db_host', @$_SESSION['INSTALL']['db_host']));
writeInstallDialogRow($lngstr['install_dbdb'], getInputElement('db_db', @$_SESSION['INSTALL']['db_db']));
writeInstallDialogRow($lngstr['install_dbuser'], getInputElement('db_user', @$_SESSION['INSTALL']['db_user']));
writeInstallDialogRow($lngstr['install_dbpassword'], getInputElement('db_password', @$_SESSION['INSTALL']['db_password']));
writeInstallDialogRow($lngstr['install_dbtableprefix'], getInputElement('table_prefix', @$_SESSION['INSTALL']['table_prefix']));
echo '</table>';
break;
case 5:
 echo '<h1>'.$lngstr['install_page4'].'</h1>';
if(isset($g_vars['page']['errors']) && $g_vars['page']['errors']) {
 echo '<p><b><font color="#cc0000">'.$g_vars['page']['errors'].'</font></b>';
echo $lngstr['install_downloadconfig'];
} else {
 echo $lngstr['install_canwritetoconfig'];
}
echo $lngstr['install_page4_description'];
break;
}
echo '</td></tr><tr><td>';
echo '<p align=center>';
if($nextstage > 1)
 echo '<input type="submit" name="bprev" value="&nbsp;'.$lngstr['button_prev'].'&nbsp;">&nbsp;';
if($nextstage == 2)
 echo '<input type="submit" name="bnext" value="&nbsp;'.$lngstr['button_accept'].'&nbsp;">';
else echo '<input type="submit" name="bnext" value="&nbsp;'.$lngstr['button_next'].'&nbsp;">';
echo '</td></tr></table>';
echo '</form>';
echo '</body></html>';
 
function writeInstallDialogRow($i_label, $i_content) {
 echo '<tr><td align=right width=40%>'.$i_label.'</td><td>'.$i_content.'</td></tr>';
}
?>
