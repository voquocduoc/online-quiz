<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getInTagValue.php
* Type:     function
* Name:     getInTagValue
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getInTagValue($params, &$smarty) {
	return convertTextValue($params['text']);
}
?>
