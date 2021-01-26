<!--
    Autor: Susana Fabián Antón
    Fecha creación: 26/01/2021
    Última modificación: 26/01/2021
-->
<article class="caja">
    <section class="barra-superior">
        <h2>Aplicación resumen Susana 20-21</h2>
    </section>
    <section class="cuerpo">
        <div id="cuerpo-rest">
            <p id="titulo-rest">Uso de API REST</p>
            <div id="formulario-rest">
                <p>APOD: Atronomy Picture of the Day</p>
                <p>Puedes seleccionar una fecha para ver su imagen</p>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <p>
                        <input type="date" name="fecha" value="<?php echo date('Y-m-d') ?>">
                    </p>
                    <div class="botones">
                        <input type="submit" value="Enviar" name="enviar">
                    </div>
                </form>
            </div>
            <div id="servicio-rest">
                <p><?php echo $tituloEnCurso?></p>
                <img src="<?php echo $imagenEnCurso?>" width="100">
                <p><?php echo $descripcionEnCurso?></p>
            </div>
        </div>
    </section>
    <section class="barra-inferior" id="inferior-rest">
        <form>
            <input type="image" name="volver" src="webroot/icons/volver.png" alt="volver">
        </form>
    </section>
</article>