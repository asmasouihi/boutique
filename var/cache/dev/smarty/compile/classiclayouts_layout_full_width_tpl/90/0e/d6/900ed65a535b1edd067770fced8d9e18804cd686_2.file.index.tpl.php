<?php
/* Smarty version 3.1.39, created on 2021-10-06 12:13:09
  from '/opt/lampp/htdocs/boutique/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615d76b5d23c31_20066225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900ed65a535b1edd067770fced8d9e18804cd686' => 
    array (
      0 => '/opt/lampp/htdocs/boutique/themes/classic/templates/index.tpl',
      1 => 1631177245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615d76b5d23c31_20066225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1326871769615d76b5d1a865_13846518', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1418802836615d76b5d1b888_43772527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1111493223615d76b5d1dce4_58964936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1331008622615d76b5d1cf99_03465073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1111493223615d76b5d1dce4_58964936', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1326871769615d76b5d1a865_13846518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1326871769615d76b5d1a865_13846518',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1418802836615d76b5d1b888_43772527',
  ),
  'page_content' => 
  array (
    0 => 'Block_1331008622615d76b5d1cf99_03465073',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1111493223615d76b5d1dce4_58964936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1418802836615d76b5d1b888_43772527', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1331008622615d76b5d1cf99_03465073', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
