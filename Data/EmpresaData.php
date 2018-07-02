<?php

include_once 'ConfiguracionBD/ConexionBD.php';
//include_once '/opt/lampp/htdocs/estudiantes/TurisTICO/ConfiguracionBD/ConexionBD.php';

class EmpresaData {

    private $conn;
    private $conexion;

    public function __construct() {
        $conexion = new \ConexionDB();
        $this->conn = $conexion->conectar();
    }

    function insertarEmpresa($nombre, $telefono,$direccion,$provincia,
           $puntuacion_usuario,$tipo,$costo_paquete,$puntuacion_hotel) {

        $query = "INSERT INTO empresa (nombre,telefono,direccion,provincia,
            puntuacion_usuario,tipo,costo_paquete,puntuacion_hotel)
            VALUES ('" . $nombre . "','" . $telefono . "','" . $direccion . "','"
                . $provincia . "','" . $puntuacion_usuario . "','" . $tipo . "','"
                 . $costo_paquete . "','" . $puntuacion_hotel . "',')";
        $resultado;
        if (mysqli_query($this->conn, $query)) {
            $resultado= "El usuario se ha registrado correctamente";
        } else {
            $resultado= "Error: " . $query . "" . mysqli_error($this->conn);
        }
        $this->conn->close();
        
        return $resultado;
    }

}
