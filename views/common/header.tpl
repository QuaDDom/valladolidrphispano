<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title} &bull; VALLADOLID</title>
    <link rel="stylesheet" type="text/css" href="{$APP_HOST}/public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{$APP_HOST}/public/assets/img/fv.ico">
</head>
<!--https://thumbnails.roblox.com/v1/batch-->

<body>
    <div class="background">
        <img src="{$APP_HOST}/public/assets/img/bg.png" alt="" />
    </div>
    <div class="container">
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
            {if $smarty.session.user_id}
                <div class="user-wrapper" data-dropdown-wrapper>
                    <div class="user-profile" data-dropdown-trigger>
                        <div class="user-profile-info">
                            <p>{$user.username}</p>
                            {if $user.premium}
                                <span>Premium</span>
                            {/if}
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
            {else}
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
            {/if}
            <div class="menu-sub">
                <div class="menu-sub-item">
                    <img src="{$APP_HOST}/public/assets/img/notify.png" alt="" />
                </div>
                <div class="menu-sub-item">
                    <img src="{$APP_HOST}/public/assets/img/logoRoblox.png" alt="" />
                    <p>JUGAR</p>
                </div>
                <div class="menu-sub-item">
                    <img src="{$APP_HOST}/public/assets/img/discord-mark-white.svg" alt="" />
                    <p>DISCORD</p>
                </div>
            </div>
</div>