<?php
require_once("inc/init.inc.php");
switch(readGetVar('action')) {
	case 'activate':
 if(isset($_GET['userid'])) {
 if(isset($_POST['bsubmit']) || isset($_GET['checkword'])) {
 include_once($DOCUMENT_PAGES."account-activate-submit.inc.php");
} else {
 include_once($DOCUMENT_PAGES."account-activate.inc.php");
}
}
break;
}
?>
