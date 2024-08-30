<?php
/* Smarty version 4.5.2, created on 2024-08-27 16:26:32
  from 'D:\laragon\www\vtigercrm\layouts\v7\modules\MailManager\partials\Menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66cdfe38c06775_25584383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83a8c3df5d5e60b8122b6213e8d740175b9312d3' => 
    array (
      0 => 'D:\\laragon\\www\\vtigercrm\\layouts\\v7\\modules\\MailManager\\partials\\Menubar.tpl',
      1 => 1724696891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cdfe38c06775_25584383 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modules-menu" class="modules-menu mmModulesMenu" style="width: 100%;"><div><span><?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->username();?>
</span><span class="pull-right"><span class="cursorPointer mailbox_refresh" title="<?php echo vtranslate('LBL_Refresh',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-refresh"></i></span>&nbsp;<span class="cursorPointer mailbox_setting" title="<?php echo vtranslate('JSLBL_Settings',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-cog"></i></span></span></div><div id="mail_compose" class="cursorPointer"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo vtranslate('LBL_Compose',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div id='folders_list'></div></div><?php }
}
