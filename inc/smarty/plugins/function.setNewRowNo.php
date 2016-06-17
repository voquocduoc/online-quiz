<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.setNewRowNo.php
* Type:     function
* Name:     setNewRowNo
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_setNewRowNo($params, &$smarty) {
global $g_vars;
	$g_vars['page']['rowno']++;
	return;
}
?>