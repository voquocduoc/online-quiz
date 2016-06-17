<?php
function readPostVar($i_name, $i_default = '') {
 return isset($_POST[$i_name]) ? $_POST[$i_name] : $i_default;
}
function sendEmail($i_parameters) {
global $DOCUMENT_ROOT, $DOCUMENT_PHPMAILER;
include_once($DOCUMENT_PHPMAILER.'class.phpmailer.php');
$mail = new PHPMailer();
$mail->PluginDir = $DOCUMENT_PHPMAILER;
     
 $mail->FromName = '';
$mail->From = $i_parameters['from'];
$mail->AddAddress($i_parameters['to']);
$mail->AddReplyTo($i_parameters['from']);
$mail->IsHTML(true);
$mail->Subject = $i_parameters['subject'];
$mail->Body = nl2br($i_parameters['body']);
$mail->AltBody = $i_parameters['body'];
return $mail->Send();
}
function readGetVar($i_name, $i_default = '') {
 return isset($_GET[$i_name]) ? $_GET[$i_name] : $i_default;
}
function readCookieVar($i_name, $i_default = '') {
 return isset($_COOKIE[IGT_COOKIE_PREFIX.$i_name]) ? $_COOKIE[IGT_COOKIE_PREFIX.$i_name] : $i_default;
}
function setCookieVar($i_name, $i_value = '', $i_time = 157680000, $i_path = '/') {
 setcookie(IGT_COOKIE_PREFIX.$i_name, $i_value, time() + $i_time, $i_path);
}
function readPostCookieVar($i_post_name, $i_cookie_name, $i_default = '') {
 return readPostVar($i_post_name, readCookieVar($i_cookie_name, $i_default));
}
 
function writeErrorsWarningsBar() {
global $g_vars;
if(isset($g_vars['page']['errors']) && $g_vars['page']['errors'])
 echo '<p><b><font color="#cc0000">'.$g_vars['page']['errors'].'</font></b>';
if(isset($g_vars['page']['notifications']) && $g_vars['page']['notifications'])
 echo '<p><b><font color="#006000">'.$g_vars['page']['notifications'].'</font></b>';
}
function getConfigItem($i_id) {
global $g_db, $srv_settings;
$i_result = NULL;
$i_rSet1 = $g_db->SelectLimit("SELECT config_value FROM ".$srv_settings['table_prefix']."config WHERE configid=".(int)$i_id, 1);
if($i_rSet1) {
 if(!$i_rSet1->EOF) {
 $i_result = $i_rSet1->fields["config_value"];
}
$i_rSet1->Close();
}
return $i_result;
}
function setConfigItem($i_id, $i_value) {
global $g_db, $srv_settings;
$i_value = $g_db->qstr((string)$i_value, get_magic_quotes_gpc());
return $g_db->Execute("UPDATE ".$srv_settings['table_prefix']."config SET config_value=".$i_value." WHERE configid=".(int)$i_id);
}
function showError($i_filename, $i_text) {
global $g_db;
exit("Error: ".$i_text." (".basename($i_filename).")");
}
function showDBError($i_filename, $i_lineno) {
global $g_db;  
exit("Error: ".basename($i_filename).", SQL request error #".$i_lineno." ".$g_db->ErrorMsg());
}
function gotoLocation($strURL) {
 session_write_close();
header('Request-URI: '.$strURL);
header('Content-Location: '.$strURL);
header('Location: '.$strURL);
exit;
}
function gotoLocationLocal($strURL) {
 global $srv_settings, $_SERVER;
$strURL = str_replace('&amp;','&',$strURL);
 
 $arr = explode('?',$strURL);
if(strpos($arr[0],'/')===false)
 $strURL = $srv_settings['url_root'].$strURL;
 
 $strURL = str_replace ("\r", "", $strURL);
$strURL = str_replace ("\n", "", $strURL);
session_write_close();
if(strtolower(substr($strURL,0,7))=='http://' || strtolower(substr($strURL,0,8))=='https://' || strtolower(substr($strURL,0,6))=='ftp://') {
 header('Request-URI: '.$strURL);
header('Content-Location: '.$strURL);
header('Location: '.$strURL);
} else {
 $i_protocol = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://';
$i_server_port = isset($_SERVER['SERVER_PORT']) ? $_SERVER['SERVER_PORT'] : '';
$i_server_name = getServerName();
if (($i_server_port != '80') && ($i_server_port != 443) && ($i_server_port > 0) && (strpos($i_server_name, ':'.$i_server_port) <= 0))
 $i_server_name .= ':'.$i_server_port;
header('Request-URI: '.$i_protocol.$i_server_name.$strURL);
header('Content-Location: '.$i_protocol.$i_server_name.$strURL);
header('Location: '.$i_protocol.$i_server_name.$strURL);
}
exit;
}
function getAutoPassword($i_length) {
$salt = "abchefghjkmnpqrstuvwxyz0123456789";
srand((double)microtime()*1000000);
$pass = "";
$i = 0;
while ($i < $i_length) {
 $num = rand() % 33;
$tmp = substr($salt, $num, 1);
$pass = $pass . $tmp;
$i++;
}
return $pass;
}
function convertNumberToLetter($n) {
 $strLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$nLetterCount = 26;
$n--;
$nLetter1 = $n % $nLetterCount;
$strLetter1 = $strLetters[$nLetter1];
$nLetter2 = floor($n / $nLetterCount);
if($nLetter2 > 0)
 $strLetter2 = $strLetters[$nLetter2 - 1];
else $strLetter2 = '';
return $strLetter2.$strLetter1;
}
function getDateLocal($i_format, $i_timestamp) {
 return strftime($i_format, $i_timestamp);
}
function getRecordCount($i_table, $i_where = '') {
global $g_db;
$i_recordcount = 0;
$i_rSet1 = $g_db->Execute("SELECT COUNT(*) FROM ".$i_table.(($i_where != '') ? " WHERE ".$i_where : ''));
if($i_rSet1) {
 if(!$i_rSet1->EOF)
 $i_recordcount = (int)array_pop($i_rSet1->fields);
$i_rSet1->Close();
}
return $i_recordcount;
}
function getRecordMax($i_table, $i_column, $i_where = '') {
global $g_db;
$i_columnmax = 0;
$i_rSet1 = $g_db->Execute("SELECT MAX(".$i_column.") as CMAX FROM ".$i_table.(($i_where != '') ? " WHERE ".$i_where : ''));
if($i_rSet1) {
 if(!$i_rSet1->EOF)
 $i_columnmax = (int)$i_rSet1->fields['CMAX'];
$i_rSet1->Close();
}
return $i_columnmax;
}
function getRecordSum($i_table, $i_column, $i_where = '') {
global $g_db;
$i_columnsum = 0;
$i_rSet1 = $g_db->Execute("SELECT SUM(".$i_column.") as CSUM FROM ".$i_table.(($i_where != '') ? " WHERE ".$i_where : ''));
if($i_rSet1) {
 if(!$i_rSet1->EOF)
 $i_columnsum = (int)$i_rSet1->fields['CSUM'];
$i_rSet1->Close();
}
return $i_columnsum;
}
function getRecordItem($table, $column, $where = '', $orderby = '') {
global $g_db;
$i_result = false;
$i_rSet1 = $g_db->SelectLimit("SELECT ".$column." FROM ".$table.(($where != '') ? " WHERE ".$where : '').(($orderby != '') ? " ORDER BY ".$orderby : ''), 1);
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 if(!$i_rSet1->EOF) {
 $i_result = $i_rSet1->fields[$column];
}
$i_rSet1->Close();
}
return $i_result;
}
function getRecordItems($table, $columns, $where = '') {
global $g_db;
$i_result = array();
if(!empty($columns)) {
 $i_columns = implode(',', $columns);
$i_rSet1 = $g_db->SelectLimit("SELECT ".$i_columns." FROM ".$table.(($where != '') ? " WHERE ".$where : ''), 1);
if(!$i_rSet1) {
 showDBError('getRecordItems ('.$table.')', 1);
} else {
 if(!$i_rSet1->EOF) {
 foreach($columns as $val)
 $i_result[$val] = $i_rSet1->fields[$val];
}
$i_rSet1->Close();
}
}
return $i_result;
}
function getAutoUsername($i_startfrom) {
global $g_db, $srv_settings; 
 $i_duplicates = 0;
do {
 $i_startfrom++;
$i_username = sprintf(IGT_USERNAME_TEMPLATE, $i_startfrom);
$i_duplicates = getRecordCount($srv_settings['table_prefix'].'users', "user_name=".$g_db->qstr($i_username, get_magic_quotes_gpc()));
} while ($i_duplicates > 0);
return $i_username;
}
function convertTextValue($text) {
return isset($text) ? str_replace('&amp;#', '&#', htmlspecialchars($text)) : '';
}
function writeTR2($i_column1, $i_column2) {
 echo getTR(array($i_column1, $i_column2));
}
function writeTR2Fixed($i_column1, $i_column2) {
 echo getTR(array($i_column1, $i_column2), array(' width="20%"', ' width="80%"'));
}
function getTR($i_columns, $i_addonses = array()) {
global $i_rowno;
$i_rownotext = ($i_rowno = ++$i_rowno % 2) ? 'rowtwo' : 'rowone';
$i_result = '';
$i_result .= '<tr class='.$i_rownotext.' valign=top>';
foreach($i_columns as $key=>$i_column)
 $i_result .= '<td'.(isset($i_addonses[$key]) ? $i_addonses[$key] : '').'>'.$i_column.'</td>';
$i_result .= '</tr>';
return $i_result;
}
function getSelectElement($i_name, $i_value, $i_values, $i_additional = '') {
 $i_result = '';
$i_result .= '<select class=inp name="'.$i_name.'" id="'.$i_name.'"'.$i_additional.'>';
foreach($i_values as $key=>$option)
 $i_result .= '<option value="'.convertTextValue($key).'"'.($key==$i_value ? " selected" : '').'>'.convertTextValue($option).'</option>';
$i_result .= '</select>';
return $i_result;
}
function getSelectMultipleElement($i_name, $i_value, $i_values, $i_size = 10, $i_additional = '') {
 $i_result = '';
$i_result .= '<select class=inp multiple name="'.$i_name.'" id="'.$i_name.'"'.$i_additional.'>';
foreach($i_values as $key=>$option)
 $i_result .= '<option value="'.convertTextValue($key).'"'.(in_array($key, $i_value) ? " selected" : '').'>'.convertTextValue($option).'</option>';
$i_result .= '</select>';
return $i_result;
}
function convertTextAreaHTML($i_state, $i_text) {
 if($i_state)
 return str_replace("\x20\x20", ' &nbsp;', str_replace("\r", '', str_replace("\n", '<br />', $i_text))); 
 else return str_replace('&nbsp;', ' ', str_replace("\r", '', str_replace('<br>', "\n", str_replace('<br />', "\n", $i_text))));
}
function isHTMLAreaEmpty($i_text) {
 return (trim(str_replace('<p>', '', str_replace('</p>', '', str_replace('&nbsp;', '', str_replace('<div>', '', str_replace('</div>', '', str_replace('<span>', '', str_replace('</span>', '', str_replace('<br>', '', str_replace('<br />', '', $i_text)))))))))) == '');
}
function initTextEditor($i_type = 1, $i_names = array('oEdit1')) {
global $srv_settings, $lngstr, $g_vars;
switch($i_type) {
 case CONFIG_CONST_htmlareaeditor: 
 $g_vars['page']['meta'] = '
<script language=JavaScript type="text/javascript">
_editor_url = "'.$srv_settings['url_root'].'editors/htmlarea/";
_editor_lang = "'.$srv_settings['language'].'";
</script>
<script language=JavaScript type="text/javascript" src="editors/htmlarea/htmlarea.js"></script>
<script language=JavaScript type="text/javascript">
HTMLArea.loadPlugin("TableOperations");
HTMLArea.loadPlugin("ImageManager");
HTMLArea.loadPlugin("CharacterMap");
function initDocument() {
var editor = new HTMLArea("'.$i_names[0].'");
editor.config.pageStyle = "@import url(shared/style.css);";
editor.registerPlugin(TableOperations);
editor.registerPlugin(CharacterMap);
editor.generate();
}
</script><script language=JavaScript type="text/javascript">function submitForm() {}</script>';
$g_vars['page']['body_tag'] = ' onload="HTMLArea.init(); HTMLArea.onload = initDocument"';
break;
case CONFIG_CONST_iseditor: 
 $g_vars['page']['meta'] = '';
switch($srv_settings['language']) {
 case 'de':
 $g_vars['page']['meta'] .= '<script language=JavaScript type="text/javascript" src="'.$srv_settings['url_root'].'editors/iseditor/scripts/language/german/editor_lang.js"></script>';
break;
case 'nl':
 $g_vars['page']['meta'] .= '<script language=JavaScript type="text/javascript" src="'.$srv_settings['url_root'].'editors/iseditor/scripts/language/dutch/editor_lang.js"></script>';
break;
case 'ru':
 $g_vars['page']['meta'] .= '<script language=JavaScript type="text/javascript" src="'.$srv_settings['url_root'].'editors/iseditor/scripts/language/russian/editor_lang.js"></script>';
break;
}
$g_vars['page']['meta'] .= '<script language=JavaScript type="text/javascript" src="'.$srv_settings['url_root'].'editors/iseditor/scripts/'.(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ? '' : 'moz/').'editor.js"></script><script language=JavaScript type="text/javascript">function submitForm() {document.getElementById("'.$i_names[0].'").value = '.$i_names[0].'Editor.getHTMLBody();}</script>';
break;
case CONFIG_CONST_iseditor2: 
 $g_vars['page']['meta'] = '';
switch($srv_settings['language']) {
 case 'de':
 $g_vars['page']['meta'] .= '<script language=JavaScript type="text/javascript" src="'.$srv_settings['url_root'].'editors/iseditor2/scripts/language/german/editor_lang.js"></script>';
break;
case 'nl':
 $g_vars['page']['meta'] .= '<script language=JavaScript type="text/javascript" src="'.$srv_settings['url_root'].'editors/iseditor2/scripts/language/dutch/editor_lang.js"></script>';
break;
case 'ru':
 $g_vars['page']['meta'] .= '<script language=JavaScript type="text/javascript" src="'.$srv_settings['url_root'].'editors/iseditor2/scripts/language/russian/editor_lang.js"></script>';
break;
}
$g_vars['page']['meta'] .= '<script language=JavaScript type="text/javascript" src="'.$srv_settings['url_root'].'editors/iseditor2/scripts/innovaeditor.js"></script><script language=JavaScript type="text/javascript">function submitForm() {}</script>';
break;
}
}
function getJSComplaintText($i_text) {
 return str_replace('"', '\"', str_replace("\r", "", str_replace("\n", " ", $i_text)));
}
function getTextEditor($i_type, $i_name, $i_value, $i_rows = 15, $i_cols = 50, $i_addon = '') {
global $srv_settings, $lngstr;
$i_name_nospecialchars = str_replace(']', '_', str_replace('[', '_', $i_name));
switch($i_type) {
 case 0: 
 $i_value = convertTextAreaHTML(false, $i_value);
return '<textarea name='.$i_name.' cols='.$i_cols.' rows='.$i_rows.' style="width: 99%;">'.convertTextValue($i_value).'</textarea>';
case CONFIG_CONST_htmlareaeditor: 
 return '<textarea name='.$i_name.' cols='.$i_cols.' rows='.$i_rows.' id='.$i_name.' style="height: 25em; width: 85%;">'.convertTextValue($i_value).'</textarea>';
break;
case CONFIG_CONST_iseditor: 
 return '<script language=JavaScript type="text/javascript">var '.$i_name_nospecialchars.'Editor = new InnovaEditor("'.$i_name_nospecialchars.'Editor"); '.$i_name_nospecialchars.'Editor.width="100%"; '.$i_name_nospecialchars.'Editor.cmdAssetManager="modalDialogShow(\''.$srv_settings['url_root'].'editors/iseditor/assetmanager/assetmanager.php?lang='.$lngstr['language_long'].'\', 640, 465)"; '.$i_name_nospecialchars.'Editor.btnFlash=true; '.$i_name_nospecialchars.'Editor.btnMedia=true; '.$i_name_nospecialchars.'Editor.btnStyles=true; '.$i_name_nospecialchars.'Editor.css="shared/style.css"; '.$i_name_nospecialchars.'Editor.btnStrikethrough=true; '.$i_name_nospecialchars.'Editor.btnSuperscript=true; '.$i_name_nospecialchars.'Editor.btnSubscript=true; '.$i_name_nospecialchars.'Editor.btnLTR=true; '.$i_name_nospecialchars.'Editor.btnRTL=true; '.$i_name_nospecialchars.'Editor.btnClearAll=true; '.$i_name_nospecialchars.'Editor.btnCustomTag=true; '.$i_addon.' '.$i_name_nospecialchars.'Editor.RENDER("'.getJSComplaintText($i_value).'");</script><input type="hidden" name="'.$i_name.'" id="'.$i_name_nospecialchars.'">';
break;
case CONFIG_CONST_iseditor2: 
 return '<textarea name='.$i_name.' cols='.$i_cols.' rows='.$i_rows.' id='.$i_name_nospecialchars.'>'.convertTextValue($i_value).'</textarea><script language=JavaScript type="text/javascript">var '.$i_name_nospecialchars.'Editor = new InnovaEditor("'.$i_name_nospecialchars.'Editor"); '.$i_name_nospecialchars.'Editor.width="100%"; '.$i_name_nospecialchars.'Editor.cmdAssetManager="modalDialogShow(\''.$srv_settings['url_root'].'editors/iseditor2/assetmanager/assetmanager.php?lang='.$lngstr['language_long'].'\', 640, 465)"; '.$i_name_nospecialchars.'Editor.btnFlash=true; '.$i_name_nospecialchars.'Editor.btnMedia=true; '.$i_name_nospecialchars.'Editor.btnStyles=true; '.$i_name_nospecialchars.'Editor.css="shared/style.css"; '.$i_name_nospecialchars.'Editor.btnStrikethrough=true; '.$i_name_nospecialchars.'Editor.btnSuperscript=true; '.$i_name_nospecialchars.'Editor.btnSubscript=true; '.$i_name_nospecialchars.'Editor.btnLTR=true; '.$i_name_nospecialchars.'Editor.btnRTL=true; '.$i_name_nospecialchars.'Editor.btnClearAll=true; '.$i_name_nospecialchars.'Editor.btnPasteText=true; '.$i_addon.' '.$i_name_nospecialchars.'Editor.REPLACE("'.$i_name_nospecialchars.'");</script>';
break;
}
}
function getTextArea($i_name, $i_value, $hint = '', $i_rows = 5, $i_cols = 50) {
 return '<textarea name='.$i_name.' cols='.$i_cols.' rows='.$i_rows.' title="'.convertTextValue($hint).'">'.convertTextValue($i_value).'</textarea>';
}
function getPasswordBox($i_name, $i_value, $size = 50, $maxlength = 0) {
 return '<input name="'.$i_name.'" value="'.convertTextValue($i_value).'" class=inp type=password size='.$size.(!empty($maxlength) ? " maxlength=$maxlength" : "").'>';
}
function getHiddenElement($i_name, $i_value, $size = 50, $maxlength = 0, $i_additional = '') {
 return getInputElement($i_name, $i_value, $size, $maxlength, $i_additional, $i_type = 'hidden');
}
function getInputElement($i_name, $i_value, $size = 50, $maxlength = 0, $i_additional = '', $i_type = 'text') {
 return '<input name="'.$i_name.'" value="'.convertTextValue(@$i_value).'" class=inp type='.$i_type.' size='.$size.($maxlength > 0 ? " maxlength=$maxlength" : "").$i_additional.'>';
}
function getCheckbox($i_name, $i_value, $text, $i_additional = '') {
 return '<input name="'.$i_name.'" type=checkbox'.($i_value ? ' checked=checked' : '').$i_additional.'>'.$text;
}
function writeInputElement($i_name, $i_value, $size = 50, $maxlength = 0, $i_additional = '') {
 echo getInputElement($i_name, $i_value, $size, $maxlength, $i_additional);
}
function getBar($i_state, $i_content) {
 return '<table cellpadding=0 cellspacing=0 border=0 width="100%" style="border-left: 1px solid #E0E7F6; border-top: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3; border-bottom: 1px solid #CFD6E3;"><tr><td colspan=3 height=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=1></td></tr><tr style="background: url(images/barsmall-'.$i_state.'-background.gif) repeat-x;"><td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=24></td><td align=center>'.$i_content.'</td><td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=24></td></tr><tr><td colspan=3 height=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=1></td></tr></table>';
}
function getBarSmall($i_state, $i_content) {
 return '<table cellpadding=0 cellspacing=0 border=0 width="100%" style="border-left: 1px solid #E0E7F6; border-top: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3;"><tr><td colspan=3 height=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=1></td></tr><tr style="background: url(images/barsmall-'.$i_state.'-background.gif) repeat-x;"><td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=24></td><td align=center>'.$i_content.'</td><td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=24></td></tr><tr><td colspan=3 height=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=1></td></tr></table>';
}
function getMenu2Items($section_name) {
global $G_SESSION, $g_vars, $lngstr;
$i_items = array();
switch($section_name) {
 case 'takeatest':
 $i_items = array();
break;
case 'questionbank':
 if($G_SESSION['access_questionbank'] > 0)
 $i_items['questionbank'] = array('question-bank.php', $lngstr['page_header_questionbank']);
if($G_SESSION['access_subjects'] > 0)
 $i_items['subjects'] = array('subjects.php', $lngstr['page_header_subjects']);
break;
case 'testmanager':
 if($G_SESSION['access_testmanager'] > 0)
 $i_items['testmanager'] = array('test-manager.php', $lngstr['page_header_edittests']);
if($G_SESSION['access_gradingsystems'] > 0)
 $i_items['grades'] = array('grades.php', $lngstr['page_header_grades']);
if(($g_vars['page']['selected_tab'] == 'editquestions') || ($g_vars['page']['selected_tab'] == 'editquestions-2') || ($g_vars['page']['selected_tab'] == 'testmanager-10'))
 if($G_SESSION['access_testmanager'] > 0)
 $i_items['editquestions'] = array('test-manager.php?action=editt&testid='.(int)readGetVar('testid'), $lngstr['page_header_test_questions']);
break;
case 'reportsmanager':
 if($G_SESSION['access_reportsmanager'] > 0)
 $i_items['reportsmanager'] = array('reports-manager.php', $lngstr['page_header_results']); 
  
 if(($g_vars['page']['selected_tab'] == 'reportsmanager-2') || ($g_vars['page']['selected_tab'] == 'reportsmanager-3'))
 if($G_SESSION['access_reportsmanager'] > 0)
 $i_items['reportsmanager-2'] = array('reports-manager.php?action=viewq&resultid='.(int)readGetVar('resultid'), $lngstr['page_header_results_questions']);
break;
case 'administration':
 if($G_SESSION['access_users'] > 0)
 $i_items['users'] = array('users.php', $lngstr['page_header_manageusers']);
if($G_SESSION['access_groups'] > 0)
 $i_items['groups'] = array('groups.php', $lngstr['page_header_managegroups']);
if($G_SESSION['access_config'] > 0)
 $i_items['config'] = array('config.php', $lngstr['page_header_config']);
if($G_SESSION['access_emailtemplates'] > 0)
 $i_items['emailtemplates'] = array('email-templates.php', $lngstr['page_header_emailtemplates']);
if($G_SESSION['access_reporttemplates'] > 0)
 $i_items['reporttemplates'] = array('report-templates.php', $lngstr['page_header_rtemplates']);
if($G_SESSION['access_visitors'] > 0)
 $i_items['visitors'] = array('visitors.php', $lngstr['page_header_visitors']);
  
 break;
}
return $i_items;
}
 
