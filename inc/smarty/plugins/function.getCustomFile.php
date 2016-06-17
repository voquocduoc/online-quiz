<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getCustomFile.php
* Type:     function
* Name:     getCustomFile
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getCustomFile($params, &$smarty) {
global $DOCUMENT_ROOT;
	$i_file = isset($params['file']) ? $params['file'] : '';
	if(!empty($params['value'])) {
//		$i_ext = $i_file; // To Do
		$i_value = $params['value'];
		$i_postfix = '-'.$i_value;
		if(file_exists($DOCUMENT_ROOT.$i_file.$i_postfix)) {
			return $i_file.$i_postfix;
		} else {
			return $i_file;
		}
	} else {
		return $i_file;
	}
}
?>