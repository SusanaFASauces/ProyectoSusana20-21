<!--
    Autor: Susana Fabián Antón
    Fecha creación: 20/01/2021
    Última modificación: 24/01/2021
-->
<article class="caja">
    <section class="barra-superior">
        <h2>Aplicación resumen Susana 20-21</h2>
    </section>
    <section class="cuerpo">
        <div class="inicio">
            <p class="bienvenida">¡Bienvenido <?php echo $descUsuario ?>!</p>
            <div class="contenedor-imagen">
                <img src="webroot/icons/users.jpg" alt="imagenUsuario">
            </div>
            <div class="info-sesion">
                <div>
                    <p>Última conexión</p>
                    <p>Número de conexiones</p>
                    <p>Preferencias de idioma</p>
                </div>
                <form name="inicio" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="submit" value="Editar perfil" name="editarPerfil">
                    <input type="submit" value="Borrar cuenta" name="borrarCuenta">
                    <input type="submit" value="Cerrar sesión" name="cerrarSesion">
                </form>
            </div>
            <form name="funciones" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="submit" value="Mantenimiento de Departamentos" name="mtoDepartamentos">
                <input type="submit" value="Servicios REST" name="rest">
                <input type="submit" value="Opinar" name="opinar">
            </form>
        </div>
    </section>
    <section class="barra-inferior">
        <p>
            <a href="doc/documentos/ArbolDeNavegacion.pdf" target="_blank">Árbol de navegación</a> | 
            <a href="doc/documentos/CatalogoDeRequisitos.pdf" target="_blank">Catálogo de requisitos</a> |
            <a href="doc/documentos/DiagramaDeCasosDeUso.pdf" target="_blank">Diagrama de casos de uso</a> | 
            <a href="doc/documentos/DiagramaDeClases.pdf" target="_blank">Diagrama de clases</a>
        </p>
        <p>
            <a href="doc/documentos/EstructuraDeAlmacenamiento.jpg" target="_blank">Estructura de almacenamiento</a> | 
            <a href="doc/documentos/ModeloFisicoDeDatos.pdf" target="_blank">Modelo físico de datos</a> | 
            <a href="doc/documentos/RelacionDeFicheros.pdf" target="_blank">Relación de ficheros</a>
        </p>
    </section>
</article>