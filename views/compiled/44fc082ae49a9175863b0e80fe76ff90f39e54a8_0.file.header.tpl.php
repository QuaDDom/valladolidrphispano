<?php
/* Smarty version 4.3.0, created on 2023-09-19 17:21:33
  from 'C:\xampp\htdocs\views\common\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_650a02cdc18029_14754459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44fc082ae49a9175863b0e80fe76ff90f39e54a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\views\\common\\header.tpl',
      1 => 1695153627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../phone/index.tpl' => 1,
  ),
),false)) {
function content_650a02cdc18029_14754459 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 &bull; VALLADOLID</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/img/fv.ico">
</head>
<!--https://thumbnails.roblox.com/v1/batch-->

<body>
    <div class="background">
        <img src="<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/img/bg.png" alt="" />
    </div>
    <div class="container">
    <?php $_smarty_tpl->_subTemplateRender("file:../../phone/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="stats-server">
        <p></p>
        <p></p>
    </div>
        <div class="menu-top">
            <a href="/">
                <div class="menu-item">
                    <p>Inicio</p>
                </div>
            </a>
            <a href="/noticias">
                <div class="menu-item" tag="news">
                    <p>Noticias</p>
                </div>
            </a>
            <a href="/eventos">
                <div class="menu-item" tag="events">
                    <p>Eventos</p>
                </div>
            </a>
            <a href="/sobre">
                <div class="menu-item" tag="about">
                    <p>Que ofrecemos</p>
                </div>
            </a>
            <?php if ($_SESSION['user_id']) {?>
                <div class="user-wrapper" data-dropdown-wrapper>
                    <div class="user-profile" data-dropdown-trigger>
                        <div class="user-profile-info">
                            <p><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['premium']) {?>
                                <span>Premium</span>
                            <?php }?>
                        </div>
                        <div class="user-image">
                            <img src="" alt="" />
                        </div>
                        <div class="user-options" data-dropdown-menu>
                            <a href="/account/profile">
                                <div class="user-option">
                                    <p>Perfil</p>
                                </div>
                            </a>
                            <a href="/panel">
                                <div class="user-option">
                                    <p>DNI</p>
                                </div>
                            </a>
                            <a href="/panel">
                            <div class="user-option">
                                <p>Configuración</p>
                            </div>
                        </a>
                            <a href="/auth/logout">
                                <div class="user-option">
                                    <p>Cerrar sesión</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="user-auth">
                    <a href="/auth/login">
                        <div class="user-auth-item">
                            <p>Iniciar session</p>
                        </div>
                    </a>
                    <a href="/auth/register">
                        <div class="user-auth-item">
                            <p>Registrarse</p>
                        </div>
                    </a>
                </div>
            <?php }?>
            <div class="menu-sub">
                <div class="menu-sub-item">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/img/notify.png" alt="" />
                </div>
                <div class="menu-sub-item">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/img/logoRoblox.png" alt="" />
                    <p>JUGAR</p>
                </div>
                <div class="menu-sub-item">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/img/discord-mark-white.svg" alt="" />
                    <p>DISCORD</p>
                </div>
            </div>
</div><?php }
}
