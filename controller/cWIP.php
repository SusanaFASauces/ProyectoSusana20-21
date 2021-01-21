<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 20/01/2021
 */

if(isset($_REQUEST['volver'])) { // si se ha pulsado el botón de volver
    $_SESSION[controladorEnCurso] = null; //eliminamos el controlador en curso
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

$vistaEnCurso = $aVistas['wip']; //variable que contiene la vista que va a ejecutarse
require_once $aVistas['layout']; //llamamos al layout