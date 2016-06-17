<?php
require_once('inc/init.inc.php');
if(isset($G_SESSION['userid']) || (readGetVar('action') == 'state')) {
	switch(readGetVar('action')) {
 case 'coupon': 
 if(isset($_POST['bsubmit'])) {
 if(isset($_GET['testid'])) {
 include_once($DOCUMENT_PAGES.'buy-coupon-submit.inc.php');
}
} else {
 $g_vars['page']['title'] = $lngstr['page_buycheckout']['title'];
include_once($DOCUMENT_PAGES.'buy-checkout-1.inc.php');
}
break;
case 'buy': 
 if(isset($_GET['testid'])) {
 include_once($DOCUMENT_PAGES.'buy-checkout-submit.inc.php');
}
break;
case 'state': 
 include_once($DOCUMENT_PAGES.'buy-state.inc.php');
break;
case 'checkout': 
 default:
 if(isset($_GET['testid'])) {
 $g_vars['page']['title'] = $lngstr['page_buycheckout']['title'];
include_once($DOCUMENT_PAGES.'buy-checkout-1.inc.php');
} else {
 gotoLocation('index.php');
}
break;
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
?>