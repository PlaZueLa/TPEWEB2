<?php
    require_once './app/models/category.model.php';
    require_once './app/models/cars.model.php';
    require_once './app/views/cars.view.php';

class CarsController {
    private $CategoryModel;
    private $model;
    private $view;

    public function __construct() {
        $this->CategoryModel = new CategoryModel();
        $this->model = new CarsModel();
        $this->view = new CarsView();
        if (session_status() != PHP_SESSION_ACTIVE) {
          session_start(); // verifica que haya un inicio de sesion
        }
      }

        public function checkLoggedIn() {
          if (!isset($_SESSION['IS_LOGGED'])) {
              header("Location: " . BASE_URL);
              die();
          }
      } 

    public function showCars() {
      
        $cars = $this->model->getAllCars();
        $categories = $this->CategoryModel->getAllCategories();
        $this->view->showCars($cars,$categories);
    }


    function addCars() {
        // TODO: validar entrada de datos
        $categories = $this->CategoryModel->getAllCategories();
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $fecha_creacion = $_POST['fecha_creacion'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $id_categoria = $_POST['categoria'];
        
         $this->model->insertCars($marca, $modelo, $fecha_creacion, $precio, $descripcion, $id_categoria);
    
        header("Location: " . BASE_URL); 
    
    

    }

   
    function deleteCar($id) {
      
        $this->model->deleteCarById($id);
        header("Location: " . BASE_URL); 
    }

    public function editCar($id){
      $car = $this->model->getCarId($id);
      $categories = $this->CategoryModel->getAllCategories();
      $this->view->showEditCar($car,$categories);
  }
     
  public function updateCar(){
  
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $id_categoria = $_POST['id_categoria'];
    
    $this->model->updateEditCar($id,$marca,$modelo,$fecha_creacion,$precio,$descripcion,$id_categoria);
    header("Location: " . BASE_URL);

  }
 
     public function Filtrar($id) {
    $cars = $this->model->Filtrar($id);
      
     $this->view->FiltrarCar($cars);
   }


    public function showCarsById($id){
      
      $CarIdSelected = $this->model->showCarInfo($id);
      $this->view->showCarsByIdinfo($CarIdSelected);

    }
  


   public function showCategories() {
   

    $categories = $this->CategoryModel->getAllCategories();
    $this->view->showCategories($categories);



   }  

   function addCategory() {

    $nombre = $_POST['nombre'];
    
    $this->CategoryModel->insertCategorys($nombre);
    
    
    header("Location: " . BASE_URL . '/categorias');


  }

   
   function deleteCategory($id) {

    
    $this->CategoryModel->deleteCategoryById($id);

    header("Location: " . BASE_URL . '/categorias');
    
}

    function ShowEditCategoryForm($id){
  $categories = $this->CategoryModel->getCategoryId($id);
      $this->view->ShowEditCategories($categories);
}

 
  public function updateCat(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    $this->CategoryModel->updateEditCat($nombre,$id);
    header("Location: " . BASE_URL . '/categorias');


 }

//function EditCategory() {

  //$nombre = $_POST['nombre'];





      
    }

   





  
   
   
