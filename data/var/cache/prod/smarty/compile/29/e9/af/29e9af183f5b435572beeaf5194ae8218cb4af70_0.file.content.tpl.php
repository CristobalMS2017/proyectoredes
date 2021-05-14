<?php
/* Smarty version 3.1.39, created on 2021-05-14 01:06:34
  from '/var/www/html/administrador_cristobal/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609e055abc02c0_59380810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29e9af183f5b435572beeaf5194ae8218cb4af70' => 
    array (
      0 => '/var/www/html/administrador_cristobal/themes/new-theme/template/content.tpl',
      1 => 1619601862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609e055abc02c0_59380810 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
