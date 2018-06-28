<?php

include_once '../Data/UserData.php';

$userData = new UserData();

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];

 echo $userData->insertUsuario($correo, $nombre, $pass);
?>