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
        <div id="formulario-registro">
            <p>Incia sesión en la aplicación</p>
            <form name="login" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <p> <!-- Usuario -->
                    <input type="text" name="usuario" placeholder="Usuario">
                </p>
                <p> <!-- Contraseña -->
                    <input type="password" name="password" placeholder="Contraseña">
                </p>
                <p style="display: none">Huequito para que salgan los avisos de errores</p>
                <div class="botones">
                    <input type="submit" value="Iniciar sesión" name="iniciarSesion">
                    <input type="submit" value="Registrarse" name="registro">
                </div>
            </form>
        </div>
        <div>
            <p>O consulta las opiniones de nuestros usuarios</p>
            <form name="opiniones" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="botones">
                    <input type="submit" value="Ver opiniones" name="verOpiniones">
                </div>
            </form>
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