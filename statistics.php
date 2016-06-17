<?php
require_once('inc/init.inc.php');
if(isset($G_SESSION['userid'])) {
	if($G_SESSION['access_reportsmanager'] > 0) { 
 $g_vars['page']['title'] = $lngstr['page_statistics']['title'];
switch(readGetVar('action')) {
 case 'resultid': 
 $g_vars['page']['title'] = $lngstr['page_statistics_resultid']['title'].$lngstr['item_separator'].$g_vars['page']['title'];
include_once($DOCUMENT_PAGES.'statistics-resultid.inc.php');
break;
default: 
 }
} else { 
 $g_vars['page']['notifications'] = $lngstr['inf_cant_view_results'];
include_once($DOCUMENT_PAGES.'home.inc.php');
}
} else { 
	$g_vars['page']['title'] = $lngstr['page_title_signin'];
include_once($DOCUMENT_PAGES.'signin-1.inc.php');
}
?>