<?php

class CarsModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_autos;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de tareas completa.
     */
    public function getAllCars() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase
            //  

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT vehiculos.*, categorias.nombre as categoria FROM vehiculos JOIN categorias ON vehiculos.id_categoria = categorias.id");
        $query->execute();

        // 3. obtengo los resultados
        $cars = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $cars;
    }
  
   public function insertCars( $marca, $modelo, $fecha_creacion, $precio, $descripcion, $id_categoria) {
    $query = $this->db->prepare("INSERT INTO vehiculos (marca, modelo, fecha_creacion, precio, descripcion, id_categoria) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$marca, $modelo, $fecha_creacion, $precio, $descripcion, $id_categoria]);

    return $this->db->lastInsertId();
   }

   function deleteCarById($id) {
    $query = $this->db->prepare('DELETE FROM vehiculos WHERE id = ?');
    $query->execute([$id]);
}


function getCarId($id){
    $query = $this->db->prepare("SELECT * FROM `vehiculos` WHERE id = ?");
    $query->execute([$id]);
    $car = $query->fetch(PDO::FETCH_OBJ);
    return $car;
}
  
function updateEditCar($id,$marca,$modelo,$fecha_creacion,$precio,$descripcion,$id_categoria){
    $query = $this->db->prepare("UPDATE vehiculos SET marca = ?, modelo = ?, fecha_creacion = ?, precio = ?, descripcion = ?, id_categoria = ? WHERE vehiculos.id = ?");
    $query->execute([$id,$marca,$modelo,$fecha_creacion,$precio,$descripcion,$id_categoria]); 
    return $id;
    
}



    
public function Filtrar($id) {
    $query = $this->db->prepare("SELECT vehiculos.*, categorias.nombre as categoria FROM vehiculos JOIN categorias ON vehiculos.id_categoria = categorias.id WHERE id_categoria = ?");
    $query->execute([$id]);
    $cars = $query->fetchAll(PDO::FETCH_OBJ);
    return $cars;
   }


public function insertCategorys($nombre) {
    $query = $this->db->prepare("INSERT INTO categorias (nombre) VALUES (?)");
    $query->execute([$nombre]);
    return $this->db->lastInsertId();
}


function deleteCategoryById($id) {
   $query = $this->db->prepare('DELETE FROM categorias WHERE id = ?');
    $query->execute([$id]);
}

}


