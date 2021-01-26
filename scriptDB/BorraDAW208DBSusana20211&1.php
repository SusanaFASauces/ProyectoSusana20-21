<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 21/01/2021
 */

require_once '../config/confDB.php'; //incluimos el archivo de configuración de nuestra base de datos

try { //código susceptible de producir errores
    $miDB = new PDO(DSN, USER, PASSWORD); //conectamos con la base de datos
    $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //establecemos que se lancen excepciones cuando se encuentren errores en la conexión
    
    $sqlInsertarTuplas = $miDB->exec( //borramos las tablas de nuestra base de datos
        "DROP TABLE IF EXISTS T01_Usuario;"
    );
    
    if($sqlInsertarTuplas>0) { //informamos al usuario de que todo ha ido bien
        echo "<p style=color:green>Las tablas de la base de datos se han borrado correctamente</p>";
    }
    else { //informamos al usuario de que ha sucedido un error
        echo "<p style=color:red>No se han podido borrar las tablas de la base de datos</p>"; 
    }
}
catch(PDOException $ex) { //código a ejecutar cuando se produce un error 
    echo "<p style='color:red;'>Error en la conexión</p>";
    echo "<p style=color:red>Error: ".$ex->getMessage()."<br>"; //muestro el mensaje de error
    echo "Código de error: ".$ex->getCode()."</p>"; //muestro el código del error
}
finally {
    unset($miDB); //cerramos la conexion
}