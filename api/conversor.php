<?php
/**
 * @author Susana Fabián Antón
 * @since 03/02/2021
 * @version 07/02/2021
 */
//Enlace de ejemplo: https://daw208.ieslossauces.es/proyectoSusana20-21/api/conversor.php?cifra=1&udInicial=kg&udFinal=g

/**
 * Convierte la cifra recibida a la unidad solicitada.
 * 
 * @param type $cifra la cifra que queremos convertir.
 * @param type $udInicial la unidad en la que se encuentra esa cifra.
 * @param type $udFinal la unidad a la que queremos convertir esta cifra.
 * @return array que contiene información sobre la conversión que se ha realizado.
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
$posiblesUnidades = ["kg","g","mg"]; //declaramos un array con las posibles unidades de conversión

if($_REQUEST['cifra']!=="" && $_REQUEST['udInicial']!=="" && $_REQUEST['udFinal']!=="") { //si se han recibido los parámetros necesarios
    //si los parámetros recibidos son válidos
    if(is_numeric($_REQUEST['cifra']) && in_array($_REQUEST['udInicial'], $posiblesUnidades) && in_array($_REQUEST['udFinal'], $posiblesUnidades)){
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
        $aRespuestaConversor['mensajeError'] = "Los parametros recibidos no son validos";
    }
}
else { //si no
    //guardamos en el array los datos del error
    $aRespuestaConversor['codigoError'] = 400; 
    $aRespuestaConversor['mensajeError'] = "No se han recibido los parametros necesarios";
}
//convertimos el array de respuesta a json
echo json_encode($aRespuestaConversor);