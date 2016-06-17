<?php /* Smarty version 2.6.14, created on 2006-12-04 21:45:30
         compiled from test-instructions.tpl.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><form method=post action="<?php echo $this->_tpl_vars['g_vars']['page']['form_action_url']; ?>
"><table cellpadding=0 cellspacing=5 border=0 width="100%">
<tr><td>

<table class=rowtable3 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=rowtwo valign=top><td id=vtimer align=center title="<?php echo $this->_tpl_vars['lngstr']['page_test']['test_timer_hint']; ?>
" width=150><?php echo $this->_tpl_vars['g_vars']['page']['test_timer']; ?>
</td><td id=qcounter align=center title="<?php echo $this->_tpl_vars['g_vars']['page']['questionindicator_hint']; ?>
"><nobr>&nbsp;<?php echo $this->_tpl_vars['g_vars']['page']['questionindicator']; ?>
&nbsp;</nobr></td><td width="60%" id=testname align=center title="<?php echo $this->_tpl_vars['lngstr']['page_test']['testname_hint']; ?>
"><?php echo $this->_tpl_vars['g_vars']['page']['test_name']; ?>
</td></tr>
<tr><td class=rowone colspan=3>

<table cellpadding=0 cellspacing=0 border=0 width="100%"><tr vAlign=top><td width=1><img src="images/1x1.gif" width=1 height=260></td><td>
<?php echo $this->_tpl_vars['g_vars']['page']['test_instructions']; ?>

</td></tr></table></td></tr>

<tr><td class=rowtwo colspan=3><?php if ($this->_tpl_vars['g_vars']['page']['next_page_exists']): ?><input class=btn type=submit name=bnextpage value=" <?php echo $this->_tpl_vars['lngstr']['page_test_instructions']['next_page']; ?>
 "><?php else: ?><input class=btn type=submit name=bstarttest value=" <?php echo $this->_tpl_vars['lngstr']['button_starttest']; ?>
 "><?php endif; ?></td></tr></table>
</td></tr></table></form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>