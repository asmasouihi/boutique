<?php
/* Smarty version 3.1.39, created on 2021-10-03 22:48:22
  from '/opt/lampp/htdocs/boutique/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a171657a9b9_37796715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46fddb3a10d7e0a9a3a17d026680f4555b7c0853' => 
    array (
      0 => '/opt/lampp/htdocs/boutique/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1631177245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a171657a9b9_37796715 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
