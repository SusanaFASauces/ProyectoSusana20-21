<!--
    Autor: Susana Fabián Antón
    Fecha creación: 20/01/2021
    Última modificación: 20/01/2021
-->
<div class="inicio sesion">
    <p class="bienvenida">¡Bienvenido <?php echo $descUsuario ?>!</p>
    <div class="contenedor-imagen">
        <img src="webroot/icons/users.jpg" alt="imagenUsuario">
    </div>
    <div class="info-sesion">
        <p>Última conexión</p>
        <p>Número de conexiones</p>
        <p>Preferencias de idioma</p>
        <form name="sesion" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="submit" value="Editar perfil" name="editarPerfil">
            <input type="submit" value="Cerrar sesión" name="cerrarSesion">
        </form>
    </div>
    <form name="funciones" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="submit" value="Mantenimiento de Departamentos" name="mtoDepartamentos">
        <input type="submit" value="Opinar" name="opinar">
    </form>
</div>