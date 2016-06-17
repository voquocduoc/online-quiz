<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getNumToLetter.php
* Type:     function
* Name:     getNumToLetter
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getNumToLetter($params, &$smarty) {
global $g_vars;
	$i_letters = 'abcdefghijklmnopqrstuvwxyz';
	$i_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$i_number = isset($params['number']) ? (int)$params['number'] : 0;
	if($i_number < 0 || $i_number > strlen($i_letters))
	 $i_number = 0;
	return $i_number ? substr($i_letters, $i_number - 1, 1) : '';
}
?>
