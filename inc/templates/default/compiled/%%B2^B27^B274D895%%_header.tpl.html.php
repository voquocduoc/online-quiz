<?php /* Smarty version 2.6.14, created on 2007-01-21 00:02:41
         compiled from _header.tpl.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $this->_tpl_vars['lngstr']['text_direction']; ?>
"><head><title><?php echo $this->_tpl_vars['g_vars']['page']['title'];  echo $this->_tpl_vars['lngstr']['item_separator'];  echo $this->_tpl_vars['srv_settings']['title_postfix']; ?>
</title>
<meta http-equiv="Content-Language" content="<?php echo $this->_tpl_vars['lngstr']['meta_contentlanguage']; ?>
">
<meta content="text/html; charset=<?php echo $this->_tpl_vars['lngstr']['meta_charset']; ?>
" http-equiv=Content-Type>
<link rel="SHORTCUT ICON" href="/favicon.ico">
<link href="shared/style.css" rel=stylesheet type=text/css>
<script language=javascript src="shared/shared.js" type="text/javascript"></script>
<?php echo $this->_tpl_vars['g_vars']['page']['meta']; ?>
</head>
<body bgcolor="#ffffff"<?php echo $this->_tpl_vars['g_vars']['page']['body_tag'];  if ($this->_tpl_vars['g_vars']['page']['content_protection']): ?>oncontextmenu="return false;" ondragstart="return false;" onselectstart="return false;"<?php endif; ?>>
<?php if ($this->_tpl_vars['g_vars']['page']['content_protection']): ?><script language="JavaScript1.1">
// <!--
var debug = true;
function right(e) {
if (navigator.appName == 'Netscape' && (e.which == 3 || e.which == 2)) return false;
else if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) {
alert('Please do not copy this page content'); return false;
}
return true;
}
document.onmousedown=right;
if (document.layers)
window.captureEvents(Event.MOUSEDOWN);
window.onmousedown=right; //--></script><?php endif; ?>
<p><table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr><td width=200><?php echo $this->_tpl_vars['lngstr']['branding']['top_logo']; ?>
</td><td width="100%" align=center class=top_section><?php echo $this->_tpl_vars['g_vars']['page']['title']; ?>
</td></tr>
<tr><td colspan=2 height=1 width=100% style="background-color: #E7E9EF;"><img src="images/1x1.gif" width=1 height=1></td></tr>

<?php if (! $this->_tpl_vars['g_vars']['page']['hide_cpanel']): ?>
<tr><td colspan=2>

<table cellpadding=0 cellspacing=0 border=0 width="100%" style="border-left: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3; border-bottom: 1px solid #CFD6E3;">
<tr style="background: url(images/mainbar-background.gif) repeat-x;">
<td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=32></td><td align=center><b><a class=bar1 href="index.php"><?php echo $this->_tpl_vars['lngstr']['panel_home']; ?>
</a></b></td><?php if ($_SESSION['MAIN']['access_questionbank'] > 0): ?>
<td align=center><b><a class=bar1 href="question-bank.php"><?php echo $this->_tpl_vars['lngstr']['panel_questionbank']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_subjects'] > 0): ?>
<td align=center><b><a class=bar1 href="subjects.php"><?php echo $this->_tpl_vars['lngstr']['panel_questionbank']; ?>
</a></b></td>
<?php endif; ?>
<?php if ($_SESSION['MAIN']['access_testmanager'] > 0): ?>
<td align=center><b><a class=bar1 href="test-manager.php"><?php echo $this->_tpl_vars['lngstr']['panel_edittests']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_gradingsystems'] > 0): ?>
<td align=center><b><a class=bar1 href="grades.php"><?php echo $this->_tpl_vars['lngstr']['panel_edittests']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_emailtemplates'] > 0): ?>
<td align=center><b><a class=bar1 href="email-templates.php"><?php echo $this->_tpl_vars['lngstr']['panel_edittests']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_reporttemplates'] > 0): ?>
<td align=center><b><a class=bar1 href="report-templates.php"><?php echo $this->_tpl_vars['lngstr']['panel_edittests']; ?>
</a></b></td>
<?php endif; ?>
<?php if ($_SESSION['MAIN']['access_reportsmanager'] > 0): ?>
<td align=center><b><a class=bar1 href="reports-manager.php"><?php echo $this->_tpl_vars['lngstr']['panel_results']; ?>
</a></b></td>
<?php endif; ?>
<?php if ($_SESSION['MAIN']['access_users'] > 0): ?>
<td align=center><b><a class=bar1 href="users.php"><?php echo $this->_tpl_vars['lngstr']['panel_usersandgroups']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_groups'] > 0): ?>
<td align=center><b><a class=bar1 href="groups.php"><?php echo $this->_tpl_vars['lngstr']['panel_usersandgroups']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_config'] > 0): ?>
<td align=center><b><a class=bar1 href="config.php"><?php echo $this->_tpl_vars['lngstr']['panel_usersandgroups']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_visitors'] > 0): ?>
<td align=center><b><a class=bar1 href="visitors.php"><?php echo $this->_tpl_vars['lngstr']['panel_usersandgroups']; ?>
</a></b></td>
<?php endif; ?>
<td align=center><b><a class=bar1 href="signout.php"><?php echo $this->_tpl_vars['lngstr']['panel_signout']; ?>
</a></b></td>
<td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=32></td></tr></table>
</td></tr>
<?php endif; ?>
<tr><td colspan=2 height=7 width=100%><img src="images/1x1.gif" width=1 height=7></td></tr>
<tr><td colspan=2>

<table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr vAlign=top><td width="1%"><img src="images/1x1.gif" width=2 height=1></td><td>

<table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr><td class=box_area>