<?php
/* Smarty version 3.1.47, created on 2023-03-14 19:53:35
  from 'C:\wamp64\www\prestashop\themes\classic\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6410c2af99aea3_84082615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf1963b8714f6b35441fe0eaad2002347b2a6934' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\_partials\\breadcrumb.tpl',
      1 => 1678815780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6410c2af99aea3_84082615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12414389136410c2af9927a2_89677300', 'breadcrumb');
?>

  </ol>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
class Block_13136748656410c2af994af8_40689825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li>
            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            <?php } else { ?>
              <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_12414389136410c2af9927a2_89677300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_12414389136410c2af9927a2_89677300',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_13136748656410c2af994af8_40689825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13136748656410c2af994af8_40689825', 'breadcrumb_item', $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
