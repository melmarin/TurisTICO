<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

/**
 *
 */
class ConexionDB {

    private $conn;

    public function __construct() {

    }//constructor

    public function conectar() {
        $this->conn = mysqli_connect("163.178.173.144", "multi-paraiso", "multimedios.rp.2017");
       
        if(!$this->conn){
            echo "problemas con la conexion";
            exit();
         }//if
         //mysqli_select_db($this->conn, "db_asoiacion_b03675");
         mysqli_select_db($this->conn, "turisticobd");

        return $this->conn;
    }//conectar


}//ConexionDB