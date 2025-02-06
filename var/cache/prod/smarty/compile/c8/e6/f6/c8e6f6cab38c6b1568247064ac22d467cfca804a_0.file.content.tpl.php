<?php
/* Smarty version 4.3.4, created on 2025-02-05 16:51:57
  from '/home/corentin_lartigue/corentin/projects/prestashop/admin072diftbpptadtgmjez/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67a3891d4ca766_32701688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e6f6cab38c6b1568247064ac22d467cfca804a' => 
    array (
      0 => '/home/corentin_lartigue/corentin/projects/prestashop/admin072diftbpptadtgmjez/themes/default/template/content.tpl',
      1 => 1732867538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3891d4ca766_32701688 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
