<?php
defined('IGT_VALID_ENVIRONMENT') or exit('Restricted access');
$g_vars['page']['hide_cpanel'] = true;
$f_username = readPostVar('username');
$g_vars['page']['username'] = convertTextValue($f_username);
$g_vars['page']['gotourl'] = @htmlspecialchars($_SERVER['REQUEST_URI']);
$g_vars['page']['cansigninasguest'] = getRecordCount($srv_settings['table_prefix'].'users', 'userid='.SYSTEM_GROUP_GUEST_USERID.' AND user_enabled=1') > 0;
$g_vars['page']['test_code'] = isset($G_SESSION['test_code']) ? $G_SESSION['test_code'] : '';
$g_vars['page']['can_register'] = getConfigItem(CONFIG_can_register);
eventOnBeforePageGeneration(array('page_name' => 'signin'));
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('signin');
?>