<?php
/* Smarty version 3.1.39, created on 2021-10-06 12:16:35
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615d77838df0d1_29033424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256c91bbbc34315fb93df279a63aced553c714da' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1623311149,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615d77838df0d1_29033424 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /opt/lampp/htdocs/boutique/modules/productcomments/views/templates/hook/empty-product-comment.tpl -->
<div id="empty-product-comment" class="product-comment-list-item">
  <?php if ($_smarty_tpl->tpl_vars['post_allowed']->value) {?>
    <button class="btn btn-comment btn-comment-big post-product-comment">
      <i class="material-icons shopping-cart">edit</i>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </button>
  <?php } else { ?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

  <?php }?>
</div>
<!-- end /opt/lampp/htdocs/boutique/modules/productcomments/views/templates/hook/empty-product-comment.tpl --><?php }
}
