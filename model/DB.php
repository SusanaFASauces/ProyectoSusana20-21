<?php
/**
 * @author Susana Fabián Antón
 * @since 20/01/2021
 * @version 20/01/2021
 */
interface DB {
    public static function ejecutarConsulta($sentenciaSQL, $parametros);
}