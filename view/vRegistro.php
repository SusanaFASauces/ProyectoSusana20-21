<!--
    Autor: Susana Fabián Antón
    Fecha creación: 22/01/2021
    Última modificación: 24/01/2021
-->
<article class="caja">
    <section class="barra-superior">
        <h2>Aplicación resumen Susana 20-21</h2>
    </section>
    <section class="cuerpo">
        <div id="formulario-registro">
            <p>Crea tu cuenta de usuario</p>
            <form name="registro" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <p> <!-- Usuario -->
                    <input type="text" name="codUsuario" placeholder="Código de usuario">
                </p>
                <p> <!-- Descripción -->
                    <input type="text" name="descUsuario" placeholder="Descripción de usuario">
                </p>
                <p> <!-- Contraseña -->
                    <input type="password" name="password" placeholder="Contraseña">
                </p>
                <p> <!-- Confirmación de contraseña -->
                    <input type="password" name="confirmacionPassword" placeholder="Confirmación de contraseña">
                </p>
                <div class="botones">
                    <input type="submit" value="Registrarse" name="registro">
                </div>
            </form>
        </div>
        <div id="inicio-sesion-registro">
            <p>Ya tengo una cuenta, prefiero </p>
            <form><input type="submit" value="Iniciar Sesión" name="iniciarSesion"></form>
        </div>
    </section>
    <section class="barra-inferior">
        <p>
            <a href="api/ArbolDeNavegacion.pdf" target="_blank">Árbol de navegación</a> | 
            <a href="api/CatalogoDeRequisitos.pdf" target="_blank">Catálogo de requisitos</a> |
            <a href="api/DiagramaDeCasosDeUso.pdf" target="_blank">Diagrama de casos de uso</a> | 
            <a href="api/DiagramaDeClases.pdf" target="_blank">Diagrama de clases</a>
        </p>
        <p>
            <a href="api/EstructuraDeAlmacenamiento.jpg" target="_blank">Estructura de almacenamiento</a> | 
            <a href="api/ModeloFisicoDeDatos.pdf" target="_blank">Modelo físico de datos</a> | 
            <a href="api/RelacionDeFicheros.pdf" target="_blank">Relación de ficheros</a>
        </p>
    </section>
</article>
<!--<div class="barra-inferior">
    <form>
        <input type="image" name="volver" src="webroot/icons/volver.png" alt="volver">
    </form>
</div>-->