function writePanel2($i_items) {
global $g_vars, $lngstr, $srv_settings;
echo '<p><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>';
echo '<table cellpadding=0 cellspacing=0 border=0>';
echo '<tr><td width=3><img src="images/1x1.gif" width=3 height=1></td>';
reset($i_items);
if(list($key,$val) = each($i_items))
 echo '<td>'.getBarSmall($g_vars['page']['selected_tab'] == $key ? 1 : 0, '&nbsp;&nbsp;<b>'.($g_vars['page']['selected_tab'] == $key ? $val[1] : '<a class=bar2 href="'.$val[0].'">'.$val[1].'</a>').'</b>&nbsp;&nbsp;').'</td>';
while(list($key,$val) = each($i_items)) {
 echo '<td width=5><img src="images/1x1.gif" width=5 height=1></td>'; 
 echo '<td>'.getBarSmall($g_vars['page']['selected_tab'] == $key ? 1 : 0, '&nbsp;&nbsp;<b>'.($g_vars['page']['selected_tab'] == $key ? $val[1] : '<a class=bar2 href="'.$val[0].'">'.$val[1].'</a>').'</b>&nbsp;&nbsp;').'</td>';
}
echo '<td width=3><img src="images/1x1.gif" width=3 height=1></td></tr>'; 
 echo '</table>';
$i_guide_page_url = implode('.', $g_vars['page']['location']);
echo '</td><td width=53 align=right><a id="infobar_button" href="javascript:ShowInfoBar('.((readCookieVar('showinfobar', 'N') == 'Y') ? 'false' : 'true').');" title="'.$lngstr['tooltip_button'].'"><img src="images/dialog-info-small.gif" width=24 height=24 border=0></a><img src="images/1x1.gif" width=5 height=1><a id="helpbar_button" href="guide/guide.php?language='.$srv_settings['language'].'&page='.$i_guide_page_url.'" title="'.$lngstr['help_button'].'" target="_blank"><img src="images/dialog-help-small.gif" width=24 height=24 border=0></a></td><td width=3><img src="images/1x1.gif" width=3 height=1></td></tr></table>';
echo '<table cellpadding=0 cellspacing=0 border=0 width="100%" style="background: #CFD6E3;"><tr><td height=1><img src="images/1x1.gif" width=1 height=1></tr></table>';
}
function writeInfoBar($i_content) {
global $_COOKIE, $lngstr;
$i_isvisible = readCookieVar('showinfobar', 'N') == 'Y';
if($i_content) {
 echo '<div id="infobar" style="display: '.($i_isvisible ? 'block' : 'none').';"><table cellpadding=0 cellspacing=0 border=0 width="97%" align=center style="border: 1px solid #8097D1; background-color: #F3F6FF;">';
echo '<tr><td width=32 vAlign=top style="padding: 5px;"><img src="images/dialog-info.gif" width=32 height=32></td>';
echo '<td width="100%" vAlign=middle style="padding: 5px;"><a href="javascript:ShowInfoBar(false);" title="'.$lngstr['tooltip_closebar'].'"><img src="images/button-cross-infobar.gif" align=right width=20 height=20 border=0></a>';
echo $i_content;
echo '</td>';
echo '</tr></table></div>';
}
}
function writeQryTableHeaders($i_url, $i_tablefields, $i_order_no, $i_direction, $i_orderid = '') {
 foreach($i_tablefields as $i_fieldno=>$i_field) {
 $i_content = $i_field[0];
if($i_field[2]) {
 $i_content = '<a class=rowhdr href="'.$i_url.'&order'.$i_orderid.'='.$i_fieldno.'&direction'.$i_orderid.'='.(($i_order_no==$i_fieldno && !$i_direction) ? "DESC" : "").'">'.$i_content.'</a><br>';
$i_content .= '<nobr>';
if($i_order_no==$i_fieldno && !$i_direction)
 $i_content .= '<img src="images/button-order-asc.gif" width=10 height=8>';
else $i_content .= '<a href="'.$i_url.'&order'.$i_orderid.'='.$i_fieldno.'&direction'.$i_orderid.'="><img src="images/button-order-asc-inactive.gif" width=10 height=8 border=0></a>';
if($i_order_no==$i_fieldno && $i_direction)
 $i_content .= '<img src="images/button-order-desc.gif" width=10 height=8>';
else $i_content .= '<a href="'.$i_url.'&order'.$i_orderid.'='.$i_fieldno.'&direction'.$i_orderid.'=DESC"><img src="images/button-order-desc-inactive.gif" width=10 height=8 border=0></a>';
$i_content .= '</nobr>';
}
$i_content = '<td class=rowhdr1 vAlign=top title="'.$i_field[1].'">'.$i_content.'</td>';
echo $i_content;
}
}
function unregisterTestData() {
global $G_SESSION; 
 unset($G_SESSION['testid']);
unset($G_SESSION['resultid']);
unset($G_SESSION['yt_name']);
unset($G_SESSION['yt_result_etemplateid']);
unset($G_SESSION['yt_result_email']);
unset($G_SESSION['yt_result_emailtouser']);
unset($G_SESSION['yt_teststart']);
unset($G_SESSION['yt_testtime']);
unset($G_SESSION['yt_timeforceout']);
unset($G_SESSION['yt_attempts']);
unset($G_SESSION['yt_pointsmax']);
unset($G_SESSION['yt_teststop']);
unset($G_SESSION['yt_questionstart']);
unset($G_SESSION['yt_questioncount']);
unset($G_SESSION['yt_questions']);
unset($G_SESSION['yt_questionids']);
unset($G_SESSION['yt_answers']);
unset($G_SESSION['yt_shufflea']);
unset($G_SESSION['yt_test_qsperpage']);
unset($G_SESSION['yt_test_showqfeedback']);
unset($G_SESSION['yt_page_hasfeedback']);
unset($G_SESSION['yt_result_showanswers']);
unset($G_SESSION['yt_result_showpoints']);
unset($G_SESSION['yt_result_showgrade']);
unset($G_SESSION['yt_result_showpdf']);
unset($G_SESSION['yt_result_rtemplateid']);
unset($G_SESSION['yt_reportgradecondition']);
unset($G_SESSION['yt_gscaleid']);
unset($G_SESSION['yt_gradeid']);
unset($G_SESSION['yt_prevtestid']);
unset($G_SESSION['yt_nexttestid']);
unset($G_SESSION['yt_questionno']);
unset($G_SESSION['yt_questionno_current']);
unset($G_SESSION['yt_got_answers']);
unset($G_SESSION['yt_got_points']);
unset($G_SESSION['yt_points_pending']);
unset($G_SESSION['yt_state']);
unset($G_SESSION['questionid']);
unset($G_SESSION['yt_teststoppedat']);
unset($G_SESSION['yt_pageno']);
setCookieVar('pending_test_ids', '');
setCookieVar('pending_test_result_ids', '');
}
function getShuffledArray($i_array, $i_count = 0) {
 srand((float) microtime() * 10000000);
shuffle($i_array);
return $i_array;
 
}
function calcResultGrade($i_gscaleid, $i_score) {
global $g_db, $srv_settings;
$i_result = array();
$i_result['gscaleid'] = $i_gscaleid;
$i_result['gradeid'] = 0;
$i_result['name'] = '';
$i_result['feedback'] = '';
$i_rSet1 = $g_db->SelectLimit("SELECT gscale_gradeid, grade_name, grade_feedback FROM ".$srv_settings['table_prefix']."gscales_grades WHERE gscaleid=".$i_gscaleid." AND grade_from<=".$i_score." ORDER BY gscale_gradeid ASC", 1);
if(!$i_rSet1) {
 showDBError('getResultGrade', 1);
} else {
 if(!$i_rSet1->EOF) {
 $i_result['gradeid'] = $i_rSet1->fields['gscale_gradeid'];
$i_result['name'] = $i_rSet1->fields['grade_name'];
$i_result['feedback'] = $i_rSet1->fields['grade_feedback'];
if(isHTMLAreaEmpty($i_result['feedback']))
 $i_result['feedback'] = '';
}
$i_rSet1->Close();
}
return $i_result;
}
function getGradeData($i_gscaleid, $i_gradeid) {
global $g_db, $srv_settings;
$i_result = array();
$i_result['gscaleid'] = $i_gscaleid;
$i_result['gradeid'] = $i_gradeid;
$i_result['name'] = '';
$i_result['feedback'] = '';
$i_rSet1 = $g_db->SelectLimit("SELECT grade_name, grade_feedback FROM ".$srv_settings['table_prefix']."gscales_grades WHERE gscaleid=".$i_gscaleid." AND gscale_gradeid=".$i_gradeid, 1);
if(!$i_rSet1) {
 showDBError('getResultGrade', 1);
} else {
 if(!$i_rSet1->EOF) {
 $i_result['name'] = $i_rSet1->fields['grade_name'];
$i_result['feedback'] = $i_rSet1->fields['grade_feedback'];
if(isHTMLAreaEmpty($i_result['feedback']))
 $i_result['feedback'] = '';
}
$i_rSet1->Close();
}
return $i_result;
}
function readTestQuestion($i_questionno, $i_questionid) {
global $g_db, $G_SESSION, $lngstr, $srv_settings, $g_vars; 
 $i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."questions WHERE questionid=".$i_questionid);
