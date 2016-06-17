<?php /* Smarty version 2.6.14, created on 2006-12-16 17:39:57
         compiled from config-main.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getRowNo', 'config-main.tpl.html', 15, false),)), $this); ?>
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

<p><form method=post action="config.php">
<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">

<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection('div_config_website')"><?php echo $this->_tpl_vars['lngstr']['page_config']['section_site']; ?>
</td></tr>
<tr valign=top><td class=rowone colspan=2><div id=div_config_website style="display:<?php if (! $_COOKIE['div_config_website'] || $_COOKIE['div_config_website'] == 'Y'): ?>block<?php else: ?>none<?php endif; ?>"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_config']['list_length']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['list_length_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_config']['text_editor']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['text_editor_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_config']['store_logs']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['store_logs_content']; ?>
</td></tr>
</table></div></td></tr>

<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection('div_config_registration')"><?php echo $this->_tpl_vars['lngstr']['page_config']['section_registration']; ?>
</td></tr>
<tr valign=top><td class=rowone colspan=2><div id=div_config_registration style="display:<?php if (! $_COOKIE['div_config_registration'] || $_COOKIE['div_config_registration'] == 'Y'): ?>block<?php else: ?>none<?php endif; ?>"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_config']['can_register']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['can_register_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_config']['upon_registration']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['upon_registration_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_config']['reg_intro']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['reg_intro_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['username']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['username_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['password']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['password_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['email']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['email_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['title']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['title_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['firstname']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['firstname_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['lastname']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['lastname_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['middlename']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['middlename_content']; ?>
</td></tr>

<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection('div_config_personal')"><?php echo $this->_tpl_vars['lngstr']['page_users']['section_personal']; ?>
</td></tr>
<tr valign=top><td class=rowone colspan=2><div id=div_config_personal style="display:<?php if (! $_COOKIE['div_config_personal'] || $_COOKIE['div_config_personal'] == 'Y'): ?>block<?php else: ?>none<?php endif; ?>"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['address']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['address_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['city']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['city_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['state']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['state_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['zip']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['zip_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['country']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['country_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['phone']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['phone_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['fax']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['fax_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['mobile']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['mobile_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['pager']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['pager_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['ipphone']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['ipphone_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['webpage']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['webpage_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['icq']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['icq_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['msn']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['msn_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['aol']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['aol_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['gender']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['gender_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['husbandwife']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['husbandwife_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['children']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['children_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['trainer']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['trainer_content']; ?>
</td></tr>
</table></div></td></tr>

<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection('div_config_work')"><?php echo $this->_tpl_vars['lngstr']['page_users']['section_work']; ?>
</td></tr>
<tr valign=top><td class=rowone colspan=2><div id=div_config_work style="display:<?php if (! $_COOKIE['div_config_work'] || $_COOKIE['div_config_work'] == 'Y'): ?>block<?php else: ?>none<?php endif; ?>"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['company']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['company_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['cposition']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['cposition_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['department']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['department_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['coffice']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['coffice_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['caddress']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['caddress_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['ccity']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['ccity_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['cstate']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['cstate_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['czip']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['czip_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['ccountry']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['ccountry_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['cphone']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['cphone_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['cfax']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['cfax_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['cmobile']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['cmobile_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['cpager']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['cpager_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['cipphone']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['cipphone_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['lngstr']['page_users']['cwebpage']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['cwebpage_content']; ?>
</td></tr>

</table></div></td></tr>

<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection('div_config_additional')"><?php echo $this->_tpl_vars['lngstr']['page_users']['section_additional']; ?>
</td></tr>
<tr valign=top><td class=rowone colspan=2><div id=div_config_additional style="display:<?php if (! $_COOKIE['div_config_additional'] || $_COOKIE['div_config_additional'] == 'Y'): ?>block<?php else: ?>none<?php endif; ?>"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield1_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield1_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield1_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield1_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield1_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield1_caption_content']; ?>
</td></tr>

<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield2_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield2_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield2_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield2_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield2_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield2_caption_content']; ?>
</td></tr>

<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield3_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield3_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield3_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield3_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield3_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield3_caption_content']; ?>
</td></tr>

<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield4_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield4_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield4_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield4_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield4_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield4_caption_content']; ?>
</td></tr>

<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield5_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield5_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield5_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield5_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield5_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield5_caption_content']; ?>
</td></tr>

<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield6_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield6_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield6_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield6_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield6_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield6_caption_content']; ?>
</td></tr>

<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield7_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield7_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield7_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield7_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield7_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield7_caption_content']; ?>
</td></tr>

<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield8_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield8_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield8_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield8_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield8_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield8_caption_content']; ?>
</td></tr>

<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield9_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield9_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield9_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield9_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield9_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield9_caption_content']; ?>
</td></tr>

<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield10_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield10_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield10_type_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield10_type_content']; ?>
</td></tr>
<tr class=<?php echo smarty_function_getRowNo(array(), $this);?>
><td width="30%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield10_caption_label']; ?>
</td><td width="70%"><?php echo $this->_tpl_vars['g_vars']['page']['userfield10_caption_content']; ?>
</td></tr>

</table></div></td></tr>
</table></div></td></tr>

</table>
<p class=center><input class=btn type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_update']; ?>
 "> <input class=btn type=submit name=bcancel value=" <?php echo $this->_tpl_vars['lngstr']['button_cancel']; ?>
 "></form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>