<?php /* Smarty version Smarty-3.1.8, created on 2013-05-05 23:48:24
         compiled from "/var/www/usingziicomp/prestashop/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41225564651872808dbdf78-22265194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae4b495088348321ac4a5eedf2221b6f122106c' => 
    array (
      0 => '/var/www/usingziicomp/prestashop/modules/feeder/feederHeader.tpl',
      1 => 1360463448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41225564651872808dbdf78-22265194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51872808dec6c2_63279007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51872808dec6c2_63279007')) {function content_51872808dec6c2_63279007($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/usingziicomp/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>