<?php

class Combustible {

public $tipo;
    public $precio;
    public $unidad;
    
    function __construct($tipo, $precio, $unidad) {
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->unidad = $unidad;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getUnidad() {
        return $this->unidad;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setUnidad($unidad) {
        $this->unidad = $unidad;
    }


    
}
    
?>