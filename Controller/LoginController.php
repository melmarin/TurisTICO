<?php

include_once 'Data/UserData.php';
//include_once '/opt/lampp/htdocs/estudiantes/TurisTICO/Data/UserData.php';

$userData = new UserData();

$correo = $_POST['correo'];
$pass = $_POST['pass'];

$respuesta = $userData->loginUsuario($correo, $pass);

echo $respuesta;
?>

