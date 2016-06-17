<?php /* Smarty version 2.6.18, created on 2007-08-18 21:08:36
         compiled from test-select.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getTableHeaders', 'test-select.tpl.html', 17, false),array('function', 'getRowNo', 'test-select.tpl.html', 25, false),array('function', 'getPrintF', 'test-select.tpl.html', 30, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<h2><?php echo $this->_tpl_vars['g_vars']['page']['header']; ?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_notifications.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_tpl_vars['g_vars']['page']['header2']; ?>


<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr>

<?php echo smarty_function_getTableHeaders(array('url' => $this->_tpl_vars['g_vars']['page']['url'],'columns' => $this->_tpl_vars['g_vars']['page']['tables']['1']['columns'],'orderno' => $this->_tpl_vars['g_vars']['page']['orderno'],'direction' => $this->_tpl_vars['g_vars']['page']['direction']), $this);?>



</tr>

<?php $_from = $this->_tpl_vars['g_vars']['page']['test']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i_testno'] => $this->_tpl_vars['test']):
?>
<?php if ($this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['visible']): ?>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
>
<td align=right><?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['testid']; ?>
</td>
<td width="60%"><b><?php if ($this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['status']): ?><?php if ($this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['test_purchased']): ?><a <?php if ($this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['content_protection']): ?>href="javascript:void(0)" onClick="showDialog('test.php?testid=<?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['testid']; ?>
', 800, 600)"<?php else: ?>href="test.php?testid=<?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['testid']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['name']; ?>
</a><?php else: ?><a href="buy.php?action=checkout&testid=<?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['testid']; ?>
"><?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['name']; ?>
</a><?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['name']; ?>
<?php endif; ?></b><br><?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['description']; ?>
</td>
<td width="20%" align=center><?php if ($this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['status'] == IGT_TEST_STATUS_INPROGRESS): ?><b><?php echo $this->_tpl_vars['lngstr']['page_panel_status_inprogress']; ?>
</b><?php else: ?><?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['status_label']; ?>
<?php endif; ?></td>
<td width="20%" align=center><b><?php if ($this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['status']): ?><?php if ($this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['test_purchased']): ?><a <?php if ($this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['content_protection']): ?>href="javascript:void(0)" onClick="showDialog('test.php?testid=<?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['testid']; ?>
', 800, 600)"<?php else: ?>href="test.php?testid=<?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['testid']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['lngstr']['page_panel_get_test_link']; ?>
</a><?php else: ?><a href="buy.php?action=checkout&testid=<?php echo $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['testid']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_takeatest']['buy_test']; ?>
 (<?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['language']['currency'],'var1' => $this->_tpl_vars['g_vars']['page']['test'][$this->_tpl_vars['i_testno']]['test_price']), $this);?>
)</a><?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['lngstr']['page_panel_get_test_link']; ?>
<?php endif; ?></b></td>
</tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php if ($this->_tpl_vars['g_vars']['page']['test_count'] == 0): ?><tr class=rowone><td colspan=4><?php echo $this->_tpl_vars['lngstr']['err_no_tests']; ?>
</td></tr><?php endif; ?>

</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>