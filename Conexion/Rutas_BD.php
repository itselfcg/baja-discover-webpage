<?php


class Rutas_BD {

    public $conexion;

    public function __construct() {
        $this->conexion = new Conexion_BD("agencia_viajes");
    }

    function regresarNombreRutas() {
        $this->conexion->connect();
        $query = "select nombre from ruta";
        $result = $this->conexion->query($query);
        $result_array = array();

        while ($row = $result->fetch_assoc()) {
            $result_array[] = $row['nombre'];
        }

        $this->conexion->close();
        return $result_array;
    }

    function regresarInformacionRutas($valor) {
        $this->conexion->connect();
        $query = "select nombre,(select nombre from ciudad where id=ciudad_origen) as ciudad_origen,"
                . "(select nombre from ciudad where id=ciudad_destino) as ciudad_destino,kilometros,tiempo from ruta where nombre='$valor'";
        $result = $this->conexion->query($query);
        $result_array = array();

        while ($row = $result->fetch_assoc()) {
            $result_array[] = $row;
        }

        $this->conexion->close();
        return $result_array;
    }
    
    function regresarTodaInformacionRutas() {
        $this->conexion->connect();
        $query = "select nombre,(select nombre from ciudad where id=ciudad_origen) as ciudad_origen,"
                . "(select nombre from ciudad where id=ciudad_destino) as ciudad_destino,kilometros,tiempo from ruta";
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