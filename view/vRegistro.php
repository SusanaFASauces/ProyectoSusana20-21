<!--
    Autor: Susana Fabián Antón
    Fecha creación: 22/01/2021
    Última modificación: 09/02/2021
-->
<article class="caja">
    <section class="barra-superior">
        <h2>Aplicación resumen Susana 20-21</h2>
    </section>
    <section class="cuerpo">
        <div id="formulario-registro">
            <p>Crea tu cuenta de usuario</p>
            <form name="registro" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validarFormulario()">
                <p> <!-- Usuario -->
                    <input type="text" name="codUsuario" id="codUsuario" placeholder="Código de usuario" onblur="validarCampo('codUsuario')">
                    <span id="codUsuarioErr"></span>
                </p>
                <p> <!-- Descripción -->
                    <input type="text" name="descUsuario" id="descUsuario" placeholder="Descripción de usuario" onblur="validarCampo('descUsuario')">
                    <span id="descUsuarioErr"></span>
                </p>
                <p> <!-- Contraseña -->
                    <input type="password" name="password" id="password" placeholder="Contraseña" onblur="validarCampo('password')">
                    <span id="passwordErr"></span>
                </p>
                <p> <!-- Confirmación de contraseña -->
                    <input type="password" name="confirmacionPassword" id="confirmacionPassword" placeholder="Confirmación de contraseña" onblur="validarCampo('confirmacionPassword')">
                    <span id="confirmacionPasswordErr"></span>
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