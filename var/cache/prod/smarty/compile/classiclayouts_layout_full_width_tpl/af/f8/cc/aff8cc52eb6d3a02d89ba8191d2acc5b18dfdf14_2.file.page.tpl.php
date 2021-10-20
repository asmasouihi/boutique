<?php
/* Smarty version 3.1.39, created on 2021-10-03 21:15:59
  from '/opt/lampp/htdocs/boutique/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a016fbe8b44_04684330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aff8cc52eb6d3a02d89ba8191d2acc5b18dfdf14' => 
    array (
      0 => '/opt/lampp/htdocs/boutique/themes/classic/templates/page.tpl',
      1 => 1631177245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a016fbe8b44_04684330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2012834167615a016fbcef57_72397429', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_401188652615a016fbd12f2_60616536 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1260750851615a016fbcff80_40401347 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_401188652615a016fbd12f2_60616536', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_708217821615a016fbe0ca3_55594349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_713033541615a016fbe2729_81300989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_610698139615a016fbdfac2_26787802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_708217821615a016fbe0ca3_55594349', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_713033541615a016fbe2729_81300989', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_454433491615a016fbe5fc9_66610047 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_708015268615a016fbe5019_01165150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_454433491615a016fbe5fc9_66610047', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2012834167615a016fbcef57_72397429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2012834167615a016fbcef57_72397429',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1260750851615a016fbcff80_40401347',
  ),
  'page_title' => 
  array (
    0 => 'Block_401188652615a016fbd12f2_60616536',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_610698139615a016fbdfac2_26787802',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_708217821615a016fbe0ca3_55594349',
  ),
  'page_content' => 
  array (
    0 => 'Block_713033541615a016fbe2729_81300989',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_708015268615a016fbe5019_01165150',
  ),
  'page_footer' => 
  array (
    0 => 'Block_454433491615a016fbe5fc9_66610047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1260750851615a016fbcff80_40401347', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_610698139615a016fbdfac2_26787802', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_708015268615a016fbe5019_01165150', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
