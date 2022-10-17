

<?php
require_once('libs/Smarty.class.php');


class CarsView {
    private $smarty;
    
    public function __construct() {
        $this->smarty = new Smarty();

    }
    function showCars($cars) {

        $this->smarty->assign("cars", $cars);
        
        $this->smarty->display("templates/carsList.tpl");
        
    }

    
    
    function showEditCar($car){
        $this->smarty->assign('car', $car);
        
        $this->smarty->display('editFormCar.tpl');
    }


   
   function showCategories ($categories) {
    $this->smarty->assign("categories", $categories);
    $this->smarty->display("templates/categorias.tpl");

   }

    function showEditCategories ($categories) {
    $this->smarty->assign("categories", $categories);
    $this->smarty->display("templates/editFormCat.tpl");

    }
   function FiltrarCar($cars) {

    $this->smarty->assign("cars", $cars);
    
    $this->smarty->display("templates/carsFilter.tpl");
    
}
 function showCarsByIdinfo($car){
    $this->smarty->assign('car', $car);
    $this->smarty->display('templates/carsInfoById.tpl');
 }



}




