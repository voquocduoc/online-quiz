<?php /* Smarty version 2.6.14, created on 2006-08-01 20:36:59
         compiled from register-step-2.tpl.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['g_vars']['page']['title']; ?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_notifications.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><form method=post action="register.php?action=step2&userid=<?php echo $this->_tpl_vars['g_vars']['page']['userid']; ?>
">
Payments are currently accepted via PayPal. Please press the "Next" button below to make a payment and activate your account.
<p><input class=btn type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_next']; ?>
 ">
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>