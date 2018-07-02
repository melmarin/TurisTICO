<?php

include_once '../ConfiguracionBD/ConexionBD.php';

class UserData {

    private $conn;
    private $conexion;

    public function __construct() {
        $this->conexion = new \ConexionDB();
        $this->conn = $this->conexion->conectar();
    }

    function insertUsuario($correo, $nombre, $pass) {

        $query = "INSERT INTO usuario (nombre,password,administrador,correo) "
                . "values ('" . $nombre . "','" . $pass . "',0,'" . $correo . "')";

     
        $resultado;
        if (mysqli_query($this->conn, $query)) {
            $resultado = "El usuario se ha registrado correctamente";
        } else {
            $resultado = "Error: " . $query . "" . mysqli_error($this->conn);
        }
        $this->conn->close();
        
        return $resultado;
    }

    function loginUsuario($correo, $pass) {

        $query = "SELECT `usuario`.`id_usuario`,`usuario`.`nombre`,
                `usuario`.`administrador`
                 FROM `turisticobd`.`usuario`
                 WHERE `usuario`.`correo` = '" . $correo . "' and `usuario`.`password` = '" . $pass . "'";       
        $data = mysqli_query($this->conn, $query);
      /*  $resultado;
        if (mysqli_num_rows($data) > 0) {
            while($row = mysqli_fetch_assoc($data)) {
              $resultado= "".$row["administrador"];
            }
         } else {
            $resultado = "0 results";
         }*/
        $this->conn->close();
        return $data['administrador'];
    }
}
