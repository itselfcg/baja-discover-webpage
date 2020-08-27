<?php


class Combustible_BD {

    public $conexion;

    public function __construct() {
        $this->conexion = new Conexion_BD("agencia_viajes");
    }


    function regresarCalculCombustible($auto, $kilometros) {
        $this->conexion->connect();
        $query = "select km_por_litro from transporte where id=$auto;";
        $result = $this->conexion->query($query);
        while ($row = $result->fetch_assoc()) {
            $km_por_litro = $row['km_por_litro'];

        }
        
          $query = "select precio from combustible where tipo=\"Magna\"";
        $result = $this->conexion->query($query);
        $precio=0;
        while ($row = $result->fetch_assoc()) {
            $precio = $row['precio'];

        }

        $this->conexion->close();
                                    return  number_format((float)(($kilometros/$km_por_litro)*$precio), 2, '.', '');

    }
    
           function regresarInformacionCombustibles() {
        $this->conexion->connect();
        $query = "select * from combustible";
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