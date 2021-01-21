<?php
/**
 * @author Susana Fabián Antón
 * @since 21/01/2021
 * @version 21/01/2021
 */

if(isset($_REQUEST['volver_x'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION[controladorEnCurso] = $aControladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
$vistaEnCurso = $aVistas['mtoDepartamentos']; //variable que contiene la vista que va a ejecutarse
require_once $aVistas['layout']; //llamamos al layout