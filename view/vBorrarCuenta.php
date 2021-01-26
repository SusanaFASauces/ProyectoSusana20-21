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
        <div id="formulario-mi-cuenta">
            <p>¿Estás seguro de que quieres borrar tu cuenta?</p>
            <form name="editarPerfil" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <p> <!-- Usuario -->
                    <label for="lblCodUsuario">Usuario</label>
                    <input type="text" id="lblCodUsuario" name="codUsuario" value="<?php echo $codUsuarioEnCurso ?>" readonly>
                </p>
                <p> <!-- Descripción -->
                    <label for="lblDesc">Descripción</label>
                    <input type="text" id="lblDesc" name="descUsusario" value="<?php echo $descUsuarioEnCurso ?>" readonly>
                </p>
                <p> <!-- Perfil -->
                    <label for="lblPerfil">Perfil</label>
                    <input type="text" id="lblPerfil" name="perfil" value="<?php echo $perfilEnCurso ?>" readonly>
                </p>
                <p> <!-- Número de accesos -->
                    <label for="lblNumAccesos">Num accesos</label>
                    <input type="text" id="lblNumAccesos" name="numAccesos" value="<?php echo $numAccesosEnCurso ?>" readonly>
                </p>
                <p> <!-- Última conexión -->
                    <label for="lblUltimaConexion">Última conexión</label>
                    <input type="text" id="lblUltimaConexion" name="ultimaConexion" value="<?php echo $fechaHoraUltimaConexionEnCurso ?>" readonly>
                </p>
                <div class="botones">
                    <input type="submit" value="Borrar cuenta" name="borrarCuenta">
                    <input type="submit" value="Cancelar" name="cancelar">
                </div>
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
