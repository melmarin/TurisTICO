<?php

include_once 'Data\UserData.php';

class LoginController {

    private $userData;

    public function __construct() {
        $this->userData = new UserData();
    }

    public function invoke() {

        if (isset($_GET['login'])) {
            if ($_GET['login'] == "ingresar") {
                $respuesta = $this->userData->loginUsuario($_POST['correo'], $_POST['pass']);

                if ($respuesta == "0") {
                    include 'indexLoginUser.php';
                } elseif ($respuesta == "1") {
                    include 'indexLoginAdmin.php';
                }
            } 
        }
    }//invoke
}//class
