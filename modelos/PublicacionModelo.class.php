<?php

require "../utils/autoload.php";


class PublicacionModelo extends Modelo{


public $idPublicacion;
public $idAutor;
public $fechaHora;
public $cuerpo;


public function __construct($id=""){

    parent::__construct();
    
    if($id != ""){
        $this -> Id = $id;
        $this -> Obtener();
    }

}


public function Guardar(){


}


public function ObtenerPublicaciones(){

    $sql = "SELECT * FROM autor, publicacion";
    $sql .= " WHERE autor.idAutor = publicacion.idAutor";
    $sql .= " ORDER BY fechaHora";

return $publicaciones = $this -> conexionBaseDeDatos -> query($sql)-> fetch_all(MYSQLI_ASSOC);

}





public function Obtener(){

    $sql = "SELECT * FROM producto WHERE id = " . $this ->Id;
    $fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC)[0];

    $this -> Id = $fila['id'];
    $this -> nombre = $fila['nombre'];
    $this -> descripcion = $fila['descripcion'];
    $this -> stock = $fila['stock'];
}


}

