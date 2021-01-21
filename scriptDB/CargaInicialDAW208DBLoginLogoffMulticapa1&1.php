<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 20/01/2021
 */

require_once '../config/confDB.php'; //incluimos el archivo de configuración de nuestra base de datos

try { //código susceptible de producir errores
    $miDB = new PDO(DSN, USER, PASSWORD); //conectamos con la base de datos
    $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //establecemos que se lancen excepciones cuando se encuentren errores en la conexión
    
    $sqlInsertarTuplas = $miDB->exec( //insertamos tuplas en la tabla T01_Usuario
        "INSERT INTO T01_Usuario(T01_CodUsuario, T01_Password, T01_DescUsuario) VALUES 
        ('nereaa',SHA2('nereaapaso',256),'Nerea Álvarez'),
        ('miguel',SHA2('miguelpaso',256),'Miguel Ángel Aranda'),
        ('beatiz',SHA2('beatrizpaso',256),'Beatriz Merino'),
        ('nerean',SHA2('nereanpaso',256),'Nerea Nuevo'),
        ('cristinam',SHA2('cristinampaso',256),'Cristina Manjón'),
        ('susana',SHA2('susanapaso',256),'Susana Fabián'),
        ('sonia',SHA2('soniapaso',256),'Sonia Antón'),
        ('elena',SHA2('elenapaso',256),'Elena de Antón'),
        ('nacho',SHA2('nachopaso',256),'Nacho del Prado'),
        ('raul',SHA2('raulpaso',256),'Raúl Núñez'),
        ('luis',SHA2('luispaso',256),'Luis Puente'),
        ('arkaitz',SHA2('arkaitzpaso',256),'Arkaitz Rodríguez'),
        ('rodrigo',SHA2('rodrigopaso',256),'Rodrigo Robles'),
        ('javier',SHA2('javierpaso',256),'Javier Nieto'),
        ('cristinan',SHA2('cristinanpaso',256),'Cristina Nuñez'),
        ('heraclio',SHA2('heracliopaso',256),'Heraclio Borbujo'),
        ('amor',SHA2('amorpaso',256),'Amor Rodriguez'),
        ('antonio',SHA2('antoniopaso',256),'Antonio Jáñez'),
        ('leticia',SHA2('leticiapaso',256),'Leticia Núñez');
        
        INSERT INTO T01_Usuario(T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) VALUES 
        ('admin',SHA2('adminpaso',256),'Administrador','administrador');"
    );
    
    if($sqlInsertarTuplas>0) { //informamos al usuario de que todo ha ido bien
        echo "<p style=color:green>Las tablas de la base de datos se han cargado correctamente</p>";
    }
    else { //informamos al usuario de que ha sucedido un error
        echo "<p style=color:red>No se han podido cargar las tablas de la base de datos</p>"; 
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