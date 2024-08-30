<?php
/* Smarty version 4.5.2, created on 2024-08-27 14:58:56
  from 'D:\laragon\www\vtigercrm\layouts\v7\modules\Vtiger\uitypes\FieldSearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66cde9b01c7392_12391167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dff826f1af1893d807bb42fc83d0d867d957cd2' => 
    array (
      0 => 'D:\\laragon\\www\\vtigercrm\\layouts\\v7\\modules\\Vtiger\\uitypes\\FieldSearchView.tpl',
      1 => 1715748848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cde9b01c7392_12391167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));?><div class=""><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="listSearchContributor inputElement" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'], ENT_QUOTES, 'UTF-8', true);?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'/></div>
<?php }
}
