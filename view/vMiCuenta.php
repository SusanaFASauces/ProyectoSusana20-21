<!--
    Autor: Susana Fabián Antón
    Fecha creación: 20/01/2021
    Última modificación: 20/01/2021
-->
<form class="formulario" name="editarPerfil" id="editarPerfil" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <p> <!-- Usuario -->
        <label for="lblCodUsuario">Usuario</label>
        <input type="text" id="lblCodUsuario" name="codUsuario" value="<?php echo $codUsuario ?>" readonly>
    </p>
    <p> <!-- Descripción -->
        <label for="lblDesc">Descripción</label>
        <input type="text" id="lblDesc" name="descUsusario" value="<?php echo $descUsuario ?>">
    </p>
    <p> <!-- Perfil -->
        <label for="lblPerfil">Perfil</label>
        <input type="text" id="lblPerfil" name="perfil" value="<?php echo $perfil ?>" readonly>
    </p>
    <p> <!-- Número de accesos -->
        <label for="lblNumAccesos">Número de accesos</label>
        <input type="text" id="lblNumAccesos" name="numAccesos" value="<?php echo $numAccesos ?>" readonly>
    </p>
    <p> <!-- Última conexión -->
        <label for="lblUltimaConexion">Última conexión</label>
        <input type="text" id="lblUltimaConexion" name="ultimaConexion" value="<?php echo $fechaHoraUltimaConexion ?>" readonly>
    </p>
    <div class="botones-sesion">
        <input type="submit" value="Guardar cambios" name="guardarCambios">
        <input type="submit" value="Cancelar" name="cancelar">
    </div>
</form>