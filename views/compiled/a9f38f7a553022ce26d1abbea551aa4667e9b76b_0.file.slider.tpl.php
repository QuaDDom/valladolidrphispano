<?php
/* Smarty version 4.3.0, created on 2023-09-16 19:34:53
  from 'C:\xampp\htdocs\views\admin\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65062d8d703c96_22404402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f38f7a553022ce26d1abbea551aa4667e9b76b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\views\\admin\\slider.tpl',
      1 => 1677905544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/common/header.tpl' => 1,
    'file:admin/common/footer.tpl' => 1,
  ),
),false)) {
function content_65062d8d703c96_22404402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['slider']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <form action="/admin/slider/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" method="post" enctype="multipart/form-data">
            <div class="input-separator">
                <div class="input-title">
                    <p>Imagen</p>
                </div>
                <div class="input-image">
                    <label for="image-cover">
                        <div class="input-upload">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm.53 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v5.69a.75.75 0 001.5 0v-5.69l1.72 1.72a.75.75 0 101.06-1.06l-3-3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['APP_HOST']->value;?>
/public/assets/img/slider/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" style="opacity:1;" id="image-preview">
                        <?php } else { ?>
                            <img src="" style="opacity:0;" id="image-preview">
                        <?php }?>

                        <input type="file" style="display:none;" name="image-cover" id="image-cover">
                    </label>
                </div>
            </div>
            <div class="inputs-row">
                <div class="input-separator">
                    <div class="input-title">
                        <p>Titulo</p>
                    </div>
                    <input type="text" class="input-style-a" name="title" placeholder="Titulo" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" required>
                </div>
                <div class="input-separator">
                    <div class="input-title">
                        <p>Enlace</p>
                    </div>
                    <input type="text" class="input-style-a" name="link" placeholder="Enlace" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" required>
                </div>
                <div class="input-separator" id="time">
                    <div class="input-title">
                        <p>Horario de inicio</p>
                    </div>
                    <select class="input-style-a" name="time-start" style="border: none;outline:none;">
                        <option value="Lunes" <?php if ($_smarty_tpl->tpl_vars['item']->value['timestart'] == "Lunes") {?> selected<?php }?>>Lunes</option>
                        <option value="Martes" <?php if ($_smarty_tpl->tpl_vars['item']->value['timestart'] == "Martes") {?> selected<?php }?>>Martes</option>
                        <option value="Miercoles" <?php if ($_smarty_tpl->tpl_vars['item']->value['timestart'] == "Miercoles") {?> selected<?php }?>>Miercoles</option>
                        <option value="Jueves" <?php if ($_smarty_tpl->tpl_vars['item']->value['timestart'] == "Jueves") {?> selected<?php }?>>Jueves</option>
                        <option value="Viernes" <?php if ($_smarty_tpl->tpl_vars['item']->value['timestart'] == "Viernes") {?> selected<?php }?>>Viernes</option>
                        <option value="Sabado" <?php if ($_smarty_tpl->tpl_vars['item']->value['timestart'] == "Sabado") {?> selected<?php }?>>Sabado</option>
                        <option value="Domingo" <?php if ($_smarty_tpl->tpl_vars['item']->value['timestart'] == "Domingo") {?> selected<?php }?>>Domingo</option>
                    </select>
                </div>
                <div class="input-separator" id="time">
                    <div class="input-title">
                        <p>Hasta</p>
                    </div>
                    <input type="datetime-local" name="time" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
" class="input-style-a">
                </div>
                <div class="input-separator" id="time">
                    <div class="input-title">
                        <p>Temporada</p>
                    </div>
                    <input type="text" class="input-style-a" name="season" placeholder="Temporada" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['season'];?>
">
                </div>
            </div>
            <div class="inputs-column-fixed">
                <div class="input-separator">
                    <div class="input-title">
                        <p>Abrir en otra pestaña</p>
                    </div>
                    <select class="input-style-a" name="blank" style="border: none;outline:none;">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['blank'] == "1") {?> selected<?php }?>>Si</option>
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['item']->value['blank'] == "0") {?> selected<?php }?>>No</option>
                    </select>
                </div>
                <div class="input-separator">
                    <div class="input-title">
                        <p>Tipo</p>
                    </div>
                    <select class="input-style-a" id="type" name="type" style="border: none;outline:none;">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == "1") {?> selected<?php }?>>Programación</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == "2") {?> selected<?php }?>>Blog</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == "3") {?> selected<?php }?>>Anuncio</option>
                    </select>
                </div>

                <label for="submit">
                    <div class="container-submit">
                        <p>Guardar</p>
                    </div>
                    <input type="submit" id="submit" name="submit" value="1" style="display: none;">
                </label>
            </div>
        </form>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <form action="/admin/slider/" method="post" enctype="multipart/form-data">
        <div class="input-separator">
            <div class="input-title">
                <p>Imagen</p>
            </div>
            <div class="input-image">
                <label for="image-cover">
                    <div class="input-upload">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm.53 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v5.69a.75.75 0 001.5 0v-5.69l1.72 1.72a.75.75 0 101.06-1.06l-3-3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <img src="" style="opacity:0;" id="image-preview">
                    <input type="file" style="display:none;" name="image-cover" id="image-cover">
                </label>
            </div>
        </div>
        <div class="inputs-row">
            <div class="input-separator">
                <div class="input-title">
                    <p>Titulo</p>
                </div>
                <input type="text" class="input-style-a" name="title" placeholder="Titulo" value="" required>
            </div>

            <div class="input-separator">
                <div class="input-title">
                    <p>Enlace</p>
                </div>
                <input type="text" class="input-style-a" name="link" placeholder="Enlace" value="" required>
            </div>
            <div class="input-separator" id="time">

                <div class="input-title">
                    <p>Horario de inicio</p>
                </div>
                <select class="input-style-a" name="time-start" style="border: none;outline:none;">
                    <option value="null" disabled selected></option>
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miercoles">Miercoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sabado">Sabado</option>
                    <option value="Domingo">Domingo</option>
                </select>
            </div>
            <div class="input-separator" id="time">
                <div class="input-title">
                    <p>hasta</p>
                </div>
                <input type="datetime-local" name="time" class="input-style-a">
            </div>
            <div class="input-separator" id="time">
                <div class="input-title">
                    <p>Temporada</p>
                </div>
                <input type="text" class="input-style-a" name="season" placeholder="Temporada">
            </div>
        </div>
        <div class="inputs-column-fixed">
            <div class="input-separator">
                <div class="input-title">
                    <p>Abrir en otra pestaña</p>
                </div>
                <select class="input-style-a" name="blank" style="border: none;outline:none;">
                    <option value="1">Si</option>
                    <option value="0" selected>No</option>
                </select>
            </div>
            <div class="input-separator">
                <div class="input-title">
                    <p>Tipo</p>
                </div>
                <select class="input-style-a" id="type" name="type" style="border: none;outline:none;">
                    <option value="1" selected>Programación</option>
                    <option value="2">Blog</option>
                    <option value="3">Anuncio</option>
                </select>
            </div>

            <label for="submit">
                <div class="container-submit">
                    <p>Crear</p>
                </div>
                <input type="submit" id="submit" name="submit" value="1" style="display: none;">
            </label>
        </div>
    </form>
<?php }
$_smarty_tpl->_subTemplateRender("file:admin/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
