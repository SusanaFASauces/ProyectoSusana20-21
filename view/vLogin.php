<!--
    Autor: Susana Fabián Antón
    Fecha creación: 20/01/2021
    Última modificación: 20/01/2021
-->
<form class="formulario" name="login" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <p> <!-- Usuario -->
        <label for="lblUsuario">Usuario</label>
        <input type="text" id="lblUsuario" name="usuario">
    </p>
    <p> <!-- Contraseña -->
        <label for="lblPassword">Contraseña</label>
        <input type="password" id="lblPassword" name="password">
    </p>
    <div class="botones-sesion">
        <input type="submit" value="Iniciar sesión" name="iniciarSesion">
        <input type="submit" value="Registrarse" name="registro">
    </div>
</form>