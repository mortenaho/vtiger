<?php
/* Smarty version 4.5.2, created on 2024-08-27 14:42:10
  from 'D:\laragon\www\vtigercrm\layouts\v7\modules\Settings\ExtensionStore\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66cde5c2c279d5_21289686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9bbfc8412543eec0789aaed5088a6a184cc7709' => 
    array (
      0 => 'D:\\laragon\\www\\vtigercrm\\layouts\\v7\\modules\\Settings\\ExtensionStore\\Index.tpl',
      1 => 1715748848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cde5c2c279d5_21289686 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm-12 col-xs-12 content-area" id="importModules"><div class="row"><div class="col-sm-4 col-xs-4"><div class="row"><div class="col-sm-8 col-xs-8"><input type="text" id="searchExtension" class="extensionSearch form-control" placeholder="<?php echo vtranslate('Search for an extension..',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></div></div></div></div><br><div class="contents row"><div class="col-sm-12 col-xs-12" id="extensionContainer"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('ExtensionModules.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("CardSetupModals.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }
}
