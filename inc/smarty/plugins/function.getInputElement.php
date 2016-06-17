<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getInputElement.php
* Type:     function
* Name:     getInputElement
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getInputElement($params, &$smarty) {
	$i_type = isset($params['type']) ? $params['type'] : 'text';
	$i_size = isset($params['size']) ? (int)$params['size'] : 0;
	$i_maxlength = isset($params['maxlength']) ? (int)$params['maxlength'] : 0;
	$i_additional = isset($params['additional']) ? (int)$params['additional'] : '';
	return '<input name="'.$params['name'].'" value="'.convertTextValue($params['value']).'" class=inp type='.$i_type.' size='.$i_size.($i_maxlength > 0 ? ' maxlength='.$maxlength : '').$i_additional.'>';
}
?>
