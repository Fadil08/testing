<?php
/* Smarty version 3.1.36, created on 2024-10-15 13:13:05
  from 'app:frontendpageseditorialTea' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670df9e1493639_33597983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63c3703926f6cd217d548df875d7e1620d1ef19f' => 
    array (
      0 => 'app:frontendpageseditorialTea',
      1 => 1612563383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/editLink.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_670df9e1493639_33597983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.editorialTeam"), 0, false);
?>

<div class="page page_editorial_team">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.editorialTeam"), 0, false);
?>
	<h1>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.editorialTeam"),$_smarty_tpl ) );?>

	</h1>
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"context",'anchor'=>"masthead",'sectionTitleKey'=>"about.editorialTeam"), 0, false);
?>
	<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('editorialTeam');?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
