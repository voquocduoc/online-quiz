<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getImplode.php
* Type:     function
* Name:     getImplode
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getImplode($params, &$smarty) {
	$i_glue = isset($params['glue']) ? $params['glue'] : ',';
	$i_pieces = isset($params['pieces']) ? $params['pieces'] : array();
	return implode($i_glue, $i_pieces);
}
?>