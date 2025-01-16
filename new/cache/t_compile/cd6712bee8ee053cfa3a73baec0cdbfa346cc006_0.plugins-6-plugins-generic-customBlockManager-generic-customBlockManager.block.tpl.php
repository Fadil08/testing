<?php
/* Smarty version 3.1.36, created on 2024-10-14 03:17:21
  from 'plugins-6-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670c1cc1d376d8_47306705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd6712bee8ee053cfa3a73baec0cdbfa346cc006' => 
    array (
      0 => 'plugins-6-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl',
      1 => 1612563384,
      2 => 'plugins-6-plugins-generic-customBlockManager-generic-customBlockManager',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670c1cc1d376d8_47306705 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_custom" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customBlockId']->value ));?>
">
	<h2 class="title<?php if (!$_smarty_tpl->tpl_vars['showName']->value) {?> pkp_screen_reader<?php }?>"><?php echo $_smarty_tpl->tpl_vars['customBlockTitle']->value;?>
</h2>
	<div class="content">
		<?php echo $_smarty_tpl->tpl_vars['customBlockContent']->value;?>

	</div>
</div>
<?php }
}
