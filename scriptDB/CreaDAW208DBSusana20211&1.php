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
    
    $sqlCrearTablas = $miDB->exec( //creamos las tablas de nuestra base de datos
        "CREATE TABLE IF NOT EXISTS T01_Usuario (
            T01_CodUsuario VARCHAR(15) NOT NULL,
            T01_Password VARCHAR(64) NOT NULL,
            T01_DescUsuario VARCHAR(255) NOT NULL,
            T01_NumAccesos INT DEFAULT 0,
            T01_FechaHoraUltimaConexion TIMESTAMP,
            T01_Perfil ENUM('administrador', 'usuario') DEFAULT 'usuario',
            PRIMARY KEY(T01_CodUsuario)
        )ENGINE=InnoDB;
        CREATE TABLE IF NOT EXISTS T02_Departamento (
            T02_CodDepartamento VARCHAR(15) NOT NULL,
            T02_DescDepartamento VARCHAR(255) NOT NULL,
            T02_FechaCreacionDepartamento TIMESTAMP NOT NULL,
            T02_VolumenDeNegocio INT NOT NULL,
            T02_FechaBajaDepartamento TIMESTAMP,
            PRIMARY KEY(T02_CodDepartamento)
        )ENGINE=InnoDB;"
    );
    
    if($sqlCrearTablas>0) { //informamos al usuario de que todo ha ido bien
        echo "<p style=color:green>Las tablas de la base de datos se han creado correctamente</p>";
    }
    else { //informamos al usuario de que ha sucedido un error
        echo "<p style=color:red>No se han podido crear las tablas de la base de datos</p>"; 
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