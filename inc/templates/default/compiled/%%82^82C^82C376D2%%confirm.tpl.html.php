<?php /* Smarty version 2.6.18, created on 2007-07-30 09:51:32
         compiled from confirm.tpl.html */ ?>
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

<p><table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
<tr height="100%">
<td vAlign=middle align=center>
<br /><br /><br />
<strong><?php echo $this->_tpl_vars['g_vars']['page']['confirm_request']; ?>
</strong><br />
<a href="<?php echo $this->_tpl_vars['g_vars']['page']['confirm_url']; ?>
&confirmed=1"><?php echo $this->_tpl_vars['lngstr']['label_yes']; ?>
</a> / <a href="<?php echo $this->_tpl_vars['g_vars']['page']['confirm_url']; ?>
&confirmed=0"><?php echo $this->_tpl_vars['lngstr']['label_no']; ?>
</a>
<br /><br /><br />
</td>
</tr>
</table></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>