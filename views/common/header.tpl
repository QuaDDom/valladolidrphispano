<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title} &bull; VALLADOLID</title>
    <link rel="stylesheet" type="text/css" href="{$APP_HOST}/public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="icon" type="image/x-icon" href="{$APP_HOST}/public/assets/img/fv.ico">
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
                <div class="user-profile">
                    <div class="user-profile-info">
                        <p>{$user.username}</p>
                        {if $user.premium}
                            <span>Premium</span>
                        {/if}
                    </div>
                    <div class="user-image">
                    <img src="" alt="" />
                    </div>
                    
                </div>
            {/if}
        </div>