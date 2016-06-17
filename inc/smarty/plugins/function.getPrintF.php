<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getPrintF.php
* Type:     function
* Name:     getPrintF
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getPrintF($params, &$smarty) {
	if(!isset($params['var2'])) {
		return sprintf($params['text'], $params['var1']);
	} else {
		if(!isset($params['var3'])) {
			return sprintf($params['text'], $params['var1'], $params['var2']);
		} else {
			return sprintf($params['text'], $params['var1'], $params['var2'], $params['var3']);
		}
	}
}
?>
