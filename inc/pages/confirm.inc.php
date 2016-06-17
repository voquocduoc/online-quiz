<?php
$g_vars['page']['confirm_request'] = $i_confirm_request;
$g_vars['page']['confirm_url'] = $i_confirm_url;
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('confirm');
?>