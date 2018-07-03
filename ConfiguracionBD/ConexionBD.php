<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//session_start();

/**
 *
 */
class ConexionDB {

/*    private $datos = array(
        "host" => "163.178.173.144",
        "user" => "multi-paraiso",
        "pass" => "multimedios.rp.2017",
        "db" => "turisticobd"
    );*/

    /*
     * private $datos = array(
      "host" => "localhost",
      "user" => "id6368374_fabian",
      "pass" => "1234Ab",
      "db" => "id6368374_turisticobd"
      );
     */
    
    /*private $datos = array(
      "host" => "localhost",
      "user" => "root",
      "pass" => "",
      "db" => "turisticobd"
      );*/
    
     private $datos = array(
      "host" => "localhost",
      "user" => "id6368374_fabian",
      "pass" => "1234Ab",
      "db" => "id6368374_turisticobd"
      );
     
    private $con;

    public function __construct() {
        try {
            $this->con = new \PDO('mysql:host=' . $this->datos['host'] . ';dbname=id6368374_turisticobd', $this->datos['user'], $this->datos['pass']);
            //echo 'Conectado a '.$this->con->getAttribute(\PDO::ATTR_CONNECTION_STATUS);
        } catch (PDOException $ex) {
            echo 'Error conectando a la BBDD. ' . $ex->getMessage();
        }
    }

//ctor

    public function conectar() {
        try {
            $this->con = new \PDO('mysql:host=' . $this->datos['host'] . ';dbname=id6368374_turisticobd', $this->datos['user'], $this->datos['pass']);
            //echo 'Conectado a '.$this->con->getAttribute(\PDO::ATTR_CONNECTION_STATUS);
        } catch (PDOException $ex) {
            echo 'Error conectando a la BBDD. ' . $ex->getMessage();
        }
    }

//conectar

    public function consultaSimple($sql) {
        $this->conectar();
        $this->con->query($sql);
        $this->desconectar();
    }

//consultaSimple 

    public function consultaRetorno($sql) {
        $this->conectar();
        $datos = $this->con->query($sql);
        $this->desconectar();
        return $datos;
    }

//consultaRetorno

    public function desconectar() {
        return $this->con = NULL;
    }

//desconectar
}

//ConexionDB