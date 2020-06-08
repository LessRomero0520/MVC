<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 22:44:13
  from 'C:\xampp\htdocs\MVC\templates\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edea31d3dc375_97885429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906c80026f08cda7ecc2e7faeb6dc6fe89e83e15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\templates\\master.tpl',
      1 => 1591648120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:p.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5edea31d3dc375_97885429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<! -- body -- >
	<?php $_smarty_tpl->_subTemplateRender("file:p.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
