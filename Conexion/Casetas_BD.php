<?php


class Caseta_BD {

    public $conexion;

    public function __construct() {
        $this->conexion = new Conexion_BD("agencia_viajes");
    }


    function regresarTarifaCasetas($ruta, $transporte) {
        $this->conexion->connect();
        $query = "SELECT SUM((select costo from peaje"
                . " where peaje.caseta=caseta_sobre_ruta.caseta "
                . "AND transporte=$transporte)) as costo from caseta_sobre_ruta,ruta where ruta=ruta.id and ruta.nombre='$ruta'";
        $result = $this->conexion->query($query);
        $result_array = array();

        while ($row = $result->fetch_assoc()) {
            $result_array[] = $row;
        }

        $this->conexion->close();
        return $result_array;
    }
    
        function regresarInformacionCasetas() {
        $this->conexion->connect();
        $query = "select nombre,(select nombre from ciudad where id=ubicacion) as ubicacion from caseta ";
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