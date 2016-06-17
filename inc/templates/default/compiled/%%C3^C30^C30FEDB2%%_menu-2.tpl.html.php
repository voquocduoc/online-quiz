<?php /* Smarty version 2.6.14, created on 2006-10-07 19:04:02
         compiled from _menu-2.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getImplode', '_menu-2.tpl.html', 12, false),)), $this); ?>
<p><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>
<table cellpadding=0 cellspacing=0 border=0>
<tr><td width=3><img src="images/1x1.gif" width=3 height=1></td>
<?php $_from = $this->_tpl_vars['g_vars']['page']['menu_2_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foreach1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foreach1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
        $this->_foreach['foreach1']['iteration']++;
?>
<?php if (! ($this->_foreach['foreach1']['iteration'] <= 1)): ?>
<td width=5><img src="images/1x1.gif" width=5 height=1></td>
<?php endif; ?>
<td><table cellpadding=0 cellspacing=0 border=0 width="100%" style="border-left: 1px solid #E0E7F6; border-top: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3;"><tr><td colspan=3 height=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=1></td></tr><tr style="background: url(images/barsmall-<?php if ($this->_tpl_vars['g_vars']['page']['selected_tab'] == $this->_tpl_vars['key']): ?>1<?php else: ?>0<?php endif; ?>-background.gif) repeat-x;"><td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=24></td><td align=center>&nbsp;&nbsp;<b><?php if ($this->_tpl_vars['g_vars']['page']['selected_tab'] == $this->_tpl_vars['key']):  echo $this->_tpl_vars['val'][1];  else: ?><a class=bar2 href="<?php echo $this->_tpl_vars['val'][0]; ?>
"><?php echo $this->_tpl_vars['val'][1]; ?>
</a><?php endif; ?></b>&nbsp;&nbsp;</td><td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=24></td></tr><tr><td colspan=3 height=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=1></td></tr></table></td>
<?php endforeach; endif; unset($_from); ?>
<td width=3><img src="images/1x1.gif" width=3 height=1></td></tr>
</table>
</td><td width=53 align=right><a id="infobar_button" href="javascript:ShowInfoBar(<?php if ($_COOKIE['igt_showinfobar'] && $_COOKIE['igt_showinfobar'] == 'Y'): ?>false<?php else: ?>true<?php endif; ?>);" title="<?php echo $this->_tpl_vars['lngstr']['tooltip_button']; ?>
"><img src="images/dialog-info-small.gif" width=24 height=24 border=0></a><img src="images/1x1.gif" width=5 height=1><a id="helpbar_button" href="guide/guide.php?page=<?php echo smarty_function_getImplode(array('glue' => ".",'pieces' => $this->_tpl_vars['g_vars']['page']['location']), $this);?>
" title="<?php echo $this->_tpl_vars['lngstr']['help_button']; ?>
" target="_blank"><img src="images/dialog-help-small.gif" width=24 height=24 border=0></a></td><td width=3><img src="images/1x1.gif" width=3 height=1></td></tr></table>
<table cellpadding=0 cellspacing=0 border=0 width="100%" style="background: #CFD6E3;"><tr><td height=1><img src="images/1x1.gif" width=1 height=1></tr></table>