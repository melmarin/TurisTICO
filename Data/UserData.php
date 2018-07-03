<?php

include_once 'ConfiguracionBD/ConexionBD.php';

class UserData {

    private $con;

    public function __construct() {
        $this->con = new \ConexionDB();
    }

    function insertUsuario($correo, $nombre, $pass) {

        $query = "INSERT INTO usuario (nombre,password,administrador,correo) "
                . "values ('" . $nombre . "','" . $pass . "',0,'" . $correo . "')";
        $this->con->consultaSimple($query);
        $this->con->desconectar();
    }

    function loginUsuario($correo, $pass) {

        $query = "SELECT administrador
                 FROM usuario WHERE correo = '$correo' and password = '$pass'";
        $data = $this->con->consultaRetorno($query);
        $row = $this->datos->fetch(\PDO::FETCH_NUM);
        $resultado = $this->row[0];
        $this->con->desconectar();
        
        return $resultado;
    }

}
