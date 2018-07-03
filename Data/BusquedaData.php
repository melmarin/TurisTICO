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
//$path = $_SERVER['DOCUMENT_ROOT'] . '/TurisTICO/';
require_once 'ConfiguracionBD/ConexionBD.php';
//require_once 'ConfiguracionBD/ConexionBD.php';
//require_once '/opt/lampp/htdocs/estudiantes/TurisTICO/ConfiguracionBD/ConexionBD.php';



class BusquedaData {
    
    private $sql;
    private $datos;
    private $con;
    //Bayes
    private $arrayValores = [];
    private $arrayGastro = [];
    private $arrayRent = [];
    private $arrayTrans = [];
    private $arrayTema = [];
    private $arrayProbFrecuenciaGastro = [];
    private $arrayProbFrecuenciaRent = [];
    private $arrayProbFrecuenciaTrans = [];
    private $arrayProbFrecuenciaTema = [];
    private $frecuenciasGastro;
    private $frecuenciasRent;
    private $frecuenciasTrans;
    private $frecuenciasTema;
    
    //Euclides
    private $arrayDistancias = [];

    //Constantes
    const m = 3; //Cantidad de clases(eventos)
    const n = 4; //total de instancias por cada clase
    const probabilidadClase = 0.25; //la probabilidad de que ocurra cada clase
    
     public function __construct() {
        $this->con = new \ConexionDB();
    }

    public function calcularDistanciaBayesEuclides($provincia, $precio, $clasificacion) {
        //Se asignan las probabilidades de cada atributo
        array_push($this->arrayValores, 0.7); // PROVINCIAS
        array_push($this->arrayValores, 0.10); //COSTO DE PAQUETES
        array_push($this->arrayValores, 0.2); //PARA LA CLASIFICACION
        
         //Se asignan las frecuencias de cada atributo por clase
        //GASTRONOMÍA
        $this->asignaFrecuenciasClaseGastro("provincia", $provincia);
        $this->asignaFrecuenciasClaseGastro("costo_paquete", $precio);
        $this->asignaFrecuenciasClaseGastro("puntuacion_hotel", $clasificacion);
        //RENT A CAR
        $this->asignaFrecuenciasClaseRent("provincia", $provincia);
        $this->asignaFrecuenciasClaseRent("costo_paquete", $precio);
        $this->asignaFrecuenciasClaseRent("puntuacion_hotel", $clasificacion);
        //TRANSPORTE ACUÁTICO Y AÉREO
        $this->asignaFrecuenciasClaseTrans("provincia", $provincia);
        $this->asignaFrecuenciasClaseTrans("costo_paquete", $precio);
        $this->asignaFrecuenciasClaseTrans("puntuacion_hotel", $clasificacion);
        //ACTIVIDADES TEMÁTICAS
        $this->asignaFrecuenciasClaseTema("provincia", $provincia);
        $this->asignaFrecuenciasClaseTema("costo_paquete", $precio);
        $this->asignaFrecuenciasClaseTema("puntuacion_hotel", $clasificacion);
        
        //Se asigana la probabilidad de cada cada frecuencia según la clase
       //GASTRONOMÍA
        $this->asignaProbabilidadPorFrecuenciaGastro();
        //RENT A CAR
        $this->asignaProbabilidadPorFrecuenciaRent();
         //TRANSPORTE ACUÁTICO Y AÉREO
         $this->asignaProbabilidadPorFrecuenciaTrans();
        //ACTIVIDADES TEMÁTICAS
          $this->asignaProbabilidadPorFrecuenciaTema();
          
           //Se multiplican todas las frecuencias según la clase
        $this->frecuenciasGastro = $this->productoFrecuencias($this->arrayProbFrecuenciaGastro); 
        $this->frecuenciasRent = $this->productoFrecuencias($this->arrayProbFrecuenciaRent); 
        $this->frecuenciasTrans = $this->productoFrecuencias($this->arrayProbFrecuenciaTrans);
        $this->frecuenciasTema = $this->productoFrecuencias($this->arrayProbFrecuenciaTema); 
        
        // Se determina el resultado final que será retornado a la vista
        return $this->distanciaEuclidiana($provincia, $precio, $clasificacion, $this->determinaResultadoBayes());
        
    }
    
     public function asignaFrecuenciasClaseGastro($atributo, $valor) {
        //Se cuenta la cantidad de veces que aparece el valor en la clase Gastronomia para ese atributo
          //fórmula SUMAR SI
        $this->sql = "SELECT COUNT(" . $atributo . ") from empresa_ordenada where tipo = 'Gastronomia'"
                . "AND " . $atributo . "= '$valor' ";
        $this->datos = $this->con->consultaRetorno($this->sql);
        $this->row = $this->datos->fetch(\PDO::FETCH_NUM);
        array_push($this->arrayGastro, $this->row[0]);
    }
    
