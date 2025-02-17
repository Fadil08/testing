<?php
/* Smarty version 3.1.36, created on 2024-10-15 08:55:22
  from 'plugins-11-plugins-generic-announcementFeed-generic-announcementFeed:atom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670dbd7a0e68b6_94373432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f398283cef265d93b978b97ad4e10be7a7d61bc' => 
    array (
      0 => 'plugins-11-plugins-generic-announcementFeed-generic-announcementFeed:atom.tpl',
      1 => 1612563253,
      2 => 'plugins-11-plugins-generic-announcementFeed-generic-announcementFeed',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670dbd7a0e68b6_94373432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/jurnal.untag-banyuwangi.ac.id/new/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/www/wwwroot/jurnal.untag-banyuwangi.ac.id/new/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
echo '<?xml ';?>
version="1.0" encoding="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
"<?php echo '?>';?>

<feed xmlns="http://www.w3.org/2005/Atom">
		<id><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selfUrl']->value ));?>
</id>
	<title><?php echo preg_replace('!\s+!u', ' ',call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getLocalizedName(),"html" )));?>
: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.announcements"),$_smarty_tpl ) );?>
</title>
	<updated><?php echo smarty_modifier_regex_replace(smarty_modifier_date_format($_smarty_tpl->tpl_vars['dateUpdated']->value,"%Y-%m-%dT%T%z"),"/00"."$"."/",":00");?>
</updated>

			<link rel="alternate" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath()),$_smarty_tpl ) );?>
" />
	<link rel="self" type="application/atom+xml" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selfUrl']->value ));?>
" />

				<generator uri="http://pkp.sfu.ca/ojs/" version="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ojsVersion']->value ));?>
">Open Journal Systems</generator>
	<?php if ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedDescription()) {?>
		<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['journal']->value->getLocalizedDescription());?>
	<?php } elseif ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('searchDescription')) {?>
		<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('searchDescription'));?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
	<subtitle><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['description']->value),"html" ));?>
</subtitle>
	<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
	<entry>
				<id><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
</id>
		<title><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitleFull()),"html" ));?>
</title>
		<updated><?php echo smarty_modifier_regex_replace(smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value->getDatetimePosted(),"%Y-%m-%dT%T%z"),"/00"."$"."/",":00");?>
</updated>
	  	<author>
			<name><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getLocalizedName()),"html" ));?>
</name>
        </author>
		<link rel="alternate" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
" />
        <?php if ($_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescription()) {?>
		<summary type="html" xml:base="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescription()),"html" ));?>
</summary>
        <?php }?>

								<published><?php echo smarty_modifier_regex_replace(smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value->getDatetimePosted(),"%Y-%m-%dT%T%z"),"/00"."$"."/",":00");?>
</published>
					</entry>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</feed>
<?php }
}
