<?php
/**
 * @author Susana Fabián Antón
 * @since 26/01/2021
 * @version 26/01/2021
 */

if(isset($_REQUEST['volver_x'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION[controladorEnCurso] = $aControladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
if(isset($_REQUEST['enviar'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $aServicioAPOD = REST::sevicioAPOD($_REQUEST['fecha']);
}
else {
    //llamamos al servicio y le pasamos la fecha de hoy
    $aServicioAPOD = REST::sevicioAPOD(date('Y-m-d'));
}
$tituloEnCurso = $aServicioAPOD['title'];
$imagenEnCurso = $aServicioAPOD['url'];
$descripcionEnCurso = $aServicioAPOD['explanation'];

$vistaEnCurso = $aVistas['rest']; //variable que contiene la vista que va a ejecutarse
require_once $aVistas['layout']; //llamamos al layout