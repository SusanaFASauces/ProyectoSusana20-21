<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 20/01/2021
 */
class DBPDO implements DB{
    /**
     * Ejecuta una consulta contra la base de datos
     * 
     * @param type $sentenciaSQL la sentencia SQL que queremos ejecutar
     * @param type $parametros los parámetos que se le pasan a la consulta en el momento de la ejecución
     * @return type $consulta el resultado de la ejecución de la consulta
     */
    public static function ejecutarConsulta($sentenciaSQL, $parametros) {
        try {
            $miDB = new PDO(DSN, USER, PASSWORD); //abrimos la conexión con la base de datos
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //establecemos que se lancen excepciones cuando se encuentren errores en la conexión
            
            $consulta = $miDB->prepare($sentenciaSQL); //preparamos la consulta
            $consulta->execute($parametros); //ejecutamos la consulta
        
        }
        catch(PDOException $ex) { //código a ejecutar cuando se produce un error 
            $consulta = null; //destruimos la consulta.
            echo "<p style='color:red;'>Error en la conexión</p>";
            echo "<p style=color:red>Error: ".$ex->getMessage()."<br>"; //muestro el mensaje de error
            echo "Código de error: ".$ex->getCode()."</p>"; //muestro el código del error
        }
        finally {
            unset($miDB); //cerramos la conexion
        }
        return $consulta;
    }
}