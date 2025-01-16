<?php
/* Smarty version 3.1.36, created on 2024-10-14 03:21:17
  from 'plugins-2-plugins-blocks-information-blocks-information:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670c1dad35e6b4_91464878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2996f5cbebf794abacd30f1bf9af84d7b4b5046' => 
    array (
      0 => 'plugins-2-plugins-blocks-information-blocks-information:block.tpl',
      1 => 1612563253,
      2 => 'plugins-2-plugins-blocks-information-blocks-information',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670c1dad35e6b4_91464878 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['forReaders']->value) || !empty($_smarty_tpl->tpl_vars['forAuthors']->value) || !empty($_smarty_tpl->tpl_vars['forLibrarians']->value)) {?>
<div class="pkp_block block_information">
	<h2 class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.information.link"),$_smarty_tpl ) );?>
</h2>
	<div class="content">
		<ul>
			<?php if (!empty($_smarty_tpl->tpl_vars['forReaders']->value)) {?>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"information",'op'=>"readers"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForReaders"),$_smarty_tpl ) );?>

					</a>
				</li>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['forAuthors']->value)) {?>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"information",'op'=>"authors"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForAuthors"),$_smarty_tpl ) );?>

					</a>
				</li>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['forLibrarians']->value)) {?>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"information",'op'=>"librarians"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForLibrarians"),$_smarty_tpl ) );?>

					</a>
				</li>
			<?php }?>
		</ul>
	</div>
</div>
<?php }
}
}
