<?php
/**
 * @author Susana Fabián Antón
 * @since 21/01/2021
 * @version 21/01/2021
 */
class Departamento {
    //definición de los atributos de la clase
    private $codDepartamento;
    private $descDepartamento;
    private $volumenDeNegocio;
    private $fechaBajaDepartamento;
    
    /**
     * Instancia un objeto de la clase Departamento
     * 
     * @param type $codDepartamento el código del departamento
     * @param type $descDepartamento la descripción del departamento
     * @param type $volumenDeNegocio el volumen de negocio del departamento
     */
    public function __construct($codDepartamento, $descDepartamento, $volumenDeNegocio) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->volumenDeNegocio = $volumenDeNegocio;
        $this->fechaBajaDepartamento = null;
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