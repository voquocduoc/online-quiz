<?php
require_once('const.inc.php');
require_once('config.inc.php'); 
ini_set('session.gc_maxlifetime', '36000');
session_set_cookie_params(0);  
session_name(SYSTEM_SESSION_ID);
session_start();
//session_register('MAIN');
if(!isset($_SESSION['MAIN']))
 $_SESSION['MAIN'] = array();
$G_SESSION = &$_SESSION['MAIN'];
$DOCUMENT_ROOT = $srv_settings['dir_root_full'];
$DOCUMENT_INC = $DOCUMENT_ROOT.'inc/';
$DOCUMENT_LANG = $DOCUMENT_INC.'languages/';
$DOCUMENT_PAGES = $DOCUMENT_INC.'pages/';
$DOCUMENT_FPDF = $DOCUMENT_INC.'fpdf/';
$DOCUMENT_PHPMAILER = $DOCUMENT_INC.'phpmailer/';
$DOCUMENT_ADDONS = $DOCUMENT_INC.'addons/';
define('FPDF_FONTPATH', $DOCUMENT_FPDF.'font/');
define('SMARTY_DIR', $DOCUMENT_INC.'smarty/'); 
require_once($DOCUMENT_LANG.'en.lng.php');
require_once($DOCUMENT_INC.'functions.inc.php');
require_once($DOCUMENT_INC.'events.inc.php');
require_once($DOCUMENT_INC.'adodb/adodb.inc.php');
require_once($DOCUMENT_INC.'connect.inc.php');
require_once($DOCUMENT_INC.'logs.inc.php'); 
$m_strCurrentKVersion = '';
if(!empty($srv_settings['version']))
 $m_strCurrentKVersion = $srv_settings['version'];
else $m_strCurrentKVersion = 'NAV';
header("X-LM1-Version: ".IGT_TIMESTAMP."-".$m_strCurrentKVersion); 
$m_strCurrentLanguage = readCookieVar('current_language');
if(!empty($m_strCurrentLanguage)) {
	$srv_settings['language'] = $m_strCurrentLanguage;
} else {
 }
if($srv_settings['language'] != 'en')
 include_once($DOCUMENT_LANG.$srv_settings['language'].'.lng.php');
if(file_exists($DOCUMENT_LANG.'custom.lng.php'))
 include_once($DOCUMENT_LANG.'custom.lng.php'); 
require_once(SMARTY_DIR.'Smarty.class.php');
$g_smarty = new Smarty;
$g_smarty->template_dir = $DOCUMENT_INC.'templates/default/';
$g_smarty->compile_dir = $DOCUMENT_INC.'templates/default/compiled/';
$g_smarty->config_dir = $DOCUMENT_INC.'templates/default/configs/';
$g_smarty->cache_dir = $DOCUMENT_INC.'templates/cache/';
$g_smarty->left_delimiter = IGT_SMARTY_DELIMITERS_LEFT;
$g_smarty->right_delimiter = IGT_SMARTY_DELIMITERS_RIGHT;
$g_smarty->compile_check = IGT_SMARTY_COMPILE_CHECK;
$g_smarty->assign('G_SESSION', $G_SESSION);
$g_smarty->assign('lngstr', $lngstr);
$g_smarty->assign('srv_settings', $srv_settings); 
require_once($DOCUMENT_ADDONS.'init.inc.php'); 
reset($lngstr['language']['locale']);
$i_locale_set = false;
while(!$i_locale_set && list(,$val) = each($lngstr['language']['locale']))
 $i_locale_set = setlocale(LC_ALL, $val);   
  
if(ini_get('magic_quotes_runtime')==1)
 set_magic_quotes_runtime(0); 
if(!isset($G_SESSION['config_itemsperpage'])) {
	$G_SESSION['config_itemsperpage'] = getConfigItem(CONFIG_list_length);
if(!$G_SESSION['config_itemsperpage'])
 $G_SESSION['config_itemsperpage'] = 30;
}
if(!isset($G_SESSION['config_editortype'])) {
	$G_SESSION['config_editortype'] = getConfigItem(CONFIG_editor_type);
if(!$G_SESSION['config_editortype'])
 $G_SESSION['config_editortype'] = 2;
}
if(!isset($srv_settings['url_root_full']))
 $srv_settings['url_root_full'] = dirname(getFullScriptURL()); 
$g_vars['page']['title'] = '';
$g_vars['page']['meta'] = '';
$g_vars['page']['body_tag'] = '';
$g_vars['page']['hide_cpanel'] = false;
$g_vars['page']['location'] = array(); 
$g_vars['page']['errors'] = '';
$g_vars['page']['errors_fatal'] = false;
$g_vars['page']['notifications'] = '';
$g_vars['page']['rowno'] = 0; 
?>