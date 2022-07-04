<?php

require "../utils/autoload.php";


class PublicacionModelo extends Modelo{


public $idPublicacion;
public $idAutor;
public $fechaHora;
public $cuerpo;







public function Guardar(){


}


public function ObtenerPublicaciones(){

    $sql = "SELECT * FROM autor, publicacion";
    $sql .= " WHERE autor.idAutor = publicacion.idAutor";
    $sql .= " ORDER BY fechaHora";


return $publicaciones = $this -> conexionBaseDeDatos -> query($sql)-> fetch_all(MYSQLI_ASSOC);


}






}

