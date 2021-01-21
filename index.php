<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 20/01/2021
 */

//incluimos los ficheros de configuración
require_once 'config/confAplicacion.php'; //contiene los includes necesarios para el funcionamiento de la aplicación
require_once 'config/confDB.php'; //contiene las constantes de configuración de la base de datos

session_start(); //iniciamos la sesión

if(isset($_SESSION[controladorEnCurso])) { //si el controlador en curso está definido
    require_once $_SESSION[controladorEnCurso]; //mandamos al usuario a la página que corresponda
}
else { //si no
    require_once $aControladores["login"]; //mandamos al usuario al login
}