     public function asignaFrecuenciasClaseRent($atributo, $valor) {
        //Se cuenta la cantidad de veces que aparece el valor en la clase Rent a car para ese atributo
          //fórmula SUMAR SI
        $this->sql = "SELECT COUNT(" . $atributo . ") from empresa_ordenada where tipo = 'Rent a Car'"
                . "AND " . $atributo . "= '$valor' ";
        $this->datos = $this->con->consultaRetorno($this->sql);
        $this->row = $this->datos->fetch(\PDO::FETCH_NUM);
        array_push($this->arrayRent, $this->row[0]);
    }
    
    public function asignaFrecuenciasClaseTrans($atributo, $valor) {
        //Se cuenta la cantidad de veces que aparece el valor en la clase Transporte Acuatico y Aereo para ese atributo
          //fórmula SUMAR SI
        $this->sql = "SELECT COUNT(" . $atributo . ") from empresa_ordenada where tipo = 'Transporte Acuatico y Aereo'"
                . "AND " . $atributo . "= '$valor' ";
        $this->datos = $this->con->consultaRetorno($this->sql);
        $this->row = $this->datos->fetch(\PDO::FETCH_NUM);
        array_push($this->arrayTrans, $this->row[0]);
    }
    
    public function asignaFrecuenciasClaseTema($atributo, $valor) {
        //Se cuenta la cantidad de veces que aparece el valor en la clase Transporte Acuatico y Aereo para ese atributo
          //fórmula SUMAR SI
        $this->sql = "SELECT COUNT(" . $atributo . ") from empresa_ordenada where tipo = 'Actividades tematicas'"
                . "AND " . $atributo . "= '$valor' ";
        $this->datos = $this->con->consultaRetorno($this->sql);
        $this->row = $this->datos->fetch(\PDO::FETCH_NUM);
        array_push($this->arrayTema, $this->row[0]);
    }
    
    public function asignaProbabilidadPorFrecuenciaGastro() {
        //Se aplica la fórmula (valor+m*p)/(n+m) para cada valor
        //Respetar el orden de los arreglos
        foreach ($this->arrayGastro as $atributo => $valor) {
            $result = $this->arrayGastro[$atributo] + self::m * $this->arrayValores[$atributo];
            $result = $result / ( self::n + self::m);
            array_push($this->arrayProbFrecuenciaGastro, $result);
        }
    }
    
    public function asignaProbabilidadPorFrecuenciaRent() {
        //Se aplica la fórmula (valor+m*p)/(n+m) para cada valor
        //Respetar el orden de los arreglos
        foreach ($this->arrayRent as $atributo => $valor) {
            $result = $this->arrayRent[$atributo] + self::m * $this->arrayValores[$atributo];
            $result = $result / ( self::n + self::m);
            array_push($this->arrayProbFrecuenciaRent, $result);
        }
    }
    
    public function asignaProbabilidadPorFrecuenciaTrans() {
        //Se aplica la fórmula (valor+m*p)/(n+m) para cada valor
        //Respetar el orden de los arreglos
        foreach ($this->arrayTrans as $atributo => $valor) {
            $result = $this->arrayTrans[$atributo] + self::m * $this->arrayValores[$atributo];
            $result = $result / ( self::n + self::m);
            array_push($this->arrayProbFrecuenciaTrans, $result);
        }
    }
    
    public function asignaProbabilidadPorFrecuenciaTema() {
        //Se aplica la fórmula (valor+m*p)/(n+m) para cada valor
        //Respetar el orden de los arreglos
        foreach ($this->arrayTema as $atributo => $valor) {
            $result = $this->arrayTema[$atributo] + self::m * $this->arrayValores[$atributo];
            $result = $result / ( self::n + self::m);
            array_push($this->arrayProbFrecuenciaTema, $result);
        }
    }
    
     public function productoFrecuencias($array){
        //Se multiplican todos los valores de la clase y se devuelve el resultado
        $result =1;
        foreach ($array as $atributo => $valor) {
           $result *=  $array[$atributo]; 
        }
        return $result;
    }
    
     public function determinaResultadoBayes(){
        //Se aplica la fórmula Producto de frecuencias * la Probabilidad de la clase
         $resultadoGastro = $this->frecuenciasGastro * self::probabilidadClase;
         $resultadoRent = $this->frecuenciasRent * self::probabilidadClase;
         $resultadoTrans = $this->frecuenciasTrans * self::probabilidadClase;
         $resultadoTema = $this->frecuenciasTema * self::probabilidadClase;
         $resultados = ["Gastronomia" => $resultadoGastro, "Rent a Car" => $resultadoRent
                 , "Transporte Acuatico y Aereo" => $resultadoTrans, "Actividades tematicas" => $resultadoTema]; //asignan a un arreglo
      
         //se determina el mayor de los resultados y se retorna
         $mayor = max($resultados);
         foreach ($resultados as $atributo => $valor) {
           if($mayor ==  $resultados[$atributo]){
               return $atributo;
           } 
        }
    }
    
