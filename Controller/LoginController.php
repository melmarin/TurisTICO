<?php

require_once 'Data/UserData.php';

class LoginController {

    private $model;

    public function __construct() {
        $this->model = new UserData();
    }

    public function invoke() {
        $respuesta = 0;
        $pagina='';
        if (isset($_GET['login'])) {

            if (($_GET['login']) == "ingresar") {
                $this->respuesta = $this->model->loginUsuario($_POST['correo'], $_POST['pass']);
            }
            /*if ($this->respuesta == "0") {
                $this->pagina= 'indexLoginUser.php';
            } elseif ($this->respuesta == "1") {
                $this->pagina= 'indexLoginAdmin.php';
            }*/
             include_once  'indexLoginAdmin.php';
        }
    }

//invoke
}

//class
