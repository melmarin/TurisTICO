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
         elseif (isset($_GET['login'])){
            require_once 'Controller/LoginController.php';
            $this->controller = new LoginController();
            $this->controller->invoke();            
         }//if formulario    
          elseif (isset ($_GET['agregaEmpresa']) || isset($_GET['actualizaEmpresa'])|| isset($_GET['eliminaEmpresa'])) {
            require_once 'Controller/EmpresaController.php';
            $this->controller = new EmpresaController();
            $this->controller->invoke();            
         }//if formulario  
         
         else{
            include_once 'indexView.php';
         }
     }
}
?>