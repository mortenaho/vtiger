<?php
/* Smarty version 4.5.2, created on 2024-08-27 16:55:19
  from 'D:\laragon\www\vtigercrm\layouts\v7\modules\Users\ListViewRecordActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66ce04f7acccd0_00096311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '675cda7e2de1803022134cc9d8785312c2c33a03' => 
    array (
      0 => 'D:\\laragon\\www\\vtigercrm\\layouts\\v7\\modules\\Users\\ListViewRecordActions.tpl',
      1 => 1715748848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ce04f7acccd0_00096311 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="table-actions"><span class="more dropdown action"><span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i title="<?php echo vtranslate("LBL_MORE_OPTIONS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-ellipsis-v icon"></i></span><ul class="dropdown-menu"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status') == 'Active') {
if (Users_Privileges_Model::isPermittedToChangeUsername($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId())) {?><li><a onclick="Settings_Users_List_Js.triggerChangeUsername('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getChangeUsernameUrl();?>
');"><?php echo vtranslate('LBL_CHANGE_USERNAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><li><a onclick="Settings_Users_List_Js.triggerChangePassword('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getChangePwdUrl();?>
');"><?php echo vtranslate('LBL_CHANGE_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ($_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status') == 'Active') {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&parentblock=LBL_USER_MANAGEMENT" name="editlink"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }
}
if ($_smarty_tpl->tpl_vars['IS_MODULE_DELETABLE']->value && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId() != $_smarty_tpl->tpl_vars['USER_MODEL']->value->getId()) {
if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status') == 'Active') {?><li><a href='javascript:Settings_Users_List_Js.triggerDeleteUser("<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDeleteUrl();?>
")'><?php echo vtranslate("LBL_REMOVE_USER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</i></a></li><?php } else { ?><li><a onclick="Settings_Users_List_Js.restoreUser(<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
, event);"><?php echo vtranslate("LBL_RESTORE_USER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><li><a href='javascript:Settings_Users_List_Js.triggerDeleteUser("<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDeleteUrl();?>
", "true")'><?php echo vtranslate("LBL_REMOVE_USER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</i></a></li><?php }
}?></ul></span></div><?php }
}
