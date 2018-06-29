<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrincipalController
 *
 * @author Usuario
 */
class PrincipalController {
    private $controller;
    private $model;
    
     public function invoke() {
         
         if (isset($_GET['busqueda'])){
            require_once 'Controller/BusquedaController.php';
            $this->controller = new BusquedaController();
            $this->controller->invoke();
            
         }//if formulario
         
         elseif (isset($_GET['formulario2'])){
              include($this->ruta.'controller/Formulario2Controller.php');
            $this->controller = new Formulario2Controller();
            $this->controller->invoke();
         }
         
         else{
            include_once 'IndexView.php';
         }
     }
}
?>