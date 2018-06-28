<?php

include_once '../ConfiguracionBD/ConexionBD.php';

class UserData {

    private $conn;
    private $conexion;

    public function __construct() {
        $conexion = new ConexionDB();
        $this->conn = $conexion->conectar();
    }

    function insertUsuario($correo, $nombre, $pass) {

        $query = "INSERT INTO usuario (nombre,password,administrador,correo) "
                . "values ('" . $nombre . "','" . $pass . "',0,'" . $correo . "')";

        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (mysqli_query($this->conn, $query)) {
            echo "El usuario se ha registrado correctamente";
        } else {
            echo "Error: " . $query . "" . mysqli_error($this->conn);
        }
        $this->conn->close();
    }

    function loginUsuario($correo, $pass) {

        $query = "SELECT `usuario`.`id_usuario`,`usuario`.`nombre`,
                `usuario`.`administrador`,`usuario`.`correo`
                 FROM `turisticobd`.`usuario`
                 WHERE `usuario`.`correo` = '" . $correo . "' and `usuario`.`password` = '" . $pass . "'";

        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $data = mysqli_query($this->conn, $query);

        if (mysqli_num_rows($data) > 0) {
            
        } else {
            echo "Error: " . $query . "" . mysqli_error($this->conn);
        }
        $this->conn->close();
        return $data;
    }

}
