<?php
/* Smarty version 3.1.36, created on 2024-10-14 20:47:38
  from 'app:frontendcomponentsnotific' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670d12ea0e6764_83085699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '959cdfb9c139350b3e526eb67ae0136140909d66' => 
    array (
      0 => 'app:frontendcomponentsnotific',
      1 => 1612563253,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670d12ea0e6764_83085699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/jurnal.untag-banyuwangi.ac.id/new/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="cmp_notification <?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value )),' ','_');?>
">
	<?php if ($_smarty_tpl->tpl_vars['messageKey']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['messageKey']->value),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	<?php }?>
</div>
<?php }
}
