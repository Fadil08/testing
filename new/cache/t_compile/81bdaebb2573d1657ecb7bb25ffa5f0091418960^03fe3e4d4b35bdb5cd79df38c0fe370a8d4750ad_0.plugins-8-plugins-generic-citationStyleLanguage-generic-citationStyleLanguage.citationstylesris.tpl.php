<?php
/* Smarty version 3.1.36, created on 2024-10-16 09:16:05
  from 'plugins-8-plugins-generic-citationStyleLanguage-generic-citationStyleLanguage:citationstylesris.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670f13d52a5249_66029165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03fe3e4d4b35bdb5cd79df38c0fe370a8d4750ad' => 
    array (
      0 => 'plugins-8-plugins-generic-citationStyleLanguage-generic-citationStyleLanguage:citationstylesris.tpl',
      1 => 1612563384,
      2 => 'plugins-8-plugins-generic-citationStyleLanguage-generic-citationStyleLanguage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670f13d52a5249_66029165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/jurnal.untag-banyuwangi.ac.id/new/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/www/wwwroot/jurnal.untag-banyuwangi.ac.id/new/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('containerTitle', "container-title");
$_smarty_tpl->_assignInScope('containerTitleShort', "container-title-short");?>
TY  - JOUR
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citationData']->value->author, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
AU  - <?php echo $_smarty_tpl->tpl_vars['author']->value->family;?>
, <?php echo $_smarty_tpl->tpl_vars['author']->value->given;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
PY  - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['citationData']->value->issued->raw,"%Y/%m/%d");?>

Y2  - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['citationData']->value->accessed->raw,"%Y/%m/%d");?>

TI  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->title;?>

JF  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->{$_smarty_tpl->tpl_vars['containerTitle']->value};?>

JA  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->{$_smarty_tpl->tpl_vars['containerTitleShort']->value};?>

VL  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->volume;?>

IS  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->issue;?>

SE  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->section;?>

DO  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->DOI;?>

UR  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->URL;?>

SP  - <?php echo $_smarty_tpl->tpl_vars['citationData']->value->page;?>

AB  - <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['citationData']->value->abstract,"\r\n",''),"\n",'');?>

ER  -
<?php }
}
