<?php

include_once '../ConfiguracionBD/ConexionBD.php';

class EmpresaData {

    private $conn;
    private $conexion;

    public function __construct() {
        $conexion = new ConexionDB();
        $this->conn = $conexion->conectar();
    }

    function insertarEmpresa($correo, $nombre, $pass) {

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
                `usuario`.`administrador`
                 FROM `turisticobd`.`usuario`
                 WHERE `usuario`.`correo` = '" . $correo . "' and `usuario`.`password` = '" . $pass . "'";

        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $data = mysqli_query($this->conn, $query);
        $resultado;
        if (mysqli_num_rows($data) > 0) {
            while($row = mysqli_fetch_assoc($data)) {
              $resultado= "".$row["administrador"];
            }
         } else {
            $resultado = "0 results";
         }
        $this->conn->close();
        return $resultado;
    }
}