<?php
/* Smarty version 3.1.36, created on 2024-10-15 16:28:11
  from 'app:controllersgridarticleGal' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670e279b36c021_43007465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf99b8f1da43d5df32ff416c8b3fb35181f38d64' => 
    array (
      0 => 'app:controllersgridarticleGal',
      1 => 1612563253,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e279b36c021_43007465 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#editArticleGalleyMetadataTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
<?php echo '</script'; ?>
>
<div id="editArticleGalleyMetadataTabs">
	<ul>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'op'=>"editGalleyTab",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'publicationId'=>$_smarty_tpl->tpl_vars['publicationId']->value,'representationId'=>$_smarty_tpl->tpl_vars['representationId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"grid.action.editMetadata"),$_smarty_tpl ) );?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['enableIdentifiers']->value) {?>
			<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'op'=>"identifiers",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'publicationId'=>$_smarty_tpl->tpl_vars['publicationId']->value,'representationId'=>$_smarty_tpl->tpl_vars['representationId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.identifiers"),$_smarty_tpl ) );?>
</a></li>
		<?php }?>
	</ul>
</div>
<?php }
}
