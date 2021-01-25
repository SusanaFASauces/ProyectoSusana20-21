<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 20/01/2021
 */

if(isset($_REQUEST['registro'])) { // si se ha pulsado el botón de registro
    $_SESSION[controladorEnCurso] = $aControladores['registro']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

//constantes que contienen datos que necesitan las funciones de la libreria de validacion
define('OBLIGATORIO', 1);
define('OPCIONAL', 0);
$entradaOK = true; // creamos una variable que indicará que el formulario está bien rellenado
$aErrores = [ // creamos un array para guardar los errores que surjan durante la validación
    'usuario' => null,
    'password' => null
];

if(isset($_REQUEST['iniciarSesion'])) { // si se ha pulsado el botón de iniciar sesión
    // VALIDACIÓN DE LOS DATOS -> utilizando los métodos de la librería de validaciones
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 15, 1, OBLIGATORIO); // maximo, mínimo y obligatoriedad
    $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 16, 1, 2, OBLIGATORIO); //máximo, mínimo, tipo y obligatoriedad
    foreach ($aErrores as $campo => $error) { // recorremos el vector en busca de errores
        if ($error != null) { // si encontramos errores
            $entradaOK = false;
        }
    }
    if(entradaOK) { //si no se han encontrado errores hasta el momento
        //pedimos a la clase UsuarioPDO que valide las credenciales de usuario
        $oUsuario = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']);
        if(is_null($oUsuario)) { //si no existe un usuario con esas credenciales
            $entradaOK = false;
        }
    }
}
else { // si NO se ha pulsado enviar
    $entradaOK = false;
}

if($entradaOK) { // si el formulario se ha rellenado y los datos son correctos
    $_SESSION[usuarioDAW208DBSusana2021] = $oUsuario; //guardamos en la sesión el objeto usuario
    $_SESSION[controladorEnCurso] = $aControladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    echo "header";
    exit;
}

$vistaEnCurso = $aVistas['login']; //variable que contiene la vista que va a ejecutarse
require_once $aVistas['layout']; //llamamos al layout