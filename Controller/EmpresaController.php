<?php

require_once 'Data/EmpresaData.php';

class EmpresaController {

    private $model;

    public function __construct() {
        $this->model = new EmpresaData();
    }

    public function invoke() {
        if (isset($_GET['agregaEmpresa'])) {

            if (($_GET['agregaEmpresa']) == "registrar") {
                $this->model->insertarEmpresa($_POST['nombre'], $_POST['telefono'], $_POST['direccion'], $_POST['provincia'], $_POST['tipo'], $_POST['costo'], $_POST['puntuacion']);
            }//if formulario
            include_once 'AgregarEmpresa.php';
        }
        if (isset($_GET['actualizaEmpresa'])) {
            if (($_GET['actualizaEmpresa']) == "actulizar") {
                $this->model->actualizarEmpresa($_POST['idEmpresa'], $_POST['nombre'], $_POST['telefono'], $_POST['direccion'], $_POST['provincia'], $_POST['tipo'], $_POST['costo'], $_POST['promedio']);
            }
            include_once 'ActualizarEmpresa.php';
        }
        if (isset($_GET['actualizaEmpresa'])) {
            if (($_GET['eliminaEmpresa']) == "eliminar") {
                $this->model->eliminarEmpresa($_POST['idEmpresa']);
            }//if formulario
            include_once 'EliminarEmpresa.php';
        } /*else {
            include_once 'indexLoginAdmin.php';
        }*/
    }

}

/* if (isset($_GET['empresa'])) {

  if (($_GET['empresa']) == "buscar") {
  $resultados = $this->model->getEmpresas();
  }//if formulario
  include_once 'indexLoginAdmin.php';
  //include_once '/opt/lampp/htdocs/estudiantes/TurisTICO/index-3.php';
  }
  if (isset($_GET['empresa'])) {

  if (($_GET['empresa']) == "obtenerempresa") {
  $resultados = $this->model->getEmpresa($_POST['idEmpresa']);
  }//if formulario
  include_once 'indexLoginAdmin.php';
  //include_once '/opt/lampp/htdocs/estudiantes/TurisTICO/index-3.php';
  }
  if (isset($_GET['empresa'])) {

  if (($_GET['empresa']) == "actulizar") {
  $resultados = $this->model->actualizarEmpresa($_POST['idEmpresa'],$_POST['nombre'],
  $_POST['telefono'], $_POST['direccion'],$_POST['provincia'],
  $_POST['tipo'],$_POST['costo'],$_POST['promedio']);
  }//if formulario
  include_once 'indexLoginAdmin.php';
  //include_once '/opt/lampp/htdocs/estudiantes/TurisTICO/index-3.php';
  }
  if (isset($_GET['empresa'])) {

  if (($_GET['empresa']) == "eliminar") {
  $resultados = $this->model->eliminarEmpresa($_POST['idEmpresa']);
  }//if formulario
  include_once 'indexLoginAdmin.php';
  //include_once '/opt/lampp/htdocs/estudiantes/TurisTICO/index-3.php';
  } */

//Empresa
?>