if(!$i_rSet2) {
 showDBError('readTestQuestion', 1);
} else {
 if(!$i_rSet2->EOF) {
 $g_vars['page']['question'][$i_questionno]['text'] = $i_rSet2->fields['question_text'];
$g_vars['page']['question'][$i_questionno]['type'] = $i_rSet2->fields['question_type'];
$g_vars['page']['question'][$i_questionno]['shuffle'] = $i_rSet2->fields['question_shufflea'];
} else {
 $g_vars['page']['errors'] = sprintf($lngstr['err_no_question_id_in_db'], $i_questionid);
$g_vars['page']['errors_fatal'] = true;
return false;
}
$i_rSet2->Close();
} 
 $i_answer_text = array();
$i_answer_feedback = array();
$g_vars['page']['question'][$i_questionno]['answer_count'] = 0;
$g_vars['page']['question'][$i_questionno]['correct_answer_count'] = 0;
$i_rSet3 = $g_db->Execute("SELECT answer_text, answer_feedback, answer_correct FROM ".$srv_settings['table_prefix']."answers WHERE questionid=".$i_questionid." ORDER BY answerid");
if(!$i_rSet3) {
 showDBError('readTestQuestion', 2);
} else { 
 while(!$i_rSet3->EOF) {
 $g_vars['page']['question'][$i_questionno]['answer_count']++;
$i_answer_text[$g_vars['page']['question'][$i_questionno]['answer_count']] = $i_rSet3->fields['answer_text'];
$i_answer_feedback[$g_vars['page']['question'][$i_questionno]['answer_count']] = $i_rSet3->fields['answer_feedback'];
$g_vars['page']['question'][$i_questionno]['correct_answer_count'] += ($i_rSet3->fields['answer_correct'] ? 1 : 0);
$i_rSet3->MoveNext();
}
$i_rSet3->Close();
switch ($g_vars['page']['question'][$i_questionno]['type']) {
 case QUESTION_TYPE_MULTIPLECHOICE:
 case QUESTION_TYPE_TRUEFALSE:
 case QUESTION_TYPE_MULTIPLEANSWER:
 if($g_vars['page']['question'][$i_questionno]['answer_count']) {  
 if(!isset($G_SESSION['yt_answers'][$i_questionno])) {
 $i_answer_order = array();
for($i = 0; $i < $g_vars['page']['question'][$i_questionno]['answer_count']; $i++)
 $i_answer_order[$i] = $i + 1; 
 if($g_vars['page']['question'][$i_questionno]['answer_count'] > 1 && ($g_vars['page']['question'][$i_questionno]['type'] != QUESTION_TYPE_TRUEFALSE)) {
 if(($G_SESSION['yt_shufflea'] && ($g_vars['page']['question'][$i_questionno]['shuffle'] == IGT_SHUFFLE_ANSWERS_INHERIT)) || ($g_vars['page']['question'][$i_questionno]['shuffle'] == IGT_SHUFFLE_ANSWERS_DO)) { 
 $i_answer_order = getShuffledArray($i_answer_order);
} else if($g_vars['page']['question'][$i_questionno]['shuffle'] == IGT_SHUFFLE_ANSWERS_EXCEPT_FIRST) { 
 array_shift($i_answer_order);
$i_answer_order = getShuffledArray($i_answer_order);
array_unshift($i_answer_order, 1);
} else if($g_vars['page']['question'][$i_questionno]['shuffle'] == IGT_SHUFFLE_ANSWERS_EXCEPT_LAST) { 
 array_pop($i_answer_order);
$i_answer_order = getShuffledArray($i_answer_order);
array_push($i_answer_order, $g_vars['page']['question'][$i_questionno]['answer_count']);
}
}
$G_SESSION['yt_answers'][$i_questionno] = $i_answer_order;
} 
 foreach($G_SESSION['yt_answers'][$i_questionno] as $i_id=>$i_no) {
 $g_vars['page']['question'][$i_questionno]['answer'][$i_id + 1]['text'] = $i_answer_text[$i_no];
$g_vars['page']['question'][$i_questionno]['answer'][$i_id + 1]['feedback'] = $i_answer_feedback[$i_no];
if(!$g_vars['page']['has_feedback'])
 $g_vars['page']['has_feedback'] = (strlen($i_answer_feedback[$i_no]) > 0);
switch($g_vars['page']['question'][$i_questionno]['type']) {
 case QUESTION_TYPE_MULTIPLECHOICE:
 case QUESTION_TYPE_TRUEFALSE:
 if($G_SESSION['yt_state'] == TEST_STATE_QREVIEW) {
 $nSelectedAnswer = (int)getRecordItem($srv_settings['table_prefix'].'results_answers', 'result_answer_text', 'resultid='.$G_SESSION['resultid'].' AND questionid='.$i_questionid);
$bIsSelected = ($nSelectedAnswer == $i_no);
} else {
 $nSelectedAnswer = isset($_POST['answer']) && isset($_POST['answer'][$i_questionno]) ? $_POST['answer'][$i_questionno] : 0;
$bIsSelected = ($nSelectedAnswer == $i_id + 1);
}
break;
case QUESTION_TYPE_MULTIPLEANSWER:
 if($G_SESSION['yt_state'] == TEST_STATE_QREVIEW) {
 $nSelectedAnswers = explode(QUESTION_TYPE_MULTIPLEANSWER_BREAK, getRecordItem($srv_settings['table_prefix'].'results_answers', 'result_answer_text', 'resultid='.$G_SESSION['resultid'].' AND questionid='.$i_questionid));
$bIsSelected = is_array($nSelectedAnswers) && in_array($i_no, $nSelectedAnswers);
} else {
 $nSelectedAnswers = isset($_POST['answer']) && isset($_POST['answer'][$i_questionno]) ? $_POST['answer'][$i_questionno] : array();
$bIsSelected = is_array($nSelectedAnswers) && in_array($i_id + 1, $nSelectedAnswers);
}
break;
}
$g_vars['page']['question'][$i_questionno]['answer'][$i_id + 1]['selected'] = $bIsSelected;
}
} else { 
 $g_vars['page']['errors'] = sprintf($lngstr['err_no_answers_in_question'], $i_questionid);
$g_vars['page']['errors_fatal'] = true;
return false;
}
break;
case QUESTION_TYPE_FILLINTHEBLANK:
 case QUESTION_TYPE_ESSAY:
 $g_vars['page']['question'][$i_questionno]['answer_count'] = 1;
$g_vars['page']['question'][$i_questionno]['answer'][1]['feedback'] = '';
if($G_SESSION['yt_state'] == TEST_STATE_QREVIEW) {
 $g_vars['page']['question'][$i_questionno]['answer'][1]['text'] = getRecordItem($srv_settings['table_prefix'].'results_answers', 'result_answer_text', 'resultid='.$G_SESSION['resultid'].' AND questionid='.$i_questionid);
} else {
 $g_vars['page']['question'][$i_questionno]['answer'][1]['text'] = '';
}         
 break;
}
}
return true;
}
    
function addNewUser($arrUserData = array(), $arrGroupIDs = array(), $bForceCreation = false) {
global $g_db, $srv_settings;
if(!isset($arrUserData['user_password']))
 $arrUserData['user_password'] = '';
if(!isset($arrUserData['user_passhash']))
 $arrUserData['user_passhash'] = md5($arrUserData['user_password']);
unset($arrUserData['user_password']);
if(!isset($arrUserData['user_checkword']))
 $arrUserData['user_checkword'] = getAutoPassword(IGT_CHECKWORD_LENGTH);
if(!isset($arrUserData['user_joindate']))
 $arrUserData['user_joindate'] = time();
if(!isset($arrUserData['user_logindate']))
 $arrUserData['user_logindate'] = 0;
 
 if(!isset($arrUserData['user_address']))
 $arrUserData['user_address'] = '';
if(!isset($arrUserData['user_caddress']))
 $arrUserData['user_caddress'] = '';
if(!isset($arrUserData['user_ufield1']))
 $arrUserData['user_ufield1'] = '';
if(!isset($arrUserData['user_ufield2']))
 $arrUserData['user_ufield2'] = '';
if(!isset($arrUserData['user_ufield3']))
 $arrUserData['user_ufield3'] = '';
if(!isset($arrUserData['user_ufield4']))
 $arrUserData['user_ufield4'] = '';
if(!isset($arrUserData['user_ufield5']))
 $arrUserData['user_ufield5'] = '';
if(!isset($arrUserData['user_ufield6']))
 $arrUserData['user_ufield6'] = '';
if(!isset($arrUserData['user_ufield7']))
 $arrUserData['user_ufield7'] = '';
if(!isset($arrUserData['user_ufield8']))
 $arrUserData['user_ufield8'] = '';
if(!isset($arrUserData['user_ufield9']))
 $arrUserData['user_ufield9'] = '';
if(!isset($arrUserData['user_ufield10']))
 $arrUserData['user_ufield10'] = '';
if(!isset($arrUserData['user_notes']))
 $arrUserData['user_notes'] = '';
$i_names = '';
$i_values = '';
foreach($arrUserData as $name => $value) {
 if(strlen($i_names) > 0) {
 $i_names .= ',';
$i_values .= ',';
}
$i_names .= $name;
$i_values .= $g_db->qstr($value, get_magic_quotes_gpc());
}
 
 if(!$bForceCreation && (getConfigItem(CONFIG_reg_username) == CONFIG_CONST_show_require))
 $i_duplicates = getRecordCount($srv_settings['table_prefix'].'users', "user_name=".$g_db->qstr($arrUserData['user_name'], get_magic_quotes_gpc()));
else $i_duplicates = 0;
if($i_duplicates <= 0) { 
 $qry_str = 'INSERT INTO '.$srv_settings['table_prefix'].'users ('.$i_names.') VALUES ('.$i_values.')';
if($g_db->Execute($qry_str)===false)
 showDBError('addNewUser', 1);
$i_userid = (int)$g_db->Insert_ID($srv_settings['table_prefix'].'users', 'userid'); 
 manageUserGroups(array($i_userid), $arrGroupIDs, true);
return $i_userid;
} else {
 return false;
}
}
function updateUser($arrUserData = array()) {
global $g_db, $srv_settings; 
 if(isset($arrUserData['userid'])) {
 $i_userid = $arrUserData['userid'];
unset($arrUserData['userid']);
}
$qry_str = '';
foreach($arrUserData as $name => $value) {
 if(strlen($qry_str) > 0)
 $qry_str .= ', ';
$qry_str .= $name.'='.$g_db->qstr($value, get_magic_quotes_gpc());
}
if(!empty($arrUserData)) {
 if(isset($i_userid)) {
 $qry_str = 'UPDATE '.$srv_settings['table_prefix'].'users SET '.$qry_str.' WHERE userid='.$i_userid;
$g_db->Execute($qry_str);
return true;
} else if(isset($arrUserData['user_name'])) {
 $qry_str = 'UPDATE '.$srv_settings['table_prefix'].'users SET '.$qry_str.' WHERE user_name='.$g_db->qstr($arrUserData['user_name'], get_magic_quotes_gpc());
$g_db->Execute($qry_str);
return true;
}
}
return false;
}
function manageTestPurchase($userid, $testid, $purchase = true) {
global $g_db, $srv_settings;
if($purchase)
 $g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."tests_own (testid, userid) VALUES (".$testid.", ".$userid.")");
