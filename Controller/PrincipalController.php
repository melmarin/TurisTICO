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
             include('Controller/BusquedaController.php');
             //include('/opt/lampp/htdocs/estudiantes/TurisTICO/Controller/BusquedaController.php');
            $this->controller = new BusquedaController();
            $this->controller->invoke();
            
         }//if formulario
         
         //PLAYO ARREGLAR LO DEL REDIRECCIONAMIENTO USAR EL CONTROLLER SINO NO FUNCIONA BIEN
         //PARECE ESO EN LA VISTA TIENE QUE BASARSE EN EL QUE YO HICE 
         //PUEDO REVISAR EN index-3
         //FALTA PARA EL LOGIN
         /*elseif (isset($_GET['login'])){
            include('./LoginController.php');
            //include('/opt/lampp/htdocs/estudiantes/TurisTICO/controller/Formulario2Controller.php');
         }*/
         
         //FALTA PARA CRÉDITOS
         
         //FALTA PARA REGISTRARSE
         
         else{
            include('indexView.php');
            //include('/opt/lampp/htdocs/estudiantes/TurisTICO/indexView.php');
         }
     }
}
?>