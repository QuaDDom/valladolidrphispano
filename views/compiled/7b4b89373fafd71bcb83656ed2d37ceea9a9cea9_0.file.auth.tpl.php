<?php
/* Smarty version 4.3.0, created on 2023-09-19 18:06:27
  from 'C:\xampp\htdocs\views\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_650a0d53c01716_62623823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b4b89373fafd71bcb83656ed2d37ceea9a9cea9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\views\\auth.tpl',
      1 => 1694904607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_650a0d53c01716_62623823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="input-container">
    <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
        <form action="/auth/login" method="POST">
            <div class="input-separate">
                <div class="input-title">
                    <p>Email</p>
                </div>
                <input type="text" name="email" placeholder="Email" required>
            </div>
            <div class="input-separate">
                <div class="input-title">
                    <p>Contraseña</p>
                </div>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <label for="submit">
            <div class="input-button">
                <p>Iniciar Session</p>
            </div>
                <input type="submit" id="submit" style="display:none;" name="submit">
            </label>
        </form>
    <?php } else { ?>
        <form action="/auth/register" method="POST">
            <div class="input-separate">
                <div class="input-title">
                    <p>Nombre de usuario</p>
                </div>
                <input type="text" name="username" placeholder="Nombre de Usuario" required>
            </div>
            <div class="input-separate">
                <div class="input-title">
                    <p>Email</p>
                </div>
                <input type="text" name="email" placeholder="Email" required>
            </div>

            <div class="input-separate">
                <div class="input-title">
                    <p>Password</p>
                </div>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <label for="submit">
            <div class="input-button">
                <p>Registrarse</p>
            </div>
                <input type="submit" id="submit" style="display:none;" name="submit">
            </label>
        </form>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
