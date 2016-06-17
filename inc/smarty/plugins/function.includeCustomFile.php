<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.includeCustomFile.php
* Type:     function
* Name:     includeCustomFile
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_includeCustomFile($params, &$smarty) {
global $g_vars, $G_SESSION;
	$i_file = isset($params['file']) ? $params['file'] : '';
	$i_value = isset($params['value']) ? $params['value'] : $G_SESSION['testid'];
	$i_postfix = '-'.$i_value;
	if(file_exists($smarty->template_dir.$i_file.$i_postfix.'.tpl.html')) {
		displayTemplate($i_file.$i_postfix);
	} else {
		displayTemplate($i_file);
	}
}
?>