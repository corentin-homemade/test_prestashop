<?php
/* Smarty version 4.3.4, created on 2025-02-05 16:45:44
  from '/home/corentin_lartigue/corentin/projects/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67a387a856c8a8_36245549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5370bd8abffeb043e8403408e18abaaa3baa10cd' => 
    array (
      0 => '/home/corentin_lartigue/corentin/projects/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1732867538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a387a856c8a8_36245549 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