else $g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."tests_own WHERE testid=".$testid." AND userid=".$userid);
}
function postToWebScript($url, $vars, $post_method = 'libcurl') {
 define('IGT_CURL_PATH', '/usr/bin/curl');
switch($post_method) {
 case 'curl':
 $info = _postToWebScript_curl(IGT_CURL_PATH, $url, $vars);
break;
case 'libcurl':
 $info = _postToWebScript_libcurl($url, $vars);
break;
case 'fsock':
 default:
 $info = _postToWebScript_fsock($url, $vars);
break;
}
}
function _postToWebScript_post($data = array()) {
 $post = '';
foreach($data as $key => $value)
 $post .= $key .'='. urlencode($value).'&';
$post = substr($post, 0, strlen($post) - 1);
return $post;
}
function _postToWebScript_fsock($url, $vars = array()) {
 $url = parse_url($url);
if ($url['scheme'] == 'https') {
 $url['port'] = '443';
$protocol = 'ssl://';
} else {
 $url['port'] = '80';
$protocol = '';
}
$sess = fsockopen($protocol . $url['host'], $url['port'], $errno, $errstr, 30);
if($sess) {
 fputs($sess, "POST $url[path] HTTP/1.1\r\n");
fputs($sess, "Host: $url[host]\r\n");
fputs($sess, "Content-type: application/x-www-form-urlencoded\r\n");
fputs($sess, 'Content-length: '.strlen(_postToWebScript_post($vars))."\r\n");
fputs($sess, "Connection: close\r\n\r\n");
fputs($sess, _postToWebScript_post($vars) . "\r\n\r\n");
while (!feof($sess)) {
 $info[] = @fgets($sess, 1024);
}
$info = implode(',', $info);
}
fclose($sess);
return $info;
}
function _postToWebScript_libcurl($url, $vars = array()) { 
 $ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, _postToWebScript_post($vars));
 
 ob_start();
curl_exec($ch);
 
 $info = ob_get_contents();
curl_close($ch);
 
 ob_end_clean();
return $info;
}
function _postToWebScript_curl($curl_path, $url, $vars = array()) {
 exec($curl_path.' -d "'._postToWebScript_post($vars)."\" $url", $info);
$info = implode(',', $info);
return $info;
}
function emailNewUserDetails($i_username = '', $i_password = '', $arrUserData = array()) {
global $g_db, $srv_settings;
$i_parameters = $arrUserData;
$i_parameters['username'] = $i_username;
$i_parameters['password'] = $i_password;
$i_parameters['etemplateid'] = SYSTEM_ETEMPLATES_REGISTRATION_INDEX;
$i_parameters['emailto'] = array($arrUserData['email']);
sendEmailTemplate($i_parameters);
}
function getTestAnswerDetails($resultid, $output_format = 'html') {
global $g_db, $lngstr, $srv_settings;
$i_result = array();
$i_result_detailed_1_text = '';
$i_result_detailed_2_text = '';
$i_result_detailed_3_text = '';
$i_result_detailed_4_text = '';
$i_result_detailed_5_text = '';
$i_result_detailed_6_text = ''; 
 $i_result_detailed_1_items = array();
$i_result_detailed_2_items = array();
$i_result_detailed_3_items = array();
$i_result_detailed_4_items = array();
$i_rSet7 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."results_answers, ".$srv_settings['table_prefix']."questions WHERE resultid=".$resultid." AND ".$srv_settings['table_prefix']."results_answers.questionid=".$srv_settings['table_prefix']."questions.questionid ORDER BY result_answerid");
if(!$i_rSet7) { 
 } else { 
 $i_questionno = 0;
while(!$i_rSet7->EOF) {
 $i_questionno++; 
 $i_answers = array();
$i_rSet5 = $g_db->Execute("SELECT answer_text, answer_correct FROM ".$srv_settings['table_prefix']."answers WHERE questionid=".$i_rSet7->fields['questionid']." ORDER BY answerid");
if(!$i_rSet5) { 
 } else {
 $i_answerno = 1;
while(!$i_rSet5->EOF) {
 $i_answers[$i_answerno] = $i_rSet5->fields['answer_text'];
$i_answers_correct[$i_answerno] = $i_rSet5->fields['answer_correct'];
$i_answerno++;
$i_rSet5->MoveNext();
}
$i_rSet5->Close();
} 
 $i_detailed_correct = ($i_rSet7->fields['result_answer_iscorrect'] == 2); 
 $i_result_detailed_3_items[$i_questionno] = $i_questionno.'. '.getTruncatedHTML($i_rSet7->fields['question_text'], 0); 
 $i_result_detailed_1_items[$i_questionno] = $i_result_detailed_3_items[$i_questionno].'<br />';
$i_result_detailed_1_items[$i_questionno] .= $lngstr['email_answer_iscorrect'].($i_rSet7->fields['result_answer_iscorrect']==3 ? $lngstr['label_undefined'] : ($i_rSet7->fields['result_answer_iscorrect']==2 ? $lngstr['label_yes'] : ($i_rSet7->fields['result_answer_iscorrect']==1 ? $lngstr['label_partially'] : $lngstr['label_no']))).'<br />';
$i_result_detailed_1_items[$i_questionno] .= $lngstr['email_answer_points'].$i_rSet7->fields['result_answer_points'].'<br />'; 
 if(!$i_detailed_correct)
 $i_result_detailed_2_items[$i_questionno] = $i_result_detailed_1_items[$i_questionno];
 
 $i_result_detailed_3_items[$i_questionno] = '<tr><td>'.$i_result_detailed_3_items[$i_questionno].'</td></tr>'; 
 for($i=1;$i<$i_answerno;$i++) {
 switch($i_rSet7->fields['question_type']) {
 case QUESTION_TYPE_MULTIPLECHOICE: 
 case QUESTION_TYPE_TRUEFALSE:
 $i_answers_given = (int)$i_rSet7->fields['result_answer_text'];
$i_result_detailed_3_items[$i_questionno] .= '<tr><td><img src="images/button-checkbox-'.($i_answers_correct[$i] ? '2' : ($i==$i_answers_given ? '4' : '0')).'.gif" width=13 height=13> &nbsp; '.$i_answers[$i].'</tr>';
break;
case QUESTION_TYPE_MULTIPLEANSWER: 
 $i_answers_given = explode(QUESTION_TYPE_MULTIPLEANSWER_BREAK, $i_rSet7->fields['result_answer_text']);
$i_result_detailed_3_items[$i_questionno] .= '<tr><td><img src="images/button-checkbox-'.($i_answers_correct[$i] ? '2' : (in_array($i, $i_answers_given) ? '4' : '0')).'.gif" width=13 height=13> &nbsp; '.$i_answers[$i].'</tr>';
break;
case QUESTION_TYPE_FILLINTHEBLANK:
 $i_result_detailed_3_items[$i_questionno] .= '<tr><td>'.nl2br($i_answers[$i]).'</td></tr>';
break;
}
}
if($i_rSet7->fields['question_type'] == QUESTION_TYPE_ESSAY)
 $i_result_detailed_3_items[$i_questionno] .= '<tr><td>'.nl2br($i_rSet7->fields['result_answer_text']).'</td></tr>'; 
 $i_result_detailed_3_items[$i_questionno] .= '<tr><td>'.$lngstr['email_answer_points'].$i_rSet7->fields['result_answer_points'].'</td></tr>';
$i_result_detailed_3_items[$i_questionno] .= '<tr><td><img src="images/1x1.gif" width=1 height=7></td></tr>'; 
 if(!$i_detailed_correct)
 $i_result_detailed_4_items[$i_questionno] = $i_result_detailed_3_items[$i_questionno]; 
 $i_rSet7->MoveNext();
}
$i_rSet7->Close();
$i_result_detailed_1_text = implode('<br />', $i_result_detailed_1_items);
$i_result_detailed_2_text = implode('<br />', $i_result_detailed_2_items);
$i_result_detailed_3_text = '<table cellpadding=0 cellspacing=0 border=0 width="100%">'.implode("\n", $i_result_detailed_3_items).'</table>';
$i_result_detailed_4_text = '<table cellpadding=0 cellspacing=0 border=0 width="100%">'.implode("\n", $i_result_detailed_4_items).'</table>';
}
$i_result['result_detailed_1'] = $i_result_detailed_1_text;
$i_result['result_detailed_2'] = $i_result_detailed_2_text;
$i_result['result_detailed_3'] = $i_result_detailed_3_text;
$i_result['result_detailed_4'] = $i_result_detailed_4_text;
$i_result['result_detailed_5'] = $i_result_detailed_5_text;
$i_result['result_detailed_6'] = $i_result_detailed_6_text;
return $i_result;
}
  
