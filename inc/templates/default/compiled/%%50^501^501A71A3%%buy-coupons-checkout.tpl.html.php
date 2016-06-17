<?php /* Smarty version 2.6.18, created on 2007-07-29 23:36:54
         compiled from buy-coupons-checkout.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getPrintF', 'buy-coupons-checkout.tpl.html', 6, false),array('function', 'getRowNo', 'buy-coupons-checkout.tpl.html', 9, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['g_vars']['page']['header']; ?>
</h2>

<p>Your account balance: <b><?php if ($this->_tpl_vars['g_vars']['page']['user_budget'] < $this->_tpl_vars['g_vars']['page']['test']['1']['test_price']): ?><font color="#800000"><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['language']['currency'],'var1' => $this->_tpl_vars['g_vars']['page']['user_budget']), $this);?>
</font><?php else: ?><font color="#008000"><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['language']['currency'],'var1' => $this->_tpl_vars['g_vars']['page']['user_budget']), $this);?>
</font><?php endif; ?></b></p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_buycheckout']['hdr_test_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_buycheckout']['hdr_test']; ?>
</td><td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_buycheckout']['hdr_test_price_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_buycheckout']['hdr_test_price']; ?>
</td><td class=rowhdr1 title="<?php echo $this->_tpl_vars['lngstr']['page_buycheckout']['hdr_test_buy_hint']; ?>
"><?php echo $this->_tpl_vars['lngstr']['page_buycheckout']['hdr_test_buy']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="60%"><b><?php echo $this->_tpl_vars['g_vars']['page']['test']['1']['name']; ?>
</b><br><?php echo $this->_tpl_vars['g_vars']['page']['test']['1']['description']; ?>
</td><td width="20%" align=center><?php echo smarty_function_getPrintF(array('text' => $this->_tpl_vars['lngstr']['language']['currency'],'var1' => $this->_tpl_vars['g_vars']['page']['test']['1']['test_price']), $this);?>
</td><td width="20%" align=center><b><?php if ($this->_tpl_vars['g_vars']['page']['user_budget'] < $this->_tpl_vars['g_vars']['page']['test']['1']['test_price']): ?><font color="#800000">Please add money</font><?php else: ?><a href="buy.php?action=buy&testid=<?php echo $this->_tpl_vars['g_vars']['page']['test']['1']['testid']; ?>
">Buy now</a><?php endif; ?></b></td></tr>
</table></p>

<h2>Add Money</h2>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_notifications.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method=post action="buy.php?action=coupon&testid=<?php echo $this->_tpl_vars['g_vars']['page']['test']['1']['testid']; ?>
">
<p>Please enter a coupon code to add money to your account:<br />
<input name="coupon_code" value="" class=inp type=text size=30> <input class=btn type=submit name=bsubmit value=" Submit "></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>