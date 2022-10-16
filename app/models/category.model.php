<?php


class CategoryModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_autos;charset=utf8', 'root', '');
    }

    public function getAllCategories() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase
            //  
    
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM `categorias`");
        $query->execute();
    
        // 3. obtengo los resultados
        $categories = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categories;
}

}