function processTemplate($i_parameters = array()) {
global $g_db, $srv_settings, $DOCUMENT_PAGES;
$arrResult = array();
$i_template_body = isset($i_parameters['template_body']) ? $i_parameters['template_body'] : '';
$i_content_type = isset($i_parameters['content_type']) ? $i_parameters['content_type'] : '';
$i_userid = isset($i_parameters['userid']) ? $i_parameters['userid'] : '';
$i_username = isset($i_parameters['username']) ? $i_parameters['username'] : '';
$i_password = isset($i_parameters['password']) ? $i_parameters['password'] : '';
$i_checkword = isset($i_parameters['checkword']) ? $i_parameters['checkword'] : '';
$i_email = isset($i_parameters['email']) ? $i_parameters['email'] : '';
$i_title = isset($i_parameters['title']) ? $i_parameters['title'] : '';
$i_firstname = isset($i_parameters['firstname']) ? $i_parameters['firstname'] : '';
$i_lastname = isset($i_parameters['lastname']) ? $i_parameters['lastname'] : '';
$i_middlename = isset($i_parameters['middlename']) ? $i_parameters['middlename'] : '';
$i_address = isset($i_parameters['address']) ? $i_parameters['address'] : '';
$i_city = isset($i_parameters['city']) ? $i_parameters['city'] : '';
$i_state = isset($i_parameters['state']) ? $i_parameters['state'] : '';
$i_zip = isset($i_parameters['zip']) ? $i_parameters['zip'] : '';
$i_country = isset($i_parameters['country']) ? $i_parameters['country'] : '';
$i_phone = isset($i_parameters['phone']) ? $i_parameters['phone'] : '';
$i_fax = isset($i_parameters['fax']) ? $i_parameters['fax'] : '';
$i_mobile = isset($i_parameters['mobile']) ? $i_parameters['mobile'] : '';
$i_pager = isset($i_parameters['pager']) ? $i_parameters['pager'] : '';
$i_ipphone = isset($i_parameters['ipphone']) ? $i_parameters['ipphone'] : '';
$i_webpage = isset($i_parameters['webpage']) ? $i_parameters['webpage'] : '';
$i_icq = isset($i_parameters['icq']) ? $i_parameters['icq'] : '';
$i_msn = isset($i_parameters['msn']) ? $i_parameters['msn'] : '';
$i_aol = isset($i_parameters['aol']) ? $i_parameters['aol'] : '';
$i_gender = isset($i_parameters['gender']) ? $i_parameters['gender'] : '';
$i_birthday = isset($i_parameters['birthday']) ? $i_parameters['birthday'] : '';
$i_husbandwife = isset($i_parameters['husbandwife']) ? $i_parameters['husbandwife'] : '';
$i_children = isset($i_parameters['children']) ? $i_parameters['children'] : '';
$i_trainer = isset($i_parameters['trainer']) ? $i_parameters['trainer'] : '';
$i_photo = isset($i_parameters['photo']) ? $i_parameters['photo'] : '';
$i_company = isset($i_parameters['company']) ? $i_parameters['company'] : '';
$i_cposition = isset($i_parameters['cposition']) ? $i_parameters['cposition'] : '';
$i_department = isset($i_parameters['department']) ? $i_parameters['department'] : '';
$i_coffice = isset($i_parameters['coffice']) ? $i_parameters['coffice'] : '';
$i_caddress = isset($i_parameters['caddress']) ? $i_parameters['caddress'] : '';
$i_ccity = isset($i_parameters['ccity']) ? $i_parameters['ccity'] : '';
$i_cstate = isset($i_parameters['cstate']) ? $i_parameters['cstate'] : '';
$i_czip = isset($i_parameters['czip']) ? $i_parameters['czip'] : '';
$i_ccountry = isset($i_parameters['ccountry']) ? $i_parameters['ccountry'] : '';
$i_cphone = isset($i_parameters['cphone']) ? $i_parameters['cphone'] : '';
$i_cfax = isset($i_parameters['cfax']) ? $i_parameters['cfax'] : '';
$i_cmobile = isset($i_parameters['cmobile']) ? $i_parameters['cmobile'] : '';
$i_cpager = isset($i_parameters['cpager']) ? $i_parameters['cpager'] : '';
$i_cipphone = isset($i_parameters['cipphone']) ? $i_parameters['cipphone'] : '';
$i_cwebpage = isset($i_parameters['cwebpage']) ? $i_parameters['cwebpage'] : '';
$i_cphoto = isset($i_parameters['cphoto']) ? $i_parameters['cphoto'] : '';
$i_ufield1 = isset($i_parameters['ufield1']) ? $i_parameters['ufield1'] : '';
$i_ufield2 = isset($i_parameters['ufield2']) ? $i_parameters['ufield2'] : '';
$i_ufield3 = isset($i_parameters['ufield3']) ? $i_parameters['ufield3'] : '';
$i_ufield4 = isset($i_parameters['ufield4']) ? $i_parameters['ufield4'] : '';
$i_ufield5 = isset($i_parameters['ufield5']) ? $i_parameters['ufield5'] : '';
$i_ufield6 = isset($i_parameters['ufield6']) ? $i_parameters['ufield6'] : '';
$i_ufield7 = isset($i_parameters['ufield7']) ? $i_parameters['ufield7'] : '';
$i_ufield8 = isset($i_parameters['ufield8']) ? $i_parameters['ufield8'] : '';
$i_ufield9 = isset($i_parameters['ufield9']) ? $i_parameters['ufield9'] : '';
$i_ufield10 = isset($i_parameters['ufield10']) ? $i_parameters['ufield10'] : '';
$i_test_name = isset($i_parameters['test_name']) ? $i_parameters['test_name'] : '';
$i_result_id = isset($i_parameters['result_id']) ? $i_parameters['result_id'] : '';
$i_result_date = isset($i_parameters['result_date']) ? $i_parameters['result_date'] : '';
$i_result_time_spent = isset($i_parameters['result_time_spent']) ? $i_parameters['result_time_spent'] : '';
$i_result_time_exceeded = isset($i_parameters['result_time_exceeded']) ? $i_parameters['result_time_exceeded'] : '';
$i_result_points_scored = isset($i_parameters['result_points_scored']) ? $i_parameters['result_points_scored'] : '';
$i_result_points_possible = isset($i_parameters['result_points_possible']) ? $i_parameters['result_points_possible'] : '';
$i_result_percents = isset($i_parameters['result_percents']) ? $i_parameters['result_percents'] : '';
$i_result_grade = isset($i_parameters['result_grade']) ? $i_parameters['result_grade'] : '';
$i_result_grade_feedback = isset($i_parameters['result_grade_feedback']) ? $i_parameters['result_grade_feedback'] : '';
$i_result_subjects = isset($i_parameters['result_subjects']) ? $i_parameters['result_subjects'] : array();
$i_result_detailed_1 = isset($i_parameters['result_detailed_1']) ? $i_parameters['result_detailed_1'] : '';
$i_result_detailed_2 = isset($i_parameters['result_detailed_2']) ? $i_parameters['result_detailed_2'] : '';
$i_result_detailed_3 = isset($i_parameters['result_detailed_3']) ? $i_parameters['result_detailed_3'] : '';
$i_result_detailed_4 = isset($i_parameters['result_detailed_4']) ? $i_parameters['result_detailed_4'] : '';
$i_result_detailed_5 = isset($i_parameters['result_detailed_5']) ? $i_parameters['result_detailed_5'] : '';
$i_result_detailed_6 = isset($i_parameters['result_detailed_6']) ? $i_parameters['result_detailed_6'] : '';
$i_custom_tag_1 = isset($i_parameters['custom_tag_1']) ? $i_parameters['custom_tag_1'] : '';
$i_custom_tag_2 = isset($i_parameters['custom_tag_2']) ? $i_parameters['custom_tag_2'] : '';
$i_custom_tag_3 = isset($i_parameters['custom_tag_3']) ? $i_parameters['custom_tag_3'] : '';
$i_custom_tag_4 = isset($i_parameters['custom_tag_4']) ? $i_parameters['custom_tag_4'] : '';
$i_custom_tag_5 = isset($i_parameters['custom_tag_5']) ? $i_parameters['custom_tag_5'] : '';
$i_result_subjects_detailed = '';
if(strpos($i_template_body, ETEMPLATE_TAG_RESULT_SUBJECTS_DETAILED) !== false) {
 foreach($i_result_subjects as $nSubjectID=>$arrSubjectInfo) {
 $strSubjectName = getRecordItem($srv_settings['table_prefix'].'subjects', 'subject_name', 'subjectid='.$nSubjectID);
$rScore = ($arrSubjectInfo['total_points'] != 0) ? ($arrSubjectInfo['got_points'] / $arrSubjectInfo['total_points']) * 100 : 100;
$i_result_subjects_detailed .= $strSubjectName.' - '.$arrSubjectInfo['got_points'].'/'.$arrSubjectInfo['total_points'].', '.sprintf("%.1f", $rScore).'%<br />';
}
}
 
 $nPos1 = 0;
$nPos2 = 0;
while(($nPos1 !== false) && ($nPos2 !== false)) {
 $nPos1 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_NAME);
$nPos2 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_NAME_CLOSE);
if(($nPos1 !== false) && ($nPos2 !== false)) {
 $nStartPos = $nPos1 + strlen(IGT_TAG_RESULT_SUBJECT_NAME);
$nSubjectID = (int)trim(substr($i_template_body, $nStartPos, $nPos2 - $nStartPos));
if($nSubjectID > 0) {
 $strSubjectName = getRecordItem($srv_settings['table_prefix'].'subjects', 'subject_name', 'subjectid='.$nSubjectID);
$i_template_body = substr_replace($i_template_body, $strSubjectName, $nPos1, $nPos2 + strlen(IGT_TAG_RESULT_SUBJECT_NAME_CLOSE) - $nPos1);
}
}
}
$nPos1 = 0;
$nPos2 = 0;
while(($nPos1 !== false) && ($nPos2 !== false)) {
 $nPos1 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_POINTS_SCORED);
$nPos2 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_POINTS_SCORED_CLOSE);
if(($nPos1 !== false) && ($nPos2 !== false)) {
 $nStartPos = $nPos1 + strlen(IGT_TAG_RESULT_SUBJECT_POINTS_SCORED);
$nSubjectID = (int)trim(substr($i_template_body, $nStartPos, $nPos2 - $nStartPos));
if($nSubjectID > 0) {
 $i_template_body = substr_replace($i_template_body, $i_result_subjects[$nSubjectID]['got_points'], $nPos1, $nPos2 + strlen(IGT_TAG_RESULT_SUBJECT_POINTS_SCORED_CLOSE) - $nPos1);
}
}
}
$nPos1 = 0;
$nPos2 = 0;
while(($nPos1 !== false) && ($nPos2 !== false)) {
 $nPos1 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_POINTS_POSSIBLE);
$nPos2 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_POINTS_POSSIBLE_CLOSE);
if(($nPos1 !== false) && ($nPos2 !== false)) {
 $nStartPos = $nPos1 + strlen(IGT_TAG_RESULT_SUBJECT_POINTS_POSSIBLE);
$nSubjectID = (int)trim(substr($i_template_body, $nStartPos, $nPos2 - $nStartPos));
if($nSubjectID > 0) {
 $i_template_body = substr_replace($i_template_body, $i_result_subjects[$nSubjectID]['total_points'], $nPos1, $nPos2 + strlen(IGT_TAG_RESULT_SUBJECT_POINTS_POSSIBLE_CLOSE) - $nPos1);
}
}
}
$nPos1 = 0;
$nPos2 = 0;
while(($nPos1 !== false) && ($nPos2 !== false)) {
 $nPos1 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_SCORE);
$nPos2 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_SCORE_CLOSE);
if(($nPos1 !== false) && ($nPos2 !== false)) {
 $nStartPos = $nPos1 + strlen(IGT_TAG_RESULT_SUBJECT_SCORE);
$nSubjectID = (int)trim(substr($i_template_body, $nStartPos, $nPos2 - $nStartPos));
if($nSubjectID > 0) {
 $rScore = ($i_result_subjects[$nSubjectID]['total_points'] != 0) ? ($i_result_subjects[$nSubjectID]['got_points'] / $i_result_subjects[$nSubjectID]['total_points']) * 100 : 100;
$i_template_body = substr_replace($i_template_body, sprintf("%.1f", $rScore), $nPos1, $nPos2 + strlen(IGT_TAG_RESULT_SUBJECT_SCORE_CLOSE) - $nPos1);
}
}
}
$nPos1 = 0;
$nPos2 = 0;
while(($nPos1 !== false) && ($nPos2 !== false)) {
 $nPos1 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_GRADE);
$nPos2 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_GRADE_CLOSE);
if(($nPos1 !== false) && ($nPos2 !== false)) {
 $nStartPos = $nPos1 + strlen(IGT_TAG_RESULT_SUBJECT_GRADE);
$arrValues = explode(SYSTEM_ARRAY_ITEM_SEPARATOR, trim(substr($i_template_body, $nStartPos, $nPos2 - $nStartPos)));
$nSubjectID = (int)trim($arrValues[0]);
$nGScaleID = (int)trim($arrValues[1]);
if($nSubjectID > 0) {
 $rScore = ($i_result_subjects[$nSubjectID]['total_points'] != 0) ? ($i_result_subjects[$nSubjectID]['got_points'] / $i_result_subjects[$nSubjectID]['total_points']) * 100 : 100;
$arrGrade = calcResultGrade($nGScaleID, $rScore);
$i_template_body = substr_replace($i_template_body, $arrGrade['name'], $nPos1, $nPos2 + strlen(IGT_TAG_RESULT_SUBJECT_GRADE_CLOSE) - $nPos1);
}
}
}
$nPos1 = 0;
$nPos2 = 0;
while(($nPos1 !== false) && ($nPos2 !== false)) {
 $nPos1 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_GRADE_FEEDBACK);
$nPos2 = strpos($i_template_body, IGT_TAG_RESULT_SUBJECT_GRADE_FEEDBACK_CLOSE);
if(($nPos1 !== false) && ($nPos2 !== false)) {
 $nStartPos = $nPos1 + strlen(IGT_TAG_RESULT_SUBJECT_GRADE_FEEDBACK);
$arrValues = explode(SYSTEM_ARRAY_ITEM_SEPARATOR, trim(substr($i_template_body, $nStartPos, $nPos2 - $nStartPos)));
$nSubjectID = (int)trim($arrValues[0]);
$nGScaleID = (int)trim($arrValues[1]);
if($nSubjectID > 0) {
 $rScore = ($i_result_subjects[$nSubjectID]['total_points'] != 0) ? ($i_result_subjects[$nSubjectID]['got_points'] / $i_result_subjects[$nSubjectID]['total_points']) * 100 : 100;
$arrGrade = calcResultGrade($nGScaleID, $rScore);
$i_template_body = substr_replace($i_template_body, $arrGrade['feedback'], $nPos1, $nPos2 + strlen(IGT_TAG_RESULT_SUBJECT_GRADE_FEEDBACK_CLOSE) - $nPos1);
}
}
} 
 
 if($i_content_type=='text/plain') {
 $i_result_grade_feedback = strip_tags(convertTextAreaHTML(false, str_replace("\r", '', str_replace("\n", '', $i_result_grade_feedback))));
$i_result_subjects_detailed = strip_tags(convertTextAreaHTML(false, str_replace("\r", '', str_replace("\n", '', $i_result_subjects_detailed))));
}
if($i_template_body) { 
 $i_template_body = str_replace(ETEMPLATE_TAG_RESULT_GRADE_FEEDBACK, $i_result_grade_feedback, $i_template_body);
 
 $i_template_body = str_replace(ETEMPLATE_TAG_IGIVETEST_URL, $srv_settings['url_root_full'], $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USERID, $i_userid, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USERNAME, $i_username, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_PASSWORD, $i_password, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CHECKWORD, $i_checkword, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_TITLE, $i_title, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_FIRST_NAME, $i_firstname, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_LAST_NAME, $i_lastname, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_MIDDLE_NAME, $i_middlename, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_EMAIL, $i_email, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_ADDRESS, $i_address, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CITY, $i_city, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_STATE, $i_state, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_ZIP, $i_zip, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_COUNTRY, $i_country, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_PHONE, $i_phone, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_FAX, $i_fax, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_MOBILE, $i_mobile, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_PAGER, $i_pager, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_IPPHONE, $i_ipphone, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_WEBPAGE, $i_webpage, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_ICQ, $i_icq, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_MSN, $i_msn, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_AOL, $i_aol, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_GENDER, $i_gender, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_BIRTHDAY, $i_birthday, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_HUSBANDWIFE, $i_husbandwife, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CHILDREN, $i_children, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_TRAINER, $i_trainer, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_PHOTO, $i_photo, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_COMPANY, $i_company, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CPOSITION, $i_cposition, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_DEPARTMENT, $i_department, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_COFFICE, $i_coffice, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CADDRESS, $i_caddress, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CCITY, $i_ccity, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CSTATE, $i_cstate, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CZIP, $i_czip, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CCOUNTRY, $i_ccountry, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CPHONE, $i_cphone, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CFAX, $i_cfax, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CMOBILE, $i_cmobile, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CPAGER, $i_cpager, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CIPPHONE, $i_cipphone, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CWEBPAGE, $i_cwebpage, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_CPHOTO, $i_cphoto, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD1, $i_ufield1, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD2, $i_ufield2, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD3, $i_ufield3, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD4, $i_ufield4, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD5, $i_ufield5, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD6, $i_ufield6, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD7, $i_ufield7, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD8, $i_ufield8, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD9, $i_ufield9, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_USER_USERFIELD10, $i_ufield10, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_TEST_NAME, $i_test_name, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_ID, $i_result_id, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_DATE, $i_result_date, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_TIME_SPENT, $i_result_time_spent, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_TIME_EXCEEDED, $i_result_time_exceeded, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_POINTS_SCORED, $i_result_points_scored, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_POINTS_POSSIBLE, $i_result_points_possible, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_PERCENTS, $i_result_percents, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_GRADE, $i_result_grade, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_SUBJECTS_DETAILED, $i_result_subjects_detailed, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_DETAILED_1, $i_result_detailed_1, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_DETAILED_2, $i_result_detailed_2, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_DETAILED_3, $i_result_detailed_3, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_DETAILED_4, $i_result_detailed_4, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_DETAILED_5, $i_result_detailed_5, $i_template_body);
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_DETAILED_6, $i_result_detailed_6, $i_template_body);
$i_template_body = str_replace(IGT_TAG_CUSTOM_1, $i_custom_tag_1, $i_template_body);
$i_template_body = str_replace(IGT_TAG_CUSTOM_2, $i_custom_tag_2, $i_template_body);
$i_template_body = str_replace(IGT_TAG_CUSTOM_3, $i_custom_tag_3, $i_template_body);
$i_template_body = str_replace(IGT_TAG_CUSTOM_4, $i_custom_tag_4, $i_template_body);
$i_template_body = str_replace(IGT_TAG_CUSTOM_5, $i_custom_tag_5, $i_template_body);
 
 $arrResult['attachments'] = array();