     //Método utilizado para insertar una nueva tabla con los datos acomodados
    //Para el precio el valor mínimo posible es 1 y el máximo es 10
    //Por lo tanto se crearon 10 grupos dividiendo cada valor entre $250, tomando su parte entera
    public function insertarDatosAcomodados() {
        $this->sql = "SELECT * FROM empresa";
        $this->datos = $this->con->consultaRetorno($this->sql);
        while ($row = $this->datos->fetch(\PDO::FETCH_ASSOC)) {
            $array[] = $row;
        }

        foreach ($array as $fila) {
            $precio = intdiv(intval($fila['costo_paquete']), 250);
            $id_empresa = $fila['id_empresa'];
            $nombre = $fila['nombre'];
            $telefono = $fila['telefono'];
            $direccion = $fila['direccion'];
            $provincia = $fila['provincia'];
            $puntuacion_usuario = $fila['puntuacion_usuario'];
            $tipo = $fila['tipo'];
            $puntuacion_hotel = $fila['puntuacion_hotel'];

            $this->sql = "INSERT INTO empresa_ordenada values ('$id_empresa','$nombre', $telefono, '$direccion','$provincia',"
                    . "'$puntuacion_usuario', '$tipo', '$precio', '$puntuacion_hotel')";
            $this->con->consultaSimple($this->sql);
        }
    }
      
    public function distanciaEuclidiana($provincia, $precio, $clasificacion, $clase){
        $this->sql = "SELECT id_empresa, provincia, tipo, costo_paquete, puntuacion_hotel FROM empresa";
        
        $this->datos = $this->con->consultaRetorno($this->sql);
        while ($row = $this->datos->fetch(\PDO::FETCH_ASSOC)) {
            $array[] = $row;
        }
        
        $pesoProvincia=8;
        $pesoTipo =2;
        $pesoCosto=2;
        $pesoPuntuacion = 2;
        $numTemp = 0;
        $numActual = 0;
        $filaFinal = "";
        
         foreach ($array as $fila) {
             //sea asigna un peso de forma binaria
            
             $idEmpresa = $fila['id_empresa'];
             
            if($provincia == $fila['provincia']){
                $pesoProvincia =1;
            }
            
            if($clase == $fila['tipo']){
                $pesoTipo =1;
            }
            
          /*  $costo = intdiv(intval($precio), 250);
             if($costo == $fila['costo_paquete']){
                $pesoCosto =1;
            }*/
            
             if($clasificacion == $fila['puntuacion_hotel']){
                $pesoPuntuacion =1;
            }
            
            //se calculan las diferencias antes de forma binaria
            $numActual = sqrt(pow($pesoProvincia, 2) + pow($pesoTipo, 2) + pow(($precio - $fila['costo_paquete']), 2) + pow($pesoPuntuacion, 2));
            //array_push($this->arrayDistancias, $idEmpresa, $numActual);    
            //INSERTA EN LA BD
            $this->sql = "UPDATE distancia_clase set distancia = '$numActual'"
                    . "WHERE id_empresa = '$idEmpresa'";
            $this->con->consultaSimple($this->sql);
             // se reinician los valores
            $pesoProvincia=8;
            $pesoTipo =2;
            $pesoCosto=2;
            $pesoPuntuacion = 2;
            }
      
            //DEVUELVE LOS 5 RESULTADOS CON MENOR DISTANCIA
            $this->sql = "SELECT EP.id_empresa,EP.nombre,EP.telefono,EP.direccion,EP.provincia, 
                EP.puntuacion_usuario,EP.tipo,EP.costo_paquete,EP.puntuacion_hotel,DC.distancia
                FROM empresa EP inner join distancia_clase DC on EP.id_empresa = DC.id_empresa order by distancia ASC limit 5;";
            $this->datos = $this->con->consultaRetorno($this->sql);
            while ($row = $this->datos->fetch(\PDO::FETCH_ASSOC)) {
                $arrayFinal[] = $row;
            }
            return $arrayFinal;
    }
    
    public function insertarDistanciaTabla(){
        for ($i=1; $i<=200; $i++){
             //INSERTA EN LA BD
            $this->sql = "INSERT INTO distancia_clase values ('$i',0)";
            $this->con->consultaSimple($this->sql);
        }
    }
    
}
