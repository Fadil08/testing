<?php
/* Smarty version 3.1.36, created on 2024-10-14 03:49:17
  from 'plugins-8-plugins-blocks-browse-blocks-browse:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670c243dc0d9b2_98479524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bffecfe7556ca73e3f836f33575e0feb5b08d2b' => 
    array (
      0 => 'plugins-8-plugins-blocks-browse-blocks-browse:block.tpl',
      1 => 1612563384,
      2 => 'plugins-8-plugins-blocks-browse-blocks-browse',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670c243dc0d9b2_98479524 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_browse">
	<h2 class="title">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.browse"),$_smarty_tpl ) );?>

	</h2>

	<nav class="content" role="navigation" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.browse"),$_smarty_tpl ) ) ));?>
">
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['browseCategories']->value) {?>
				<li class="has_submenu">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.browse.category"),$_smarty_tpl ) );?>

					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['browseCategories']->value, 'browseCategory');
$_smarty_tpl->tpl_vars['browseCategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['browseCategory']->value) {
$_smarty_tpl->tpl_vars['browseCategory']->do_else = false;
?>
							<li class="category_<?php echo $_smarty_tpl->tpl_vars['browseCategory']->value->getId();
if ($_smarty_tpl->tpl_vars['browseCategory']->value->getParentId()) {?> is_sub<?php }
if ($_smarty_tpl->tpl_vars['browseBlockSelectedCategory']->value == $_smarty_tpl->tpl_vars['browseCategory']->value->getPath()) {?> current<?php }?>">
								<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"catalog",'op'=>"category",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['browseCategory']->value->getPath() ))),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['browseCategory']->value->getLocalizedTitle() ));?>

								</a>
							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</li>
			<?php }?>
		</ul>
	</nav>
</div><!-- .block_browse -->
<?php }
}
