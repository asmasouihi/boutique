<?php
/* Smarty version 3.1.39, created on 2021-10-06 12:13:51
  from '/opt/lampp/htdocs/boutique/modules/ps_checkout/views/templates/hook/displayProductPriceBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615d76df41aaf8_86765787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd52166333b7db41ba2fe76dfc0be1010855785' => 
    array (
      0 => '/opt/lampp/htdocs/boutique/modules/ps_checkout/views/templates/hook/displayProductPriceBlock.tpl',
      1 => 1633086737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615d76df41aaf8_86765787 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['totalCartPrice']->value)) && $_smarty_tpl->tpl_vars['payIn4XisProductPageEnabled']->value == true) {?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['content_only']->value)) || $_smarty_tpl->tpl_vars['content_only']->value === 0) {?>
    <div
      data-pp-message
      data-pp-placement="product"
      data-pp-style-layout="text"
      data-pp-style-logo-type="inline"
      data-pp-style-text-color="black"
      data-pp-amount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totalCartPrice']->value, ENT_QUOTES, 'UTF-8');?>
"
    ></div>
    <?php echo '<script'; ?>
>
      window.ps_checkoutPayPalSdkInstance
        && window.ps_checkoutPayPalSdkInstance.Messages
        && window.ps_checkoutPayPalSdkInstance.Messages().render('[data-pp-message]');
    <?php echo '</script'; ?>
>
  <?php }
}
}
}
