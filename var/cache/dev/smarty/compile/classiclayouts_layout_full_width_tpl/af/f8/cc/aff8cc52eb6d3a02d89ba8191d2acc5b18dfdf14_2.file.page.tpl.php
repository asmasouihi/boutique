<?php
/* Smarty version 3.1.39, created on 2021-10-06 12:08:50
  from '/opt/lampp/htdocs/boutique/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615d75b2ef0ee4_19208020',
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
function content_615d75b2ef0ee4_19208020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_553437311615d75b2edcc15_43486674', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1455954139615d75b2edf604_57852904 extends Smarty_Internal_Block
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
class Block_793871738615d75b2ede080_91542372 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1455954139615d75b2edf604_57852904', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1951981229615d75b2ee7639_19409768 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_265354550615d75b2ee8e71_95133573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_386667510615d75b2ee6464_16953055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1951981229615d75b2ee7639_19409768', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_265354550615d75b2ee8e71_95133573', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1791109045615d75b2eec654_04402600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1213215883615d75b2eeb444_04685569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1791109045615d75b2eec654_04402600', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_553437311615d75b2edcc15_43486674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_553437311615d75b2edcc15_43486674',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_793871738615d75b2ede080_91542372',
  ),
  'page_title' => 
  array (
    0 => 'Block_1455954139615d75b2edf604_57852904',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_386667510615d75b2ee6464_16953055',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1951981229615d75b2ee7639_19409768',
  ),
  'page_content' => 
  array (
    0 => 'Block_265354550615d75b2ee8e71_95133573',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1213215883615d75b2eeb444_04685569',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1791109045615d75b2eec654_04402600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_793871738615d75b2ede080_91542372', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_386667510615d75b2ee6464_16953055', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1213215883615d75b2eeb444_04685569', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
