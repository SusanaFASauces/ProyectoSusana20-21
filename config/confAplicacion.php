<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 26/01/2021
 */

//incluimos la librería de validaciones
require_once "core/201130libreriaValidacion.php"; 

//incluimos las clases del modelo
require_once 'model/UsuarioDB.php';
require_once 'model/DB.php';
require_once "model/Usuario.php"; 
require_once "model/UsuarioPDO.php";
require_once "model/DBPDO.php";
require_once "model/REST.php";

$aControladores = [ //array que contiene las rutas de los distintos controladores
    "borrarCuenta" => "controller/cBorrarCuenta.php",
    "inicio" => "controller/cInicio.php",
    "login" => "controller/cLogin.php",
    "miCuenta" => "controller/cMiCuenta.php",
    "mtoDepartamentos" => "controller/cMtoDepartamentos.php",
    "registro" => "controller/cRegistro.php",
    "rest" => "controller/cREST.php",
    "wip" => "controller/cWIP.php"
];

$aVistas = [ //array que contiene las rutas de las distintas vistas
    "borrarCuenta" => "view/vBorrarCuenta.php",
    "inicio" => "view/vInicio.php",
    "layout" => "view/layout.php",
    "login" => "view/vLogin.php",
    "miCuenta" => "view/vMiCuenta.php",
    "mtoDepartamentos" => "view/vMtoDepartamentos.php",
    "registro" => "view/vRegistro.php",
    "rest" => "view/vREST.php",
    "wip" => "view/vWIP.php"
];