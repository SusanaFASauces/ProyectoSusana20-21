<?php
/**
 * @author Susana Fabián Antón
 * @since 03/02/2021
 * @version 07/02/2021
 */

function convertir($cifra, $udInicial, $udFinal) {
    $aRespuesta = [];
    switch ($udInicial.$udFinal) {
        case "kgg":
            $aRespuesta['factorConversion'] = 3;
            $aRespuesta['resultado'] = $cifra*1000;
            break;
        case "kgmg":
            $aRespuesta['factorConversion'] = 6;
            $aRespuesta['resultado'] = $cifra*1000000;
            break;
        case "gkg":
            $aRespuesta['factorConversion'] = -3;
            $aRespuesta['resultado'] = $cifra/1000;
            break;
        case "gmg":
            
            $aRespuesta['factorConversion'] = 3;
            $aRespuesta['resultado'] = $cifra*1000;
            break;
        case "mgkg":
            
            $aRespuesta['factorConversion'] = -6;
            $aRespuesta['resultado'] = $cifra/1000000;
            break;
        case "mgg":
            $aRespuesta['factorConversion'] = -3;
            $aRespuesta['resultado'] = $cifra/1000;
            break;
        default:
            $aRespuesta['factorConversion'] = 1;
            $aRespuesta['resultado'] = $cifra;
    }
    return $aRespuesta;
}

$aRespuestaConversor = []; //declaramos un array en el que almacenaremos las respuestas del servicio

if($_REQUEST['cifra'] !== "") { //si se han enviado los parámetros necesarios
    //guardamos los datos recibidos en el array de respuesta
    $aRespuestaConversor['cifra'] = $_REQUEST['cifra'];
    $aRespuestaConversor['udInicial'] = $_REQUEST['udInicial'];
    $aRespuestaConversor['udFinal'] = $_REQUEST['udFinal'];
    //llamamos a la función convertir y almacenamos su resultado
    $aConvertir = convertir($aRespuestaConversor['cifra'], $aRespuestaConversor['udInicial'], $aRespuestaConversor['udFinal']);
    $aRespuestaConversor['factorConversion'] = $aConvertir['factorConversion'];
    $aRespuestaConversor['resultado'] = $aConvertir['resultado'];
}
else { //si no
    //guardamos en el array los datos del error
    $aRespuestaConversor['codigoError'] = 400; 
    $aRespuestaConversor['mensajeError'] = "No se han recibido los parámetros necesarios";
}
//convertimos el array de respuesta a json
echo json_encode($aRespuestaConversor);