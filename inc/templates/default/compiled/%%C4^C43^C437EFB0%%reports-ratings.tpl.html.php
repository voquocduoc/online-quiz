<?php /* Smarty version 2.6.14, created on 2007-01-12 14:43:23
         compiled from reports-ratings.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getRowNo', 'reports-ratings.tpl.html', 16, false),array('function', 'getTableHeaders', 'reports-ratings.tpl.html', 47, false),array('function', 'setNewRowNo', 'reports-ratings.tpl.html', 52, false),array('function', 'getThisRowNo', 'reports-ratings.tpl.html', 52, false),array('function', 'getThisRowClass', 'reports-ratings.tpl.html', 52, false),array('function', 'getInTagValue', 'reports-ratings.tpl.html', 54, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_menu-2.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['g_vars']['page']['header']; ?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_infobar.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><table cellpadding=0 cellspacing=0 border=0><tr vAlign=top><td>
<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="">
<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection('div_filter_reportsmanager_reportsratings')"><?php echo $this->_tpl_vars['lngstr']['label_filter_header']; ?>
</td></tr>
<tr valign=top><td class=rowone colspan=2><div id=div_filter_reportsmanager_reportsratings style="display:<?php if (! $_COOKIE['div_filter_reportsmanager_reportsratings'] || $_COOKIE['div_filter_reportsmanager_reportsratings'] == 'Y'): ?>block<?php else: ?>none<?php endif; ?>"><form name=filterForm method=post action="reports-ratings.php<?php echo $this->_tpl_vars['g_vars']['page']['filter_url_addon']; ?>
"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td><?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['filter_dates_years']; ?>
</td><td><?php echo $this->_tpl_vars['g_vars']['page']['result_date_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td><?php echo $this->_tpl_vars['lngstr']['page_edittests_testname']; ?>
</td><td><?php echo $this->_tpl_vars['g_vars']['page']['testid_content']; ?>
</td></tr>
</table>
<br><input class=btn type=submit name=bsetfilter value=" <?php echo $this->_tpl_vars['lngstr']['button_set_filter']; ?>
 "> <input class=btn type=submit name=bremovefilter value=" <?php echo $this->_tpl_vars['lngstr']['button_remove_filter']; ?>
 "></form>
</div></td></tr>
</table>
</td><td width=12>&nbsp;</td><td>
<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="">
<tr><td class=rowone>
<strong>Your Score:</strong><br />
Weekly: <?php echo $this->_tpl_vars['g_vars']['page']['this_user']['score_1week']; ?>
<br />
Monthly: <?php echo $this->_tpl_vars['g_vars']['page']['this_user']['score_1month']; ?>
<br />
Annualy: <?php echo $this->_tpl_vars['g_vars']['page']['this_user']['score_1year']; ?>
<br />
</td></tr></table>
</td></table></p>

<p><form name=resultsForm class=iactive method=post><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>
<table cellpadding=0 cellspacing=0 border=0 width="100%" style="background: url(images/toolbar-background.gif) repeat-x"><tr vAlign=center><td width=2><img src="images/toolbar-left.gif" width=2 height=32></td>

<td width="100%">&nbsp;Show: <a href="reports-ratings.php">All scores</a> or <a href="reports-ratings.php?limitto=25">Top 25</a>&nbsp;</td>

<td width=2><img src="images/toolbar-right.gif" width=2 height=32></td></tr></table>

</td></tr><tr><td>
<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr vAlign=top><?php echo smarty_function_getTableHeaders(array('url' => $this->_tpl_vars['g_vars']['page']['url'],'columns' => $this->_tpl_vars['g_vars']['page']['tables']['1']['columns'],'orderno' => $this->_tpl_vars['g_vars']['page']['orderno'],'direction' => $this->_tpl_vars['g_vars']['page']['direction']), $this);?>

</tr>

<?php $_from = $this->_tpl_vars['g_vars']['page']['tables']['1']['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i_counter'] => $this->_tpl_vars['row']):
?>

<?php echo smarty_function_setNewRowNo(array(), $this);?>
<tr id=tr_<?php echo smarty_function_getThisRowNo(array(), $this);?>
 class=<?php echo smarty_function_getThisRowClass(array(), $this);?>
 onmouseover="rollTR(<?php echo smarty_function_getThisRowNo(array(), $this);?>
,1);" onmouseout="rollTR(<?php echo smarty_function_getThisRowNo(array(), $this);?>
,0);">
<td align=right><?php echo $this->_tpl_vars['i_counter']+1; ?>
</td>
<td><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_firstname']), $this);?>
&nbsp;<?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_lastname']), $this);?>
</td>
<td><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_cposition']; ?>
</td>

<td align=right><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_points_total']; ?>
</td>

</tr>

<?php endforeach; endif; unset($_from); ?>


</table>
</td></tr></table></form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>