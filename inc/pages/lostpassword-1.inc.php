<?php
$g_vars['page']['hide_cpanel'] = true;
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$f_username = readPostVar('username');
echo '<p><table cellpadding=0 cellspacing=5 border=0 width="100%">';
echo '<tr vAlign=top><td width="35%" height="100%" class=signin1>';
echo '<form action="lostpassword.php" method=post name=lostpasswordform>';
echo $lngstr['page_lostpassword_enter_username'].'<br>';
echo '<br>'.$lngstr['page_signin_box_signin'];
echo '<br><input name=username class=inp type=text value="'.convertTextValue($f_username).'" size=20><br>';
echo '<br><input class=btn type=submit name=bsubmit value=" '.$lngstr['button_send_new_password'].' "></form>';
echo '<td height="100%" class=signin2>';
writeErrorsWarningsBar();
echo '<p>'.$lngstr['page_signin_box_register_intro'];
echo '<p>'.$lngstr['page_signin_box_lostpassword_intro'];
echo '</td></tr></table>';
displayTemplate('_footer');
?>