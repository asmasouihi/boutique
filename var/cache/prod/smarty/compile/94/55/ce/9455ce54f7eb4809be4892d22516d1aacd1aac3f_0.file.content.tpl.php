<?php
/* Smarty version 3.1.39, created on 2021-10-03 22:40:48
  from '/opt/lampp/htdocs/boutique/admin356fnfivk/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a1550e7b102_13855593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9455ce54f7eb4809be4892d22516d1aacd1aac3f' => 
    array (
      0 => '/opt/lampp/htdocs/boutique/admin356fnfivk/themes/default/template/content.tpl',
      1 => 1631177245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a1550e7b102_13855593 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
