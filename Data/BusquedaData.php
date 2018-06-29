<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BusquedaData
 *
 * @author melma
 */
require_once 'ConfiguracionBD/ConexionBD.php';

class BusquedaData {
    
     public function __construct() {
        $this->con = new \ConexionDB();
    }
    
    
    
    
}
