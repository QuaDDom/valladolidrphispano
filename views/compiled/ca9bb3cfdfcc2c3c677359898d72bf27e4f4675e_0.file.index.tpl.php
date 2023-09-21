<?php
/* Smarty version 4.3.0, created on 2023-09-19 17:21:33
  from 'C:\xampp\htdocs\phone\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_650a02cdc25ce1_66512373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9bb3cfdfcc2c3c677359898d72bf27e4f4675e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phone\\index.tpl',
      1 => 1695154684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650a02cdc25ce1_66512373 (Smarty_Internal_Template $_smarty_tpl) {
?><button id="recall">
    call
</button>
<button id="hangout">
    hangout
</button>


<input type="text" name="" id="number">


<video autoplay="" muted="" playsinline="" id="video"></video>
<div class="phone-main">
    <div class="phone-border">
        <img decoding="async" src="../../phone/assets/img/border.png" alt="">
    </div>
    <div class="phone-bg">
        <img src="https://th.bing.com/th/id/R.c0dc90c9fcdf4c1c741e5447075e3652?rik=FMCB%2blcl%2fY7UFA&pid=ImgRaw&r=0"
            alt="">
    </div>
    <div class="phone-bar">
        <div class="time">
            <p>--:--</p>
        </div>
    </div>
    <div class="phone-into-app"></div>
    <div class="phone-top"></div>
    <div class="phone-apps"></div>

</div>
<?php }
}
