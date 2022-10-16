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
       
        $this->view->showCars($cars);
    }


    function addCars() {
        // TODO: validar entrada de datos
        
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $fecha_creacion = $_POST['fecha_creacion'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $id_categoria = $_POST['categoria'];
    
        $id = $this->model->insertCars($marca, $modelo, $fecha_creacion, $precio, $descripcion, $id_categoria);
    
        header("Location: " . BASE_URL); 
    
    

    }

    function deleteCar($id) {
      
        $this->model->deleteCarById($id);
        header("Location: " . BASE_URL); 
    }

    public function editCar($id){
      $car = $this->model->getCarId($id);
      $this->view->showEditCar($car);
  }
     
  public function updateCar($id){
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $id_categoria = $_POST['id_categoria'];
    $this->model->updateEditCar($id,$marca,$modelo,$fecha_creacion,$precio,$descripcion,$id_categoria);
    header("Location: " . BASE_URL);

  }
 
  
  


   public function showCategories() {
   

    $categories = $this->CategoryModel->getAllCategories();
    $this->view->showCategories($categories);



   }  
   
   
    public function Filtrar($id) {
     $cars = $this->model->Filtrar($id);
       
      $this->view->FiltrarCar($cars);
    }



  // function deleteCategory($id) {
  //  $this->model->deleteCategoryById($id);
  //  header("Location: " . 'Categorias');
//}





      
    }

   





   
   
   
