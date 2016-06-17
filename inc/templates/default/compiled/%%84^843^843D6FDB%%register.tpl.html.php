<?php /* Smarty version 2.6.12, created on 2006-03-23 18:29:25
         compiled from register.tpl.html */ ?>
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

<?php echo $this->_tpl_vars['g_vars']['page']['intro']; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_notifications.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><form method=post action="register.php"><?php echo $this->_tpl_vars['lngstr']['page_register']['required_mark']; ?>

<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">

<?php echo $this->_tpl_vars['g_vars']['page']['items']['username']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['password']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['confirmpassword']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['email']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['title']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['firstname']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['lastname']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['middlename']; ?>


<?php echo $this->_tpl_vars['g_vars']['page']['items']['address']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['city']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['state']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['zip']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['country']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['phone']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['fax']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['mobile']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['pager']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['ipphone']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['webpage']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['icq']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['msn']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['aol']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['gender']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['birthday']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['husbandwife']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['children']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['trainer']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['photo']; ?>


<?php echo $this->_tpl_vars['g_vars']['page']['items']['company']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['cposition']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['department']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['coffice']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['caddress']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['ccity']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['cstate']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['czip']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['ccountry']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['cphone']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['cfax']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['cmobile']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['cpager']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['cipphone']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['cwebpage']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['cphoto']; ?>


<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield1']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield2']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield3']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield4']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield5']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield6']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield7']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield8']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield9']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['userfield10']; ?>


<?php echo $this->_tpl_vars['g_vars']['page']['items']['groupid_input']; ?>

<?php echo $this->_tpl_vars['g_vars']['page']['items']['testid_input']; ?>


</td></tr></table>
<p><input class=btn type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_register']; ?>
 "></form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>