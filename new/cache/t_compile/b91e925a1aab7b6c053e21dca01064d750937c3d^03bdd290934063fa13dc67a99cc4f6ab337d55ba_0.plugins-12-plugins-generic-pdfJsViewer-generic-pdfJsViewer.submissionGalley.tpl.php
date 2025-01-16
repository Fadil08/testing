<?php
/* Smarty version 3.1.36, created on 2024-10-14 22:26:36
  from 'plugins-12-plugins-generic-pdfJsViewer-generic-pdfJsViewer:submissionGalley.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670d2a1cac1143_21677268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03bdd290934063fa13dc67a99cc4f6ab337d55ba' => 
    array (
      0 => 'plugins-12-plugins-generic-pdfJsViewer-generic-pdfJsViewer:submissionGalley.tpl',
      1 => 1612563384,
      2 => 'plugins-12-plugins-generic-pdfJsViewer-generic-pdfJsViewer',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670d2a1cac1143_21677268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/jurnal.untag-banyuwangi.ac.id/new/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pdfUrl", null);
if ($_smarty_tpl->tpl_vars['isLatestPublication']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"download",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['bestId']->value,$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value),$_smarty_tpl->tpl_vars['galleyFile']->value->getId() )),'escape'=>false),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"download",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['bestId']->value,'version',$_smarty_tpl->tpl_vars['galleyPublication']->value->getId(),$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value),$_smarty_tpl->tpl_vars['galleyFile']->value->getId() )),'escape'=>false),$_smarty_tpl ) );
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "parentUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['submissionNoun']->value,'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['bestId']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "galleyTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.representationOfTitle",'representation'=>$_smarty_tpl->tpl_vars['galley']->value->getLabel(),'title'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getLocalizedFullTitle() ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "datePublished", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.outdatedVersion",'datePublished'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['galleyPublication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatLong']->value),'urlRecentVersion'=>$_smarty_tpl->tpl_vars['parentUrl']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['displayTemplateResource']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['submission']->value->getLocalizedTitle(),'parentUrl'=>$_smarty_tpl->tpl_vars['parentUrl']->value,'pdfUrl'=>$_smarty_tpl->tpl_vars['pdfUrl']->value,'galleyTitle'=>$_smarty_tpl->tpl_vars['galleyTitle']->value,'datePublished'=>$_smarty_tpl->tpl_vars['datePublished']->value), 0, true);
}
}
