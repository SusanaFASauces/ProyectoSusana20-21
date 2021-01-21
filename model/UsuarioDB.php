<?php
/**
 * @author Susana Fabián Antón
 * @since 13/01/2021
 * @version 18/01/2021
 */
interface UsuarioDB {
    public static function validarUsuario($codUsuario, $password);
}