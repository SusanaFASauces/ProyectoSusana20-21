<!--
    Autor: Susana Fabián Antón
    Fecha creación: 26/01/2021
    Última modificación: 29/01/2021
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
                </select>
                <div id="apodForm" style="display: <?php echo $apodDisplay ?>">
                    <p>Puedes seleccionar una fecha para ver su imagen</p>
                    <form name="rest" id="rest" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <p>
                            <input type="date" name="fecha" max="<?php echo date('Y-m-d') ?>" value="<?php echo date('Y-m-d') ?>">
                        </p>
                        <div class="botones">
                            <input type="submit" value="Enviar" name="enviar">
                        </div>
                    </form>
                </div>
                <div id="omdbForm" style="display: <?php echo $omdbDisplay ?>">
                    <p>Introduce el título de una película para obtener información sobre ella</p>
                    <p>
                        <input type="text" name="titulo" form="rest" placeholder="Nombre de la película (en inglés)">
                    </p>
                    <div class="botones">
                        <input type="submit" value="Enviar" form="rest" name="enviar" form="rest">
                    </div>
                </div>
            </div>
            <div id="servicio-rest">
                <div id="apodService" style="display: <?php echo $apodDisplay ?>">
<!--                    <p>Titulo APOD</p>
                    <img src="webroot/icons/perro.jpg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta nisi ut tristique tempor. Nulla facilisi. Ut tempus luctus tincidunt. Curabitur cursus diam enim, ac tempor odio congue vitae. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a ipsum enim. Sed accumsan, sem ut mattis lobortis, lorem nulla convallis velit, sit amet suscipit turpis sapien quis risus. Cras pellentesque, quam sit amet venenatis vestibulum, tellus nisl suscipit felis, quis finibus nunc odio vel elit. Praesent dictum vestibulum nunc et elementum. Pellentesque ut enim vitae risus pretium semper. Maecenas molestie aliquet nisi nec sodales.</p>-->
                    <p><?php echo $aServicioAPOD['title'] ?></p>
                    <img src="<?php echo $aServicioAPOD['url'] ?>">
                    <p><?php echo $aServicioAPOD['explanation'] ?></p>
                </div>
                <div id="omdbService" style="display: <?php echo $omdbDisplay ?>">
<!--                    <p>The Lion King</p>
                    <img src="webroot/icons/cartel.jpg">
                    <p><strong>Fecha de salida:</strong> 24 Jun 1994</p>
                    <p><strong>Duración:</strong> 88 min</p>
                    <p><strong>Género:</strong> Animation, Adventure, Drama, Family, Musical</p>
                    <p><strong>Director:</strong> Roger Allers, Rob Minkoff</p>
                    <p><strong>Premios:</strong> Won 2 Oscars. Another 35 wins & 35 nominations.</p>
                    <p><strong>Argumento:</strong> Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.</p>-->
                    <p><?php echo $aServicioOMDb['Title'] ?></p>
                    <img src=<?php echo $aServicioOMDb['Poster'] ?>>
                    <p><strong>Fecha de salida:</strong> <?php echo $aServicioOMDb['Released'] ?></p>
                    <p><strong>Duración:</strong> <?php echo $aServicioOMDb['Runtime'] ?></p>
                    <p><strong>Género:</strong> <?php echo $aServicioOMDb['Genre'] ?></p>
                    <p><strong>Director:</strong> <?php echo $aServicioOMDb['Director'] ?></p>
                    <p><strong>Premios:</strong> <?php echo $aServicioOMDb['Awards'] ?></p>
                    <p><strong>Argumento:</strong> <?php echo $aServicioOMDb['Plot'] ?></p>              
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