if(strpos($i_template_body, ETEMPLATE_TAG_RESULT_ATTACHMENT_REPORT_PDF) !== false) {
 if(isset($i_parameters['result_id'])) {
 include($DOCUMENT_PAGES.'getfile-1.inc.php');
$i_pdf = getAdvancedReportPDF($i_parameters['result_id']);
if(!empty($i_pdf))
 $i_pdfreport_binary = $i_pdf->Output('report.pdf', 'S');
}
if(!empty($i_pdfreport_binary)) {
 array_push($arrResult['attachments'], array('format' => 'string', 'content' => $i_pdfreport_binary, 'filename' => 'report.pdf', 'encoding' => 'base64', 'type' => 'application/pdf'));
}
$i_template_body = str_replace(ETEMPLATE_TAG_RESULT_ATTACHMENT_REPORT_PDF, '', $i_template_body);
}
}
$arrResult['body'] = $i_template_body;
return $arrResult;
}
function getReportTemplate($i_parameters = array()) {
global $g_db, $srv_settings;
$i_rtemplateid = isset($i_parameters['rtemplateid']) ? $i_parameters['rtemplateid'] : 0;
$i_template_body = '';
$i_isok = true; 
 $i_isok = $i_isok && ($i_rSet3 = $g_db->SelectLimit("SELECT rtemplate_body FROM ".$srv_settings['table_prefix']."rtemplates WHERE rtemplateid=".$i_rtemplateid, 1));
if($i_isok)
 $i_isok = $i_isok && (!$i_rSet3->EOF); 
 if($i_isok) {
 $i_template_body = $i_rSet3->fields['rtemplate_body'];
if($i_template_body) {
 $i_parameters['template_body'] = $i_template_body;
$i_template = processTemplate($i_parameters);
$i_template_body = $i_template['body'];
}
}
return $i_template_body;
}
function sendEmailTemplate($i_parameters = array()) {
global $g_db, $DOCUMENT_ROOT, $DOCUMENT_PAGES, $DOCUMENT_PHPMAILER, $srv_settings;
$i_etemplateid = isset($i_parameters['etemplateid']) ? $i_parameters['etemplateid'] : 0;
$i_emailto = isset($i_parameters['emailto']) ? $i_parameters['emailto'] : NULL;
$i_isok = true; 
 $i_isok = $i_isok && ($i_rSet3 = $g_db->SelectLimit("SELECT etemplate_from, etemplate_subject, etemplate_body FROM ".$srv_settings['table_prefix']."etemplates WHERE etemplateid=".$i_etemplateid, 1));
if($i_isok)
 $i_isok = $i_isok && (!$i_rSet3->EOF); 
 if($i_isok) {
 $i_email_body = $i_rSet3->fields['etemplate_body'];
if($i_email_body) {
 $i_parameters['content_type'] = 'text/plain'; 
 $i_parameters['template_body'] = $i_email_body;
$arrTemplateEmail = processTemplate($i_parameters);
$i_email_body = $arrTemplateEmail['body']; 
 $i_parameters['template_body'] = $i_rSet3->fields['etemplate_subject'];
$arrTemplateEmailSubject = processTemplate($i_parameters); 
 if(!is_array($i_emailto))
 $i_emailto = array($i_rSet3->fields['etemplate_from']); 
 include_once($DOCUMENT_PHPMAILER.'class.phpmailer.php');
$mail = new PHPMailer();
$mail->PluginDir = $DOCUMENT_PHPMAILER;      
 $mail->FromName = '';
$mail->From = $i_rSet3->fields['etemplate_from'];
$mail->AddReplyTo($i_rSet3->fields['etemplate_from']);
$mail->IsHTML(true);
  
  
 $mail->Subject = $arrTemplateEmailSubject['body'];
$mail->Body = nl2br($i_email_body);
$mail->AltBody = $i_email_body; 
 if(!empty($arrTemplateEmail['attachments'])) {
 foreach($arrTemplateEmail['attachments'] as $arrAttachment) {
 switch($arrAttachment['format']) {
 case 'string':
 $mail->AddStringAttachment($arrAttachment['content'], $arrAttachment['filename'], $arrAttachment['encoding'], $arrAttachment['type']);
break;
}
}
} 
 foreach($i_emailto as $i_emailto_item) {
 if(!empty($i_emailto_item)) {
 $mail->AddAddress($i_emailto_item);
$mail->Send();
$mail->ClearAddresses();
}
}
}
}
}
function manageUserGroups($i_userids = array(), $arrGroupIDs = array(), $i_addtogroup = true) {
global $g_db, $G_SESSION, $srv_settings; 
 foreach($i_userids as $i_userid) {
 foreach($arrGroupIDs as $i_groupid) {
 if($i_addtogroup) {
 $g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."groups_users (groupid, userid) VALUES (".$i_groupid.", ".$i_userid.")");
} else {
 $g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."groups_users WHERE groupid=".$i_groupid." AND userid=".$i_userid);
}
}
}
}
function deleteUserByID($i_userid = 0) {
global $g_db, $srv_settings;
if($i_userid > 0)
 $g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."users WHERE userid=".$i_userid);
}
function deleteUserByUserName($i_username = '') {
global $g_db, $srv_settings;
$i_username = $g_db->qstr($i_username, get_magic_quotes_gpc());
$g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."users WHERE user_name=".$i_username);
}
function activateUser($i_parameters = array()) {
 $i_activate = isset($i_parameters['activate']) ? $i_parameters['activate'] : true;
if(isset($i_parameters['userid'])) {
 activateUserByID($i_parameters['userid'], $i_activate);
} else if(isset($i_parameters['username'])) {
 activateUserByUserName($i_parameters['username'], $i_activate);
}
}
function activateUserByID($i_userid = 0, $i_activate = true) {
global $g_db, $srv_settings;
if($i_userid > 0)
 $g_db->Execute("UPDATE ".$srv_settings['table_prefix']."users SET user_enabled=".($i_activate ? 1 : 0)." WHERE userid=".$i_userid);
}
function activateUserByUserName($i_username = '', $i_activate = true) {
global $g_db, $srv_settings;
$i_username = $g_db->qstr($i_username, get_magic_quotes_gpc());
$g_db->Execute("UPDATE ".$srv_settings['table_prefix']."users SET user_enabled=".($i_activate ? 1 : 0)." WHERE user_name=".$i_username);
}
function signinUser($i_username = '', $i_password = '', $i_isguest = false) {
global $g_db, $G_SESSION, $srv_settings; 
 if(function_exists('eventOnBeforeUserSignIn')) {
 eventOnBeforeUserSignIn(array(
 'user_name' => $i_username,
 'user_password' => $i_password,
 ));
}
$i_username = $g_db->qstr($i_username, get_magic_quotes_gpc());
if(get_magic_quotes_gpc())
 $i_password = stripslashes($i_password);
$i_pass_hash = md5($i_password);
$i_pass_hash = $g_db->qstr($i_pass_hash, 0);
$i_time = time(); 
 if($i_isguest) {
 $sql_str = "SELECT * FROM ".$srv_settings['table_prefix']."users WHERE userid=".SYSTEM_GROUP_GUEST_USERID." AND user_enabled=1";
} else {
 $sql_str = "SELECT * FROM ".$srv_settings['table_prefix']."users WHERE user_name=".$i_username." AND user_passhash=".$i_pass_hash." AND user_enabled=1 AND (user_expiredate=0 OR user_expiredate>".$i_time.")";
}
$i_rSet1 = $g_db->SelectLimit($sql_str, 1);
if(!$i_rSet1) { 
 return false;
} else {
 if(!$i_rSet1->EOF) { 
 $G_SESSION['userid'] = $i_rSet1->fields['userid'];
$G_SESSION['username'] = $i_rSet1->fields['user_name'];
$G_SESSION['email'] = $i_rSet1->fields['user_email'];
$G_SESSION['title'] = $i_rSet1->fields['user_title'];
$G_SESSION['firstname'] = $i_rSet1->fields['user_firstname'];
$G_SESSION['lastname'] = $i_rSet1->fields['user_lastname'];
$G_SESSION['middlename'] = $i_rSet1->fields['user_middlename'];
$i_rSet1->Close(); 
 $G_SESSION['access_tests'] = 0;
$G_SESSION['access_testmanager'] = 0;
$G_SESSION['access_gradingsystems'] = 0;
$G_SESSION['access_emailtemplates'] = 0;
$G_SESSION['access_reporttemplates'] = 0;
$G_SESSION['access_reportsmanager'] = 0;
$G_SESSION['access_questionbank'] = 0;
$G_SESSION['access_subjects'] = 0;
$G_SESSION['access_groups'] = 0;
$G_SESSION['access_users'] = 0;
$G_SESSION['access_visitors'] = 0;
$G_SESSION['access_config'] = 0;
$i_rSet2 = $g_db->Execute("SELECT MAX(".$srv_settings['table_prefix']."groups.access_tests) as access_tests, MAX(".$srv_settings['table_prefix']."groups.access_testmanager) as access_testmanager, MAX(".$srv_settings['table_prefix']."groups.access_gradingsystems) as access_gradingsystems, MAX(".$srv_settings['table_prefix']."groups.access_emailtemplates) as access_emailtemplates, MAX(".$srv_settings['table_prefix']."groups.access_reporttemplates) as access_reporttemplates, MAX(".$srv_settings['table_prefix']."groups.access_reportsmanager) as access_reportsmanager, MAX(".$srv_settings['table_prefix']."groups.access_questionbank) as access_questionbank, MAX(".$srv_settings['table_prefix']."groups.access_subjects) as access_subjects, MAX(".$srv_settings['table_prefix']."groups.access_groups) as access_groups, MAX(".$srv_settings['table_prefix']."groups.access_users) as access_users, MAX(".$srv_settings['table_prefix']."groups.access_visitors) as access_visitors, MAX(".$srv_settings['table_prefix']."groups.access_config) as access_config FROM ".$srv_settings['table_prefix']."groups_users, ".$srv_settings['table_prefix']."groups WHERE ".$srv_settings['table_prefix']."groups_users.userid=".$G_SESSION['userid']." AND ".$srv_settings['table_prefix']."groups_users.groupid=".$srv_settings['table_prefix']."groups.groupid");
if($i_rSet2) {
 if(!$i_rSet2->EOF) {
 $G_SESSION['access_tests'] = (int)$i_rSet2->fields['access_tests'];
$G_SESSION['access_testmanager'] = (int)$i_rSet2->fields['access_testmanager'];
$G_SESSION['access_gradingsystems'] = (int)$i_rSet2->fields['access_gradingsystems'];
$G_SESSION['access_emailtemplates'] = (int)$i_rSet2->fields['access_emailtemplates'];
$G_SESSION['access_reporttemplates'] = (int)$i_rSet2->fields['access_reporttemplates'];
$G_SESSION['access_reportsmanager'] = (int)$i_rSet2->fields['access_reportsmanager'];
$G_SESSION['access_questionbank'] = (int)$i_rSet2->fields['access_questionbank'];
$G_SESSION['access_subjects'] = (int)$i_rSet2->fields['access_subjects'];
$G_SESSION['access_groups'] = (int)$i_rSet2->fields['access_groups'];
$G_SESSION['access_users'] = (int)$i_rSet2->fields['access_users'];
$G_SESSION['access_visitors'] = (int)$i_rSet2->fields['access_visitors'];
$G_SESSION['access_config'] = (int)$i_rSet2->fields['access_config'];
}
$i_rSet2->Close();
} 
 $g_db->Execute("UPDATE ".$srv_settings['table_prefix']."users SET user_logindate=$i_time WHERE userid=".$G_SESSION['userid']); 
 if(isset($G_SESSION['visitorid']))
 $g_db->Execute("UPDATE ".$srv_settings['table_prefix']."visitors SET userid=".$G_SESSION['userid']." WHERE visitorid=".$G_SESSION['visitorid']); 
 $G_SESSION['first_time_sign_in'] = ($i_rSet1->fields['user_logindate'] <= 0);
return true;
} else {
 return false;
}
}
}
function signoutUser() {
global $G_SESSION; 
 unset($G_SESSION['userid']);
unset($G_SESSION['username']);
unset($G_SESSION['email']);
unset($G_SESSION['title']);
unset($G_SESSION['firstname']);
unset($G_SESSION['lastname']);
unset($G_SESSION['middlename']); 
 unset($G_SESSION['access_tests']);
unset($G_SESSION['access_testmanager']);
unset($G_SESSION['access_gradingsystems']);
unset($G_SESSION['access_emailtemplates']);
unset($G_SESSION['access_reporttemplates']);
unset($G_SESSION['access_reportsmanager']);
unset($G_SESSION['access_questionbank']);
unset($G_SESSION['access_subjects']);
unset($G_SESSION['access_groups']);
unset($G_SESSION['access_users']);
unset($G_SESSION['access_visitors']);
unset($G_SESSION['access_config']); 
 unset($G_SESSION['test_code']); 
 session_destroy();
}
function getTestAttemptsUsed($testid, $userid) {
global $g_db, $srv_settings; 
 $i_result = 0;
$i_rSet1 = $g_db->Execute("SELECT test_attempt_count FROM ".$srv_settings['table_prefix']."tests_attempts WHERE testid=".$testid." AND userid=".$userid);
if(!$i_rSet1) {
 showDBError(__FILE__, 1);
} else {
 if(!$i_rSet1->EOF)
 $i_result = $i_rSet1->fields['test_attempt_count'];
$i_rSet1->Close();
}
return $i_result;
}
function checkTestAnswer($i_questionno, $i_questionid, $i_answers) {
global $g_db, $G_SESSION, $lngstr, $srv_settings; 
 $i_rSet1 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."questions WHERE questionid=".$i_questionid);
