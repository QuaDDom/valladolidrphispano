<?php
/* Smarty version 4.3.0, created on 2023-09-24 01:02:37
  from 'C:\xampp\htdocs\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_650fb4dd48d2c9_85897076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0211cc0201a8ace51f7ac60a089e0f870bd86018' => 
    array (
      0 => 'C:\\xampp\\htdocs\\views\\index.tpl',
      1 => 1695333890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_650fb4dd48d2c9_85897076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="slider-container">
        <div class="swiper-wrapper">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <div class="swiper-slide">
                    <div class="slider-content">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/img/slider/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt=""
                            onerror="this.onerror=null;this.src='<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/img/maxresdefault.jpg';">
                        <div class="slider-text">
                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
                            <div class="slider-info">
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="slider-navigator-prev">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </div>
        <div class="slider-navigator-next">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
