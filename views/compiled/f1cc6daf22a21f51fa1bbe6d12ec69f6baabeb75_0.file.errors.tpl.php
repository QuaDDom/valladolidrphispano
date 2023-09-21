<?php
/* Smarty version 4.3.0, created on 2023-09-19 17:21:36
  from 'C:\xampp\htdocs\views\errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_650a02d09e2474_73394753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1cc6daf22a21f51fa1bbe6d12ec69f6baabeb75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\views\\errors.tpl',
      1 => 1694903809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_650a02d09e2474_73394753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="error_container">
    <h1>ERROR 404</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
