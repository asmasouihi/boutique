<?php
/* Smarty version 3.1.39, created on 2021-10-03 21:15:59
  from '/opt/lampp/htdocs/boutique/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a016fbc66e5_64183044',
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
function content_615a016fbc66e5_64183044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1372553212615a016fbbebb8_43775629', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1991516780615a016fbbfcc7_44909003 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1083591623615a016fbc2290_37469139 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_228760720615a016fbc1473_72656010 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1083591623615a016fbc2290_37469139', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1372553212615a016fbbebb8_43775629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1372553212615a016fbbebb8_43775629',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1991516780615a016fbbfcc7_44909003',
  ),
  'page_content' => 
  array (
    0 => 'Block_228760720615a016fbc1473_72656010',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1083591623615a016fbc2290_37469139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1991516780615a016fbbfcc7_44909003', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_228760720615a016fbc1473_72656010', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
