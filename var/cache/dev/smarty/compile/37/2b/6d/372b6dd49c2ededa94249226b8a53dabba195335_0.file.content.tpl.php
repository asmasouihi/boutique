<?php
/* Smarty version 3.1.39, created on 2021-10-06 14:59:02
  from '/opt/lampp/htdocs/boutique/admin587cvuhty/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615d9d96984795_48728224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372b6dd49c2ededa94249226b8a53dabba195335' => 
    array (
      0 => '/opt/lampp/htdocs/boutique/admin587cvuhty/themes/default/template/content.tpl',
      1 => 1631177245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615d9d96984795_48728224 (Smarty_Internal_Template $_smarty_tpl) {
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
