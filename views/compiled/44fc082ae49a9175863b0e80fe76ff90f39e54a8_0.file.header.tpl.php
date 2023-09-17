<?php
/* Smarty version 4.3.0, created on 2023-09-16 19:40:00
  from 'C:\xampp\htdocs\views\common\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65062ec0e6a350_38128354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44fc082ae49a9175863b0e80fe76ff90f39e54a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\views\\common\\header.tpl',
      1 => 1694903998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65062ec0e6a350_38128354 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/img/fv.ico">
</head>
<!--https://thumbnails.roblox.com/v1/batch-->
<body>
    <div class="container">
        <div class="menu-top">
            <a href="/">
                <div class="menu-item">
                    <p>Inicio</p>
                </div>
            </a>
            <a href="/blogs">
                <div class="menu-item" tag="blog">
                    <p>Blog</p>
                </div>
            </a>
            <a href="/programacion">
                <div class="menu-item" tag="programacion">
                    <p>Noticias</p>
                </div>
            </a>
            <a href="/guia-iptv">
                <div class="menu-item" tag="guia-iptv">
                    <p>Eventos</p>
                </div>
            </a>
            <a href="/donaciones">
                <div class="menu-item" tag="donaciones">
                    <p>Que ofrecemos</p>
                </div>
            </a>
            <?php if ($_SESSION['user_id']) {?>
                <div class="user-profile">
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
                    
                </div>

            <?php }?>
        </div><?php }
}
