<?php
/* Smarty version 3.1.36, created on 2024-10-15 09:29:59
  from 'plugins-12-plugins-generic-staticPages-generic-staticPages:content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670dc597cff9f9_85403180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cc278e4d19bad5a2ebbd5f5f2c9a41d7e7dd66a' => 
    array (
      0 => 'plugins-12-plugins-generic-staticPages-generic-staticPages:content.tpl',
      1 => 1612563384,
      2 => 'plugins-12-plugins-generic-staticPages-generic-staticPages',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_670dc597cff9f9_85403180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

<h2><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));?>
</h2>
<div class="page">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
