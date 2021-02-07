<!--
    Autor: Susana Fabián Antón
    Fecha creación: 26/01/2021
    Última modificación: 07/02/2021
-->
<article class="caja">
    <section class="barra-superior">
        <h2>Aplicación resumen Susana 20-21</h2>
    </section>
    <section class="cuerpo">
        <div id="cuerpo-rest">
            <p id="titulo-rest">Uso de API REST</p>
            <div id="formulario-rest">
                <select name="servicios" form="rest" onchange="enviarFormulario()">
                    <option value="apod" id="apodOpt" <?php echo $apodSelected ?>>APOD: Astronomy Picture of the Day</option>
                    <option value="omdb" id="omdbOpt" <?php echo $omdbSelected ?>>OMDb: Open Movie Database</option>
                    <option value="conversor" id="conversorOpt" <?php echo $conversorSelected ?>>Conversor de Unidades</option>
                </select>
                <div id="apodForm" style="display: <?php echo $apodDisplay ?>">
                    <p>Puedes seleccionar una fecha para ver su imagen</p>
                    <form name="rest" id="rest" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <p>
                            <input type="date" name="fecha" max="<?php echo date('Y-m-d') ?>" value="<?php echo date('Y-m-d') ?>">
                        </p>
                        <div class="botones">
                            <input type="submit" value="Buscar" name="enviar">
                        </div>
                    </form>
                    <a href="https://github.com/nasa/apod-api" target="_blank">Documentación del servicio</a>
                </div>
                <div id="omdbForm" style="display: <?php echo $omdbDisplay ?>">
                    <p>Introduce el título de una película para obtener información sobre ella</p>
                    <p>
                        <input type="text" name="titulo" form="rest" placeholder="Nombre de la película (en inglés)">
                    </p>
                    <div class="botones">
                        <input type="submit" value="Buscar" form="rest" name="enviar" form="rest">
                    </div>
                    <a href="http://www.omdbapi.com/" target="_blank">Documentación del servicio</a>
                </div>
                <div id="conversorForm" style="display: <?php echo $conversorDisplay ?>">
                    <p>Introduce una cifra y unas unidades de medida para realizar la conversión</p>
                    <p>
                        <input type="number" step="0.01" name="cifra" form="rest" placeholder="Cifra">
                    </p>
                    <p>
                        Convertir&nbsp;
                        <select name="udInicial" form="rest">
                            <option value="kg">kg</option>
                            <option value="g">g</option>
                            <option value="mg">mg</option>
                        </select>
                        &nbsp;a&nbsp;
                        <select name="udFinal" form="rest">
                            <option value="kg">kg</option>
                            <option value="g">g</option>
                            <option value="mg">mg</option>
                        </select>
                    </p>
                    <div class="botones">
                        <input type="submit" value="Convertir" form="rest" name="enviar" form="rest">
                    </div>
                    <a href="doc/documentos/ConversorUnidades.pdf" target="_blank">Documentación del servicio</a>
                </div>
            </div>
            <div id="servicio-rest">
                <div id="apodService" style="display: <?php echo $apodDisplay ?>">
                    <p><?php echo $aServicioAPOD['title'] ?></p>
                    <img src="<?php echo $aServicioAPOD['url'] ?>">
                    <p><?php echo $aServicioAPOD['explanation'] ?></p>
                </div>
                <div id="omdbService" style="display: <?php echo $omdbDisplay ?>">
                    <p><?php echo $tituloEnCurso ?></p>
                    <img src=<?php echo $imagenEnCurso ?>>
                    <p><strong>Fecha de salida:</strong> <?php echo $aServicioOMDb['Released'] ?></p>
                    <p><strong>Duración:</strong> <?php echo $aServicioOMDb['Runtime'] ?></p>
                    <p><strong>Género:</strong> <?php echo $aServicioOMDb['Genre'] ?></p>
                    <p><strong>Director:</strong> <?php echo $aServicioOMDb['Director'] ?></p>
                    <p><strong>Premios:</strong> <?php echo $aServicioOMDb['Awards'] ?></p>
                    <p><strong>Argumento:</strong> <?php echo $aServicioOMDb['Plot'] ?></p>              
                </div>
                <div id="conversorService" style="display: <?php echo $conversorDisplay ?>">
                    <p><?php echo $tituloEnCurso ?></p>
                    <img src="<?php echo $imagenEnCurso ?>">
                    <p><strong>Cifra:</strong> <?php echo $aServicioConversor['cifra'] ?></p>
                    <p><strong>Unidad inicial:</strong> <?php echo $aServicioConversor['udInicial'] ?></p>
                    <p><strong>Unidad final:</strong> <?php echo $aServicioConversor['udFinal'] ?></p>
                    <p><strong>Factor de conversión:</strong> 10^<?php echo $aServicioConversor['factorConversion'] ?></p>
                    <p><?php echo $aServicioConversor['cifra'].$aServicioConversor['udInicial'] ?> equivalen a <?php echo $aServicioConversor['resultado'].$aServicioConversor['udFinal'] ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="barra-inferior" id="inferior-rest">
        <form>
            <input type="image" name="volver" src="webroot/icons/volver.png" alt="volver">
        </form>
    </section>
</article>