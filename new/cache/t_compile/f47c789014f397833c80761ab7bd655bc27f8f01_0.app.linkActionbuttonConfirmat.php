<?php
/* Smarty version 3.1.36, created on 2024-11-07 18:50:33
  from 'app:linkActionbuttonConfirmat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_672c9b791e0734_21844461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f47c789014f397833c80761ab7bd655bc27f8f01' => 
    array (
      0 => 'app:linkActionbuttonConfirmat',
      1 => 1612563383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672c9b791e0734_21844461 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['titleIcon']->value) {
$_smarty_tpl->_assignInScope('titleIcon', "modal_confirm");
}
echo '<script'; ?>
>
	$(function() {
		$('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonSelector']->value,'javascript' ));?>
').pkpHandler(
			'$.pkp.controllers.linkAction.LinkActionHandler',
			{
				actionRequest: '$.pkp.classes.linkAction.ModalRequest',
				actionRequestOptions: {
					modalHandler: '$.pkp.controllers.modal.ButtonConfirmationModalHandler',
					title: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"form.confirmSubmit.title"),$_smarty_tpl ) ));?>
,
					okButton: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.ok"),$_smarty_tpl ) ));?>
,
					cancelButton: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.cancel"),$_smarty_tpl ) ));?>
,
					dialogText: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['dialogText']->value),$_smarty_tpl ) ));?>
,
					$button: $(<?php echo json_encode($_smarty_tpl->tpl_vars['buttonSelector']->value);?>
),
					titleIcon: <?php echo json_encode($_smarty_tpl->tpl_vars['titleIcon']->value);?>
,
					width: 'auto'
				},
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
