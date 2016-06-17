<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.getTableHeaders.php
* Type:     function
* Name:     getTableHeaders
* Purpose:  outputs a random magic answer
* -------------------------------------------------------------
*/
function smarty_function_getTableHeaders($params, &$smarty) {
        $i_url = isset($params['url']) ? $params['url'] : '';
	$i_columns = isset($params['columns']) ? $params['columns'] : '';
	$i_orderno = isset($params['orderno']) ? $params['orderno'] : '';
	$i_direction = isset($params['direction']) ? $params['direction'] : '';
	$i_orderid = isset($params['orderid']) ? $params['orderid'] : '';

	$i_content = '';
	foreach($i_columns as $i_fieldno=>$i_field) {
		$i_content .= '<td class=rowhdr1 vAlign=top title="'.$i_field[1].'">';
		if($i_field[2]) {
			$i_content .= '<a class=rowhdr href="'.$i_url.'&order'.$i_orderid.'='.$i_fieldno.'&direction'.$i_orderid.'='.(($i_orderno==$i_fieldno && !$i_direction) ? "DESC" : "").'">'.$i_field[0].'</a><br>';
			$i_content .= '<nobr>';
			if($i_orderno==$i_fieldno && !$i_direction)
			 $i_content .= '<img src="images/button-order-asc.gif" width=10 height=8>';
			 else $i_content .= '<a href="'.$i_url.'&order'.$i_orderid.'='.$i_fieldno.'&direction'.$i_orderid.'="><img src="images/button-order-asc-inactive.gif" width=10 height=8 border=0></a>';
			if($i_orderno==$i_fieldno && $i_direction)
			 $i_content .= '<img src="images/button-order-desc.gif" width=10 height=8>';
			 else $i_content .= '<a href="'.$i_url.'&order'.$i_orderid.'='.$i_fieldno.'&direction'.$i_orderid.'=DESC"><img src="images/button-order-desc-inactive.gif" width=10 height=8 border=0></a>';
			$i_content .= '</nobr>';
		} else {
			$i_content .= $i_field[0];
		}
		$i_content .= '</td>';
	}
	return $i_content;
}
?>