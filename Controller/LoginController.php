<?php

include_once 'Data\UserData.php';

class LoginController {

    private $model;

    public function __construct() {
        $this->model = new UserData();
    }

    public function invoke() {

        if (isset($_GET['login'])) {
            if ($_GET['login'] == "ingresar") {
                $respuesta = $this->model->loginUsuario($_POST['correo'], $_POST['pass']);

               /* if ($respuesta == "0") {
                    include 'indexLoginUser.php';
                } elseif ($respuesta == "1") {
                    include 'indexLoginAdmin.php';
                }*/
            }
             include 'indexLoginAdmin.php';
        }
    }

//invoke
}

//class
