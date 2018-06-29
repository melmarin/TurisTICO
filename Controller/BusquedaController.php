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
                $datosEC = array("c5" => $_POST['c5'], "c9" => $_POST['c9'], "c13" => $_POST['c13'],
                    "c17" => $_POST['c17'], "c25" => $_POST['c25'], "c29" => $_POST['c29']);

                $resultados = $this->model->calcularClasificacionBayesiana($datosEC, $datosOR, $datosCA, $datosEA);
               
            }//if formulario
            
             include_once 'index-3.php';
        }
    }
}