if(!$i_rSet1) {
 showDBError('checkTestAnswer', 1);
} else {
 if(!$i_rSet1->EOF) {
 $i_subjectid = $i_rSet1->fields['subjectid'];
$i_questiontype = $i_rSet1->fields['question_type'];
$i_question_type2 = $i_rSet1->fields['question_type2'];
$i_questionpoints = $i_rSet1->fields['question_points'];
} else {
 die(sprintf($lngstr['err_no_question_n_in_db'], $i_questionno));
}
$i_rSet1->Close();
} 
 if($G_SESSION['yt_state'] == TEST_STATE_QREVIEW) {
 $arrAnswerOld = getRecordItems($srv_settings['table_prefix'].'results_answers', array('result_answer_points', 'result_answer_iscorrect', 'result_answer_timespent'), 'result_answerid='.$i_questionno.' AND resultid='.$G_SESSION['resultid'].' AND questionid='.$i_questionid);
$arrAnswerOld['total_answers'] = 1;
$arrAnswerOld['question_points'] = $i_questionpoints;
} else {
 $arrAnswerOld = array(
 'result_answer_points' => 0,
 'result_answer_iscorrect' => 0,
 'result_answer_timespent' => 0,
 'total_answers' => 0,
 'question_points' => 0,
 );
} 
 $i_answer_correct = 0;
$i_answer_points = 0;
$i_answer_text = '';
switch($i_questiontype) {
 case QUESTION_TYPE_ESSAY: 
 $i_answer_text = trim($i_answers[0]);
$i_answer_points = 0;
$i_answer_correct = 3;
if($G_SESSION['yt_state'] != TEST_STATE_QREVIEW)
 $G_SESSION['yt_points_pending'] += $i_questionpoints;
break;
case QUESTION_TYPE_FILLINTHEBLANK:
 $i_answer_text = trim($i_answers[0]);
$i_rSet2 = $g_db->Execute("SELECT answer_text, isregexp, iscasesensitive FROM ".$srv_settings['table_prefix']."answers WHERE questionid=".$i_questionid." AND answerid=1");
if(!$i_rSet2) {
 showDBError('checkTestAnswer', 4);
} else {
 if(!$i_rSet2->EOF) {
 if(($i_rSet2->fields['answer_text'] == $i_answer_text) || (!$i_rSet2->fields['iscasesensitive'] && (strtolower($i_rSet2->fields['answer_text']) == strtolower($i_answer_text)))) {
 $i_answer_correct = 2;
$i_answer_points = $i_questionpoints;
}
} else {
 die(sprintf($lngstr['err_no_answers_in_question'], $i_questionid));
}
$i_rSet2->Close();
}
break;
case QUESTION_TYPE_MULTIPLECHOICE:
 case QUESTION_TYPE_TRUEFALSE:
 $i_answerno = $G_SESSION['yt_answers'][$i_questionno][(int)$i_answers - 1];
$i_answer_text = $i_answerno;
$i_rSet2 = $g_db->Execute("SELECT answer_correct, answer_percents FROM ".$srv_settings['table_prefix']."answers WHERE questionid=".$i_questionid." AND answerid=".$i_answerno);
if(!$i_rSet2) {
 showDBError('checkTestAnswer', 2);
} else {
 if(!$i_rSet2->EOF) {
 $i_answer_correct = $i_rSet2->fields['answer_correct'] > 0 ? 2 : 0;
$i_answer_points = ($i_rSet2->fields['answer_percents'] == 100) ? $i_questionpoints : round($i_questionpoints * $i_rSet2->fields['answer_percents'] / 100, 5);
} else {
 die(sprintf($lngstr['err_no_answers_in_question'], $i_questionid));
}
$i_rSet2->Close();
}
break;
case QUESTION_TYPE_MULTIPLEANSWER: 
 $i_answer_set_count = 0;
foreach($i_answers as $val) {
 $i_answerno[] = $G_SESSION['yt_answers'][$i_questionno][(int)$val-1];
$i_answer_set_count++;
}
sort($i_answerno, SORT_NUMERIC);  
 $i_answer_set_correct = 0;
$i_answer_set_correct_count = 0;
$i_answer_set_percents = 0;
$i_answer_set_incorrect = 0;
$i_rSet2 = $g_db->Execute("SELECT answerid, answer_correct, answer_percents FROM ".$srv_settings['table_prefix']."answers WHERE questionid=".$i_questionid);
if(!$i_rSet2) {
 showDBError('checkTestAnswer', 3);
} else {
 if(!$i_rSet2->EOF) {
 while(!$i_rSet2->EOF) {
 if($i_rSet2->fields['answer_correct']) {
 $i_answer_set_correct_count++;
}
if(in_array($i_rSet2->fields['answerid'], $i_answerno)) {
 if($i_rSet2->fields['answer_correct']) {
 $i_answer_set_correct++;
} else {
 $i_answer_set_incorrect++;
} 
 $i_answer_set_percents += $i_rSet2->fields['answer_percents'];
}
$i_rSet2->MoveNext();
}
} else {
 die(sprintf($lngstr['err_no_answers_in_question'], $i_questionid));
}
$i_rSet2->Close();
}
if($i_question_type2) {
 if($i_answer_set_percents >= 100) {
 $i_answer_correct = 2;
$i_answer_points = $i_questionpoints;
} else if($i_answer_set_percents <= 0) {
 $i_answer_correct = 0;
$i_answer_points = 0;
} else {
 $i_answer_correct = 1;
$i_answer_points = round($i_questionpoints * $i_answer_set_percents / 100, 5);
}
} else {
 if((($i_answer_set_correct == $i_answer_set_correct_count) && !$i_answer_set_incorrect)) {
 $i_answer_correct = 2;
$i_answer_points = $i_questionpoints;
}
}
$i_answer_text = implode(QUESTION_TYPE_MULTIPLEANSWER_BREAK, $i_answerno);
break;
}
$i_iscorrect = ($i_answer_correct == 2) ? 1 : 0;
$i_iscorrect_old = ($arrAnswerOld['result_answer_iscorrect'] == 2) ? 1 : 0;
$G_SESSION['yt_got_answers'] += ($i_iscorrect - $i_iscorrect_old);
$G_SESSION['yt_got_points'] += ($i_answer_points - $arrAnswerOld['result_answer_points']);
if(!isset($G_SESSION['yt_subjects'][$i_subjectid])) {
 $G_SESSION['yt_subjects'][$i_subjectid]['got_answers'] = 0;
$G_SESSION['yt_subjects'][$i_subjectid]['total_answers'] = 0;
$G_SESSION['yt_subjects'][$i_subjectid]['got_points'] = 0;
$G_SESSION['yt_subjects'][$i_subjectid]['total_points'] = 0;
}
$G_SESSION['yt_subjects'][$i_subjectid]['got_answers'] += ($i_iscorrect - $i_iscorrect_old);
$G_SESSION['yt_subjects'][$i_subjectid]['total_answers'] += (1 - $arrAnswerOld['total_answers']);
$G_SESSION['yt_subjects'][$i_subjectid]['got_points'] += ($i_answer_points - $arrAnswerOld['result_answer_points']);
$G_SESSION['yt_subjects'][$i_subjectid]['total_points'] += ($i_questionpoints - $arrAnswerOld['question_points']); 
 $i_now = time();
$i_timespent = isset($G_SESSION['yt_questionstart']) && $G_SESSION['yt_questionstart'] > 0 ? $i_now - $G_SESSION['yt_questionstart'] : 0;
$i_questionno_real = $G_SESSION['yt_questions'][$i_questionno - 1];
$i_timeexceeded = ($G_SESSION['yt_teststop'] > 0) && ($G_SESSION['yt_teststop'] < $i_now) ? 1 : 0;
if($G_SESSION['yt_state'] == TEST_STATE_QREVIEW) {
 $qry_str = "UPDATE ".$srv_settings['table_prefix']."results_answers SET test_questionid=".$i_questionno_real.", result_answer_text=".$g_db->qstr($i_answer_text, get_magic_quotes_gpc()).", result_answer_points=".$i_answer_points.", result_answer_iscorrect=".$i_answer_correct.", result_answer_timespent=".$i_timespent.", result_answer_timeexceeded=".$i_timeexceeded." WHERE result_answerid=".$i_questionno." AND resultid=".$G_SESSION['resultid']." AND questionid=".$i_questionid;
} else {
 $qry_str = "INSERT INTO ".$srv_settings['table_prefix']."results_answers (result_answerid, resultid, questionid, test_questionid, result_answer_text, result_answer_points, result_answer_iscorrect, result_answer_feedback, result_answer_timespent, result_answer_timeexceeded) VALUES (".$i_questionno.", ".$G_SESSION['resultid'].", ".$i_questionid.", ".$i_questionno_real.", ".$g_db->qstr($i_answer_text, get_magic_quotes_gpc()).", ".$i_answer_points.", ".$i_answer_correct.", '', ".$i_timespent.", ".$i_timeexceeded.")";
}
$g_db->Execute($qry_str);
eventOnAfterFunction(array('function_name' => 'checkTestAnswer', 'questionno' => $i_questionno, 'questionid' => $i_questionid, 'answers' => $i_answers));
}
 
function writeVTimer($hours, $minutes, $seconds) {
if($hours<0) $hours=0; if($minutes<0) $minutes = 0; if($seconds<0) $seconds=0;
?><script language=JavaScript type="text/javascript"><!--
var dStopTime = new Date();
dStopTime.setHours(dStopTime.getHours()<?php if($hours) echo "+$hours"; ?>,dStopTime.getMinutes()<?php if($minutes) echo "+$minutes"; ?>,dStopTime.getSeconds()<?php if($seconds) echo "+$seconds"; ?>);
var clockID = 0;
function UpdateClock() {
 if(clockID) {
 clearTimeout(clockID);
clockID = 0;
}
var dNow = new Date();
if(dNow<dStopTime) {
 dNow.setHours(dStopTime.getHours()-dNow.getHours(),dStopTime.getMinutes()-dNow.getMinutes(),dStopTime.getSeconds()-dNow.getSeconds());
strContent = "&nbsp;<b>"+setLeadingZero(dNow.getHours())+":"+setLeadingZero(dNow.getMinutes())+":"+setLeadingZero(dNow.getSeconds())+"</b>&nbsp;";
if(dNow.getMinutes()<1) strContent="<font color=#ff0000>"+strContent+"</font>";
document.getElementById("vtimer").innerHTML=strContent;
clockID = setTimeout("UpdateClock()", 500);
} else {
 clearTimeout(clockID);
clockID = 0;
document.getElementById("vtimer").innerHTML = "<b>00:00:00</b>";
}
}
function setLeadingZero(i) {
 return (i<10) ? "0"+i : i;
}
clockID = setTimeout("UpdateClock()", 500);
//--></script><?php
}
function readDiffTime($start, $end) {
$nseconds = $end - $start; 
$ndays = floor($nseconds / 86400); 
$nseconds = $nseconds % 86400; 
$nhours = floor($nseconds / 3600); 
$nseconds = $nseconds % 3600;
$nminutes = floor($nseconds / 60); 
$nseconds = $nseconds % 60;
return array("days"=>$ndays, "hours"=>$nhours, "minutes"=>$nminutes, "seconds"=>$nseconds);
}
function getTimeFormatted($i_seconds) {
global $lngstr;
$i_result = '';
$i_time = readDiffTime(0, $i_seconds);
$i_result = $i_time['seconds'].' '.$lngstr['time_seconds_short'];
if($i_time['minutes']>0)
 $i_result = $i_time['minutes'].' '.$lngstr['time_minutes_short'].' '.$i_result;
if($i_time['hours']>0)
 $i_result = $i_time['hours'].' '.$lngstr['time_hours_short'].' '.$i_result;
if($i_time['days']>0)
 $i_result = $i_time['days'].' '.$lngstr['time_days_short'].' '.$i_result;
return $i_result;
}
function getCalendar($i_name, $i_year, $i_month, $i_day, $i_hour, $minute, $can_disable = false) {
 $i_year_start = (int)date("Y") - 1;
$i_year_end = $i_year_start + 15;
return getCalendarEx($i_name, $i_year, $i_month, $i_day, $i_hour, $minute, $i_year_start, $i_year_end, $can_disable);
}
function getCalendarEx($i_name, $i_year, $i_month, $i_day, $i_hour = NULL, $minute = NULL, $i_year_start, $i_year_end, $can_disable = false) {
global $lngstr;
$i_result = '';
$i_result .= '<table border=0>'; 
 $i_result .= '<tr><td><select name='.$i_name.'_month>';
for($i = 1; $i <= 12; $i++)
 if($i == $i_month)
 $i_result .= '<option value="'.$i.'" selected=selected>'.$lngstr['calendar_months'][$i].'</option>';
else $i_result .= '<option value="'.$i.'">'.$lngstr['calendar_months'][$i].'</option>';
$i_result .= '</select></td>';
$i_result .= '<td><select name='.$i_name.'_day>';
for($i = 1; $i <= 31; $i++)
 if($i == $i_day)
 $i_result .= '<option selected=selected>'.$i.'</option>';
else $i_result .= '<option>'.$i.'</option>';
$i_result .= '</select>, </td>';
$i_result .= '<td><select name='.$i_name.'_year>';
for($i = $i_year_start; $i <= $i_year_end; $i++)
 if($i == $i_year)
 $i_result .= '<option selected=selected>'.$i.'</option>';
else $i_result .= '<option>'.$i.'</option>';
$i_result .= '</select>&nbsp;</td>';
if($i_hour != NULL) {
 $i_result .= '<td><select name='.$i_name.'_hour>';
for($i=0;$i<=23;$i++)
 if($i == $i_hour)
 $i_result .= '<option selected=selected>'.sprintf("%02d", $i).'</option>';
else $i_result .= '<option>'.sprintf("%02d", $i).'</option>';
$i_result .= '</select>: </td>';
$i_result .= '<td><select name='.$i_name.'_minute>';
for($i=0;$i<=55;$i+=5)
 if($i==$minute)
 $i_result .= '<option selected=selected>'.sprintf("%02d", $i).'</option>';
else $i_result .= '<option>'.sprintf("%02d", $i).'</option>';
$i_result .= '</select></td>';
}
if($can_disable) {
 $i_isenabled = $i_year > 1980;
$i_result .= '<td><input name='.$i_name.'_donotuse type=checkbox onclick="disableCalendar_'.$i_name.'(this.checked)" '.($i_isenabled ? '' : 'checked').'>'.$lngstr['time_donotuse']; 
 $i_result .= '<script language=JavaScript type="text/javascript"><!--';
$i_result .= 'function disableCalendar_'.$i_name.'(state) {';
$i_result .= 'document.all.'.$i_name.'_month.disabled = state;';
$i_result .= 'document.all.'.$i_name.'_day.disabled = state;';
$i_result .= 'document.all.'.$i_name.'_year.disabled = state;';
$i_result .= 'document.all.'.$i_name.'_hour.disabled = state;';
$i_result .= 'document.all.'.$i_name.'_minute.disabled = state;';
$i_result .= '}';
if(!$i_isenabled)
 $i_result .= 'disableCalendar_'.$i_name.'(true);';
$i_result .= '--></script>';
$i_result .= '</td>';
}
$i_result .= '</tr></table>';
return $i_result;
}
function makeTime($seconds) {
$i_nseconds = $seconds;
$i_nhours = floor($i_nseconds / 3600); 
$i_nseconds = $i_nseconds % 3600;
$i_nminutes = floor($i_nseconds / 60); 
$i_nseconds = $i_nseconds % 60;
return sprintf("%02d:%02d:%02d", $i_nhours, $i_nminutes, $i_nseconds);
}
function getTimeElement($i_name, $seconds) {
global $lngstr;
$i_result = ""; 
$i_nseconds = $seconds;
$i_nhours = floor($i_nseconds / 3600); 
$i_nseconds = $i_nseconds % 3600;
$i_nminutes = floor($i_nseconds / 60); 
$i_nseconds = $i_nseconds % 60;
$i_use_timing = $seconds>0;
$i_time_value = $i_nhours.':'.$i_nminutes.':'.$i_nseconds; 
$i_result .= '<input name="'.$i_name.'" id="'.$i_name.'" value="'.$i_time_value.'" size=8'.($i_use_timing ? '' : ' disabled=disabled').'>';
$i_result .= ' <input name='.$i_name.'_donotuse type=checkbox onclick="activateTheControl(this.form.'.$i_name.', this.checked)"'.($i_use_timing ? '' : ' checked').'>'.$lngstr['time_donotuse'];         
return $i_result;
}
function truncateString($i_text, $i_length = 60) {
 if(($i_length > 0) && (strlen($i_text) > $i_length)) {
 $i_text_truncated = substr($i_text, 0, ($i_length - 3));
$i_text_truncated .= '...';
} else {
 $i_text_truncated = $i_text;
}
return $i_text_truncated;
}
function getTruncatedHTML($i_html, $i_length = 60) {
 return truncateString(trim(strip_tags(convertTextAreaHTML(false, $i_html))), $i_length); 
}
function getURLAddon($i_initval = '', $i_excludeitems = array()) {
global $_GET;
$i_url_addon = $i_initval;
foreach($_GET as $key=>$val) {
 if(!in_array($key, $i_excludeitems)) {
 $i_url_addon .= $i_url_addon ? "&" : "?";
$i_url_addon .= urlencode($key)."=".urlencode($val);
}
}
return $i_url_addon;
}
function deleteResultRecord($i_resultid) {
global $g_db, $srv_settings; 
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."results_answers WHERE resultid=".$i_resultid)===false)
 showDBError('deleteResultRecord', 1); 
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."results WHERE resultid=".$i_resultid)===false)
 showDBError('deleteResultRecord', 2);
}
function deleteQuestionLink($testid, $test_questionid) {
global $g_db, $srv_settings; 
 if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."tests_questions WHERE testid=".$testid." AND test_questionid=".$test_questionid)===false)
 showDBError('deleteQuestionLink', 1); 
 $i_rSet2 = $g_db->Execute("SELECT test_questionid FROM ".$srv_settings['table_prefix']."tests_questions WHERE testid=".$testid." AND test_questionid>".$test_questionid." ORDER BY test_questionid");
