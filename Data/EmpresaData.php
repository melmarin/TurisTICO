<?php

include_once 'ConfiguracionBD/ConexionBD.php';

//include_once '/opt/lampp/htdocs/estudiantes/TurisTICO/ConfiguracionBD/ConexionBD.php';

class EmpresaData {

    private $con;
    private $conexion;

    public function __construct() {
        $conexion = new \ConexionDB();
        $this->con = $conexion->conectar();
    }
    
    function getEmpresa($idEmpresa) {
        $query ="SELECT * FROM empresa WHERE id_empresa = ".$idEmpresa.";" ;
        $this->datos = $this->con->consultaRetorno($query);
        while ($row = $this->datos->fetch(\PDO::FETCH_ASSOC)) {
            $data = $row;
        }
        $this->con->desconectar(); 
        return $data;
    }

     function getEmpresas() {
        $query ="SELECT * FROM empresa ;";
        $this->datos = $this->con->consultaRetorno($query);
        while ($row = $this->datos->fetch(\PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        $this->con->desconectar(); 
        return $data;
    }
    
    function insertarEmpresa($nombre, $telefono, $direccion, $provincia, 
                             $tipo, $costo_paquete, $puntuacion_hotel) {

        $query = "INSERT INTO empresa (nombre,telefono,direccion,provincia,
            tipo,costo_paquete,puntuacion_hotel)
            VALUES ('" . $nombre . "','" . $telefono . "','" . $direccion . "','"
                . $provincia . "','" . $tipo . "'," . $costo_paquete . ","
                . $puntuacion_hotel .")";
        $this->con->consultaSimple($query);
        $this->con->desconectar();      
    }

    function actualizarEmpresa($idEmpresa, $nombre, $telefono, $direccion,
            $provincia, $puntuacion_usuario, $tipo, $costo_paquete, $puntuacion_hotel) {

        $query = "UPDATE empresa
                 SET
            nombre = '". $nombre ."',
            telefono = '". $telefono ."',
            direccion = '". $direccion ."',
            provincia = '". $provincia ."',
            tipo = '". $tipo . "',
            costo_paquete = '". $costo_paquete ."',
            puntuacion_hotel = '". $puntuacion_hotel ."'
            WHERE id_empresa = ".$idEmpresa.";";
        $this->con->consultaSimple($query);
        $this->con->desconectar();   
    }

    function eliminarEmpresa($idEmpresa) {

        $query = "DELETE FROM empresa
                  WHERE id_empresa = ".$idEmpresa.";";
        $this->con->consultaSimple($query);
        $this->con->desconectar();   
    }

}
