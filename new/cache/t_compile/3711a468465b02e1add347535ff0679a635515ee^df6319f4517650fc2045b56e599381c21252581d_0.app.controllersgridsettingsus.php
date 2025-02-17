<?php
/* Smarty version 3.1.36, created on 2024-10-17 08:20:01
  from 'app:controllersgridsettingsus' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_67105831859b93_68838871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6319f4517650fc2045b56e599381c21252581d' => 
    array (
      0 => 'app:controllersgridsettingsus',
      1 => 1612563383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67105831859b93_68838871 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#userDisableForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>
<form class="pkp_form" id="userDisableForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.user.UserGridHandler",'op'=>"disableUser"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>


	<input type="hidden" name="userId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userId']->value ));?>
" />
	<input type="hidden" name="enable" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['enable']->value ));?>
" />

	<?php if ($_smarty_tpl->tpl_vars['enable']->value) {?>
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"grid.user.enableReason",'for'=>"disableReason"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"grid.user.enableReason",'for'=>"disableReason"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"disableReason",'value'=>$_smarty_tpl->tpl_vars['disableReason']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"grid.user.enableReason",'for'=>"disableReason"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } else { ?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"grid.user.disableReason",'for'=>"disableReason"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"grid.user.disableReason",'for'=>"disableReason"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"disableReason",'value'=>$_smarty_tpl->tpl_vars['disableReason']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"grid.user.disableReason",'for'=>"disableReason"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>

</form>
<?php }
}
