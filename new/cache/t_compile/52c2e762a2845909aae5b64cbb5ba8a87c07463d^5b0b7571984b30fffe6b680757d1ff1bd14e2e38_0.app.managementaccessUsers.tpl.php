<?php
/* Smarty version 3.1.36, created on 2024-10-15 02:23:34
  from 'app:managementaccessUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670d61a6c9e290_16724355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b0b7571984b30fffe6b680757d1ff1bd14e2e38' => 
    array (
      0 => 'app:managementaccessUsers.tpl',
      1 => 1612563383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670d61a6c9e290_16724355 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"users-and-roles",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'usersUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.user.UserGridHandler",'op'=>"fetchGrid",'oldUserId'=>$_smarty_tpl->tpl_vars['oldUserId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"userGridContainer",'url'=>$_smarty_tpl->tpl_vars['usersUrl']->value),$_smarty_tpl ) );?>

<?php }
}
