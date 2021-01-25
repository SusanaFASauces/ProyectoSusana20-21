<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 20/01/2021
 */
class UsuarioPDO implements UsuarioDB {
    /**
     * Comprueba en la base de datos que exista un usuario cuyas credenciales coincidan con los datos pasados
     * como parámetro. Si existe, devuelve sus datos.
     *  
     * @param type $codUsuario el código del usuario que deseamos validar.
     * @param type $password la contraseña del usuario que deseamos validar.
     * @return \Usuario variable que contendrá una instancia de Usuario con datos del usuario que deseamos validar.
     * Si no existe un usuario con esas credenciales, devolverá null.
     */
    public static function validarUsuario($codUsuario, $password) {
        $oUsuario = null; //variable en la que almacenaremos el usuario que estamos buscando
        //buscamos en la base de datos un usuario con esas credenciales
        $selectUsuario = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario=? AND T01_Password=?";
        $resultadoUsuario = DBPDO::ejecutarConsulta($selectUsuario, [$codUsuario, hash("sha256",($codUsuario.$password))]); //ejecutamos la consulta
        if($resultadoUsuario->rowCount() > 0) { //si se ha encontrado un usuario con esas credenciales
            $fetchUsuario = $resultadoUsuario->fetchObject(); //recogemos los datos del usuario de la base de datos
            //instanciamos un objeto de la clase Usuario con esos datos
            $oUsuario = new Usuario($fetchUsuario->T01_CodUsuario, $fetchUsuario->T01_Password, $fetchUsuario->T01_DescUsuario, $fetchUsuario->T01_Perfil);         
        }
        return $oUsuario;
    }
    
    /**
     * Comprueba si existe o no un usuario en la base de datos con el código de usuario recibido como parámetro.
     * 
     * @param type $codUsuario el código de usuario que queremos comprobar
     * @return boolean true si no existe ningún usuario que utilice ese código, o false en el caso contrario.
     */
    public static function validarCodNoExiste($codUsuario) {
        //buscamos en la base de datos un usuario con ese código
        $selectUsuario = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario=?";
        $resultadoSelect = DBPDO::ejecutarConsulta($selectUsuario, [$codUsuario]); //ejecutamos la consulta
        if($resultadoSelect->rowCount() > 0) { //si se ha encontrado un usuario con esas credenciales
            return false;
        }
        else { //si no
            return true;
        }
    }
    /**
     * Añade un nuevo usuario a la base de datos. Si el alta se realiza correctamente, devuelve
     * una instancia del Usuario añadido.
     * 
     * @param type $codUsuario el código del usuario que vamos a dar de alta.
     * @param type $descUsuario la descripción del usuario que vamos a dar de alta.
     * @param type $password la contraseña del usuario que vamos a dar de alta.
     * @return \Usuario variable que contendrá un instancia de Usuario con los datos del usuario que hemos
     * añadido a la base de datos. Si no se pudiera dar de alta al usuario, devolverá null.
     */
    public static function altaUsuario($codUsuario, $descUsuario, $password) {
        $oUsuario = null;
        //insertamos en la base de datos un nuevo usuario
        $insertUsuario = "INSERT INTO T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario) VALUES (?, ?, ?)"; //buscamos en la base de datos un usuario con esas credenciales
        DBPDO::ejecutarConsulta($insertUsuario, [$codUsuario, hash("sha256",($codUsuario.$password)), $descUsuario]); //ejecutamos la consulta
        //FALTARÍA COMPROBAR DE ALGÚN MODO QUE EL USUARIO SE HAYA INSERTADO CORRECTAMENTE
        $selectUsuario = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario=?"; //buscamos al usuario en la base de datos
        $resultadoSelect = DBPDO::ejecutarConsulta($selectUsuario, [$codUsuario]); //ejecutamos la nueva consulta
        if($resultadoSelect->rowCount() > 0) { //si se ha encontrado un usuario con esas credenciales
            $fetchSelect = $resultadoSelect->fetchObject(); //recogemos los datos del usuario de la base de datos
            //instanciamos un objeto de la clase Usuario con esos datos
            $oUsuario = new Usuario($fetchSelect->T01_CodUsuario, $fetchSelect->T01_Password, $fetchSelect->T01_DescUsuario, $fetchSelect->T01_Perfil);         
        }
        return $oUsuario;
    }
    /**
     * Modifica los datos de un usuario en la base de datos. Si la modificación se realiza correctamente, devuelve
     * una instancia de Usuario con los datos modificados.
     * 
     * @param type $codUsuario el código del usuario que se desea modificar
     * @param type $newDescUsuario la nueva descripción del usuario
     * @return \Usuario variable que contendrá un instancia de Usuario con los datos del usuario que hemos
     * modificado. Si no se pudiera realizar la modificación, devolverá null.
     */
    public static function modificarUsuario($codUsuario, $newDescUsuario) {
        $oUsuario = null; //variable en la que almacenaremos el usuario que vamos a modificar
        //actualizamos los datos del usuario con ese código en la base de datos
        $updateUsuario = "UPDATE T01_Usuario SET T01_DescUsuario=? WHERE T01_CodUsuario=?";
        $resultadoUpdate = DBPDO::ejecutarConsulta($updateUsuario, [$newDescUsuario, $codUsuario]); //ejecutamos la consulta
        if($resultadoUpdate > 0) { //si se ha actualizado la tabla
            $selectUsuario = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario=?"; //buscamos al usuario en la base de datos
            $resultadoSelect = DBPDO::ejecutarConsulta($selectUsuario, [$codUsuario]); //ejecutamos la nueva consulta
            if($resultadoSelect->rowCount() > 0) { //si se ha encontrado un usuario con esas credenciales
                $fetchSelect = $resultadoSelect->fetchObject(); //recogemos los datos del usuario de la base de datos
                //instanciamos un objeto de la clase Usuario con esos datos
                $oUsuario = new Usuario($fetchSelect->T01_CodUsuario, $fetchSelect->T01_Password, $fetchSelect->T01_DescUsuario, $fetchSelect->T01_Perfil);         
            }
        }
        return $oUsuario;
    }
    
    /**
     * Borra de la base de datos el usuario cuyo código coincida con el recibido como parámetro.
     * 
     * @param type $codUsuario el código del usuario que queremos borrar.
     * @return boolean true si el usuario se ha borrado correctamente, o false en el caso contrario.
     */
    public static function borrarUsuario($codUsuario) {
        //borramos de la base de datos el usuario con ese código
        $deleteUsuario = "DELETE FROM T01_Usuario WHERE T01_CodUsuario=?";
        $resultadoDelete = DBPDO::ejecutarConsulta($deleteUsuario, [$codUsuario]); //ejecutamos la consulta
        if($resultadoDelete > 0) { //si el usuario se ha eliminado correctamente
            return true;
        }
        else { //si no
            return false;
        }
    }
}