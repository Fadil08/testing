<?php
/* Smarty version 3.1.36, created on 2024-10-14 03:49:17
  from 'plugins-8-plugins-blocks-makeSubmission-blocks-makeSubmission:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670c243dbf03f2_51968726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7939cd15da9a23097b120dcc58dd356d60c09a15' => 
    array (
      0 => 'plugins-8-plugins-blocks-makeSubmission-blocks-makeSubmission:block.tpl',
      1 => 1612563384,
      2 => 'plugins-8-plugins-blocks-makeSubmission-blocks-makeSubmission',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670c243dbf03f2_51968726 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_make_submission">
	<h2 class="pkp_screen_reader">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.makeSubmission.linkLabel"),$_smarty_tpl ) );?>

	</h2>

	<div class="content">
		<a class="block_make_submission_link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"about",'op'=>"submissions"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.makeSubmission.linkLabel"),$_smarty_tpl ) );?>

		</a>
	</div>
</div>
<?php }
}
