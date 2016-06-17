<?php /* Smarty version 2.6.18, created on 2007-04-02 14:52:23
         compiled from test-results.tpl.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><form method=post action="test.php"><table cellpadding=0 cellspacing=5 border=0 width="100%">
<tr><td>

<table class=rowtable3 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=rowtwo valign=top><td colspan=2>&nbsp;</td></tr>
<tr><td class=rowone colspan=2>

<table cellpadding=0 cellspacing=0 border=0 width="100%"><tr vAlign=top><td width=1><img src="images/1x1.gif" width=1 height=260></td><td>

<?php if ($this->_tpl_vars['g_vars']['page']['custom_report']): ?>

<?php echo $this->_tpl_vars['g_vars']['page']['custom_report']; ?>


<?php else: ?>

<h2><?php echo $this->_tpl_vars['g_vars']['page']['header']; ?>
</h2>

<p><?php echo $this->_tpl_vars['g_vars']['page']['test_name_label']; ?>

<br><?php echo $this->_tpl_vars['g_vars']['page']['test_date_label']; ?>

<br><?php echo $this->_tpl_vars['g_vars']['page']['time_spent_label']; ?>
</p>
<p>

<?php if ($_SESSION['MAIN']['yt_result_showanswers'] || $_SESSION['MAIN']['yt_result_showpoints'] || $_SESSION['MAIN']['yt_result_showgrade'] || $_SESSION['MAIN']['yt_result_showgradefeedback']): ?>
<?php if ($_SESSION['MAIN']['yt_result_showgrade']): ?><?php echo $this->_tpl_vars['g_vars']['page']['grade_label']; ?>
<br><?php endif; ?>
<?php if ($_SESSION['MAIN']['yt_result_showgradefeedback']): ?><?php echo $this->_tpl_vars['g_vars']['page']['gradefeedback_label']; ?>
<br><?php endif; ?>
<?php if ($_SESSION['MAIN']['yt_result_showanswers']): ?><?php echo $this->_tpl_vars['g_vars']['page']['correct_answers_label']; ?>
<br><?php endif; ?>
<?php if ($_SESSION['MAIN']['yt_result_showpoints']): ?><?php echo $this->_tpl_vars['g_vars']['page']['points_label']; ?>
<br><?php if ($_SESSION['MAIN']['yt_points_pending'] > 0): ?><?php echo $this->_tpl_vars['g_vars']['page']['points_pending_label']; ?>
<?php endif; ?><?php endif; ?>
<?php else: ?><?php echo $this->_tpl_vars['lngstr']['label_result_do_not_show']; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['show_advancedreport_html']): ?><p><a href="getfile.php?action=thtml&resultid=<?php echo $_SESSION['MAIN']['resultid']; ?>
" target=_blank><img width=20 height=20 border=0 src="images/button-report-html.gif" title="<?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['view_html']; ?>
"> <?php echo $this->_tpl_vars['lngstr']['page_test']['result']['showhtml']; ?>
</a></p><?php endif; ?>
<?php if ($this->_tpl_vars['g_vars']['page']['show_advancedreport_pdf']): ?><p><a href="getfile.php?action=tpdf&resultid=<?php echo $_SESSION['MAIN']['resultid']; ?>
&file=test-results.pdf" target=_blank><img width=20 height=20 border=0 src="images/button-pdf.gif" title="<?php echo $this->_tpl_vars['lngstr']['page_reportsmanager']['view_pdf']; ?>
"> <?php echo $this->_tpl_vars['lngstr']['label_result_showpdf']; ?>
</a></p><?php endif; ?>

<?php endif; ?>

</td></tr></table></td></tr>

<?php if ($this->_tpl_vars['g_vars']['page']['content_protection']): ?>
<tr class=rowtwo><td colspan=2 align=center><?php if ($this->_tpl_vars['g_vars']['page']['show_nexttest']): ?><a href="test.php?testid=<?php echo $_SESSION['MAIN']['yt_nexttestid']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_test']['results_nexttest']; ?>
</a><?php else: ?><a href="javascript:void(0)" onClick="window.opener.location.href='index.php'; window.close();"><?php echo $this->_tpl_vars['lngstr']['page_test']['close_this_window']; ?>
</a><?php endif; ?></td>
<?php elseif ($this->_tpl_vars['g_vars']['page']['show_reportsmanager']): ?>
<tr class=rowtwo><td align=center><?php if ($this->_tpl_vars['g_vars']['page']['show_nexttest']): ?><a href="test.php?testid=<?php echo $_SESSION['MAIN']['yt_nexttestid']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_test']['results_nexttest']; ?>
</a><?php else: ?><a href="index.php"><?php echo $this->_tpl_vars['lngstr']['page_test_results_homepage']; ?>
</a><?php endif; ?></td>
<td align=center><a href="reports-manager.php?action=viewq&resultid=<?php echo $_SESSION['MAIN']['resultid']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_test_results_viewresults']; ?>
</a>
<?php else: ?>
<tr class=rowtwo><td colspan=2 align=center><?php if ($this->_tpl_vars['g_vars']['page']['show_nexttest']): ?><a href="test.php?testid=<?php echo $_SESSION['MAIN']['yt_nexttestid']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_test']['results_nexttest']; ?>
</a><?php else: ?><a href="index.php"><?php echo $this->_tpl_vars['lngstr']['page_test_results_homepage']; ?>
</a><?php endif; ?>
<?php endif; ?>

</td></tr></table>
</td></tr></table></form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>