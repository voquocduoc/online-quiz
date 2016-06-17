<?php /* Smarty version 2.6.18, created on 2007-05-13 00:07:43
         compiled from reports-manager.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getRowNo', 'reports-manager.tpl.html', 16, false),array('function', 'html_options', 'reports-manager.tpl.html', 16, false),array('function', 'getPrintF', 'reports-manager.tpl.html', 44, false),array('function', 'getTableHeaders', 'reports-manager.tpl.html', 77, false),array('function', 'setNewRowNo', 'reports-manager.tpl.html', 82, false),array('function', 'getThisRowNo', 'reports-manager.tpl.html', 82, false),array('function', 'getThisRowClass', 'reports-manager.tpl.html', 82, false),array('function', 'getInTagValue', 'reports-manager.tpl.html', 85, false),)), $this); ?>
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
<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection('div_filter_reportsmanager')"><?php echo $this->_tpl_vars['lngstr']['label_filter_header']; ?>
</td></tr>
<tr valign=top><td class=rowone colspan=2><div id=div_filter_reportsmanager style="display:<?php if (! $_COOKIE['div_filter_reportsmanager'] || $_COOKIE['div_filter_reportsmanager'] == 'Y'): ?>block<?php else: ?>none<?php endif; ?>"><form name=filterForm method=post action="reports-manager.php<?php echo $this->_tpl_vars['g_vars']['page']['filter']['url_addon']; ?>
"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td><?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['filter_dates_years']; ?>
</td><td><select name="result_date" onchange="InsertRelativeDate(this.form.result_datestart, this[this.selectedIndex].value)"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['lngstr']['page_reportsmanager']['filter_dates_years_items'],'selected' => $this->_tpl_vars['g_vars']['page']['filter']['result_date']), $this);?>
</select> <input name="result_datestart" id="result_datestart" value="<?php echo $this->_tpl_vars['g_vars']['page']['filter']['result_datestart_formatted']; ?>
" class=inp type=text size=15<?php if ($this->_tpl_vars['g_vars']['page']['filter']['result_date']): ?> disabled=disabled<?php endif; ?>><a href="javascript:void(0);" title="<?php echo $this->_tpl_vars['lngstr']['calendar']['hint']; ?>
"><img src="images/button-calendar.gif" alt="<?php echo $this->_tpl_vars['lngstr']['calendar']['hint']; ?>
" class="calendar-icon" onclick="return showCalendar('result_datestart', '<?php echo $this->_tpl_vars['lngstr']['language']['calendar']['date_format']; ?>
', '24', true);" onmouseover="this.className+=' calendar-icon-hover';" onmouseout="this.className = this.className.replace(/\s*calendar-icon-hover/ig, '');"></a> ... <input name="result_dateend" id="result_dateend" value="<?php echo $this->_tpl_vars['g_vars']['page']['filter']['result_dateend_formatted']; ?>
" class=inp type=text size=15><a href="javascript:void(0);" title="<?php echo $this->_tpl_vars['lngstr']['calendar']['hint']; ?>
"><img src="images/button-calendar.gif" alt="<?php echo $this->_tpl_vars['lngstr']['calendar']['hint']; ?>
" class="calendar-icon" onclick="return showCalendar('result_dateend', '<?php echo $this->_tpl_vars['lngstr']['language']['calendar']['date_format']; ?>
', '24', true);" onmouseover="this.className+=' calendar-icon-hover';" onmouseout="this.className = this.className.replace(/\s*calendar-icon-hover/ig, '');"></a></td></tr>
<?php if ($this->_tpl_vars['g_vars']['page']['user_name_content']): ?><tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td><?php echo $this->_tpl_vars['lngstr']['label_username']; ?>
</td><td><?php echo $this->_tpl_vars['g_vars']['page']['user_name_content']; ?>
</td></tr><?php endif; ?>
<?php if ($this->_tpl_vars['g_vars']['page']['user_lastname_content']): ?><tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td><?php echo $this->_tpl_vars['lngstr']['label_lastname']; ?>
</td><td><?php echo $this->_tpl_vars['g_vars']['page']['user_lastname_content']; ?>
</td></tr><?php endif; ?>
<?php if ($this->_tpl_vars['g_vars']['page']['user_department_content']): ?><tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td><?php echo $this->_tpl_vars['lngstr']['label_department']; ?>
</td><td><?php echo $this->_tpl_vars['g_vars']['page']['user_department_content']; ?>
</td></tr><?php endif; ?>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td><?php echo $this->_tpl_vars['lngstr']['page_edittests_testname']; ?>
</td><td><?php echo $this->_tpl_vars['g_vars']['page']['testid_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td><?php echo $this->_tpl_vars['lngstr']['page_edittests_subjectid']; ?>
</td><td><?php echo $this->_tpl_vars['g_vars']['page']['subjectid_content']; ?>
</td></tr>
</table>
<br><input class=btn type=submit name=bsetfilter value=" <?php echo $this->_tpl_vars['lngstr']['button_set_filter']; ?>
 "> <input class=btn type=submit name=bremovefilter value=" <?php echo $this->_tpl_vars['lngstr']['button_remove_filter']; ?>
 "></form>
</div></td></tr>
</table>
</td><td>
</td></table></p>

<p><form name=resultsForm class=iactive method=post><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>
<table cellpadding=0 cellspacing=0 border=0 width="100%" style="background: url(images/toolbar-background.gif) repeat-x"><tr vAlign=center><td width=2><img src="images/toolbar-left.gif" width=2 height=32></td><td width=32>
<?php if ($_SESSION['MAIN']['access_reportsmanager'] > 1): ?>
<img src="images/button-cross-big.gif" border=0 title="<?php echo $this->_tpl_vars['lngstr']['label_action_results_delete']; ?>
" style="cursor: hand;" onclick="f=document.resultsForm;if (confirm('<?php echo $this->_tpl_vars['lngstr']['qst_delete_records']; ?>
')) { f.action='reports-manager.php?action=delete&confirmed=1';f.submit();}">
<?php else: ?><img src="images/button-cross-big-inactive.gif" border=0><?php endif; ?>
</td>

<td width="100%">&nbsp;</td>
<?php if ($this->_tpl_vars['g_vars']['page']['limitcount'] > 0): ?>
	<td vAlign=middle width=32><nobr>&nbsp;<?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['label']['KtoLofN'],'var1' => $this->_tpl_vars['g_vars']['page']['navbar']['record_from'],'var2' => $this->_tpl_vars['g_vars']['page']['navbar']['record_to'],'var3' => $this->_tpl_vars['g_vars']['page']['navbar']['record_count']), $this);?>
&nbsp;</nobr></td>
	<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>
	<td vAlign=middle width=32><nobr>&nbsp;
	<?php $_from = $this->_tpl_vars['g_vars']['page']['navbar']['page_window_numbers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
		<?php if ($this->_tpl_vars['page'] != $this->_tpl_vars['g_vars']['page']['pageno_current']): ?>
		&nbsp;<a href="reports-manager.php?pageno=<?php echo $this->_tpl_vars['page']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_limitto']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_order']; ?>
"><?php echo $this->_tpl_vars['page']; ?>
</a>&nbsp;
		<?php else: ?>
		<span class=currentitem>&nbsp;<?php echo $this->_tpl_vars['page']; ?>
&nbsp;</span>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</nobr></td>
	<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>
	<?php if ($this->_tpl_vars['g_vars']['page']['pageno_current'] > 1): ?>
	<td width=32><a href="reports-manager.php?pageno=1<?php echo $this->_tpl_vars['g_vars']['page']['addon_limitto']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_order']; ?>
"><img src="images/button-first-big.gif" border=0 title="<?php echo $this->_tpl_vars['lngstr']['button_first_page']; ?>
"></a></td>
	<td width=32><a href="reports-manager.php?pageno=<?php echo $this->_tpl_vars['g_vars']['page']['pageno_previous']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_limitto']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_order']; ?>
"><img src="images/button-prev-big.gif" border=0 title="<?php echo $this->_tpl_vars['lngstr']['button_prev_page']; ?>
"></a></td>
	<?php else: ?>
	<td width=32><img src="images/button-first-big-inactive.gif" border=0 title="<?php echo $this->_tpl_vars['lngstr']['button_first_page']; ?>
"></td>
	<td width=32><img src="images/button-prev-big-inactive.gif" border=0 title="<?php echo $this->_tpl_vars['lngstr']['button_prev_page']; ?>
"></td>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['g_vars']['page']['pageno_current'] < $this->_tpl_vars['g_vars']['page']['page_count']): ?>
	<td width=32><a href="reports-manager.php?pageno=<?php echo $this->_tpl_vars['g_vars']['page']['pageno_next']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_limitto']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_order']; ?>
"><img src="images/button-next-big.gif" border=0 title="<?php echo $this->_tpl_vars['lngstr']['button_next_page']; ?>
"></a></td>
	<td width=32><a href="reports-manager.php?pageno=<?php echo $this->_tpl_vars['g_vars']['page']['page_count']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_limitto']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_order']; ?>
"><img src="images/button-last-big.gif" border=0 title="<?php echo $this->_tpl_vars['lngstr']['button_last_page']; ?>
"></a></td>
	<?php else: ?>
	<td width=32><img src="images/button-next-big-inactive.gif" border=0 title="<?php echo $this->_tpl_vars['lngstr']['button_next_page']; ?>
"></td>
	<td width=32><img src="images/button-last-big-inactive.gif" border=0 title="<?php echo $this->_tpl_vars['lngstr']['button_last_page']; ?>
"></td>
	<?php endif; ?>
<?php endif; ?>

<td width=2><img src="images/toolbar-right.gif" width=2 height=32></td></tr></table>

</td></tr><tr><td>
<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr vAlign=top><td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['label_hdr_select_hint']; ?>
" width=22><input type=checkbox name=toggleAll onclick="toggleCBs(this);"></td>
<?php echo smarty_function_getTableHeaders(array('url' => $this->_tpl_vars['g_vars']['page']['url'],'columns' => $this->_tpl_vars['g_vars']['page']['tables']['1']['columns'],'orderno' => $this->_tpl_vars['g_vars']['page']['orderno'],'direction' => $this->_tpl_vars['g_vars']['page']['direction']), $this);?>

<td class=rowhdr1 colspan=4><?php echo $this->_tpl_vars['lngstr']['label_hdr_action']; ?>
</td></tr>

<?php $_from = $this->_tpl_vars['g_vars']['page']['tables']['1']['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i_counter'] => $this->_tpl_vars['row']):
?>

<?php echo smarty_function_setNewRowNo(array(), $this);?>
<tr id=tr_<?php echo smarty_function_getThisRowNo(array(), $this);?>
 class=<?php echo smarty_function_getThisRowClass(array(), $this);?>
 onmouseover="rollTR(<?php echo smarty_function_getThisRowNo(array(), $this);?>
,1);" onmouseout="rollTR(<?php echo smarty_function_getThisRowNo(array(), $this);?>
,0);"><td align=center width=22><input id=cb_<?php echo smarty_function_getThisRowNo(array(), $this);?>
 type=checkbox name=box_results[] value="<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
" onclick="toggleCB(this);"></td>
<td align=right><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
</td>
<td><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_datestart_formatted']; ?>
</td>
<td><nobr><a href="reports-manager.php?userid=<?php if ($_GET['userid'] != ''): ?><?php else: ?><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['userid']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['g_vars']['page']['addon_limitto']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_order']; ?>
"><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_name']), $this);?>
</a> [<a href="users.php?userid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['userid']; ?>
&action=edit" title="<?php echo $this->_tpl_vars['lngstr']['label']['view_edit_user']; ?>
"><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['userid']; ?>
</a>]</nobr><br /><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_firstname']), $this);?>
&nbsp;<?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['user_lastname']), $this);?>
</td>
<td><a href="reports-manager.php?testid=<?php if ($_GET['testid'] != ''): ?><?php else: ?><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['testid']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_order']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_limit']; ?>
<?php endif; ?>"><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['test_name']), $this);?>
</a></td>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['test_attempts']): ?>
<td align=center><?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['test_attempts'] <= $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['test_attempt_count']): ?><a href="reports-manager.php?action=attempts&set=0&testid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['testid']; ?>
&userid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['userid']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_order']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_limit']; ?>
"><img src="images/button-checkbox-2.gif" width=13 height=13 border=0 title="<?php echo $this->_tpl_vars['lngstr']['label_yes']; ?>
"></a><?php else: ?><a href="reports-manager.php?action=attempts&set=1&testid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['testid']; ?>
&userid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['userid']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_order']; ?>
<?php echo $this->_tpl_vars['g_vars']['page']['addon_limit']; ?>
"><img src="images/button-checkbox-0.gif" width=13 height=13 border=0 title="<?php echo $this->_tpl_vars['lngstr']['label_no']; ?>
"></a><?php endif; ?></td>
<?php else: ?>
<td align=center><img src="images/button-checkbox-0.gif" width=13 height=13 border=0 title="<?php echo $this->_tpl_vars['lngstr']['label_no']; ?>
"></td>
<?php endif; ?>

<td align=center><?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_timeexceeded']): ?><img src="images/button-checkbox-2.gif" width=13 height=13 border=0 title="<?php echo $this->_tpl_vars['lngstr']['label_yes']; ?>
"><?php else: ?><img src="images/button-checkbox-0.gif" width=13 height=13 border=0 title="<?php echo $this->_tpl_vars['lngstr']['label_no']; ?>
"><?php endif; ?></td><td align=right><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_points']; ?>
</td><td align=right><?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_pointsmax']; ?>
</td><td align=right><?php echo smarty_function_getPrintF(array('text' => "%.2f",'var1' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['result_score']), $this);?>
%</td><td align=center title="<?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['grade_description']), $this);?>
"><?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['grade_name']), $this);?>
</td>
<td align=center width=22><a href="reports-manager.php?action=viewq&resultid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
"><img width=20 height=20 border=0 src="images/button-view.gif" title="<?php echo $this->_tpl_vars['lngstr']['label_action_test_result_view']; ?>
"></a></td>

<?php if ($this->_tpl_vars['g_vars']['page']['show_stats'] && ( $_SESSION['MAIN']['access_reportsmanager'] > 1 )): ?>
<td align=center width=22><a href="statistics.php?action=resultid&resultid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
"><img width=20 height=20 border=0 src="images/button-stats.gif" title="<?php echo $this->_tpl_vars['lngstr']['page_testmanager_stats']['view_results_stats']; ?>
"></a></td>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['show_pdf'] && $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['show_html']): ?>
<td align=center width=22><a href="getfile.php?action=thtml&resultid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
" target="_blank"><img width=20 height=20 border=0 src="images/button-report-html.gif" title="<?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['view_html']; ?>
"></a><a href="getfile.php?action=tpdf&resultid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
&file=report.pdf" target="_blank"><img width=20 height=20 border=0 src="images/button-pdf.gif" title="<?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['view_pdf']; ?>
"></a></td>
<?php elseif ($this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['show_pdf']): ?>
<td align=center width=22><a href="getfile.php?action=tpdf&resultid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
&file=report.pdf" target="_blank"><img width=20 height=20 border=0 src="images/button-pdf.gif" title="<?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['view_pdf']; ?>
"></a></td>
<?php elseif ($this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['show_html']): ?>
<td align=center width=22><a href="getfile.php?action=thtml&resultid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
" target="_blank"><img width=20 height=20 border=0 src="images/button-report-html.gif" title="<?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['view_html']; ?>
"></a></td>
<?php else: ?>
<td align=center width=22><img width=20 height=20 border=0 src="images/1x1.gif" title="<?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['view_none']; ?>
">
<?php endif; ?>

<?php if ($_SESSION['MAIN']['access_reportsmanager'] > 1): ?>
<td align=center width=22><a href="reports-manager.php?action=delete&resultid=<?php echo $this->_tpl_vars['g_vars']['page']['tables']['1']['rows'][$this->_tpl_vars['i_counter']]['resultid']; ?>
" onclick="return confirmMessage(this, '<?php echo $this->_tpl_vars['lngstr']['qst_delete_record']; ?>
')"><img width=20 height=20 border=0 src="images/button-cross.gif" title="<?php echo $this->_tpl_vars['lngstr']['label_action_test_result_delete']; ?>
"></a></td>
<?php endif; ?>

</tr>

<?php endforeach; endif; unset($_from); ?>


</table>
</td></tr></table></form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>