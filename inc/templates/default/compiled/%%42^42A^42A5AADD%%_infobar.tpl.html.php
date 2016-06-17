<?php /* Smarty version 2.6.14, created on 2006-10-08 14:00:17
         compiled from _infobar.tpl.html */ ?>
<?php if ($this->_tpl_vars['g_vars']['page']['infobar']): ?>
<div id="infobar" style="display: <?php if ($_COOKIE['igt_showinfobar'] && $_COOKIE['igt_showinfobar'] == 'Y'): ?>block<?php else: ?>none<?php endif; ?>;"><table cellpadding=0 cellspacing=0 border=0 width="97%" align=center style="border: 1px solid #8097D1; background-color: #F3F6FF;">
<tr><td width=32 vAlign=top style="padding: 5px;"><img src="images/dialog-info.gif" width=32 height=32></td><td width="100%" vAlign=middle style="padding: 5px;"><a href="javascript:ShowInfoBar(false);" title="<?php echo $this->_tpl_vars['lngstr']['tooltip_closebar']; ?>
"><img src="images/button-cross-infobar.gif" align=right width=20 height=20 border=0></a>
<?php echo $this->_tpl_vars['g_vars']['page']['infobar']; ?>

</td></tr></table></div>
<?php endif; ?>