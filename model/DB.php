<?php
/**
 * @author Susana Fabián Antón
 * @since 14/01/2021
 * @version 18/01/2021
 */
interface DB {
    public static function ejecutarConsulta($sentenciaSQL, $parametros);
}