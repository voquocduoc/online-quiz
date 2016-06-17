<?php /* Smarty version 2.6.9, created on 2005-12-17 21:31:22
         compiled from testmanager-questions-import.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getInTagValue', 'testmanager-questions-import.tpl.html', 15, false),array('function', 'getRowNo', 'testmanager-questions-import.tpl.html', 21, false),array('function', 'getInputElement', 'testmanager-questions-import.tpl.html', 21, false),)), $this); ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "_notifications.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><form method=post action="test-manager.php?testid=<?php echo $this->_tpl_vars['g_vars']['page']['testid']; ?>
&action=import">
<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">

<tr class=rowtwo><td><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['document_label']; ?>
</td></tr>
<tr class=rowone><td>
<textarea name=import_document cols=70 rows=15 title="<?php echo smarty_function_getInTagValue(array('text' => $this->_tpl_vars['lngstr']['page_importtest_ut_import_document_hint']), $this);?>
"></textarea>
<br /><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['document_howto']; ?>

</td></tr>

<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection('div_testmanager_import')"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['section_delimiters']; ?>
</td></tr>
<tr valign=top><td class=rowone colspan=2><div id=div_testmanager_import style="display:<?php if ($_COOKIE['div_testmanager_import'] && $_COOKIE['div_testmanager_import'] == 'Y'): ?>block<?php else: ?>none<?php endif; ?>"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['question_delimiter']; ?>
</td><td width="70%"><?php echo smarty_function_getInputElement(array('name' => 'question_delimiter','value' => $this->_tpl_vars['g_vars']['page']['question_delimiter']), $this);?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['answer_delimiter']; ?>
</td><td width="70%"><?php echo smarty_function_getInputElement(array('name' => 'answer_delimiter','value' => $this->_tpl_vars['g_vars']['page']['answer_delimiter']), $this);?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['answer2_delimiter']; ?>
</td><td width="70%"><?php echo smarty_function_getInputElement(array('name' => 'answer2_delimiter','value' => $this->_tpl_vars['g_vars']['page']['answer2_delimiter']), $this);?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['correct_delimiter']; ?>
</td><td width="70%"><?php echo smarty_function_getInputElement(array('name' => 'correct_delimiter','value' => $this->_tpl_vars['g_vars']['page']['correct_delimiter']), $this);?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['points_delimiter']; ?>
</td><td width="70%"><?php echo smarty_function_getInputElement(array('name' => 'points_delimiter','value' => $this->_tpl_vars['g_vars']['page']['points_delimiter']), $this);?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['type_delimiter']; ?>
</td><td width="70%"><?php echo smarty_function_getInputElement(array('name' => 'type_delimiter','value' => $this->_tpl_vars['g_vars']['page']['type_delimiter']), $this);?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['subject_delimiter']; ?>
</td><td width="70%"><?php echo smarty_function_getInputElement(array('name' => 'subject_delimiter','value' => $this->_tpl_vars['g_vars']['page']['subject_delimiter']), $this);?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['preq_delimiter']; ?>
</td><td width="70%"><?php echo smarty_function_getInputElement(array('name' => 'preq_delimiter','value' => $this->_tpl_vars['g_vars']['page']['preq_delimiter']), $this);?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_testmanager_import']['postq_delimiter']; ?>
</td><td width="70%"><?php echo smarty_function_getInputElement(array('name' => 'postq_delimiter','value' => $this->_tpl_vars['g_vars']['page']['postq_delimiter']), $this);?>
</td></tr>
</table></div></td></tr>
</table>

<p class=center><input class=btn type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_import']; ?>
 "> <input class=btn type=submit name=bcancel value=" <?php echo $this->_tpl_vars['lngstr']['button_cancel']; ?>
 "></form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>