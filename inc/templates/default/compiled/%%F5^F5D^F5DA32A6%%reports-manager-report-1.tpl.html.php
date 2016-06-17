<?php /* Smarty version 2.6.14, created on 2006-07-19 14:01:58
         compiled from reports-manager-report-1.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getInTagValue', 'reports-manager-report-1.tpl.html', 41, false),array('function', 'getPrintF', 'reports-manager-report-1.tpl.html', 85, false),)), $this); ?>
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

<p><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>
<table cellpadding=5 cellspacing=0 border=1 width="100%">
<tr vAlign=top>
<?php $_from = $this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column_name'] => $this->_tpl_vars['column_show']):
?>
<td><b><?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['fields']['name'][$this->_tpl_vars['column_name']]; ?>
</b></td>
<?php endforeach; endif; unset($_from); ?>
</tr>

<?php $_from = $this->_tpl_vars['g_vars']['page']['tables']['1']['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i_counter'] => $this->_tpl_vars['row']):
?>

<tr>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['resultid']): ?>
<td><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['result_datestart']): ?>
<td><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_datestart']; ?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['result_datestart_formatted']): ?>
<td><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_datestart_formatted']; ?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['userid']): ?>
<td><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['userid']; ?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['user_name']): ?>
<td><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_name']), $this);?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['user_firstname']): ?>
<td><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_firstname']), $this);?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['user_middlename']): ?>
<td><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_middlename']), $this);?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['user_lastname']): ?>
<td><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_lastname']), $this);?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['testid']): ?>
<td><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['testid']), $this);?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['test_name']): ?>
<td><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['test_name']), $this);?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['test_attempts']): ?>
<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['test_attempts']): ?>
<td align=center><?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['test_attempts'] <= $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['test_attempt_count']):  echo $this->_tpl_vars['lngstr']['label_yes'];  else:  echo $this->_tpl_vars['lngstr']['label_no'];  endif; ?></td>
<?php else: ?>
<td align=center><?php echo $this->_tpl_vars['lngstr']['label_no']; ?>
</td>
<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['result_timeexceeded']): ?>
<td align=center><?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_timeexceeded']):  echo $this->_tpl_vars['lngstr']['label_yes'];  else:  echo $this->_tpl_vars['lngstr']['label_no'];  endif; ?></td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['result_points']): ?>
<td align=right><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_points']; ?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['result_pointsmax']): ?>
<td align=right><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_pointsmax']; ?>
</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['result_score']): ?>
<td align=right><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_score'],'var1' => "%.0f"), $this);?>
%</td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['columns_to_show']['grade_name']): ?>
<td align=center title="<?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['grade_description']), $this);?>
"><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['grade_name']), $this);?>
</td>
<?php endif; ?>

</tr>

<?php endforeach; endif; unset($_from); ?>

</table>
</td></tr></table></p>

</body></html>