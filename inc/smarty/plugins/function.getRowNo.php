<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getRowNo.php
* Type:     function
* Name:     getRowNo
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getRowNo($params, &$smarty) {
global $g_vars;
	$i_result = ($g_vars['page']['rowno'] = ++$g_vars['page']['rowno']) % 2 ? "rowtwo" : "rowone";
	return $i_result;
}
?>