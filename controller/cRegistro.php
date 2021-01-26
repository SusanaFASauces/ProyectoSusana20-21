<?php
/**
 * @author Susana Fabián Antón
 * @since 22/01/2021
 * @version 22/01/2021
 */

if(isset($_REQUEST['iniciarSesion'])) { // si se ha pulsado el botón de iniciar sesión
    $_SESSION[controladorEnCurso] = $aControladores['login']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

//constantes que contienen datos que necesitan las funciones de la libreria de validacion
define('OBLIGATORIO', 1);
define('OPCIONAL', 0);
$entradaOK = true; // creamos una variable que indicará que el formulario está bien rellenado
$aErrores = [ // creamos un array para guardar los errores que surjan durante la validación
    'codUsuario' => null,
    'descUsuario' => null,
    'password' => null,
    'confirmacionPassword' => null
];

if(isset($_REQUEST['registro'])) { // si se ha pulsado el botón de registrarse
    // VALIDACIÓN DE LOS DATOS -> utilizando los métodos de la librería de validaciones
    $aErrores['codUsuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['codUsuario'], 15, 1, OBLIGATORIO); // maximo, mínimo y obligatoriedad
    $aErrores['descUsuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['descUsuario'], 255, 1, OBLIGATORIO); // maximo, mínimo y obligatoriedad
    $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 16, 1, 2, OBLIGATORIO); //máximo, mínimo, tipo y obligatoriedad
    if($_REQUEST['password']!==$_REQUEST['confirmacionPassword']) { //si la contraseña y su confirmación no son iguales
        $aErrores['confirmacionPassword'] = "Las contraseñas no coinciden.";
    }
    foreach ($aErrores as $campo => $error) { // recorremos el vector en busca de errores
        if ($error != null) { // si encontramos errores
            $entradaOK = false;
        }
    }
    if($entradaOK) { //si no se han encontrado errores hasta el momento
        if(!UsuarioPDO::validarCodNoExiste($_REQUEST['codUsuario'])) { //si el código de usuario ya ha sido usado
            $aErrores['codUsuario'] = "El código de usuario está en uso.";
            $entradaOK = false;
        }
    }
        
    if($entradaOK) { // si el formulario se ha rellenado y los datos son correctos
        $oNuevoUsuario = UsuarioPDO::altaUsuario($_REQUEST['codUsuario'], $_REQUEST['descUsuario'], $_REQUEST['password']); //damos de alta al usuario
        if(!is_null($oNuevoUsuario)) { //si el alta se ha realizado correctamente
            $_SESSION[usuarioDAW208DBSusana2021] = $oNuevoUsuario; //guardamos el nuevo objeto usuario en la sesión
        }
        $_SESSION[controladorEnCurso] = $aControladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
        header('Location: index.php'); //enviamos al usuario de vuelta al index
        exit;
    }
}

$vistaEnCurso = $aVistas['registro']; //variable que contiene la vista que va a ejecutarse
require_once $aVistas['layout']; //llamamos al layout