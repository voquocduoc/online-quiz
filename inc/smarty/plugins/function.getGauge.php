<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getGauge.php
* Type:     function
* Name:     getGauge
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getGauge($params, &$smarty) {
	$i_percentage = isset($params['percentage']) ? (int)$params['percentage'] : 0;
	$i_width = isset($params['width']) ? (int)$params['width'] : 300;
	$i_color = isset($params['color']) ? $params['color'] : 'blue';
	return '<img src="images/gauge-'.$i_color.'-left.gif" width=3 height=12><img src="images/gauge-'.$i_color.'.gif" width='.round($i_percentage * $i_width / 100).' height=12><img src="images/gauge-'.$i_color.'-right.gif" width=3 height=12>';
}
?>
