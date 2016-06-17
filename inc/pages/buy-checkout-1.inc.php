<?php
if(!empty($g_vars['system']['payment_engine'])) {
	include_once($DOCUMENT_ADDONS.'payment/'.$g_vars['system']['payment_engine'].'/checkout.inc.php');
exit;
} else {
	$g_vars['page']['header'] = $lngstr['page_buycheckout']['title'];
$g_vars['page']['errors'] = $lngstr['page_buycheckout']['err_no_handler'];
$f_testid = (int)readGetVar('testid');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('buy-checkout');
}
?>