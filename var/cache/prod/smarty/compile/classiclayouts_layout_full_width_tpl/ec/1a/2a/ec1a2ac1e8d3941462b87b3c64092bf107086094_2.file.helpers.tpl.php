<?php
/* Smarty version 3.1.47, created on 2023-03-14 23:17:42
  from 'C:\wamp64\www\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6410f286175a94_53766462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1a2ac1e8d3941462b87b3c64092bf107086094' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678815780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6410f286175a94_53766462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\ec\\1a\\2a\\ec1a2ac1e8d3941462b87b3c64092bf107086094_2.file.helpers.tpl.php',
    'uid' => 'ec1a2ac1e8d3941462b87b3c64092bf107086094',
    'call_name' => 'smarty_template_function_renderLogo_13127637156410f28616d895_39079335',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_13127637156410f28616d895_39079335 */
if (!function_exists('smarty_template_function_renderLogo_13127637156410f28616d895_39079335')) {
function smarty_template_function_renderLogo_13127637156410f28616d895_39079335(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_13127637156410f28616d895_39079335 */
}
