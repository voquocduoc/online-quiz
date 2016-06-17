<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getThisRowNo.php
* Type:     function
* Name:     getThisRowNo
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getThisRowNo($params, &$smarty) {
global $g_vars;
	return $g_vars['page']['rowno'];
}
?>