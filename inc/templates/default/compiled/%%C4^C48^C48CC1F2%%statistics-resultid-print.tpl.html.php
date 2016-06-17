<?php /* Smarty version 2.6.9, created on 2005-11-23 21:55:32
         compiled from statistics-resultid-print.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getPrintF', 'statistics-resultid-print.tpl.html', 12, false),array('function', 'getGauge', 'statistics-resultid-print.tpl.html', 27, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $this->_tpl_vars['lngstr']['text_direction']; ?>
"><head><title><?php echo $this->_tpl_vars['g_vars']['page']['title'];  echo $this->_tpl_vars['lngstr']['item_separator'];  echo $this->_tpl_vars['srv_settings']['title_postfix']; ?>
</title>
<meta http-equiv="Content-Language" content="<?php echo $this->_tpl_vars['lngstr']['meta_contentlanguage']; ?>
">
<meta content="text/html; charset=<?php echo $this->_tpl_vars['lngstr']['meta_charset']; ?>
" http-equiv=Content-Type>
<link rel="SHORTCUT ICON" href="/favicon.ico">
<link href="shared/style.css" rel=stylesheet type=text/css>
<script language=javascript src="shared/shared.js" type="text/javascript"></script>
<?php echo $this->_tpl_vars['g_vars']['page']['meta']; ?>
</head>
<body bgcolor="#ffffff"<?php echo $this->_tpl_vars['g_vars']['page']['body_tag']; ?>
>

<h2><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['g_vars']['page']['header'],'var1' => $this->_tpl_vars['g_vars']['page']['test_name']), $this);?>
</h2>

<h3><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['all_participants']; ?>
</h3>
<p><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['label_result_testname'],'var1' => $this->_tpl_vars['g_vars']['page']['test_name']), $this);?>
</p>

<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr>
<td width=80% class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_test_data_hint']; ?>
" colspan=2><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_test_data']; ?>
</td>
<td width=10% class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_points']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_points_hint']; ?>
</td>
<td width=10% class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_percents_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_percents']; ?>
</td>
</tr>

<tr class=rowone>
<td width=20%><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['test_average_score']; ?>
</td>
<?php if ($this->_tpl_vars['g_vars']['page']['test']['points_total_max'] > 0 && $this->_tpl_vars['g_vars']['page']['test']['participant_count'] > 0): ?>
<td width=60%><?php echo smarty_function_getGauge(array('color' => 'yellow','percentage' => $this->_tpl_vars['g_vars']['page']['test']['points_average_percents']), $this);?>
</td>
<td width=10% align=right><?php echo smarty_function_getPrintF(array('text' => "%.0f",'var1' => $this->_tpl_vars['g_vars']['page']['test']['points_average']), $this);?>
</td>
<td width=10% align=right><?php echo smarty_function_getPrintF(array('text' => "%.2f",'var1' => $this->_tpl_vars['g_vars']['page']['test']['points_average_percents']), $this);?>
%</td>
<?php else: ?>
<td colspan=3 align=center class=gray><?php echo $this->_tpl_vars['lngstr']['label_notapplicable']; ?>
</td>
<?php endif; ?>
</tr>

<tr class=rowone>
<td><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['test_high_score']; ?>
</td>
<?php if ($this->_tpl_vars['g_vars']['page']['test']['points_max'] > 0): ?>
<td><?php echo smarty_function_getGauge(array('color' => 'green','percentage' => $this->_tpl_vars['g_vars']['page']['test']['points_high_percents']), $this);?>
</td>
<td align=right><?php echo $this->_tpl_vars['g_vars']['page']['test']['points_high']; ?>
</td>
<td align=right><?php echo smarty_function_getPrintF(array('text' => "%.2f",'var1' => $this->_tpl_vars['g_vars']['page']['test']['points_high_percents']), $this);?>
%</td>
<?php else: ?>
<td colspan=3 align=center class=gray><?php echo $this->_tpl_vars['lngstr']['label_notapplicable']; ?>
</td>
<?php endif; ?>
</tr>

<tr class=rowone>
<td><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['test_low_score']; ?>
</td>
<?php if ($this->_tpl_vars['g_vars']['page']['test']['points_max'] > 0): ?>
<td><?php echo smarty_function_getGauge(array('color' => 'red','percentage' => $this->_tpl_vars['g_vars']['page']['test']['points_low_percents']), $this);?>
</td>
<td align=right><?php echo $this->_tpl_vars['g_vars']['page']['test']['points_low']; ?>
</td>
<td align=right><?php echo smarty_function_getPrintF(array('text' => "%.2f",'var1' => $this->_tpl_vars['g_vars']['page']['test']['points_low_percents']), $this);?>
%</td>
<?php else: ?>
<td colspan=3 align=center class=gray><?php echo $this->_tpl_vars['lngstr']['label_notapplicable']; ?>
</td>
<?php endif; ?>
</tr>

<tr class=rowone>
<td><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['test_std_deviation']; ?>
</td>
<td colspan=3><?php echo smarty_function_getPrintF(array('text' => "%.2f",'var1' => $this->_tpl_vars['g_vars']['page']['test']['std_deviation']), $this);?>
</td>
</tr>

<tr class=rowone>
<td><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['test_variance']; ?>
</td>
<td colspan=3><?php echo smarty_function_getPrintF(array('text' => "%.2f",'var1' => $this->_tpl_vars['g_vars']['page']['test']['variance']), $this);?>
</td>
</tr>
</table></p>

<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=rowone>
<td colspan=2 class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_grade_data_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_grade_data']; ?>
</td>
<td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_grade_responses_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_grade_responses']; ?>
</td>
<td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_percents_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_percents']; ?>
</td>
</tr>
<?php $_from = $this->_tpl_vars['g_vars']['page']['grades']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i_gradeid'] => $this->_tpl_vars['i_grade']):
?>
<tr class=rowone>
<td width=20%><?php echo $this->_tpl_vars['i_grade']['name']; ?>
:</td>
<?php if ($this->_tpl_vars['g_vars']['page']['grades_times_total'] > 0): ?>
<td width=60%><?php echo smarty_function_getGauge(array('percentage' => $this->_tpl_vars['i_grade']['times_percents']), $this);?>
</td>
<td width=10% align=right><?php echo $this->_tpl_vars['i_grade']['times']; ?>
</td>
<td width=10% align=right><?php echo smarty_function_getPrintF(array('text' => "%.2f",'var1' => $this->_tpl_vars['i_grade']['times_percents']), $this);?>
%</td>
<?php else: ?>
<td colspan=3 align=center class=gray><?php echo $this->_tpl_vars['lngstr']['label_notapplicable']; ?>
</td>
<?php endif; ?>
</tr>
<?php endforeach; endif; unset($_from); ?>

<tr class=rowone>
<td><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['total_responses']; ?>
</td>
<td></td>
<td align=right><?php echo $this->_tpl_vars['g_vars']['page']['test']['participant_count']; ?>
</td>
<td align=right></td>
</tr>
</table></p>

<h3><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['this_participant']; ?>
</h3>
<p><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['label_result_username'],'var1' => $this->_tpl_vars['g_vars']['page']['user_name']), $this);?>

<br /><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['label_result_testdate'],'var1' => $this->_tpl_vars['g_vars']['page']['result_date']), $this);?>

<br /><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['label_result_timespent'],'var1' => $this->_tpl_vars['g_vars']['page']['time_spent']), $this);?>

<br /><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['label_result_got_points'],'var1' => $this->_tpl_vars['g_vars']['page']['got_points'],'var2' => $this->_tpl_vars['g_vars']['page']['points_max'],'var3' => $this->_tpl_vars['g_vars']['page']['score']), $this);?>

<br /><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['label_result_got_grade'],'var1' => $this->_tpl_vars['g_vars']['page']['grade']['name']), $this);?>
</p>

<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=rowone>
<td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_subject_name_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_subject_name']; ?>
</td>
<td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_subject_questions_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_subject_questions']; ?>
</td>
<td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_subject_questions_got_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_subject_questions_got']; ?>
</td>
<td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_subject_correct_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_subject_correct']; ?>
</td>
<td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_percents_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['hdr_percents']; ?>
</td>
</tr>
<?php $_from = $this->_tpl_vars['g_vars']['page']['subjects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i_subjectid'] => $this->_tpl_vars['i_subject']):
?>
<tr class=rowone>
<td width=60%><?php echo $this->_tpl_vars['i_subject']['name']; ?>
</td>
<td width=10% align=right><?php echo $this->_tpl_vars['i_subject']['question_count']; ?>
</td>
<td width=10% align=right><?php echo $this->_tpl_vars['i_subject']['question_got']; ?>
</td>
<td width=10% align=right><?php echo $this->_tpl_vars['i_subject']['question_correct']; ?>
</td>
<td width=10% align=right><?php echo smarty_function_getPrintF(array('text' => "%.2f",'var1' => $this->_tpl_vars['i_subject']['question_correct_percents']), $this);?>
%</td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</table></p>

</body></html>