<?php
/**
 * @author Susana Fabián Antón
 * @since 26/01/2021
 * @version 07/02/2021
 */
class REST {
    /**
     * Llama al servicio API REST APOD(Astronomy Picture of the Day), que nos devuelve la imagen atronómica del
     * día e información relativa a esta.
     * 
     * @param type $fecha la fecha que le vamos a pasar al servicio para que busque una imagen.
     * @return type array que contiene información sobre la imagen astronómica del día. 
     */
    public static function sevicioAPOD($fecha) {
        //llamamos al servicio, pasándole la fecha al campo date, y decodificamos el json que nos devuelve
        return json_decode(file_get_contents("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=$fecha"), true);        
    }
    
    /**
     * Llama al servicio API REST OMdb(Open Movie Database), que nos devuelve información sobre películas.
     * 
     * @param type $titulo el título de la película que queremos buscar.
     * @return type array que contiene información sobre la película que le hemos pasado como parámetro.
     */
    public static function sevicioOMDb($titulo) {
        //llamamos al servicio, pasándole el título al campo t, y decodificamos el json que nos devuelve
        return json_decode(file_get_contents("http://www.omdbapi.com/?apikey=88ff8107&t=$titulo"), true);        
    }
    
    /**
     * Llama al servicio API REST Conversor de Unidades, que convierte los datos recibidos a las unidades solicitadas.
     * 
     * @param type $cifra la cifra que queremos convertir.
     * @param type $udInicial la unidad en la que se encuentra esa cifra.
     * @param type $udFinal la unidad a la que queremos convertir esta cifra.
     * @return type array que contiene información sobre la conversión que se ha realizado.
     */
    public static function servicioConversor($cifra,$udInicial,$udFinal) {
        return json_decode(file_get_contents("http://192.168.31.208/proyectoSusana20-21/api/conversor.php?cifra=$cifra&udInicial=$udInicial&udFinal=$udFinal"), true); 
    }
}   
