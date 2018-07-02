<?php

require_once 'Data/BusquedaData.php';
//require_once '/opt/lampp/htdocs/estudiantes/TurisTICO/Data/BusquedaData.php';

class BusquedaController {
    
    private $model;
    
    public function __construct() {
        $this->model = new BusquedaData();
    }
    
    public function invoke() {
        $stars;
        if (isset($_GET['busqueda'])) {

            if (($_GET['busqueda']) == "calcular") {
                if(!isset($_POST['star'])){
                    $stars = 0;
                }
                else{
                    $stars = $_POST['star'];
                }
               $resultados = $this->model->calcularDistanciaBayesEuclides($_POST['provincia'], $_POST['precio'], $stars);
            }//if formulario
            include_once 'index-3.php';
            //include_once '/opt/lampp/htdocs/estudiantes/TurisTICO/index-3.php';
        }
    }
}
