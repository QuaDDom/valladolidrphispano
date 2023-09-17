{include file="common/header.tpl"}
<div class="input-container">
    {if $login}
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
    {else}
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
    {/if}
</div>
{include file="common/footer.tpl"}