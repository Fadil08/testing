<?php
/* Smarty version 3.1.36, created on 2024-10-14 03:21:17
  from 'plugins-2-plugins-blocks-languageToggle-blocks-languageToggle:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670c1dad349935_97548705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a36fadac755bc2e40d7b486922be12ea648485ee' => 
    array (
      0 => 'plugins-2-plugins-blocks-languageToggle-blocks-languageToggle:block.tpl',
      1 => 1612563253,
      2 => 'plugins-2-plugins-blocks-languageToggle-blocks-languageToggle',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670c1dad349935_97548705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/jurnal.untag-banyuwangi.ac.id/new/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['enableLanguageToggle']->value) {?>
<div class="pkp_block block_language">
	<h2 class="title">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.language"),$_smarty_tpl ) );?>

	</h2>

	<div class="content">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languageToggleLocales']->value, 'localeName', false, 'localeKey');
$_smarty_tpl->tpl_vars['localeName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
$_smarty_tpl->tpl_vars['localeName']->do_else = false;
?>
				<li class="locale_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeKey']->value ));
if ($_smarty_tpl->tpl_vars['localeKey']->value == $_smarty_tpl->tpl_vars['currentLocale']->value) {?> current<?php }?>" lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['localeKey']->value,"_","-");?>
">
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"user",'op'=>"setLocale",'path'=>$_smarty_tpl->tpl_vars['localeKey']->value,'source'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
						<?php echo $_smarty_tpl->tpl_vars['localeName']->value;?>

					</a>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div><!-- .block_language -->
<?php }
}
}
