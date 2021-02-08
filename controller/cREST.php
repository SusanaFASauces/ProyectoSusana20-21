<?php
/**
 * @author Susana Fabián Antón
 * @since 26/01/2021
 * @version 07/02/2021
 */

if(isset($_REQUEST['volver_x'])) { // si se ha pulsado el botón de volver
    $_SESSION[controladorEnCurso] = $aControladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

if($_REQUEST['servicios']=="omdb"){ //si se ha seleccionado el servicio omdb
    $omdbSelected = "selected"; //marcamos el servicio como seleccionado
    $omdbDisplay = "block"; //mostramos el servicio que nos interesa
    $apodDisplay = "none"; //ocultamos los demás servicios
    $conversorDisplay = "none";
    if($_REQUEST['titulo']) { //si se ha enviado el título de una película
        $titulo = str_replace(" ","+",trim($_REQUEST['titulo'])); //sustituimos los espacios por signos de suma
        //llamamos al servicio y le pasamos el título introducido por el usuario
        $aServicioOMDb = REST::sevicioOMDb($titulo);
        if($aServicioOMDb['Response']=="False") { //si el servicio nos dice que la película no existe
            //guardamos el mensaje de error
            $mensajeError = $aServicioOMDb['Error'];
        }
    }
    else { //si no
        //llamamos al servicio y le pasamos la película por defecto
        $aServicioOMDb = REST::sevicioOMDb("The+lion+king");
    }
    //guardamos el título y la imagen para pasárselos a la vista
    $tituloEnCurso = $aServicioOMDb['Title'];
    $imagenEnCurso = $aServicioOMDb['Poster'];
}
else if($_REQUEST['servicios']=="conversor") {
    $conversorSelected = "selected"; //marcamos el servicio como seleccionado
    $conversorDisplay = "block"; //mostramos el servicio que nos interesa
    $apodDisplay = "none"; //ocultamos los demás servicios
    $omdbDisplay = "none";
    //llamamos al servicio
    if($_REQUEST['enviar']) { 
        $aServicioConversor = REST::servicioConversor($_REQUEST['cifra'],$_REQUEST['udInicial'],$_REQUEST['udFinal']);
        }
        if(isset($aServicioConversor['codigoError'])) { //si el servicio nos dice que se ha producido un error
            //guardamos el mensaje de error
            $codigoError = $aServicioConversor['codigoError'];
            $mensajeError = $aServicioConversor['mensajeError'];
    }
    //guardamos el título y la imagen para pasárselos a la vista
    $tituloEnCurso = "Conversor de Unidades";
    $imagenEnCurso = "webroot/icons/calculadora.jpg";
}
else { //si no
    $apodSelected = "selected"; //marcamos como seleccionado el servicio por defecto (apod)
    $apodDisplay = "block"; //mostramos el servicio por defecto (apod)
    $omdbDisplay = "none"; //ocultamos los demás servicios
    $conversorDisplay = "none";
    if($_REQUEST['fecha']) { //si se ha enviado una fecha
        //llamamos al servicio y le pasamos la fecha introducida por el usuario
        $aServicioAPOD = REST::sevicioAPOD($_REQUEST['fecha']);
    }
    else { //si no
        //llamamos al servicio y le pasamos la fecha de hoy
        $aServicioAPOD = REST::sevicioAPOD(date('Y-m-d'));
    }
}

if(isset($mensajeError)) { //si ha ocurrido algún error
    //guardamos el mensaje y la imagen de error para pasárselos a la vista
    $tituloEnCurso = "ERROR: ".$mensajeError;
    $imagenEnCurso = "webroot/icons/sorry.jpg";
}
$vistaEnCurso = $aVistas['rest']; //variable que contiene la vista que va a ejecutarse
require_once $aVistas['layout']; //llamamos al layout