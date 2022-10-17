<?php
require_once './app/controllers/cars.controller.php';
require_once './app/controllers/admin.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);





// tabla de ruteo
switch ($params[0]) {
       
    case 'home':
        $carsController = new CarsController();
        $carsController->showCars();
        break;
    
     case 'login'://muestro el form para acceder a ADMIN
         $AdminController = new adminController();
         $AdminController->showAdminPage();
         break;
    
     case 'validate':
        $AdminController = new AdminController();
        $AdminController->validateUser();
        break;
    
    case 'logout':
        $AdminController = new AdminController();
        $AdminController->Logout();
        break;
    case 'detalle':
        $carsController = new CarsController();
        $carsController->showCarsById($params[1]);
        break;
    case 'categorias':
        $carsController = new CarsController();
        $carsController->showCategories();
        break;
    case 'add':
        $carsController = new CarsController();
         $carsController->addCars();
        break;
    case 'delete':
        $carsController = new CarsController();
            // obtengo el parametro de la acción
        $id = $params[1];
        $carsController->deleteCar($id);
        break;
        case "ShowFormEditCar":
        
            
            $carsController = new CarsController();
            $carsController->editCar($params[1]);
            break;
        case "updateCar":
            
            //$id = $params[1];
            $carsController = new CarsController();
            $carsController->updateCar();
            break;
    case 'filtrar':
        $id = $params[1];
        $carsController = new CarsController();
        $carsController->Filtrar($id);
        break;
    case 'addCategory':
        $carsController = new CarsController();
        $carsController->addCategory();
        break;
    case 'deleteCat':
        
        $id = $params[1];
        $carsController = new CarsController();
        $carsController->deleteCategory($id);
        break;
    case "ShowFormEditCat":
        $id = $params[1];
        $carsController = new CarsController();
        $carsController->ShowEditCategoryForm($id);
        break;

        case "editCat":
            
            //$id = $params[1];
            $carsController = new CarsController();
            $carsController->updateCat();
            break;


    default:
        echo('404 Page not found');
        break;
}
