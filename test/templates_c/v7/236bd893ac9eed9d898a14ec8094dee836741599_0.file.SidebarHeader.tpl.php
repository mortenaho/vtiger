<?php
/* Smarty version 4.5.2, created on 2024-08-27 16:26:32
  from 'D:\laragon\www\vtigercrm\layouts\v7\modules\MailManager\partials\SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66cdfe38b54135_61744855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '236bd893ac9eed9d898a14ec8094dee836741599' => 
    array (
      0 => 'D:\\laragon\\www\\vtigercrm\\layouts\\v7\\modules\\MailManager\\partials\\SidebarHeader.tpl',
      1 => 1724696891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_66cdfe38b54135_61744855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
">
        <span class="app-indicator-icon fa vicon-mailmanager"></span>
    </div>
</div>
    
<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
