<?php
require_once('inc/init.inc.php');
if(!empty($g_vars['system']['payment_engine'])) {
	include_once($DOCUMENT_ADDONS.'payment/'.$g_vars['system']['payment_engine'].'/postback.inc.php');
}
?>