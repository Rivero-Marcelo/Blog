<?php

require "../utils/autoload.php";

class PublicacionControlador{




    public static function Crear($contexto){

        $p = new PublicacionModelo();
        $p -> idAutor;
        $p -> fechaHora = date('Y-m-d H:i:s');
        $p -> cuerpo = $contexto['post']['cuerpo'];
        $p -> Guardar();

    }



public static function ListarTodos(){

$p = new PublicacionModelo();
return $publicaciones = $p -> ObtenerPublicaciones();

}


public static function VerPublicacion($contexto){

    $p = new PublicacionModelo($contexto['post']['idPublicacion']);
    



}





}