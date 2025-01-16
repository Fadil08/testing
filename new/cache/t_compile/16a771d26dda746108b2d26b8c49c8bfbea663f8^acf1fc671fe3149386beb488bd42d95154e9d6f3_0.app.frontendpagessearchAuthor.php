<?php
/* Smarty version 3.1.36, created on 2024-10-14 05:55:45
  from 'app:frontendpagessearchAuthor' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670c41e1ec6de0_53401204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf1fc671fe3149386beb488bd42d95154e9d6f3' => 
    array (
      0 => 'app:frontendpagessearchAuthor',
      1 => 1612563253,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_670c41e1ec6de0_53401204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pageTitle', "search.authorDetails");
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="authorDetails">
<h3><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorName']->value ));
if ($_smarty_tpl->tpl_vars['affiliation']->value) {?>, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['affiliation']->value ));
}
if ($_smarty_tpl->tpl_vars['country']->value) {?>, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['country']->value ));
}?></h3>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissions']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
	<?php $_smarty_tpl->_assignInScope('issueId', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication()->getData('issueId'));?>
	<?php $_smarty_tpl->_assignInScope('issue', $_smarty_tpl->tpl_vars['issues']->value[$_smarty_tpl->tpl_vars['issueId']->value]);?>
	<?php $_smarty_tpl->_assignInScope('issueUnavailable', $_smarty_tpl->tpl_vars['issuesUnavailable']->value[$_smarty_tpl->tpl_vars['issueId']->value]);?>
	<?php $_smarty_tpl->_assignInScope('sectionId', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication()->getData('sectionId'));?>
	<?php $_smarty_tpl->_assignInScope('journalId', $_smarty_tpl->tpl_vars['article']->value->getData('contextId'));?>
	<?php $_smarty_tpl->_assignInScope('journal', $_smarty_tpl->tpl_vars['journals']->value[$_smarty_tpl->tpl_vars['journalId']->value]);?>
	<?php $_smarty_tpl->_assignInScope('section', $_smarty_tpl->tpl_vars['sections']->value[$_smarty_tpl->tpl_vars['sectionId']->value]);?>
	<?php if ($_smarty_tpl->tpl_vars['issue']->value->getPublished() && $_smarty_tpl->tpl_vars['section']->value && $_smarty_tpl->tpl_vars['journal']->value) {?>
	<li>

		<em><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getLocalizedName() ));?>
 <?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() )));?>
</a> - <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>
</em><br />
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>
<br/>
		<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestId()),$_smarty_tpl ) );?>
" class="file"><?php if ($_smarty_tpl->tpl_vars['article']->value->getCurrentPublication()->getData('abstract')) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.abstract"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.details"),$_smarty_tpl ) );
}?></a>
		<?php if ((!$_smarty_tpl->tpl_vars['issueUnavailable']->value || $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication()->getData('accessStatus') == @constant('ARTICLE_ACCESS_OPEN'))) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getGalleys(), 'galley', false, NULL, 'galleyList', array (
));
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
			&nbsp;<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getBestId(),$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId() ))),$_smarty_tpl ) );?>
" class="file"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galley']->value->getGalleyLabel() ));?>
</a>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</li>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
