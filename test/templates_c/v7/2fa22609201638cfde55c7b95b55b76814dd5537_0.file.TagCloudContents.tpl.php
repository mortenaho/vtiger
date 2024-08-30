<?php
/* Smarty version 4.5.2, created on 2024-08-27 14:36:23
  from 'D:\laragon\www\vtigercrm\layouts\v7\modules\Vtiger\dashboards\TagCloudContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66cde46783b8b3_38469742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fa22609201638cfde55c7b95b55b76814dd5537' => 
    array (
      0 => 'D:\\laragon\\www\\vtigercrm\\layouts\\v7\\modules\\Vtiger\\dashboards\\TagCloudContents.tpl',
      1 => 1715748848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cde46783b8b3_38469742 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tagsContainer" id="tagCloud"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAGS']->value, 'TAG_MODEL', false, 'TAG_ID');
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAG_ID']->value => $_smarty_tpl->tpl_vars['TAG_MODEL']->value) {
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('TAG_LABEL', $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName());?><span class="tag" title="<?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getType();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><span class="tagName display-inline-block textOverflowEllipsis cursorPointer" data-tagid="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
</span></span><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
