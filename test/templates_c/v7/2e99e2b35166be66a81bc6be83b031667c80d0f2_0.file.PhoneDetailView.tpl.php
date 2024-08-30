<?php
/* Smarty version 4.5.2, created on 2024-08-27 14:40:46
  from 'D:\laragon\www\vtigercrm\layouts\v7\modules\Vtiger\uitypes\PhoneDetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66cde56e22bae0_45326718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e99e2b35166be66a81bc6be83b031667c80d0f2' => 
    array (
      0 => 'D:\\laragon\\www\\vtigercrm\\layouts\\v7\\modules\\Vtiger\\uitypes\\PhoneDetailView.tpl',
      1 => 1715748848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cde56e22bae0_45326718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\laragon\\www\\vtigercrm\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('MODULE', 'PBXManager');
$_smarty_tpl->_assignInScope('MODULEMODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['MODULE']->value));
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));
if ($_smarty_tpl->tpl_vars['MODULEMODEL']->value && $_smarty_tpl->tpl_vars['MODULEMODEL']->value->isActive() && $_smarty_tpl->tpl_vars['FIELD_VALUE']->value) {?>
    <?php $_smarty_tpl->_assignInScope('PERMISSION', PBXManager_Server_Model::checkPermissionForOutgoingCall());?>
    <?php if ($_smarty_tpl->tpl_vars['PERMISSION']->value) {?>
        <?php $_smarty_tpl->_assignInScope('PHONE_FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
        <?php $_smarty_tpl->_assignInScope('PHONE_NUMBER', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['PHONE_FIELD_VALUE']->value,"/[-()\s]/",''));?>
        <a class="phoneField" data-value="<?php echo $_smarty_tpl->tpl_vars['PHONE_NUMBER']->value;?>
" record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" onclick="Vtiger_PBXManager_Js.registerPBXOutboundCall('<?php echo $_smarty_tpl->tpl_vars['PHONE_NUMBER']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
)"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
</a>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

    <?php }
} else { ?>
    <?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

<?php }
}
}