if(!$i_rSet2) {
 showDBError('deleteQuestionLink', 2);
} else {
 $i_counter = $test_questionid - 1;
while(!$i_rSet2->EOF) {
 $i_counter++;
if($i_rSet2->fields["test_questionid"] != $i_counter)
 $g_db->Execute("UPDATE ".$srv_settings['table_prefix']."tests_questions SET test_questionid=".$i_counter." WHERE testid=".$testid." AND test_questionid=".$i_rSet2->fields["test_questionid"]);
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
}
function createQuestionLink($testid, $questionid) {
global $g_db, $srv_settings;
$i_questioncount = 0; 
$i_questioncount = getRecordCount($srv_settings['table_prefix'].'tests_questions', 'testid='.$testid);     
$i_questioncount++;   
if($g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."tests_questions (test_questionid, testid, questionid) VALUES(".$i_questioncount.", ".$testid.", ".$questionid.")")===false)
 showDBError('createQuestionLink', 1);
}
function createGrade($i_gscaleid) {
global $g_db, $srv_settings;
$i_gradecount = 0; 
$i_gradecount = getRecordCount($srv_settings['table_prefix'].'gscales_grades', 'gscaleid='.$i_gscaleid);
$i_gradecount++;   
if($g_db->Execute("INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscale_gradeid, gscaleid, grade_feedback) VALUES(".$i_gradecount.", ".$i_gscaleid.", '')")===false)
 showDBError(__FILE__, 2);
return $i_gradecount;
}
function displayTemplate($template) {
global $g_smarty;
switch($template) {
 default:
 $g_smarty->display($template.'.tpl.html');
break;
}
}
 
function getScriptURL() {
 if(!empty($_SERVER['REQUEST_URI'])) {
 return $_SERVER['REQUEST_URI'];
} else if(!empty($_SERVER['PHP_SELF'])) {
 if(!empty($_SERVER['QUERY_STRING']))
 return $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
else return $_SERVER['PHP_SELF'];
} else if(!empty($_SERVER['SCRIPT_NAME'])) {
 if(!empty($_SERVER['QUERY_STRING']))
 return $_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'];
else return $_SERVER['SCRIPT_NAME'];
} else if(!empty($_SERVER['URL'])) {
 if(!empty($_SERVER['QUERY_STRING']))
 return $_SERVER['URL'].'?'.$_SERVER['QUERY_STRING'];
else return $_SERVER['URL'];
} else {
 return false;
}
}
function getFullScriptURL() {
 $i_hostname = getServerName();
if($i_hostname != false) {
 $i_protocol = (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$i_url_prefix = $i_protocol.$i_hostname;
return $i_url_prefix.getScriptURL();
} else {
 return false;
}
}
function getServerName() {
 global $_SERVER, $_ENV;
if (!empty($_SERVER['HTTP_HOST'])) {
 $i_hostname = $_SERVER['HTTP_HOST'];
} else if (!empty($_ENV['HTTP_HOST'])) {
 $i_hostname = $_ENV['HTTP_HOST'];
} else if (!empty($_SERVER['SERVER_NAME'])) {
 $i_hostname = $_SERVER['SERVER_NAME'];
} else if (!empty($_ENV['SERVER_NAME'])) {
 $i_hostname = $_ENV['SERVER_NAME'];
} else {
 return false;
}
return $i_hostname;
}
 
function api_isSignedIn() {
global $G_SESSION;
return isset($G_SESSION['userid']);
}
function api_addNewUser($i_username = '', $i_password = '', $arrUserData = array(), $arrGroupIDs = array()) {
 $arrInternalUserData['user_name'] = $i_username;
$arrInternalUserData['user_password'] = $i_password;
if(isset($arrUserData['checkword']))
 $arrInternalUserData['user_checkword'] = $arrUserData['checkword'];
$i_active = isset($arrUserData['active']) ? (boolean)$arrUserData['active'] : true;
$arrInternalUserData['user_enabled'] = $i_active ? 1 : 0;
$arrInternalUserData['user_expiredate'] = isset($arrUserData['expiredate']) ? (int)$arrUserData['expiredate'] : 0;
$arrInternalUserData['user_email'] = isset($arrUserData['email']) ? $arrUserData['email'] : '';
$arrInternalUserData['user_title'] = isset($arrUserData['title']) ? $arrUserData['title'] : '';
$arrInternalUserData['user_firstname'] = isset($arrUserData['firstname']) ? $arrUserData['firstname'] : '';
$arrInternalUserData['user_lastname'] = isset($arrUserData['lastname']) ? $arrUserData['lastname'] : '';
$arrInternalUserData['user_middlename'] = isset($arrUserData['middlename']) ? $arrUserData['middlename'] : '';
$arrInternalUserData['user_address'] = isset($arrUserData['address']) ? $arrUserData['address'] : '';
$arrInternalUserData['user_city'] = isset($arrUserData['city']) ? $arrUserData['city'] : '';
$arrInternalUserData['user_state'] = isset($arrUserData['state']) ? $arrUserData['state'] : '';
$arrInternalUserData['user_zip'] = isset($arrUserData['zip']) ? $arrUserData['zip'] : '';
$arrInternalUserData['user_country'] = isset($arrUserData['country']) ? $arrUserData['country'] : '';
$arrInternalUserData['user_phone'] = isset($arrUserData['phone']) ? $arrUserData['phone'] : '';
$arrInternalUserData['user_fax'] = isset($arrUserData['fax']) ? $arrUserData['fax'] : '';
$arrInternalUserData['user_mobile'] = isset($arrUserData['mobile']) ? $arrUserData['mobile'] : '';
$arrInternalUserData['user_pager'] = isset($arrUserData['pager']) ? $arrUserData['pager'] : '';
$arrInternalUserData['user_ipphone'] = isset($arrUserData['ipphone']) ? $arrUserData['ipphone'] : '';
$arrInternalUserData['user_webpage'] = isset($arrUserData['webpage']) ? $arrUserData['webpage'] : '';
$arrInternalUserData['user_icq'] = isset($arrUserData['icq']) ? $arrUserData['icq'] : '';
$arrInternalUserData['user_msn'] = isset($arrUserData['msn']) ? $arrUserData['msn'] : '';
$arrInternalUserData['user_aol'] = isset($arrUserData['aol']) ? $arrUserData['aol'] : '';
$arrInternalUserData['user_gender'] = isset($arrUserData['gender']) ? $arrUserData['gender'] : 0;
$arrInternalUserData['user_birthday'] = isset($arrUserData['birthday']) ? $arrUserData['birthday'] : '00000000';
$arrInternalUserData['user_husbandwife'] = isset($arrUserData['husbandwife']) ? $arrUserData['husbandwife'] : '';
$arrInternalUserData['user_children'] = isset($arrUserData['children']) ? $arrUserData['children'] : '';
$arrInternalUserData['user_trainer'] = isset($arrUserData['trainer']) ? $arrUserData['trainer'] : '';
$arrInternalUserData['user_photo'] = isset($arrUserData['photo']) ? $arrUserData['photo'] : '';
$arrInternalUserData['user_company'] = isset($arrUserData['company']) ? $arrUserData['company'] : '';
$arrInternalUserData['user_cposition'] = isset($arrUserData['cposition']) ? $arrUserData['cposition'] : '';
$arrInternalUserData['user_department'] = isset($arrUserData['department']) ? $arrUserData['department'] : '';
$arrInternalUserData['user_coffice'] = isset($arrUserData['coffice']) ? $arrUserData['coffice'] : '';
$arrInternalUserData['user_caddress'] = isset($arrUserData['caddress']) ? $arrUserData['caddress'] : '';
$arrInternalUserData['user_ccity'] = isset($arrUserData['ccity']) ? $arrUserData['ccity'] : '';
$arrInternalUserData['user_cstate'] = isset($arrUserData['cstate']) ? $arrUserData['cstate'] : '';
$arrInternalUserData['user_czip'] = isset($arrUserData['czip']) ? $arrUserData['czip'] : '';
$arrInternalUserData['user_ccountry'] = isset($arrUserData['ccountry']) ? $arrUserData['ccountry'] : '';
$arrInternalUserData['user_cphone'] = isset($arrUserData['cphone']) ? $arrUserData['cphone'] : '';
$arrInternalUserData['user_cfax'] = isset($arrUserData['cfax']) ? $arrUserData['cfax'] : '';
$arrInternalUserData['user_cmobile'] = isset($arrUserData['cmobile']) ? $arrUserData['cmobile'] : '';
$arrInternalUserData['user_cpager'] = isset($arrUserData['cpager']) ? $arrUserData['cpager'] : '';
$arrInternalUserData['user_cipphone'] = isset($arrUserData['cipphone']) ? $arrUserData['cipphone'] : '';
$arrInternalUserData['user_cwebpage'] = isset($arrUserData['cwebpage']) ? $arrUserData['cwebpage'] : '';
$arrInternalUserData['user_cphoto'] = isset($arrUserData['cphoto']) ? $arrUserData['cphoto'] : '';
$arrInternalUserData['user_ufield1'] = isset($arrUserData['ufield1']) ? $arrUserData['ufield1'] : '';
$arrInternalUserData['user_ufield2'] = isset($arrUserData['ufield2']) ? $arrUserData['ufield2'] : '';
$arrInternalUserData['user_ufield3'] = isset($arrUserData['ufield3']) ? $arrUserData['ufield3'] : '';
$arrInternalUserData['user_ufield4'] = isset($arrUserData['ufield4']) ? $arrUserData['ufield4'] : '';
$arrInternalUserData['user_ufield5'] = isset($arrUserData['ufield5']) ? $arrUserData['ufield5'] : '';
$arrInternalUserData['user_ufield6'] = isset($arrUserData['ufield6']) ? $arrUserData['ufield6'] : '';
$arrInternalUserData['user_ufield7'] = isset($arrUserData['ufield7']) ? $arrUserData['ufield7'] : '';
$arrInternalUserData['user_ufield8'] = isset($arrUserData['ufield8']) ? $arrUserData['ufield8'] : '';
$arrInternalUserData['user_ufield9'] = isset($arrUserData['ufield9']) ? $arrUserData['ufield9'] : '';
$arrInternalUserData['user_ufield10'] = isset($arrUserData['ufield10']) ? $arrUserData['ufield10'] : '';
return addNewUser($arrInternalUserData, $arrGroupIDs);
}
function api_emailNewUserDetails($i_username = '', $i_password = '', $arrUserData = array()) {
 return emailNewUserDetails($i_username, $i_password, $arrUserData);
}
function api_manageUserGroups($i_userids = array(), $arrGroupIDs = array(), $i_addtogroup = true) {
 return manageUserGroups($i_userids, $arrGroupIDs, $i_addtogroup);
}
function api_deleteUserByID($i_userid = 0) {
 return deleteUserByID($i_userid);
}
function api_deleteUserByUserName($i_username = '') {
 return deleteUserByUserName($i_username);
}
function api_signinUser($i_username = '', $i_password = '', $i_isguest = false) {
 return signinUser($i_username, $i_password, $i_isguest);
}
function api_signoutUser() {
 return signoutUser();
}
?>
