<?php


class Transporte_BD {

    public $conexion;

    public function __construct() {
        $this->conexion = new Conexion_BD("agencia_viajes");
    }



    function regresarTransportesRequeridos() {
        $this->conexion->connect();
        $query = "select id,nombre,cant_pasajeros from transporte";
        $result = $this->conexion->query($query);
        $result_array = array();

        while ($row = $result->fetch_assoc()) {
            $result_array[] = $row;
        }

        $this->conexion->close();
        return $result_array;
    }
    
        function regresarInformacionTransportes() {
        $this->conexion->connect();
        $query = "select * from transporte";
        $result = $this->conexion->query($query);
        $result_array = array();

        while ($row = $result->fetch_assoc()) {
            $result_array[] = $row;
        }

        $this->conexion->close();
        return $result_array;
    }


}

?>