<?php
/* Smarty version 3.1.36, created on 2024-10-15 02:38:36
  from 'plugins-11-plugins-generic-orcidProfile-generic-orcidProfile:settingsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670d652c4fe4c8_56186297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3068fc5d674fc764b9eae09816ec4aab5cbdac30' => 
    array (
      0 => 'plugins-11-plugins-generic-orcidProfile-generic-orcidProfile:settingsForm.tpl',
      1 => 1612563384,
      2 => 'plugins-11-plugins-generic-orcidProfile-generic-orcidProfile',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_670d652c4fe4c8_56186297 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#orcidProfileSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="orcidProfileSettingsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'op'=>"manage",'category'=>"generic",'plugin'=>$_smarty_tpl->tpl_vars['pluginName']->value,'verb'=>"settings",'save'=>true),$_smarty_tpl ) );?>
">
	<div id="orcidProfileSettings">

		<p id="description">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.manager.settings.description"),$_smarty_tpl ) );?>

		</p>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

		<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"orcidProfileSettingsFormNotification"), 0, false);
?>
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"orcidApiSettings",'title'=>"plugins.generic.orcidProfile.manager.settings.title"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"orcidApiSettings",'title'=>"plugins.generic.orcidProfile.manager.settings.title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php if ($_smarty_tpl->tpl_vars['globallyConfigured']->value) {?>
				<p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.manager.settings.description.globallyconfigured"),$_smarty_tpl ) );?>

				</p>
				<?php }?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"orcidProfileAPIPath",'type'=>"select",'translate'=>"true",'from'=>$_smarty_tpl->tpl_vars['orcidApiUrls']->value,'selected'=>$_smarty_tpl->tpl_vars['orcidProfileAPIPath']->value,'required'=>"true",'label'=>"plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath",'disabled'=>$_smarty_tpl->tpl_vars['globallyConfigured']->value),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"orcidClientId",'value'=>$_smarty_tpl->tpl_vars['orcidClientId']->value,'required'=>"true",'label'=>"plugins.generic.orcidProfile.manager.settings.orcidClientId",'maxlength'=>"40",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'disabled'=>$_smarty_tpl->tpl_vars['globallyConfigured']->value),$_smarty_tpl ) );?>

				<?php if ($_smarty_tpl->tpl_vars['globallyConfigured']->value) {?>
					<p>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.manager.settings.orcidClientSecret"),$_smarty_tpl ) );?>
: <i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.manager.settings.hidden"),$_smarty_tpl ) );?>
</i>
					</p>
				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"orcidClientSecret",'value'=>$_smarty_tpl->tpl_vars['orcidClientSecret']->value,'required'=>"true",'label'=>"plugins.generic.orcidProfile.manager.settings.orcidClientSecret",'maxlength'=>"40",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'disabled'=>$_smarty_tpl->tpl_vars['globallyConfigured']->value),$_smarty_tpl ) );?>

				<?php }?>
			<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"orcidApiSettings",'title'=>"plugins.generic.orcidProfile.manager.settings.title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"sendMailToAuthorsOnPublication",'title'=>"plugins.generic.orcidProfile.manager.settings.mailSectionTitle",'list'=>"true"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('for'=>"sendMailToAuthorsOnPublication",'title'=>"plugins.generic.orcidProfile.manager.settings.mailSectionTitle",'list'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"sendMailToAuthorsOnPublication",'label'=>"plugins.generic.orcidProfile.manager.settings.sendMailToAuthorsOnPublication",'id'=>"sendMailToAuthorsOnPublication",'checked'=>$_smarty_tpl->tpl_vars['sendMailToAuthorsOnPublication']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('for'=>"sendMailToAuthorsOnPublication",'title'=>"plugins.generic.orcidProfile.manager.settings.mailSectionTitle",'list'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"logLevel",'title'=>"plugins.generic.orcidProfile.manager.settings.logSectionTitle"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('for'=>"logLevel",'title'=>"plugins.generic.orcidProfile.manager.settings.logSectionTitle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.orcidProfile.manager.settings.logLevel.help"),$_smarty_tpl ) );?>
</p>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('id'=>"logLevel",'name'=>"logLevel",'type'=>"select",'from'=>$_smarty_tpl->tpl_vars['logLevelOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['logLevel']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('for'=>"logLevel",'title'=>"plugins.generic.orcidProfile.manager.settings.logSectionTitle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>

		<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
	</div>
</form>
<?php }
}
