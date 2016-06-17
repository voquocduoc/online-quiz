<?php
$_GET['limitto'] = 2000000000; 
$f_rtemplateid = (int)readGetVar('rtemplateid');
if($f_rtemplateid > 0)
 $i_columns_text = trim(getRecordItem($srv_settings['table_prefix'].'rtemplates', 'rtemplate_body', 'rtemplateid='.$f_rtemplateid));
else $i_columns_text = 'resultid,result_datestart,result_datestart_formatted,userid,user_name,user_firstname,user_lastname,testid,test_name,result_timeexceeded,result_points,result_pointsmax,result_score,grade_name';
$i_columns = explode(',', $i_columns_text);
foreach($i_columns as $key=>$val)
 $g_vars['page']['tables'][1]['columns_to_show'][$val] = true;
if(readGetVar('action')=='print') {
	$g_vars['page']['meta'] .= '<script language=javascript type="text/javascript">window.print();</script>';
}
  
$i_donotshow = true;
include_once($DOCUMENT_PAGES.'reports-manager-1.inc.php');
displayTemplate('reports-manager-report-1');
?>