<?php

require_once 'Data\BusquedaData.php';

class BusquedaController {
    
    private $model;
    
    public function __construct() {
        $this->model = new \BusquedaData();
    }
    
    public function invoke() {

        if (isset($_GET['busqueda'])) {

            if (($_GET['busqueda']) == "calcular") {
               $resultados = $this->model->calcularDistanciaBayesEuclides($_POST['provincia'], $_POST['precio'], $_POST['star']);
            }//if formulario
            
             include_once 'index-3.php';
        }
    }
}
