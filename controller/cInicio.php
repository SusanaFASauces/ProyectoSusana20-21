<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 20/01/2021
 */

if(isset($_REQUEST['editarPerfil'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION[controladorEnCurso] = $aControladores['miCuenta']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
if(isset($_REQUEST['borrarCuenta'])) { // si se ha pulsado el botón de borrar cuenta
    $_SESSION[controladorEnCurso] = $aControladores['borrarCuenta']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
if(isset($_REQUEST['cerrarSesion'])) { // si se ha pulsado el botón de cerrar sesión
    session_destroy(); //destruimos la sesión
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
if(isset($_REQUEST['mtoDepartamentos'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION[controladorEnCurso] = $aControladores['mtoDepartamentos']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
if(isset($_REQUEST['rest'])) { // si se ha pulsado el botón de servicios rest
    $_SESSION[controladorEnCurso] = $aControladores['rest']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
//if(isset($_REQUEST['opinar'])) { // si se ha pulsado el botón de opinar
//    $_SESSION[controladorEnCurso] = $aControladores['wip']; //guardamos en la sesión el controlador que debe ejecutarse
//    header('Location: index.php'); //enviamos al usuario de vuelta al index
//    exit;
//}
$oUsuario = $_SESSION[usuarioDAW208DBSusana2021]; //recuperamos el usuario guardado en la sesión
$descUsuario = $oUsuario->__get(descUsuario); //recuperamos la descripción del usuario

$vistaEnCurso = $aVistas['inicio']; //variable que contiene la vista que va a ejecutarse
require_once $aVistas['layout']; //llamamos al layout