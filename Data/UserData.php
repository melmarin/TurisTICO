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

        $query = "SELECT id_usuario,nombre,administrador
                 FROM usuario
                 WHERE correo = '" . $correo . "' and password = '" . $pass . "'";
        $data = $this->con->consultaRetorno($query);
        while ($row = $data->fetch(\PDO::FETCH_ASSOC)) {
            $resultado = $row;
        }
        $this->con->desconectar();
        return $resultado['administrador'];
    }

}
