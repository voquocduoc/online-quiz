<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getThisRowClass.php
* Type:     function
* Name:     getThisRowClass
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getThisRowClass($params, &$smarty) {
global $g_vars;
	$i_result = $g_vars['page']['rowno'] % 2 ? 'rowtwo' : 'rowone';
	return $i_result;
}
?>