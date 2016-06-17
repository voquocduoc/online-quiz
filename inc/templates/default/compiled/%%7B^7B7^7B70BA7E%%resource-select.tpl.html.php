<?php /* Smarty version 2.6.9, created on 2006-03-04 23:28:54
         compiled from resource-select.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getRowNo', 'resource-select.tpl.html', 15, false),)), $this); ?>
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
<tr><td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_resources']['hdr_resource_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_resources']['hdr_resource']; ?>
</td><td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_resources']['hdr_get_resource_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_resources']['hdr_get_resource']; ?>
</td></tr>

<?php $_from = $this->_tpl_vars['g_vars']['page']['resource']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i_resourceno'] => $this->_tpl_vars['resource']):
?>
<?php if ($this->_tpl_vars['g_vars']['page']['resource'][$this->_tpl_vars['i_resourceno']]['visible']): ?>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="80%"><b><?php if ($this->_tpl_vars['g_vars']['page']['resource'][$this->_tpl_vars['i_resourceno']]['available']): ?><a href="resources.php?action=get&resourceid=<?php echo $this->_tpl_vars['g_vars']['page']['resource'][$this->_tpl_vars['i_resourceno']]['resourceid']; ?>
"><?php echo $this->_tpl_vars['g_vars']['page']['resource'][$this->_tpl_vars['i_resourceno']]['name']; ?>
</a><?php else:  echo $this->_tpl_vars['g_vars']['page']['resource'][$this->_tpl_vars['i_resourceno']]['name'];  endif; ?></b><br><?php echo $this->_tpl_vars['g_vars']['page']['resource'][$this->_tpl_vars['i_resourceno']]['description']; ?>
</td><td width="20%" align=center><b><?php if ($this->_tpl_vars['g_vars']['page']['resource'][$this->_tpl_vars['i_resourceno']]['available']): ?><a href="resources.php?action=get&resourceid=<?php echo $this->_tpl_vars['g_vars']['page']['resource'][$this->_tpl_vars['i_resourceno']]['resourceid']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_resources']['get_resource_link']; ?>
</a><?php else:  echo $this->_tpl_vars['lngstr']['page_resources']['get_resource_link'];  endif; ?></b></td></tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from);  if ($this->_tpl_vars['g_vars']['page']['resource_count'] == 0): ?><tr class=rowone><td colspan=3><?php echo $this->_tpl_vars['lngstr']['err_no_resources']; ?>
</td></tr><?php endif; ?>

</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>