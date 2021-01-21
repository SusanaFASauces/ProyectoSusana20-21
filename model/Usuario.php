<?php
/**
 * @author Susana Fabián Antón
 * @since 12/01/2021
 * @version 12/01/2021
 */
class Usuario {
    //definición de los atributos de la clase
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numAccesos;
    private $fechaHoraUltimaConexion;
    private $perfil;
    
    /**
     * Instancia un objeto de la clase Usuario
     * 
     * @param type $codUsuario el código del usuario
     * @param type $password la contraseña del usuario
     * @param type $descUsuario la descripción del usuario
     * @param type $perfil el tipo de perfil del usuario
     */
    public function __construct($codUsuario, $password, $descUsuario, $perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numAccesos = 0;
        $this->perfil = $perfil;
    }
    
    /**
     * Devuelve el valor de un atributo
     * 
     * @param type $atributo el atributo cuyo valor deseamos conocer
     * @return type el valor del atributo
     */
    public function __get($atributo) {
        return $this->$atributo;
    }
    
    /**
     * Cambia el valor de un atributo
     * 
     * @param type $atributo el atributo cuyo valor deseamos cambiar
     * @param type $valor el valor que queremos darle al atributo
     */
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}