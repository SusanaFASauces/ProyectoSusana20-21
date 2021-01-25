<?php
/**
 * @author Susana Fabián Antón
 * @since 22/01/2021
 * @version 22/01/2021
 */

if(isset($_REQUEST['volver_x'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION[controladorEnCurso] = $aControladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
if(isset($_REQUEST['cancelar'])) { // si se ha pulsado el botón de cancelar
    $_SESSION[controladorEnCurso] = $aControladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

$oUsuario = $_SESSION[usuarioDAW208DBSusana2021]; //recuperamos el usuario guardado en la sesión
$codUsuarioEnCurso = $oUsuario->__get(codUsuario); //recuperamos el código del usuario
$descUsuarioEnCurso = $oUsuario->__get(descUsuario); //recuperamos la descripción del usuario
$perfilEnCurso = $oUsuario->__get(perfil); //recuperamos el perfil del usuario
$numAccesosEnCurso = $oUsuario->__get(numAccesos); //recuperamos el número de accesos del usuario
$fechaHoraUltimaConexionEnCurso = $oUsuario->__get(fechaHoraUltimaConexion); //recuperamos la fecha de última conexión del usuario

if(isset($_REQUEST['borrarCuenta'])) { // si se ha pulsado el botón de borrar 
    if(UsuarioPDO::borrarUsuario($codUsuarioEnCurso)) { //si el usuario se ha borrado correctamente
        session_destroy(); //destruimos la sesión
    }
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

$vistaEnCurso = $aVistas['borrarCuenta']; //variable que contiene la vista que va a ejecutarse
require_once $aVistas['layout']; //llamamos al layout